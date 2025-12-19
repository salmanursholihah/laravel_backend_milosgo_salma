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
                        <li><a class="nav-link" href="{{ route('super_admin.category.index') }}">Category</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.sub_category.index') }}">Sub Category</a>
                        </li>
                        <li><a class="nav-link" href="{{ route('super_admin.child_category.index') }}">Child
                                Category</a></li>
                    </ul>
                </li>

                {{-- Products --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-box"></i><span>Products</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('super_admin.brands.index') }}">Brands</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.product.index') }}">All Products</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.seller_product.index') }}">Seller
                                Products</a>
                        </li>
                        <li><a class="nav-link" href="{{ route('super_admin.seller_pending_product.index') }}">Pending
                                Products</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.product_review.index') }}">Reviews</a></li>
                    </ul>
                </li>

                {{-- Orders --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-shopping-cart"></i><span>Orders</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('super_admin.all_order.index') }}">All Orders</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.all_pending_order.index') }}">All Pending
                                orders</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.all_processed_order.index') }}">All
                                Processed
                                orders </a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.all_dropped_of.index') }}">All of Dropped
                                Orders
                            </a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.shipped_order.index') }}">All shippes
                                orders
                        <li><a class="nav-link" href="{{ route('super_admin.all_out_for_delivery.index') }}">All out
                                for delivery orders
                        <li><a class="nav-link" href="{{ route('super_admin.all_delivery.index') }}">All delivered
                                orders</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.all_cancel_delivery.index') }}">All
                                cenceled orders </a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('super_admin.transaction.index') }}" class="nav-link">
                        <i class="fas fa-money-bill-wave"></i><span>Transactions</span>
                    </a>
                </li>


                {{-- ecomerce --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-shopping-cart"></i><span>Ecommerce</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('super_admin.sale.index') }}">Flash sale</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.cupon.index') }}">Coupons</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.shipping_rule.index') }}">Shipping Rule</a>
                        </li>
                        <li><a class="nav-link" href="{{ route('super_admin.vendor_profile.index') }}">Vendor
                                Profile</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.setting_payment.index') }}">Payment
                                Setting</a></li>
                    </ul>
                </li>
                {{-- Withdraw payment --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-wallet"></i><span>Withdraw Payments</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('super_admin.withdraw_method.index') }}">Withdraw
                                Method</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.withdraw_list.index') }}">Withdraw List</a>
                        </li>
                    </ul>
                </li>


                {{-- manage website --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-globe"></i><span>Manage Website</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('super_admin.slider.index') }}">Slider</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.home_page.index') }}">Home Page
                                Condition</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.vendor_condition.index') }}">Vendor
                                condition</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.about_page.index') }}">About Page</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.terms_page.index') }}">Terms Page</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-blog"></i><span>Blog</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="{{ route('super_admin.blog_category.index') }}">Categories</a>
                        </li>
                        <li><a class="nav-link" href="{{ route('super_admin.blogs.index') }}">Blog</a></li>
                        <li><a class="nav-link" href="{{ route('super_admin.blog_coment.index') }}">Blog Comments</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-message"></i><span>messages</span>
                    </a>
                </li>

                {{-- footer --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-th-large"></i><span>Footer</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Footer Info</a></li>
                        <li><a class="nav-link" href="#">Footer Socials</a></li>
                        <li><a class="nav-link" href="#">Footer Grid Two</a></li>
                        <li><a class="nav-link" href="#">Footer Grid Three</a></li>
                    </ul>
                </li>

                {{-- users --}}
                <li class="dropdown">
                    <a href="#" class="nav-link has-dropdown">
                        <i class="fas fa-user"></i><span>Users</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="nav-link" href="#">Customer List</a></li>
                        <li><a class="nav-link" href="#">Vendor List</a></li>
                        <li><a class="nav-link" href="#">Pending Vendors</a></li>
                        <li><a class="nav-link" href="#">Admin List</a></li>
                        <li><a class="nav-link" href="#">Manage User</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="nav-link">
                        <i class="fas fa-bell"></i><span>Subscribes</span>
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
