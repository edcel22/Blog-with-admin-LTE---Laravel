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

/*Route::get('/', function () {
    return view('user.blog');
});

Route::get('/post', function(){
	return view('user.post');
});
*/
/*Route::get('/admin/home', function() {
	return view('admin.home');
});

Route::get('/admin/post', function() {
	return view('admin.post.post');
});
Route::get('/admin/tag', function() {
	return view('admin.tag.tag');
});
Route::get('/admin/category', function() {
	return view('admin.category.category');
});*/

/*
**User Routes
*/
Route::group(['namespace' => 'User'], function(){
	Route::get('/', 'HomeController@index');
	Route::get('/post', 'PostController@index');
});

/*
**Admin Routes
*/
Route::group(['namespace' => 'Admin'], function(){
	Route::get('admin/home', 'HomeController@index');
	Route::resource('admin/post', 'PostController');
	Route::resource('admin/category', 'CategoryController');
	Route::resource('admin/tag', 'TagController');
});
