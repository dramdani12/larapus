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

Route::get('/','GuestController@index');
});
Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']], function (){
	// Route diisi disini....
	Route::resource('authors','AuthorsController');
	Route::resource('books','BooksController');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
