<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;




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
//Using Helper Component
use App\Http\Controllers\ProductsController;

Route::get('/product/{id}', [ProductsController::class, 'show'])->name('product');
Route::get('/',[ProductController::class,'index'])->name('product.index');
// Route::get('/users',function(){
//     return view('user');
// });

//Using HTTP in Controller
Route::get('/posts',[ClientController::class,'getAllPost'])->name('posts.getAllPost');
Route::get('/posts/{id}',[ClientController::class,'getPostById'])->name('posts.getPostById');
Route::get('/PostByHttp',[ClientController::class,'PostByHttp'])->name('posts.PostByHttp');

//Using Fluent String
Route::get('/Fluent',[FluentController::class,'index'])->name('fluent.index');

Route::get('/users',[UserController::class,'index'])->name('user.index');
Route::get('/home/{name?}',[HomeController::class,'index'])->name('home.index');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
