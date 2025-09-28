<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



Route::get('/', function () {
    return view('home');  // this is default homepage .it opens first
});

Route::get('/hello', function () {
    return view('hello'); //returning view called hello. create the view using astisan comand.
});

Route::get('/products',  [ProductController::class, 'index'])->name('products.index'); //we can call it via name . we called it using class now

Route::get('/create',  [ProductController::class, 'create']); // /create is the url 

Route::post('/store', [ProductController::class, 'store'])->name('products.store');

// Getting the id in url . id in url must be numaric . whereNumber is allowing only number
Route::get('/{id}',  [ProductController::class, 'show'])->name('products.show')->whereNumber('id');

Route::get('/{id}/edit',  [ProductController::class, 'edit'])->name('products.edit');

Route::patch('/{product}', [ProductController::class, 'update'])->name('products.update');
