<header class="tf-header bg-white" style="position: sticky; top: 0; left: 0; right: 0; z-index: 999; box-shadow: 0 4px 18px rgba(0, 0, 0, 0.06); width: 100%;">
    <div class="container">
        <div class="row align-items-center">
            {{-- Mobile Menu Trigger --}}
            <div class="col-md-4 col-3 d-xl-none">
                <a href="#mobileMenu" data-bs-toggle="offcanvas" class="btn-mobile-menu">
                    <span></span>
                </a>
            </div>

            {{-- Logo Brand Aksara --}}
            <div class="col-xl-3 col-md-4 col-6 text-center text-xl-start">
                <a href="{{ route('shop.index') }}" class="logo-site justify-content-center justify-content-xl-start text-decoration-none">
                    <span class="fs-3 fw-bold text-dark tracking-tight" style="font-family: inherit; letter-spacing: -0.5px;">Aksara<span class="text-primary">.</span></span>
                </a>
            </div>

            {{-- Navigasi Menu Aksara Coffee --}}
            <div class="col-xl-6 d-none d-xl-block">
                <nav class="box-navigation">
                    <ul class="box-nav-menu justify-content-center">
                        <li class="menu-item">
                            <a href="{{ route('shop.index') }}" class="item-link">BERANDA</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('shop.index') }}#katalog-menu" class="item-link">MENU & KOLEKSI</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('shop.index') }}#promo" class="item-link">PROMO</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('shop.index') }}#tentang-kami" class="item-link">TENTANG KAMI</a>
                        </li>
                    </ul>
                </nav>
            </div>

            {{-- Nav Icons (User, Search, Cart) --}}
            <div class="col-xl-3 col-md-4 col-3">
                <ul class="nav-icon-list justify-content-end">
                    {{-- User Profile / Login --}}
                    <li class="d-none d-lg-flex align-items-center">
                        @auth
                            <div class="dropdown">
                                <a class="nav-icon-item link d-flex align-items-center gap-1" href="javascript:void(0)" data-bs-toggle="dropdown">
                                    <i class="icon icon-user text-primary"></i>
                                    <span class="small fw-semibold text-truncate" style="max-width: 90px;">{{ Auth::user()->name }}</span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 p-2">
                                    <li><span class="dropdown-item-text small text-muted">Halo, {{ Auth::user()->name }}</span></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>
                                        <form action="{{ route('customer.logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" class="dropdown-item text-danger small">Keluar / Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @else
                            <a class="nav-icon-item link" href="{{ route('customer.login') }}" title="Masuk / Daftar Akun">
                                <i class="icon icon-user"></i>
                            </a>
                        @endauth
                    </li>

                    {{-- Search Modal Trigger --}}
                    <li class="d-none d-md-flex">
                        <a class="nav-icon-item link" href="#search" data-bs-toggle="modal" title="Cari Menu">
                            <i class="icon icon-magnifying-glass"></i>
                        </a>
                    </li>

                    {{-- Wishlist / Favorit --}}
                    <li class="d-none d-sm-flex">
                        <a class="nav-icon-item link" href="javascript:void(0)" title="Favorit">
                            <i class="icon icon-heart"></i>
                        </a>
                    </li>

                    {{-- Shopping Cart --}}
                    <li class="shop-cart" data-bs-toggle="offcanvas" data-bs-target="#shoppingCart">
                        <a class="nav-icon-item link" href="#shoppingCart" data-bs-toggle="offcanvas" title="Keranjang Belanja">
                            <i class="icon icon-shopping-cart-simple"></i>
                        </a>
                        <span class="count">0</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>