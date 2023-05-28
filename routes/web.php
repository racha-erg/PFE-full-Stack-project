<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\panierController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PaypalPaymentController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Products route
Route::get('/products', [ProductController::class,'index'])->name('products.index');
Route::get('/products/create', [ProductController::class,'create'])->name('products.create');
Route::post('/products', [ProductController::class,'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class,'show'])->name('products.show');
Route::get('/products/{product}/edit', [ProductController::class,'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductController::class,'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class,'destroy'])->name('products.destroy');

//panier routes
Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');

//
Route::get('/panier', [PanierController::class, 'show'])->name('panier.show');
Route::post('panier/add/{produit}',[panierController::class,'add'])->name('panier.add');
Route::delete('/panier/remove/{rowId}', [PanierController::class, 'remove'])->name('panier.remove');
Route::get('/panier/empty', [PanierController::class, 'empty'])->name('panier.empty');

//
Route::get('/search',[ SearchController::class,'search'])->name('search');



Route::get('/navbar', function () {
    return view('navbar');
});

//comment route
Route::Post('/comments/Store', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments', [CommentController::class, 'index']);

// ->middleware('auth');

Route::get('/Payment',[PaypalPaymentController::class, 'handlepayment'] )->name('payment');
Route::get('/PaymentCancel',[PaypalPaymentController::class, 'paymentCancel'] )->name('cancel.payment');
Route::get('/Payment/Success',[PaypalPaymentController::class, 'paymentSuccess'] )->name('success.payment');

// Srearch product route
Route::get('/search',[ SearchController::class,'search'])->name('search');
//to display every Category 
Route::get('/categories/{category}', [ProductController::class, 'showByCategory'])->name('products.category');

//Admin routes
Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('/admin/dashboard', [AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/products/search', [AdminController::class,'dashSearch'])->name('admin.dashSearch'); 
    Route::get('/admin/product/create', [AdminController::class,'create'])->name('admin.create'); 
    Route::post('/admin/product/store', [AdminController::class,'store'])->name('admin.store');
    Route::get('/admin/dashbord/{id}/edit',[AdminController::class,'edit'])->name('products.edit');
    Route::put('/admin/dashbord/{id}',[AdminController::class,'update'])->name('admin.update');
    Route::delete('/admin/dashbord/{id}',[AdminController::class,'delete'])->name('admin.delete');

});

