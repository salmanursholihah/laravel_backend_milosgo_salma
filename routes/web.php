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

Route::get('/logout', function(){
    return view(('auth.logout'));
})->name('logout');


//dashboard route
Route::middleware(['auth'])->get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

///akses role admin
Route::middleware(['auth', 'role:admin'])->group(function () {
   ////
});


///access role super admin
Route::middleware(['auth', 'role:super_admin'])->group(function () {
///
});



///access role user
Route::middleware(['auth', 'role:user'])->group(function () {
// Route::resource('messager', UserMessagerController::class);
// Route::resource('order', UserOrderController::class);
// Route::resource('review', UserReviewController::class);
// Route::resource('addres', UserAddressController::class);
// Route::resource('requestvendor', UserRequestVendorCotroller::class);

});


