<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\super_admin\CategoryController;
use App\Http\Controllers\super_admin\SubCategoryController;
use App\Http\Controllers\super_admin\ChildCategoryController;
use App\Http\Controllers\super_admin\CuponController;
use App\Http\Controllers\super_admin\SliderController;
use App\Http\Controllers\super_admin\BlogCategoryController;
use App\Http\Controllers\super_admin\BlogController;
use App\Http\Controllers\user\UserRequestToVendorController;
use App\Http\Controllers\VendorPendingController;
use App\Http\Controllers\seller\ProductController;
use App\Http\Controllers\super_admin\ProductApprovalController;
use App\Http\Controllers\super_admin\WithdrawMethodController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

 /*
 |--------------------------------------------------------------------------
 | Authentication (Handled by Fortify)
 |--------------------------------------------------------------------------
 | NOTE:
 | - Jika sudah pakai Fortify, route login & register ini SEBAIKNYA dihapus
 | - Saya biarkan dulu karena kamu minta hanya dirapikan
 |
 */
Route::get('/login', fn () => view('auth.login'))->name('login');
Route::get('/register', fn () => view('auth.register'))->name('register');

/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->get('/dashboard', function () {
    return match (auth()->user()->role) {
        'super_admin' => view('pages.dashboard.super_admin'),
        'seller'      => view('pages.dashboard.seller'),
        default       => view('pages.dashboard.user'),
    };
})->name('dashboard');

