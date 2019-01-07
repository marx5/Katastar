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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');

Route::get('/counties', 'CountyController@index');
Route::get('/counties/new', 'CountyController@create');
Route::post('/counties', 'CountyController@store');

Route::get('/municipals', 'MunicipalController@index');
Route::get('/municipals/new', 'MunicipalController@create');
Route::post('/municipals', 'MunicipalController@store');

Route::get('/cities', 'CityController@index');
Route::get('/cities/new', 'CityController@create');
Route::post('/cities', 'CityController@store');

Route::get('/landregisters', 'LandRegisterController@index');
Route::get('/landregisters/new', 'LandRegisterController@create');
Route::post('/landregisters', 'LandRegisterController@store');

Route::get('/owners', 'OwnerController@index');
Route::get('/owners/new', 'OwnerController@create');
Route::post('/owners', 'OwnerController@store');

Route::get('/ownerships', 'OwnershipController@index');
Route::get('/ownerships/new', 'OwnershipController@create');
Route::post('/ownerships', 'OwnershipController@store');

Route::get('/realestatetypes', 'RealestateTypeController@index');
Route::get('/realestatetypes/new', 'RealestateTypeController@create');
Route::post('/realestatetypes', 'RealestateTypeController@store');

Route::get('/realestate', 'RealestateController@index');
Route::get('/realestate/new', 'RealestateController@create');
Route::post('/realestate', 'RealestateController@store');
