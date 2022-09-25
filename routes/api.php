<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route with Optional parameters and with condition
// Route::get('/users/{name?}',function($name=null){
// return "Hello".$name;
// })->where('name','[a-zA-Z]+');
Route::get('/users/{name?}',function($name=null){
    return "Hello".$name;
    });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::match(['get','post'],'/students',function(Request $request){
return "Reuest method is".  $request->method();
});
Route::any('/tests',function(Request $req){
return "Request method is" .$req->method();
});