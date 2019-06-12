<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/postSteps', [
    'uses' => 'FetchController@postSteps'
]);

Route::get('/getSteps/{id}', [
    'uses' => 'FetchController@getSteps'
]);

Route::get('/deleteSteps/{id}', [
    'uses' => 'FetchController@deleteSteps'
]);