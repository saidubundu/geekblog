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
Route::get('/category/{category}', [
    'uses' => 'PostController@category',
    'as' => 'category'
]);

Route::put('backend/posts/restore/{post}', [
    'uses' => 'Backend\PostsController@restore',
    'as' => 'posts.restore'
]);

Route::delete('/backend/posts/force-destroy/{post}',[
    'uses' => 'Backend\PostsController@forceDestroy',
    'as' => 'posts.force-destroy'
]);

Route::get('/users/{user}', [
    'uses' => 'PostController@user',
    'as' => 'user'
]);

Auth::routes();

Route::get('/home', 'Backend\HomeController@index')->name('home');
Route::resource('/backend/posts', 'Backend\PostsController');
