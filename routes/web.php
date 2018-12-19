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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/sitemap', 'PagesController@sitemap');

Route::get('/booktour', 'PagesController@booktour');

Route::post('/booktour', 'PagesController@booktour2');

Route::resource('cities', 'CityController');
Route::get('/pages/cityoverview', 'CityController@cityoverview');
Route::get('/pages/citytemplate/{id}', 'CityController@citytemplate');



Route::resource('tourcategories', 'TourCategoryController');


Route::resource('tours', 'TourController');
Route::get('/pages/tourdetails/{id}', 'TourController@tourdetails');
Route::get('/search', 'CityController@search');

Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
Route::resource('userprofiles', 'UserProfileController');
Route::get('pages/guideprofile/{id}', 'UserProfileController@guideprofile');
