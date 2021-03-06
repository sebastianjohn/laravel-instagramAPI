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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'instagram']], function() {
  Route::get('/', 'AppController@index');
  Route::get('/search', 'AppController@search');
  Route::get('/instagram', 'InstagramController@redirectToInstagramProvider');
  Route::get('/instagram/callback', 'InstagramController@handleProviderInstagramCallback');
});
