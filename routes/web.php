<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", function (){
   return "home";
});

Route::get("/posts", "PostController@index")->name("post.index");
Route::get("/posts/create", "PostController@create")->name("post.create");
Route::post("/posts/store", "PostController@store")->name("post.store");


Route::get("/home", "HomeController@index")->name("home.index");
Route::get("/contact", "ContactController@index")->name("contact.index");
