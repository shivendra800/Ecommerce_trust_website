<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('optimize:clear');
    // return what you want
});

Auth::routes();

Route::controller(App\Http\Controllers\Frontend\FrontendController::class)->group(function () {

    Route::get('/', 'index');
    Route::get('/collections', 'categories');
    Route::get('/collections/{category_slug}', 'products');
    Route::get('/collections/{category_slug}/{product_slug}', 'productView');
    Route::get('/new-arrivals', 'newarrivals');
    Route::get('/featured-products', 'featuredproducts');
    Route::get('/electronics', 'electronics');
    Route::get('/fashions', 'fashions');
    Route::get('/accessories', 'accessories');
    Route::get('/appliances', 'appliances');
    Route::get('/search', 'searchProducts');
    Route::get('/dharamshala', 'dharamshala');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/wishlist', [App\Http\Controllers\Frontend\WishlistController::class, 'index']);
    Route::get('/cart', [App\Http\Controllers\Frontend\CartController::class, 'index']);
    Route::get('/checkout', [App\Http\Controllers\Frontend\CheckoutController::class, 'index']);
    Route::get('/order', [App\Http\Controllers\Frontend\OrderController::class, 'index']);
    Route::get('/orders/{orderId}', [App\Http\Controllers\Frontend\OrderController::class, 'show']);
    Route::get('/orders/cancleOrder/{orderId}/', [App\Http\Controllers\Frontend\OrderController::class, 'cancleOrder']);
    Route::get('/profile', [App\Http\Controllers\Frontend\UserController::class, 'index']);
    Route::post('/profile', [App\Http\Controllers\Frontend\UserController::class, 'store']);
    Route::get('/change-password', [App\Http\Controllers\Frontend\UserController::class, 'passwordCreateChange']);
    Route::post('/change-password', [App\Http\Controllers\Frontend\UserController::class, 'changePassword']);
    Route::get('/review/{orderId}', [App\Http\Controllers\Frontend\ReviewController::class, 'userreview']);
});

Route::get('/thank-you', [App\Http\Controllers\Frontend\FrontendController::class, 'thankyou']);







Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Login Wtih OTP
Route::controller(App\Http\Controllers\AuthOtpController::class)->group(function () {

    Route::get('/otp/login', 'login')->name('otp.login');
    Route::post('/otp/generate', 'generate')->name('otp.generate');
    Route::get('/otp/verification/{user_id}', 'verification')->name('otp.verification');
    Route::post('/otp/login', 'loginWithOtp')->name('otp.getlogin');
});


//login with Google url
Route::get('auth/google', [GoogleController::class, 'loginWithGoogle'])->name('google.login');
Route::any('auth/google/callback', [GoogleController::class, 'callbackFromGoogle'])->name('google.callback');

//login with Facebook url
Route::get('auth/facebook', [FacebookController::class, 'loginWithFacebook'])->name('facebook.login');
Route::any('auth/facebook/callback', [FacebookController::class, 'callbackFromFacebook'])->name('facebook.callback');



Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);


    Route::controller(App\Http\Controllers\Admin\SliderController::class)->group(function () {
        Route::get('sliders', 'index');
        Route::get('sliders/create', 'create');
        Route::post('sliders/create', 'store');
        Route::get('sliders/{slider}/delete', 'destroy');
    });

    //Category Routes
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::post('/category/{category}', 'update');
    });

    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('/products/create', 'create');
        Route::post('/products', 'store');
        Route::get('/products/{product}/edit', 'edit');
        Route::post('/products/{product}', 'update');
        Route::get('products/{product_id}/delete', 'destroy');
        Route::get('product-image/{product_image_id}/delete', 'destroyImage');

        Route::post('product-color/{prod_color_id}', 'updateProductColorQty');
        Route::get('product-color/{prod_color_id}/delete', 'deleteProductColor');
    });

    Route::controller(App\Http\Controllers\Admin\ColorController::class)->group(function () {
        Route::get('/colors', 'index');
        Route::get('/colors/create', 'create');
        Route::post('/colors', 'store');
        Route::get('/colors/{color}/edit', 'edit');
        Route::post('/colors/{color}', 'update');
        Route::get('colors/{color_id}/delete', 'destroy');
    });

    Route::controller(App\Http\Controllers\Admin\OrderController::class)->group(function () {
        Route::get('/orders', 'index');
        Route::get('/orders/{orderId}', 'show');
        Route::put('/orders/{orderId}', 'updateOrderStatus');

        Route::get('/invoice/{orderId}', 'viewInvoice');
        Route::get('/invoice/{orderId}/generate', 'generateInvoice');

        Route::get('/invoice/{orderId}/mail', 'mailInvoice');
    });

    Route::controller(App\Http\Controllers\Admin\UserController::class)->group(function () {
        Route::get('/users', 'index');
        Route::get('/users/create', 'create');
        Route::post('/users', 'store');
        Route::get('/users/{user_id}/edit', 'edit');
        Route::put('/users/{user_id}', 'update');
        Route::get('users/{user_id}/delete', 'destroy');
    });

    Route::get('settings', [App\Http\Controllers\Admin\SettingController::class, 'index']);
    Route::post('settings', [App\Http\Controllers\Admin\SettingController::class, 'store']);


    Route::get('/brands', App\Http\Livewire\Admin\Brand\Index::class);

    //Room Type
    Route::controller(App\Http\Controllers\Admin\RoomTypeController::class)->group(function () {
        Route::get('/room', 'index');
        Route::get('/room/create', 'create');
        Route::post('/room', 'store');
        Route::get('/room/{room}/edit', 'edit');
        Route::post('/room/{room}', 'update');
    });
});
