<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PaymentController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

/* frontend routes */
Route::get('/', [EbookController::class, 'index'])->name('/');
Route::get('/product-details/{id}', [EbookController::class, 'productDetails'])->name('product-details');
Route::get('/categories', [EbookController::class, 'category'])->name('categories');
Route::get('/publishers', [EbookController::class, 'publisher'])->name('publishers');
Route::get('/authors', [EbookController::class, 'author'])->name('authors');
Route::get('/author-books/{author_id}', [EbookController::class, 'authorBooks'])->name('author-books');
Route::get('/category-books/{category_id}', [EbookController::class, 'categoryBooks'])->name('category-books');
Route::get('/publisher-books/{publisher_id}', [EbookController::class, 'publisherBooks'])->name('publisher-books');
Route::get('/book', [EbookController::class, 'book'])->name('book');
Route::get('/features-books/{id}/{feature}', [EbookController::class, 'featuresBook'])->name('features-books');

/* customer controller */
Route::get('/customer-login', [CustomerController::class, 'customerLogin'])->name('customer-login');
Route::get('/customer-signup', [CustomerController::class, 'customerSignup'])->name('customer-signup');
Route::post('/new-customer', [CustomerController::class, 'saveCustomer'])->name('new-customer');
Route::post('/customer-login-check', [CustomerController::class, 'customerLoginCheck'])->name('customer-login-check');
Route::get('/customer-logout', [CustomerController::class, 'customerLogout'])->name('customer-logout');
Route::get('/customer-profile/{customerId}', [CustomerController::class, 'customerProfile'])->name('customer-profile');
Route::get('/edit-customer-profile/{id}', [CustomerController::class, 'editCustomerProfile'])->name('edit-customer-profile');

/* cart routes */
Route::post('/add-to-cart', [CartController::class, 'addCart'])->name('add-to-cart');
Route::get('/cart/{id}', [CartController::class, 'cartPage'])->name('cart');

/* payment gateway */

Route::post('/payment', [PaymentController::class, 'goPayment'])->name('payment');
Route::post('/makePayment', [PaymentController::class, 'completePayment'])->name('makePayment');

/* backend all routes */

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () { return view('dashboard');})->name('dashboard');

    Route::get('/dashboard',[AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin',[AdminController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

    /* product info */
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add-product');
    Route::post('/new-product', [ProductController::class, 'saveProduct'])->name('new-product');
    Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('manage-product');
    Route::get('/product-status/{id}', [ProductController::class, 'status'])->name('product-status');
    Route::post('/delete-product', [ProductController::class, 'deleteProduct'])->name('delete-product');
    Route::get('/edit-product/{id}', [ProductController::class, 'editProduct'])->name('edit-product');
    Route::post('/update-product', [ProductController::class, 'updateProduct'])->name('update-product');

    /* category routes */
    Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('add-category');
    Route::post('/new-category', [CategoryController::class, 'saveCategory'])->name('new-category');
    Route::get('/manage-category', [CategoryController::class, 'manageCategory'])->name('manage-category');
    Route::get('/cat-status/{id}', [CategoryController::class, 'status'])->name('cat-status');
    Route::get('/edit-category/{id}', [CategoryController::class, 'editCategory'])->name('edit-category');
    Route::post('/update-category', [CategoryController::class, 'updateCategory'])->name('update-category');
    Route::post('/delete-category', [CategoryController::class, 'deleteCategory'])->name('delete-category');

    /* author routes */
    Route::get('/add-author', [AuthorController::class, 'addAuthor'])->name('add-author');
    Route::post('/new-author', [AuthorController::class, 'saveAuthor'])->name('new-author');
    Route::get('/manage-author', [AuthorController::class, 'manageAuthor'])->name('manage-author');
    Route::post('/delete-author', [AuthorController::class, 'deleteAuthor'])->name('delete-author');
    Route::get('/author-status/{id}', [AuthorController::class, 'status'])->name('author-status');
    Route::get('/edit-author/{id}', [AuthorController::class, 'editAuthor'])->name('edit-author');
    Route::post('/update-author', [AuthorController::class, 'updateAuthor'])->name('update-author');

    /* publisher routes */
    Route::get('/add-publisher', [PublisherController::class, 'addPublisher'])->name('add-publisher');
    Route::post('/new-publisher', [PublisherController::class, 'savePublisher'])->name('new-publisher');
    Route::get('/manage-publisher', [PublisherController::class, 'managePublisher'])->name('manage-publisher');
    Route::get('/publisher-status/{id}', [PublisherController::class, 'status'])->name('publisher-status');
    Route::post('/delete-publisher', [PublisherController::class, 'deletePublisher'])->name('delete-publisher');
    Route::get('/edit-publisher/{id}', [PublisherController::class, 'editPublisher'])->name('edit-publisher');
    Route::post('/update-publisher', [PublisherController::class, 'updatePublisher'])->name('update-publisher');


});
