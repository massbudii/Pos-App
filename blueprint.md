# PROJECT BLUEPRINT — POS LARAVEL 13

## 1. Project Overview

**Project:** Point of Sale (POS)

**Goal:** Build a maintainable POS application while learning Laravel through industry-oriented practices.

**Developer level:** Junior Laravel developer.

**Guiding principle:**
> Code should be easy for a junior to understand, but the architecture, security, validation, testing, and deployment practices should follow reasonable industry standards.

---

## 2. Technology Stack

- Laravel 13
- PHP
- MySQL
- Docker
- Herd
- Git / GitHub
- Blade
- ThemLock template / Bootstrap-based frontend

---

## 3. User Roles

The application has three main roles:

### Admin

Responsible for operational/master-data management.

Expected access:
- Dashboard
- Products
- Categories
- Suppliers
- Users
- Inventory
- Sales
- Reports

### Kasir

Responsible primarily for sales transactions.

Expected access:
- Dashboard
- Products
- Sales

### Owner

Responsible primarily for monitoring.

Expected access:
- Dashboard
- Products
- Inventory
- Sales
- Reports

---

## 4. Authentication

For learning purposes, authentication will include:

- Login
- Register
- Logout

The learning version of Register may allow selecting:

- Admin
- Kasir
- Owner

This is intentionally done to learn validation and authorization concepts.

### Production consideration

A real internal POS should generally not expose unrestricted public registration.

A more appropriate production flow is:

```text
Admin
  ↓
User Management
  ↓
Create User
  ↓
Assign Role
```

---

## 5. Authorization

Authentication and authorization must be treated separately.

```text
Authentication
    ↓
Who is the user?
    ↓
Authorization
    ↓
What may the user do?
```

The project will use Role + Permission / Policy concepts.

Example:

```text
Admin
- products.view
- products.create
- products.update
- products.delete

Kasir
- products.view
- sales.create

Owner
- products.view
- sales.view
- reports.view
```

### Important rule

Hiding a menu using Blade conditions is **not security**.

Backend authorization must still protect routes/actions.

---

## 6. View / Folder Strategy

Use a **hybrid folder structure**.

### Features used by only one role

They may be grouped under that role.

Example:

```text
resources/views/admin/suppliers/
resources/views/admin/categories/
resources/views/admin/users/
```

### Features shared by multiple roles

Group them by feature instead of duplicating views.

Example:

```text
resources/views/products/
resources/views/sales/
resources/views/inventory/
resources/views/reports/
```

Do NOT create duplicated pages such as:

```text
admin/products/
kasir/products/
owner/products/
```

if all roles use essentially the same page.

### Principle

> Avoid code/view duplication, while keeping the folder structure understandable.

---

## 7. Current View Structure

```text
resources/views/
│
├── layouts/
│   ├── app.blade.php
│   ├── navbar.blade.php
│   └── sidebar.blade.php
│
├── auth/
│   ├── login.blade.php
│   └── register.blade.php
│
├── dashboard/
│   └── dashboard.blade.php
│
├── admin/
│   ├── suppliers/
│   │   └── suppliers-index.blade.php
│   ├── categories/
│   │   └── categories-index.blade.php
│   └── users/
│       └── users-index.blade.php
│
├── products/
│   └── products-index.blade.php
│
├── sales/
│   ├── sales-index.blade.php
│   ├── sales-transaction.blade.php
│   └── sales-detail.blade.php
│
├── inventory/
│   └── inventory-index.blade.php
│
└── reports/
    └── reports-index.blade.php
```

---

## 8. CRUD / Modal Strategy

For simple CRUD features, use one main Blade page containing:

- Data table
- Add modal
- Edit modal
- Delete confirmation modal

Example:

```text
admin/suppliers/suppliers-index.blade.php
```

contains the supplier table and its CRUD modals.

Do not automatically create separate `create.blade.php` and `edit.blade.php` pages unless the feature becomes complex enough to justify them.

---

## 9. Backend Structure

Target structure:

```text
app/
│
├── Http/
│   ├── Controllers/
│   ├── Requests/
│   └── Middleware/
│
├── Models/
├── Policies/
└── Services/
```

### Controllers

Initial controllers may include:

- AuthController
- DashboardController
- ProductController
- CategoryController
- SupplierController
- SaleController
- InventoryController
- ReportController

### Form Requests

Use Form Request classes for validation where appropriate.

Examples:

- LoginRequest
- ProductRequest
- CategoryRequest
- SupplierRequest
- SaleRequest

### Policies

Use Policies / authorization mechanisms for access control.

Examples:

- ProductPolicy
- SupplierPolicy
- SalePolicy

### Services

Do not create Services unnecessarily.

Simple CRUD can remain straightforward.

Complex business logic such as POS transactions can use a Service.

Example:

```text
SaleController
    ↓
SaleService
    ↓
Database
```

---

## 10. Request Flow

Target mental model:

```text
Browser
   ↓
Route
   ↓
Middleware
   ↓
Authorization
   ↓
Form Request
   ↓
Controller
   ↓
Service (when needed)
   ↓
Model
   ↓
Database
```

This is a learning model, not a rigid rule that every request must pass through every layer.

---

## 11. Database Planning

Do NOT create a fixed number of tables simply because a previous discussion mentioned a number.

The initial candidate tables are:

```text
users
roles
permissions
role_permission

categories
suppliers
products

units
product_stocks
stock_movements

customers

sales
sale_details
payments

activity_logs
```

The final table count must be decided after:

```text
Business Logic
    ↓
ERD
    ↓
Relationships
    ↓
Migration
```

Tables that are unnecessary for the actual requirements should be removed.

---

## 12. Initial Relationships

Possible relationships:

