<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\super_admin\CategoryController;
use App\Http\Controllers\super_admin\SubCategoryController;
use App\Http\Controllers\super_admin\ChildCategoryController;
use App\Http\Controllers\super_admin\CuponController;
use App\Http\Controllers\super_admin\SliderController;
use App\Http\Controllers\super_admin\BlogCategoryController;
use App\Http\Controllers\super_admin\BlogController;

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
Route::middleware(['auth', 'role:seller'])
    ->prefix('seller')
    ->name('seller.')
    ->group(function () {
        Route::get('/messager', function () {
            return view('pages.seller.messager.index');
        })->name('messager.index');

        Route::get('/orders', function () {
            return view('pages.seller.orders.index');
        })->name('orders.index');

        //products
        Route::get('/products', function () {
            return view('pages.seller.products.index');
        })->name('products.index');
        Route::get('/products/create', function () {
            return view('pages.seller.products.create');
        })->name('products.create');
        Route::get('/products/edit', function () {
            return view('pages.seller.products.edit');
        })->name('products.edit');

        Route::get('/reviews', function () {
            return view('pages.seller.reviews.index');
        })->name('reviews.index');

        //seller_profile
        Route::get('/seller_profile', function () {
            return view('pages.seller.seller_profile.index');
        })->name('seller_profile.index');
        Route::get('/seller_profile/edit', function () {
            return view('pages.seller.seller_profile.edit');
        })->name('seller_profile.edit');

        Route::get('/shop_profile', function () {
            return view('pages.seller.shop_profile.index');
        })->name('shop_profile.index');

        //withdraw
        Route::get('/withdraw', function () {
            return view('pages.seller.withdraw.index');
        })->name('withdraw.index');
        Route::get('/withdraw/create', function () {
            return view('pages.seller.withdraw.create');
        })->name('withdraw.create');
        Route::get('/withdraw/edit', function () {
            return view('pages.seller.withdraw.edit');
        })->name('withdraw.edit');
    });