/*
|--------------------------------------------------------------------------
| SELLER AREA
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:seller'])
    ->prefix('seller')
    ->name('seller.')
    ->group(function () {

        Route::view('/messager', 'pages.seller.messager.index')->name('messager.index');
        Route::view('/orders', 'pages.seller.orders.index')->name('orders.index');

        // Products
       Route::resource('products', ProductController::class);

        Route::view('/reviews', 'pages.seller.reviews.index')->name('reviews.index');

        // Seller profile
        Route::view('/seller_profile', 'pages.seller.seller_profile.index')->name('seller_profile.index');
        Route::view('/seller_profile/edit', 'pages.seller.seller_profile.edit')->name('seller_profile.edit');

        Route::view('/shop_profile', 'pages.seller.shop_profile.index')->name('shop_profile.index');

        // // Withdraw
        // Route::view('/withdraw', 'pages.seller.withdraw.index')->name('withdraw.index');
        // Route::view('/withdraw/create', 'pages.seller.withdraw.create')->name('withdraw.create');
        // Route::view('/withdraw/edit', 'pages.seller.withdraw.edit')->name('withdraw.edit');

        Route::resource('withdraw', 'App\Http\Controllers\seller\WithdrawController');
    });

/*
|--------------------------------------------------------------------------
| SUPER ADMIN AREA
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:super_admin'])
    ->prefix('super-admin')
    ->name('super_admin.')
    ->group(function () {

        // Categories
        Route::resource('categories', CategoryController::class);
        Route::resource('sub_category', SubCategoryController::class);
        Route::resource('child_category', ChildCategoryController::class);

        // Brands
        Route::view('/brands', 'pages.super_admin.brands.index')->name('brands.index');
        Route::view('/brands/create', 'pages.super_admin.brands.create')->name('brands.create');
        Route::view('/brands/edit', 'pages.super_admin.brands.edit')->name('brands.edit');

        //withdraw method
        Route::resource('withdraw_method', WithdrawMethodController::class);

        // Products
        // Route::view('/product', 'pages.super_admin.product.index')->name('product.index');
        // Route::view('/product/create', 'pages.super_admin.product.create')->name('product.create');
        // Route::view('/product/edit', 'pages.super_admin.product.edit')->name('product.edit');

        // Route::view('/seller_product', 'pages.super_admin.seller_product.index')->name('seller_product.index');
        // Route::view('/seller_pending_product', 'pages.super_admin.seller_pending_product.index')->name('seller_pending_product.index');

        Route::get('/products', [ProductApprovalController::class, 'all'])
        ->name('product.index');

    Route::get('/seller-products', [ProductApprovalController::class, 'all'])
        ->name('seller_product.index');

    Route::get('/pending-products', [ProductApprovalController::class, 'pending'])
        ->name('seller_pending_product.index');

    Route::post('/products/{id}/approve', [ProductApprovalController::class, 'approve'])
        ->name('product.approve');

    Route::post('/products/{id}/reject', [ProductApprovalController::class, 'reject'])
        ->name('product.reject');

        Route::get('/products/filter', [ProductApprovalController::class, 'filter'])
        ->name('product.filter');

       Route::get('/products', [ProductApprovalController::class, 'index'])
            ->name('product.index');

        Route::get('/products/create', [ProductApprovalController::class, 'create'])
            ->name('product.create');

        Route::post('/products', [ProductApprovalController::class, 'store'])
            ->name('product.store');

        Route::get('/seller_products', [ProductApprovalController::class, 'seller_product'])
            ->name('seller_product.index');

        Route::view('/product_review', 'pages.super_admin.product_review.index')->name('product_review.index');

        // Orders
        Route::view('/all_order', 'pages.super_admin.all_order.index')->name('all_order.index');
        Route::view('/all_pending_order', 'pages.super_admin.all_pending_order.index')->name('all_pending_order.index');
        Route::view('/all_processed_order', 'pages.super_admin.all_processed_order.index')->name('all_processed_order.index');
        Route::view('/all_dropped_of', 'pages.super_admin.all_dropped_of.index')->name('all_dropped_of.index');

        Route::view('/shipped_order', 'pages.super_admin.shipped_order.index')->name('shipped_order.index');
        Route::view('/all_out_for_delivery', 'pages.super_admin.all_out_for_delivery.index')->name('all_out_for_delivery.index');
        Route::view('/all_delivery', 'pages.super_admin.all_delivery.index')->name('all_delivery.index');
        Route::view('/all_cancel_delivery', 'pages.super_admin.all_cancel_delivery.index')->name('all_cancel_delivery.index');

        Route::view('/transaction', 'pages.super_admin.transaction.index')->name('transaction.index');
        Route::view('/setting_payement', 'pages.super_admin.setting_payment.index')->name('setting_payment.index');
        // Route::view('/withdraw_method', 'pages.super_admin.withdraw_method.index')->name('withdraw_method.index');
        // Route::view('/withdraw_method/create', 'pages.super_admin.withdraw_method.create')->name('withdraw_method.create');
        // Route::view('/withdraw_method/edit', 'pages.super_admin.withdraw_method.edit')->name('withdraw_method.edit');
        Route::view('/withdraw_list', 'pages.super_admin.withdraw_list.index')->name('withdraw_list.index');
        Route::view('/home_page', 'pages.super_admin.home_page.index')->name('home_page.index');
        Route::view('/vendor_condition', 'pages.super_admin.vendor_condition.index')->name('vendor_condition.index');
        Route::view('/about_page', 'pages.super_admin.about_page.index')->name('about_page.index');
        Route::view('/terms_page', 'pages.super_admin.terms_page.index')->name('terms_page.index');
        Route::view('/blog_coment', 'pages.super_admin.blog_coment.index')->name('blog_coment.index');
        Route::view('/messages', 'pages.super_admin.messages.index')->name('messages.index');
        Route::view('/footer_info', 'pages.super_admin.footer_info.index')->name('footer_info.index');
        Route::view('/footer_social', 'pages.super_admin.footer_social.index')->name('footer_social.index');
        Route::view('/footer_grid_two', 'pages.super_admin.footer_grid_two.index')->name('footer_grid_two.index');
        Route::view('/footer_grid_three', 'pages.super_admin.footer_grid_three.index')->name('footer_grid_three.index');
        Route::view('/customer_list', 'pages.super_admin.customer_list.index')->name('customer_list.index');
        Route::view('/vendor_list', 'pages.super_admin.vendor_list.index')->name('vendor_list.index');
        Route::view('/admin_list', 'pages.super_admin.admin_list.index')->name('admin_list.index');
        Route::view('/manage_user', 'pages.super_admin.manage_user.index')->name('manage_user.index');
        Route::view('/subscribe', 'pages.super_admin.subscribe.index')->name('subscribe.index');
        Route::view('/setting', 'pages.super_admin.setting.index')->name('setting.index');
        // Flash Sale
        Route::view('/sale', 'pages.super_admin.sale.index')->name('sale.index');
        Route::view('/sale/create', 'pages.super_admin.sale.create')->name('sale.create');
        Route::view('/sale/edit', 'pages.super_admin.sale.edit')->name('sale.edit');

        // Cupons
        Route::resource('cupons', CuponController::class);

        // Shipping Rule
        Route::view('/shipping_rule', 'pages.super_admin.shipping_rule.index')->name('shipping_rule.index');
        Route::view('/shipping_rule/create', 'pages.super_admin.shipping_rule.create')->name('shipping_rule.create');
        Route::view('/shipping_rule/edit', 'pages.super_admin.shipping_rule.edit')->name('shipping_rule.edit');

        // Vendor Profile
        Route::view('/vendor_profile', 'pages.super_admin.vendor_profile.index')->name('vendor_profile.index');
        Route::view('/vendor_profile/create', 'pages.super_admin.vendor_profile.create')->name('vendor_profile.create');
        Route::view('/vendor_profile/edit', 'pages.super_admin.vendor_profile.edit')->name('vendor_profile.edit');

        // Slider
        Route::resource('slider', SliderController::class);

        // Blog
        Route::resource('blog_category', BlogCategoryController::class);
        Route::resource('blogs', BlogController::class);

        // Pending Vendor (FIXED route name)
  Route::get('/pending-vendor', [VendorPendingController::class, 'index'])
            ->name('pending_vendor.index');

        Route::post('/pending-vendor/{id}/approve', [VendorPendingController::class, 'approve'])
            ->name('pending_vendor.approve');

        Route::post('/pending-vendor/{id}/reject', [VendorPendingController::class, 'reject'])
            ->name('pending_vendor.reject');
    });

/*
|--------------------------------------------------------------------------
| USER AREA
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:user'])
    ->prefix('user')
    ->name('user.')
    ->group(function () {

        Route::view('/messager', 'pages.user.messager.index')->name('messager.index');
        Route::view('/orders', 'pages.user.orders.index')->name('orders.index');
        Route::view('/reviews', 'pages.user.reviews.index')->name('reviews.index');
        Route::view('/user_profile', 'pages.user.user_profile.index')->name('user_profile.index');

        // Address
        Route::view('/address', 'pages.user.address.index')->name('address.index');
        Route::view('/address/create', 'pages.user.address.create')->name('address.create');

        // Request to be vendor
        Route::resource('request_to_be_vendor', UserRequestToVendorController::class);
    });
