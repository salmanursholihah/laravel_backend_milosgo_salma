<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

///auth routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/logout', function () {
    return view('auth.logout');
})->name('logout');

// //dashboard route
Route::middleware(['auth'])
    ->get('/dashboard', function () {
        $role = auth()->user()->role;

        if ($role === 'super_admin') {
            return view('pages.dashboard.super_admin');
        }

        if ($role === 'seller') {
            return view('pages.dashboard.seller');
        }

        return view('pages.dashboard.user');
    })
    ->name('dashboard');

///akses role seller
Route::middleware(['auth', 'role:seller'])->group(function () {
    ///
});

///access role super admin
Route::middleware(['auth', 'role:super_admin'])
    ->prefix('super-admin')
    ->name('super_admin.')
    ->group(function () {
        Route::get('/category', function () {
            return view('pages.super_admin.category.index');
        })->name('category.index');

        Route::get('/sub_category', function () {
            return view('pages.super_admin.sub_category.index');
        })->name('sub_category.index');

        Route::get('/child_category', function () {
            return view('pages.super_admin.child_category.index');
        })->name('child_category.index');

         Route::get('/brands', function () {
            return view('pages.super_admin.brands.index');
        })->name('brands.index');

        Route::get('/product', function () {
            return view('pages.super_admin.product.index');
        })->name('product.index');

        Route::get('/seller_product', function(){
            return view ('pages.super_admin.seller_product.index');
        })->name('seller_product.index');

        Route::get('/seller_pending_product', function (){
            return view ('pages.super_admin.seller_pending_product.index');
        })->name('seller_pending_product.index');

         Route::get('/product_review', function (){
            return view ('pages.super_admin.product_review.index');
        })->name('product_review.index');

        Route::get('/all_order', function () {
            return view('pages.super_admin.all_order.index');
        })->name('all_order.index');

        Route::get('/all_pending_order', function (){
            return view('pages.super_admin.all_pending_order.index');
        })->name('all_pending_order.index');

        Route::get('/all_processed_order', function (){
            return view('pages.super_admin.all_processed_order.index');
        })->name('all_processed_order.index');

        Route::get('/all_dropped_of', function (){
            return view('pages.super_admin.all_dropped_of.index');
        })->name('all_dropped_of.index');


        Route::get('/shipped_order', function (){
            return view('pages.super_admin.shipped_order.index');
        })->name('shipped_order.index');

        Route::get('/all_out_for_delivery', function (){
            return view('pages.super_admin.all_out_for_delivery.index');
        })->name('all_out_for_delivery.index');

        Route::get('/all_delivery', function (){
            return view('pages.super_admin.all_delivery.index');
        })->name('all_delivery.index');

        Route::get('/all_cancel_delivery', function (){
            return view('pages.super_admin.all_cancel_delivery.index');
        })->name('all_cancel_delivery.index');

        Route::get('/transaction', function (){
            return view ('pages.super_admin.transaction.index');
        })->name('transaction.index');


        Route::get('sale', function (){
            return view ('pages.super_admin.sale.index');
        })->name('sale.index');

        Route::get('/cupon', function (){
            return view ('pages.super_admin.cupon.index');
        })->name('cupon.index');

        Route::get('shipping_rule', function (){
            return view ('pages.super_admin.shipping_rule.index');
        })->name('shipping_rule.index');

        Route::get('vendor_profile', function (){
            return view('pages.super_admin.vendor_profile.index');
        })->name('vendor_profile.index');

        Route::get('/setting_payment', function (){
            return view ('pages.super_admin.setting_payment.index');
        })->name('setting_payment.index');

        Route::get('withdraw_method', function (){
            return view ('pages.super_admin.withdraw_method.index ');
        })->name('withdraw_method.index');

        Route::get('withdraw_list', function (){
            return view ('pages.super_admin.withdraw_list.index ');
        })->name('withdraw_list.index');

        Route::get('slider', function (){
            return view ('pages.super_admin.slider.index ');
        })->name('slider.index');

        Route::get('about_page', function (){
            return view ('pages.super_admin.about_page.index ');
        })->name('about_page.index');

        Route::get('home_page', function (){
            return view ('pages.super_admin.home_page.index ');
        })->name('home_page.index');

        Route::get('terms_page', function (){
            return view ('pages.super_admin.terms_page.index ');
        })->name('terms_page.index');

        Route::get('vendor_condition', function (){
            return view ('pages.super_admin.vendor_condition.index ');
        })->name('vendor_condition.index');

        Route::get('blog_category', function (){
            return view ('pages.super_admin.blog_category.index ');
        })->name('blog_category.index');

        Route::get('blogs', function (){
            return view ('pages.super_admin.blogs.index ');
        })->name('blogs.index');

        Route::get('blog_coment', function (){
            return view ('pages.super_admin.blog_coment.index ');
        })->name('blog_coment.index');
    });

///access role user
Route::middleware(['auth', 'role:user'])->group(function () {
    // Route::resource('messager', UserMessagerController::class);
    // Route::resource('order', UserOrderController::class);
    // Route::resource('review', UserReviewController::class);
    // Route::resource('addres', UserAddressController::class);
    // Route::resource('requestvendor', UserRequestVendorCotroller::class);
});
