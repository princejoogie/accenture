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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/fetchSteps', 'FetchController@fetchSteps');
Route::get('/fetchData', 'FetchController@fetchData');
Route::get('/fetchUser', 'FetchController@fetchUser');
Route::post('/AddStep', 'FetchController@AddStep');
Route::get('/doctor', 'FetchController@DoctorView');
Route::get('/fetchRecords', 'FetchController@fetchRecords');
Route::get('/fetchProfile', 'FetchController@fetchProfile');
