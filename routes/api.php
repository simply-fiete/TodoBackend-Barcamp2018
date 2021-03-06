<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

header('Access-Control-Allow-Origin:  *');

Route::get('/todos', 'TodoController@findAll');

Route::get('/todos/{id}', 'TodoController@findOne');

Route::post('/todos', 'TodoController@store');

Route::delete('/todos/{id}', 'TodoController@remove');