```text
Category
  └── hasMany Products

Sale
  └── hasMany SaleDetails

SaleDetail
  └── belongsTo Product

User
  └── belongsTo Role

Role
  └── belongsToMany Permissions
```

The final ERD and relationships must be reviewed before migrations are finalized.

---

## 13. Security Standards

Every feature should consider security from the beginning.

Important areas:

- CSRF protection
- Password hashing
- SQL Injection protection
- Mass assignment protection
- Input validation
- Authentication
- Authorization
- Session security
- Secure file uploads
- Environment variables
- Error handling
- Rate limiting where appropriate
- Database transactions for multi-step operations

### SQL Injection

Avoid building SQL with raw user input.

Prefer:

- Eloquent
- Query Builder
- Parameter binding

Example of a pattern to avoid:

```php
DB::raw("SELECT * FROM users WHERE email = '$email'");
```

---

## 14. Transaction Safety

POS transactions may involve multiple database operations:

```text
Validate stock
    ↓
Calculate total
    ↓
Create sale
    ↓
Create sale details
    ↓
Decrease stock
    ↓
Create stock movement
```

These operations should be treated as one logical transaction where appropriate, using database transactions such as:

```php
DB::transaction(...)
```

The goal is to prevent partially completed sales.

---

## 15. Testing

Testing will be introduced after the core features exist.

Structure:

```text
tests/
├── Feature/
└── Unit/
```

Example tests:

- User can login
- User cannot login with invalid password
- Kasir cannot access Admin-only Supplier management
- Admin can create Product
- Stock decreases after a successful sale
- Sale fails when stock is insufficient

---

## 16. Deployment

Deployment will be handled after the application is functional and tested.

General flow:

```text
Local Development
    ↓
Git
    ↓
GitHub
    ↓
Production Server
    ↓
Production Environment
    ↓
Production Database
    ↓
Migration
    ↓
Storage / Cache / Config
    ↓
HTTPS
```

Important production concerns:

- `.env` must not be committed
- `APP_KEY` must be configured securely
- `APP_ENV=production`
- `APP_DEBUG=false`
- Production database credentials must be protected
- Logging must be configured
- Database backup strategy should be considered
- HTTPS should be enabled

---

## 17. Development Roadmap

### Phase 1 — Templating

```text
Login
  ↓
Register
  ↓
Main Layout
  ↓
Navbar
  ↓
Sidebar
  ↓
Dashboard
```

### Phase 2 — Authentication

```text
Login
  ↓
Validation
  ↓
Password verification
  ↓
Session
  ↓
Logout
```

### Phase 3 — Authorization

```text
Roles
  ↓
Permissions
  ↓
Policies / Authorization
  ↓
Protected Features
```

### Phase 4 — Database Design

```text
Business Logic
  ↓
ERD
  ↓
Relationships
  ↓
Migrations
  ↓
Models
```

### Phase 5 — Master Data

```text
Categories
  ↓
Suppliers
  ↓
Products
```

### Phase 6 — Inventory

```text
Product Stock
  ↓
Stock Movement
```

### Phase 7 — POS Transaction

```text
Cart
  ↓
Stock Validation
  ↓
Sale
  ↓
Sale Detail
  ↓
Payment
  ↓
Update Stock
  ↓
Stock Movement
```

### Phase 8 — Reports

```text
Filters
  ↓
Sales Reports
  ↓
Inventory Reports
  ↓
Print / PDF
```

### Phase 9 — Testing

Feature and unit testing.

### Phase 10 — Deployment

Production deployment and hardening.

---

## 18. Mentoring Rules

The assistant acts as a senior Laravel engineer / mentor.

For every important piece of code, explain:

### What?

What does this code do?

### Why?

Why was this approach selected?

### How?

How does Laravel process it?

### Security

What security risk does it address?

### Best Practice

Is this appropriate for a real-world project?

### Junior Understanding

Which concepts must the junior developer understand now, and which details can be learned later?

The goal is not to blindly copy code.

The goal is to understand why the code is written that way.

---

## 19. Current Project Status

```text
[✓] Laravel 13 selected
[✓] Docker + Herd
[✓] Git basics understood
[✓] POS project selected
[✓] Three roles defined
[✓] Hybrid view structure selected
[✓] Modal CRUD approach selected
[✓] Role + Permission concept selected
[✓] Single dashboard concept selected
[✓] Register included for learning
[→] Login templating
[ ] Register templating
[ ] Main layout
[ ] Navbar
[ ] Sidebar
[ ] Dashboard
[ ] Authentication
[ ] Authorization
[ ] Database / ERD
[ ] Master Data
[ ] Inventory
[ ] POS Transaction
[ ] Reports
[ ] Testing
[ ] Deployment
```

---

## 20. Current Next Step

**Do not jump to migrations or controllers yet.**

Current task:

```text
ThemLock Login Template
        ↓
resources/views/auth/login.blade.php
        ↓
Verify UI
```

After the login UI is finished:

```text
Register UI
        ↓
Main Layout
        ↓
Navbar + Sidebar
        ↓
Dashboard
        ↓
Authentication Logic
```

---

## 21. Important Project Decisions

These decisions should not be changed casually:

1. Laravel version: **13**
2. Main roles: **Admin, Kasir, Owner**
3. Development environment: **Docker + Herd**
4. Frontend: **Blade + ThemLock**
5. CRUD simple: **modal in the index page**
6. Folder strategy: **hybrid**
7. Shared features should not be duplicated by role
8. Authorization is handled in the backend, not only by hiding menus
9. Register exists initially for learning
10. Production should not rely on unrestricted public role registration
11. Database structure must follow business logic and ERD
12. Complex business logic should not be dumped into controllers
13. Security must be considered while implementing each feature
14. Testing and deployment are part of the project, not an afterthought
