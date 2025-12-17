<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">

        {{-- BRAND --}}
        <div class="sidebar-brand">
            <a href="#">MilosGo</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#">MG</a>
        </div>

        <ul class="sidebar-menu">

            {{-- ================= DASHBOARD ================= --}}
            <li class="menu-header">Dashboard</li>

            @if (Auth::user()->role == 'super_admin')
                <li class="{{ request()->is('super-admin/dashboard') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-crown"></i><span>Dashboard Super Admin</span>
                    </a>
                </li>
            @elseif(Auth::user()->role == 'admin')
                <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-shield"></i><span>Dashboard Admin</span>
                    </a>
                </li>
            @else
                <li class="{{ request()->is('user/dashboard') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user"></i><span>Dashboard User</span>
                    </a>
                </li>
            @endif


            {{-- ================= SUPER ADMIN MENU ================= --}}
            @if (Auth::user()->role == 'super_admin')
                <li class="menu-header">E-Commerce System</li>

                {{-- MANAGE CATEGORY --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-tags"></i><span>Manage Category</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Category</a></li>
                        <li><a class="nav-link" href="#">Sub Category</a></li>
                        <li><a class="nav-link" href="#">Child Category</a></li>
                    </ul>
                </li>

                {{-- MANAGE PRODUCT --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-box"></i><span>Manage Product</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Brands</a></li>
                        <li><a class="nav-link" href="#">Products</a></li>
                        <li><a class="nav-link" href="#">Seller Products</a></li>
                        <li><a class="nav-link" href="#">Pending Seller Products</a></li>
                        <li><a class="nav-link" href="#">Product Reviews</a></li>
                    </ul>
                </li>

                {{-- ORDERS --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-shopping-cart"></i><span>Orders</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">All Orders</a></li>
                        <li><a class="nav-link" href="#">Pending Orders</a></li>
                        <li><a class="nav-link" href="#">Processed Orders</a></li>
                        <li><a class="nav-link" href="#">Dropped Off Orders</a></li>
                        <li><a class="nav-link" href="#">Shipped Orders</a></li>
                        <li><a class="nav-link" href="#">Out for Delivery</a></li>
                        <li><a class="nav-link" href="#">Delivered Orders</a></li>
                        <li><a class="nav-link" href="#">Canceled Orders</a></li>
                    </ul>
                </li>

                {{-- TRANSACTION --}}
                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-money-bill-wave"></i><span>Transactions</span>
                    </a>
                </li>

                {{-- ECOMMERCE --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-store"></i><span>E-Commerce</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Flash Sale</a></li>
                        <li><a class="nav-link" href="#">Coupons</a></li>
                        <li><a class="nav-link" href="#">Shipping Rule</a></li>
                        <li><a class="nav-link" href="#">Vendor Profile</a></li>
                        <li><a class="nav-link" href="#">Payment Settings</a></li>
                    </ul>
                </li>

                {{-- WITHDRAW PAYMENT --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-wallet"></i><span>Withdraw Payment</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Withdraw Method</a></li>
                        <li><a class="nav-link" href="#">Withdraw List</a></li>
                    </ul>
                </li>

                {{-- MANAGE WEBSITE --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-globe"></i><span>Manage Website</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Slider</a></li>
                        <li><a class="nav-link" href="#">Home Page Setting</a></li>
                        <li><a class="nav-link" href="#">Vendor Condition</a></li>
                        <li><a class="nav-link" href="#">Terms Page</a></li>
                    </ul>
                </li>

                {{-- ADVERTISEMENT --}}
                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-ad"></i><span>Advertisement</span>
                    </a>
                </li>

                {{-- MANAGE BLOG --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-blog"></i><span>Manage Blog</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Blog Categories</a></li>
                        <li><a class="nav-link" href="#">Blogs</a></li>
                        <li><a class="nav-link" href="#">Blog Comments</a></li>
                    </ul>
                </li>

                {{-- MESSAGES --}}
                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-envelope"></i><span>Messages</span>
                    </a>
                </li>

                <li class="menu-header">Setting More</li>

                {{-- FOOTER --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-shoe-prints"></i><span>Footer</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Footer Info</a></li>
                        <li><a class="nav-link" href="#">Footer Socials</a></li>
                        <li><a class="nav-link" href="#">Footer Grid</a></li>
                        <li><a class="nav-link" href="#">Footer Grid Two</a></li>
                    </ul>
                </li>

                {{-- USERS --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-users"></i><span>Users</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Customer List</a></li>
                        <li><a class="nav-link" href="#">Vendor List</a></li>
                        <li><a class="nav-link" href="#">Pending Vendor</a></li>
                        <li><a class="nav-link" href="#">Admin List</a></li>
                        <li><a class="nav-link" href="#">Manage Users</a></li>
                    </ul>
                </li>

                {{-- SUBSCRIBERS --}}
                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-bell"></i><span>Subscribers</span>
                    </a>
                </li>

                {{-- SETTINGS --}}
                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-cogs"></i><span>Settings</span>
                    </a>
                </li>
            @endif

            {{-- ================= admin / admin MENU ================= --}}
            @if (Auth::user()->role == 'admin')
                <li class="menu-header">Seller Panel</li>

                <li class="{{ request()->is('admin/dashboard') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-store"></i><span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-home"></i><span>Go To Home</span>
                    </a>
                </li>

                <li class="{{ request()->is('admin/messages*') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-envelope"></i><span>Messager</span>
                    </a>
                </li>

                <li class="{{ request()->is('admin/orders*') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-cart"></i><span>Orders</span>
                    </a>
                </li>

                <li class="{{ request()->is('admin/products*') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-box"></i><span>Products</span>
                    </a>
                </li>

                <li class="{{ request()->is('admin/reviews*') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-star"></i><span>Reviews</span>
                    </a>
                </li>

                <li class="{{ request()->is('admin/withdraw*') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-wallet"></i><span>My Withdraw</span>
                    </a>
                </li>

                <li class="{{ request()->is('admin/shop-profile*') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-store-alt"></i><span>Shop Profile</span>
                    </a>
                </li>

                <li class="{{ request()->is('admin/profile*') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user"></i><span>My Profile</span>
                    </a>
                </li>
            @endif



            {{-- ================= USER / CUSTOMER MENU ================= --}}
            @if (Auth::user()->role == 'user')
                <li class="menu-header">My Account</li>

                <li class="{{ request()->is('user/dashboard') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user"></i><span>Dashboard</span>
                    </a>
                </li>

                <li class="{{ request()->is('user/messages*') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-envelope"></i><span>Messager</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-home"></i><span>Go To Home</span>
                    </a>
                </li>

                <li class="{{ request()->is('user/orders*') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-bag"></i><span>Orders</span>
                    </a>
                </li>

                <li class="{{ request()->is('user/reviews*') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-star"></i><span>Reviews</span>
                    </a>
                </li>

                <li class="{{ request()->is('user/profile*') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-user-circle"></i><span>My Profile</span>
                    </a>
                </li>

                <li class="{{ request()->is('user/address*') ? 'active' : '' }}">
                    <a href="#" class="nav-link">
                        <i class="fas fa-map-marker-alt"></i><span>Address</span>
                    </a>
                </li>

                <li class="{{ request()->is('user/request-vendor*') ? 'active' : '' }}">
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
