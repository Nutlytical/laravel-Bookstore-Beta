<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CartController;
use App\Models\Book;

Route::get('/', function () {
    return view('welcome')
        ->with('cartItems', Session::get('cart'));
})->name('welcome');

Route::get('/about', function () {
    return view('bookstore.about')
        ->with('cartItems', Session::get('cart'));
})->name('about');

Route::get('/products', function () {
    return view('bookstore.products')
        ->with('books',Book::paginate(5))
        ->with('cartItems', Session::get('cart'));
})->name('products');

    /************************* User *************************/ 
Route::middleware(['auth:sanctum', 'verified'])->group(function () 
{   
    /******************** Cart ********************/  
        Route::get('/showCart', [CartController::class, 'showCart'])->name('showCart');
        Route::get('/incrementCart/{id}', [CartController::class,'incrementCart']);
        Route::get('/deleteProductFromCart/{id}', [CartController::class,'deleteProductFromCart']);
});

Route::middleware(['auth:sanctum', 'VerifyIsAdmin'])->group(function () 
{
        /********** Dashboard **********/ 
    Route::get('/dashboard',[BookController::class,'bookDashBoard'])->name('dashboard');

        /********** AddBook **********/ 
    Route::get('/addBook', [BookController::class, 'addBook'])->name('addBook');
    Route::post('/addBookToStore',[BookController::class,'addBookToStore'])->name('addBookToStore');

        /********** Edit Product **********/ 
    Route::get('/editBook/{id}', [BookController::class, 'editBook']);
    Route::post('/updateBook/{id}',[BookController::class,'updateBook']);

        /********** Delete Product **********/ 
    Route::get('/deleteBook/{id}',[BookController::class,'deleteBook']);
});