///access role super admin
Route::middleware(['auth', 'role:super_admin'])
    ->prefix('super-admin')
    ->name('super_admin.')
    ->group(function () {

        //category
        Route::resource('categories', CategoryController::class);
        //sub category
        Route::resource('sub_category', SubCategoryController::class);


        //child category
        Route::resource('child_category', ChildCategoryController::class);

        //brands
        Route::get('/brands', function () {
            return view('pages.super_admin.brands.index');
        })->name('brands.index');
        Route::get('brands/create', function () {
            return view('pages.super_admin.brands.create');
        })->name('brands.create');
        Route::get('brands/edit', function () {
            return view('pages.super_admin.brands.edit');
        })->name('brands.edit');

        //producut
        Route::get('/product', function () {
            return view('pages.super_admin.product.index');
        })->name('product.index');
        Route::get('product/create', function () {
            return view('pages.super_admin.product.create');
        })->name('product.create');
        Route::get('product/edit', function () {
            return view('pages.super_admin.product.edit');
        })->name('product.edit');


        Route::get('/seller_product', function () {
            return view('pages.super_admin.seller_product.index');
        })->name('seller_product.index');

        Route::get('/seller_pending_product', function () {
            return view('pages.super_admin.seller_pending_product.index');
        })->name('seller_pending_product.index');

        Route::get('/product_review', function () {
            return view('pages.super_admin.product_review.index');
        })->name('product_review.index');

        Route::get('/all_order', function () {
            return view('pages.super_admin.all_order.index');
        })->name('all_order.index');

        Route::get('/all_pending_order', function () {
            return view('pages.super_admin.all_pending_order.index');
        })->name('all_pending_order.index');

        Route::get('/all_processed_order', function () {
            return view('pages.super_admin.all_processed_order.index');
        })->name('all_processed_order.index');

        Route::get('/all_dropped_of', function () {
            return view('pages.super_admin.all_dropped_of.index');
        })->name('all_dropped_of.index');


        Route::get('/shipped_order', function () {
            return view('pages.super_admin.shipped_order.index');
        })->name('shipped_order.index');

        Route::get('/all_out_for_delivery', function () {
            return view('pages.super_admin.all_out_for_delivery.index');
        })->name('all_out_for_delivery.index');

        Route::get('/all_delivery', function () {
            return view('pages.super_admin.all_delivery.index');
        })->name('all_delivery.index');

        Route::get('/all_cancel_delivery', function () {
            return view('pages.super_admin.all_cancel_delivery.index');
        })->name('all_cancel_delivery.index');

        Route::get('/transaction', function () {
            return view('pages.super_admin.transaction.index');
        })->name('transaction.index');


        //flash sale
        Route::get('sale', function () {
            return view('pages.super_admin.sale.index');
        })->name('sale.index');
        Route::get('sale/create', function () {
            return view('pages.super_admin.sale.create');
        })->name('sale.create');
        Route::get('sale/edit', function () {
            return view('pages.super_admin.sale.edit');
        })->name('sale.edit');

        //cupons
        // Route::get('/cupon', function () {
        //     return view('pages.super_admin.cupon.index');
        // })->name('cupon.index');
        // Route::get('cupon/create', function () {
        //     return view('pages.super_admin.cupon.create');
        // })->name('cupon.create');
        // Route::get('cupon/edit', function () {
        //     return view('pages.super_admin.cupon.edit');
        // })->name('cupon.edit');

        Route::resource('cupons', CuponController::class);

        //shipping rule
        Route::get('/shipping_rule', function () {
            return view('pages.super_admin.shipping_rule.index');
        })->name('shipping_rule.index');
        Route::get('shipping_rule/create', function () {
            return view('pages.super_admin.shipping_rule.create');
        })->name('shipping_rule.create');
        Route::get('shipping_rule/edit', function () {
            return view('pages.super_admin.shipping_rule.edit');
        })->name('shipping_rule.edit');

        //vendor_profile
        Route::get('/vendor_profile', function () {
            return view('pages.super_admin.vendor_profile.index');
        })->name('vendor_profile.index');
        Route::get('vendor_profile/edit', function () {
            return view('pages.super_admin.vendor_profile.edit');
        })->name('vendor_profile.edit');
        Route::get('vendor_profile/create', function () {
            return view('pages.super_admin.vendor_profile.create');
        })->name('vendor_profile.create');

        //setting payment
        Route::get('/setting_payment', function () {
            return view('pages.super_admin.setting_payment.index');
        })->name('setting_payment.index');
        Route::get('setting_payment/create', function () {
            return view('pages.super_admin.setting_payment.create');
        })->name('setting_payment.create');
        Route::get('setting_payment/edit', function () {
            return view('pages.super_admin.setting_payment.edit');
        })->name('setting_payment.edit');



        //withdraw method
        Route::get('/withdraw_method', function () {
            return view('pages.super_admin.withdraw_method.index ');
        })->name('withdraw_method.index');
        Route::get('withdraw_method/create', function () {
            return view('pages.super_admin.withdraw_method.create ');
        })->name('withdraw_method.create');
        Route::get('withdraw_method/edit', function () {
            return view('pages.super_admin.withdraw_method.edit ');
        })->name('withdraw_method.edit');

        //withdraw list
        Route::get('/withdraw_list', function () {
            return view('pages.super_admin.withdraw_list.index ');
        })->name('withdraw_list.index');

        //slider
        // Route::get('/slider', function () {
        //     return view('pages.super_admin.slider.index ');
        // })->name('slider.index');
        // Route::get('slider/create', function () {
        //     return view('pages.super_admin.slider.create ');
        // })->name('slider.create');
        // Route::get('slider/edit', function () {
        //     return view('pages.super_admin.slider.edit ');
        // })->name('slider.edit');

        Route::resource('slider', SliderController::class);


        Route::get('/about_page', function () {
            return view('pages.super_admin.about_page.index ');
        })->name('about_page.index');

        //home_page
        Route::get('/home_page', function () {
            return view('pages.super_admin.home_page.index ');
        })->name('home_page.index');
        Route::get('/home_page/edit', function () {
            return view('pages.super_admin.home_page.edit ');
        })->name('home_page.edit');
        Route::get('/home_page/create', function () {
            return view('pages.super_admin.home_page.create ');
        })->name('home_page.create');


        Route::get('/terms_page', function () {
            return view('pages.super_admin.terms_page.index ');
        })->name('terms_page.index');

        Route::get('/vendor_condition', function () {
            return view('pages.super_admin.vendor_condition.index ');
        })->name('vendor_condition.index');

        //blog category
        // Route::get('/blog_category', function () {
        //     return view('pages.super_admin.blog_category.index ');
        // })->name('blog_category.index');
        // Route::get('blog_category/create', function () {
        //     return view('pages.super_admin.blog_category.create ');
        // })->name('blog_category.create');
        // Route::get('blog_category/edit', function () {
        //     return view('pages.super_admin.blog_category.edit ');
        // })->name('blog_category.edit');

        Route::resource('blog_category', BlogCategoryController::class);

        //blogs
        // Route::get('/blogs', function () {
        //     return view('pages.super_admin.blogs.index ');
        // })->name('blogs.index');
        // Route::get('blogs/create', function () {
        //     return view('pages.super_admin.blogs.create ');
        // })->name('blogs.create');
        // Route::get('blogs/edit', function () {
        //     return view('pages.super_admin.blogs.edit ');
        // })->name('blogs.edit');

        Route::resource('blogs', BlogController::class);

        Route::get('/blog_coment', function () {
            return view('pages.super_admin.blog_coment.index ');
        })->name('blog_coment.index');

        Route::get('/messages', function () {
            return view('pages.super_admin.messages.index ');
        })->name('messages.index');

        //footer_info
        Route::get('/footer_info', function () {
            return view('pages.super_admin.footer_info.index');
        })->name('footer_info.index');
        Route::get('/footer_info/create', function () {
            return view('pages.super_admin.footer_info.create');
        })->name('footer_info.create');
        Route::get('/footer_info/edit', function () {
            return view('pages.super_admin.footer_info.edit');
        })->name('footer_info.edit');


        //footer_social
        Route::get('/footer_social', function () {
            return view('pages.super_admin.footer_social.index');
        })->name('footer_social.index');
        Route::get('/footer_social/create', function () {
            return view('pages.super_admin.footer_social.create');
        })->name('footer_social.create');
        Route::get('/footer_social/edit', function () {
            return view('pages.super_admin.footer_social.edit');
        })->name('footer_social.edit');

        //footer_grid_two
        Route::get('/footer_grid_two', function () {
            return view('pages.super_admin.footer_grid_two.index');
        })->name('footer_grid_two.index');
        //footer_grid_three
        Route::get('/footer_grid_three/create', function () {
            return view('pages.super_admin.footer_grid_three.create');
        })->name('footer_grid_three.create');
        Route::get('/footer_grid_three/edit', function () {
            return view('pages.super_admin.footer_grid_three.edit');
        })->name('footer_grid_three.edit');

        //footer_grid_three
        Route::get('/footer_grid_three', function () {
            return view('pages.super_admin.footer_grid_three.index');
        })->name('footer_grid_three.index');
        Route::get('/footer_grid_two/create', function () {
            return view('pages.super_admin.footer_grid_two.create');
        })->name('footer_grid_two.create');
        Route::get('/footer_grid_two/edit', function () {
            return view('pages.super_admin.footer_grid_two.edit');
        })->name('footer_grid_two.edit');

        Route::get('/customer_list', function () {
            return view('pages.super_admin.customer_list.index');
        })->name('customer_list.index');

        Route::get('/vendor_list', function () {
            return view('pages.super_admin.vendor_list.index');
        })->name('vendor_list.index');

        Route::get('/pending_vendor', function () {
            return view('pages.super_admin.pending_vendor.index');
        })->name('pending_vendor.index');

        Route::get('/admin_list', function () {
            return view('pages.super_admin.admin_list.index');
        })->name('admin_list.index');

        //manage user
        Route::get('/manage_user', function () {
            return view('pages.super_admin.manage_user.index');
        })->name('manage_user.index');
        Route::get('/manage_user/create', function () {
            return view('pages.super_admin.manage_user.create');
        })->name('manage_user.create');
        Route::get('/manage_user/edit', function () {
            return view('pages.super_admin.manage_user.edit');
        })->name('manage_user.edit');

        //subscribe
        Route::get('/subscribe', function () {
            return view('pages.super_admin.subscribe.index');
        })->name('subscribe.index');
        Route::get('/subscribe/create', function () {
            return view('pages.super_admin.subscribe.create');
        })->name('subscribe.create');
        Route::get('/subscribe/edit', function () {
            return view('pages.super_admin.subscribe.edit');
        })->name('subscribe.edit');

        //setting
        Route::get('/setting', function () {
            return view('pages.super_admin.setting.index');
        })->name('setting.index');
        Route::get('/setting/edit', function () {
            return view('pages.super_admin.setting.edit');
        })->name('setting.edit');
        Route::get('/setting/create', function () {
            return view('pages.super_admin.setting.create');
        })->name('setting.create');
    });

///access role user
Route::middleware(['auth', 'role:user'])
    ->prefix('user')
    ->name('user.')
    ->group(function () {
        Route::get('/messager', function () {
            return view('pages.user.messager.index');
        })->name('messager.index');

        Route::get('/orders', function () {
            return view('pages.user.orders.index');
        })->name('orders.index');

        Route::get('/reviews', function () {
            return view('pages.user.reviews.index');
        })->name('reviews.index');

        Route::get('/user_profile', function () {
            return view('pages.user.user_profile.index');
        })->name('user_profile.index');

        //address
        Route::get('/address', function () {
            return view('pages.user.address.index');
        })->name('address.index');
        Route::get('/address/create', function () {
            return view('pages.user.address.create');
        })->name('address.create');

        Route::get('/request_to_be_vendor', function () {
            return view('pages.user.request_to_be_vendor.index');
        })->name('request_to_be_vendor.index');
    });
