<?php

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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@index');
Route::get('/category/{category_name}', 'HomeController@categories');
Route::get('/post/{slug}', 'HomeController@post');
//Auth::routes();


Route::match(['get', 'post'], '/admincms/login','AdminController@login')->name('login');
Route::get('/admincms/register', 'AdminController@formregister')->name('register.formregister'); 
Route::post('/admincms/register', 'AdminController@register')->name('register.register');

Route::group( ['middleware' => 'auth' ], function() {
	Route::get('/admincms/dashboard', 'AdminController@dashboard');
	Route::resource('/admincms/post','AdminPostController');
	Route::resource('/admincms/categories','AdminCategoriesController');
	Route::get('/admincms/change-password', 'AdminController@changepassword');
});

Route::get('/admincms/logout','AdminController@logout');

Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

