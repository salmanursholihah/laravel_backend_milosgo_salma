<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">

        {{-- BRAND --}}
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">MilosGo</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">MG</a>
        </div>

        <ul class="sidebar-menu">

            {{-- ================= DASHBOARD (SEMUA ROLE) ================= --}}
            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            {{-- ================= SUPER ADMIN ================= --}}
            @if (auth()->user()->role === 'super_admin')

                <li class="menu-header">E-Commerce System</li>

                {{-- Category --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-tags"></i><span>Categories</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Category</a></li>
                        <li><a class="nav-link" href="#">Sub Category</a></li>
                        <li><a class="nav-link" href="#">Child Category</a></li>
                    </ul>
                </li>

                {{-- Products --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-box"></i><span>Products</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Brands</a></li>
                        <li><a class="nav-link" href="#">All Products</a></li>
                        <li><a class="nav-link" href="#">Seller Products</a></li>
                        <li><a class="nav-link" href="#">Pending Products</a></li>
                        <li><a class="nav-link" href="#">Reviews</a></li>
                    </ul>
                </li>

                {{-- Orders --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-shopping-cart"></i><span>Orders</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">All Orders</a></li>
                        <li><a class="nav-link" href="#">Pending</a></li>
                        <li><a class="nav-link" href="#">Delivered</a></li>
                        <li><a class="nav-link" href="#">Canceled</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-money-bill-wave"></i><span>Transactions</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-store"></i><span>Vendors</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Vendor List</a></li>
                        <li><a class="nav-link" href="#">Pending Vendor</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-blog"></i><span>Blog</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Categories</a></li>
                        <li><a class="nav-link" href="#">Posts</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-users"></i><span>Users</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-cogs"></i><span>Settings</span>
                    </a>
                </li>

            @endif

            {{-- ================= SELLER ================= --}}
            @if (auth()->user()->role === 'seller')

                <li class="menu-header">Seller Panel</li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-home"></i><span>Go To Home</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-envelope"></i><span>Messager</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-cart"></i><span>Orders</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-box"></i><span>Products</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-star"></i><span>Reviews</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-wallet"></i><span>My Withdraw</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-store-alt"></i><span>Shop Profile</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-user"></i><span>My Profile</span>
                    </a>
                </li>

            @endif

            {{-- ================= USER ================= --}}
            @if (auth()->user()->role === 'user')

                <li class="menu-header">My Account</li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-envelope"></i><span>Messager</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-home"></i><span>Go To Home</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-bag"></i><span>Orders</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-star"></i><span>Reviews</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-circle"></i><span>My Profile</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-map-marker-alt"></i><span>Address</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-store"></i><span>Request to be Vendor</span>
                    </a>
                </li>

            @endif

            {{-- ================= LOGOUT ================= --}}
            <li class="menu-header">Account</li>
            <li>
                <a href="#" class="nav-link text-danger"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i><span>Logout</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>
    </aside>
</div>
