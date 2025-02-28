<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ItemController::class,'index'])->name('home');

Route::get('/contact',function(){
    return view('contact');
})->name('contact');

Route::get('/about',function(){
    return view('about');
})->name('about');

Route::get('/category',function(){
    return view('category');
})->name('categories');

/*
Route::get('/cart',function(){
    return view('cart');
})->name('cart');
*/

Route::get('/profile',function(){
    return view('profile');
})->name('profile');


// with some processes
Route::get('/signup',[UserController::class,'signupindex'])->name('signup');
Route::post('/signup', [UserController::class,'create'])->name('createuser');

Route::get('/login',[UserController::class,'loginindex'])->name('login');
Route::post('/login',[UserController::class,'authenticate'])->name('auth');

Route::get('/logout',[UserController::class,'logout'])->name('logout');

// click and redirect to its page

Route::get('/items',[ItemController::class,'index'])->name('items.index');
Route::get('/items/{id}',[ItemController::class,'show'])->name('items.show');


// cart activities

Route::middleware(['auth'])->group(function(){
    Route::get('/cart',[CartController::class,'showcart'])->name('cart.show');
    Route::post('/cart/add/{id}',[CartController::class,'addtocart'])->name('cart.add');
    Route::post('/cart/remove/{id}',[CartController::class,'removefromcart'])->name('cart.remove');
    Route::post('/cart/clear',[CartController::class,'clearcart'])->name('cart.clear');
});
