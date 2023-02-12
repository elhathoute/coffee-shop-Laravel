<?php

use App\Http\Controllers\CoffeshopController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
// use App\Http\Controllers\StaticController;

 use App\Http\Controllers\UserController;




Route::get('/',[CoffeshopController::class ,'welcome'])->name('welcome');

Route::get('/menu',[CoffeshopController::class ,'menu'])->name('menu');

Route::get('/contact', function () {return view('contact');})->name('contact');

Route::get('/show/{id}',[CoffeshopController::class ,'show'])->name('show');

Auth::routes();

Route::resource('coffeShops', CoffeshopController::class);


Route::get('/home', [CoffeshopController::class, "index"])->name("home");

Route::get('users/profile', [UserController::class, "edit"])->name("users.edit-profile");

Route::put('users/{user}',[UserController::class, "update"])->name("users.update-profile");
// Route::get('/store/{category?}/{item?}', function ($category=null,$item=null) {
//     if(isset($category)){
//         if(isset($item)){
//             return "<h1>{$item}</h1>";

//         }
//         return '<h1>'.$category.'</h1>';

//     }
//     return '<h1>Store</h1>';


// });

// Route::get('/store', function () {
//     $filter = request('style');

//     if(isset($filter)){
//         return 'this page viewing <span style="color:red"> '.strip_tags($filter).'</span>';

//     }
//     return 'this page viewing <span style="color:red"> All product</span>';


// });

Route::resource('/posts', 'App\Http\Controllers\PostController')->only(['index','show']);
