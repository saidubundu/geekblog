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


Route::get('/', [
    'uses' => 'PostController@index'
]);
Route::get('/blog/{post}', [
    'uses' => 'PostController@show',
    'as' => 'blog.show'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
