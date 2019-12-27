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

// Main login path of the ecommerc application
Route::get('/', 'userController@index');
//register a ecommerce
Route::get('/register', 'userController@register');
//Search the user
Route::post('/', 'userController@find');
//user creation
Route::post('/register', 'userController@store');
//
