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

Route::get('/','PagesController@getindex');
Route::get('about','PagesController@getAbout');
Route::get('contact','PagesController@getContact');

Route::get('category/{category}','PagesController@getCategory');

Route::group(['prefix' => 'product'], function(){
	Route::get('/','ProductController@getProduct');
	
	Route::post('add','ProductController@addProduct');
	
	Route::post('edit','ProductController@editProduct');
	
	Route::post('del','ProductController@delProduct');
});