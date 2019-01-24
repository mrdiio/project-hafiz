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

Route::get('/', 'WelcomeController@index');
Route::get('/artikel', 'ArticleController@index');
Route::get('/artikel/{slug}', 'ArticleController@show');
Route::get('/about', 'AboutController@index');
Route::put('/panorama/{slug}', 'WelcomeController@update');
Route::get('/panorama/{slug}', 'WelcomeController@show');

Auth::routes();

Route::get('logout', 'LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
  Route::resource('/panoramaadmin','AdminPanoramaController');
  Route::resource('review', 'AdminReviewController');
  Route::resource('/tentang','AdminTentangController');
  Route::resource('/artikeladmin','AdminArtikelController');
  Route::resource('/eventadmin','AdminEventController');
});
