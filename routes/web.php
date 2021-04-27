<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\LoginController;
use App\Http\Controllers\CartController;

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
Route::get('/', [ClientController::class, 'index']) -> name("home");
Route::get('/shop', [ClientController::class, 'shop']) -> name("shop");
Route::get('/about', [ClientController::class, 'about']) -> name("about");
Route::get('/blog', [ClientController::class, 'blog']) -> name("blog");
Route::get('/contact', [ClientController::class, 'contact']) -> name("contact");
Route::post('/contact', [ContactController::class, 'contact_store']) -> name("contact");
Route::get('/product-detail', [ClientController::class, 'product_detail']) -> name("product-detail");
Route::get('/blog-detail', [ClientController::class, 'blog_detail']) -> name("blog-detail");
Route::get('/wishlist', [ClientController::class, 'wishlist']) -> name("wishlist");
Route::get('/order-complete', [ClientController::class, 'order_complete']) -> name("order-complete");
Route::get('/my-account', [ClientController::class, 'my_account']) -> name("my-account");
Route::get('/login', [ClientController::class, 'login']) -> name("login");
Route::post('/login', [LoginController::class, 'postLogin']) -> name("login");
Route::get('/register', [LoginController::class, 'register']) -> name("register");
Route::post('/register', [LoginController::class, 'postRegister']) -> name("register");
Route::get('/checkout', [ClientController::class, 'checkout']) -> name("checkout");
// cart
Route::get('/cart', [CartController::class, 'cart']) -> name("cart");
Route::get('/add-cart/{id}', [CartController::class, 'add_cart']) -> name('add_cart');
Route::get('/delete-cart/{id}', [CartController::class, 'delete_cart']) -> name('delete-cart');
Route::get('/clear-cart', [CartController::class, 'clear_cart']) -> name('clear-cart');
Route::post('/update-cart/{pro_id}', [CartController::class, 'update_cart']) -> name('update-cart');