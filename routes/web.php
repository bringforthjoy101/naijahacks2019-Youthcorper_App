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
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', 'indexController@landingPage');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@index')->name('profile');
Route::get('/lodges', 'HomeController@lodges')->name('lodges');
Route::get('/lodge/single', 'LodgeController@show')->name('singleLodge');
Route::get('/lodge/create', 'LodgeController@create')->name('createLodge');

// Route::resource('lodges','LodgeController');

Route::get('lodge/{id}','HomeController@getLodge');
