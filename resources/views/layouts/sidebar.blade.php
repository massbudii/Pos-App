  <div class="sidebar-wrapper group">
      <div id="bodyOverlay" class="w-screen h-screen fixed top-0 bg-slate-900 bg-opacity-50 backdrop-blur-sm z-10 hidden">
      </div>
      <div class="logo-segment">
          <a class="flex items-center" href="index.html">
              <img src="{{ asset('assets/images/logo/logo-c.svg') }}" class="black_logo" alt="logo">
              <img src="{{ asset('assets/images/logo/logo-c-white.svg') }}" class="white_logo" alt="logo">
              <span
                  class="ltr:ml-3 rtl:mr-3 text-xl font-Inter font-bold text-slate-900 dark:text-white">DashCode</span>
          </a>
          <!-- Sidebar Type Button -->
          <div id="sidebar_type" class="cursor-pointer text-slate-900 dark:text-white text-lg">
              <span class="sidebarDotIcon extend-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                  <div
                      class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150 ring-2 ring-inset ring-offset-4 ring-black-900 dark:ring-slate-400 bg-slate-900 dark:bg-slate-400 dark:ring-offset-slate-700">
                  </div>
              </span>
              <span class="sidebarDotIcon collapsed-icon cursor-pointer text-slate-900 dark:text-white text-2xl">
                  <div
                      class="h-4 w-4 border-[1.5px] border-slate-900 dark:border-slate-700 rounded-full transition-all duration-150">
                  </div>
              </span>
          </div>
          <button class="sidebarCloseIcon text-2xl">
              <iconify-icon class="text-slate-900 dark:text-slate-200" icon="clarity:window-close-line"></iconify-icon>
          </button>
      </div>
      <div id="nav_shadow"
          class="nav_shadow h-[60px] absolute top-[80px] nav-shadow z-[1] w-full transition-all duration-200 pointer-events-none
            opacity-0">
      </div>
      <div class="sidebar-menus bg-white dark:bg-slate-800 py-2 px-4 h-[calc(100%-80px)] overflow-y-auto z-50"
          id="sidebar_menus">
          <ul class="sidebar-menu">

              {{-- 1. MENU UTAMA --}}
              <li class="sidebar-menu-title"></li>
              <li class="{{ request()->routeIs('dashboard*') ? 'active active-withOutChild' : '' }}">
                  <a href="{{ route('dashboard') }}"
                      class="navItem {{ request()->routeIs('dashboard*') ? 'active' : '' }}">
                      <span class="flex items-center">
                          <iconify-icon class="nav-icon" icon="heroicons-outline:home"></iconify-icon>
                          <span>Dashboard</span>
                      </span>
                  </a>
              </li>

              {{-- 2. TRANSAKSI KASIR (POS) --}}
              <li class="sidebar-menu-title">TRANSAKSI KASIR</li>
              <li>
                  <a href="javascript:void(0)" class="navItem">
                      <span class="flex items-center">
                          <iconify-icon class="nav-icon" icon="heroicons-outline:shopping-cart"></iconify-icon>
                          <span>Kasir Penjualan</span>
                      </span>
                      <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                  </a>
                  <ul class="sidebar-submenu">
                      <li>
                          <a href="#">Transaksi Baru (POS)</a>
                      </li>
                      <li>
                          <a href="#">Riwayat Penjualan</a>
                      </li>
                  </ul>
              </li>

              {{-- 3. PRODUK & INVENTORI --}}
              <li class="sidebar-menu-title">PRODUK & STOK</li>
              <li>
                  <a href="#" class="navItem">
                      <span class="flex items-center">
                          <iconify-icon class="nav-icon" icon="heroicons-outline:cube"></iconify-icon>
                          <span>Kelola Produk</span>
                      </span>
                  </a>
              </li>
              <li>
                  <a href="#" class="navItem">
                      <span class="flex items-center">
                          <iconify-icon class="nav-icon" icon="heroicons-outline:archive"></iconify-icon>
                          <span>Inventori / Stok</span>
                      </span>
                  </a>
              </li>

              {{-- 4. MASTER DATA (ADMIN) --}}
              <li class="sidebar-menu-title">MASTER DATA</li>
              <li @class(['active' => request()->routeIs('admin.*')])>
                  <a href="javascript:void(0)" class="navItem">
                      <span class="flex items-center">
                          <iconify-icon class="nav-icon" icon="heroicons-outline:database"></iconify-icon>
                          <span>Data Master</span>
                      </span>
                      <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                  </a>
                  <ul class="sidebar-submenu">
                      <li>
                          <a href="{{ route('admin.kategori.index') }}" @class(['active' => request()->routeIs('admin.kategori.*')])>
                              Kategori Produk
                          </a>
                      </li>
                      <li>
                          <a href="#" @class(['active' => request()->routeIs('admin.supplier.*')])>
                              Supplier
                          </a>
                      </li>
                      <li>
                          <a href="#" @class(['active' => request()->routeIs('admin.users.*')])>
                              Pengguna (Users)
                          </a>
                      </li>
                  </ul>
              </li>
              {{-- 5. LAPORAN (OWNER & ADMIN) --}}
              <li class="sidebar-menu-title">LAPORAN & ANALISIS</li>
              <li>
                  <a href="javascript:void(0)" class="navItem">
                      <span class="flex items-center">
                          <iconify-icon class="nav-icon" icon="heroicons-outline:chart-bar"></iconify-icon>
                          <span>Laporan Bisnis</span>
                      </span>
                      <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                  </a>
                  <ul class="sidebar-submenu">
                      <li>
                          <a href="#">Laporan Penjualan</a>
                      </li>
                      <li>
                          <a href="#">Laporan Pendapatan</a>
                      </li>
                  </ul>
              </li>

          </ul>
      </div>
  </div>
