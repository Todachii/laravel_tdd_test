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


Route::get('customers', 'ApiController@getCustomers');
Route::post('customers', 'ApiController@postCustomers');
Route::get('customers/{customer_id}', 'ApiController@getCustomers');
Route::put('customers/{customer_id}', 'ApiController@putCustomers');
Route::delete('customers/{customer_id}', 'ApiController@deleteCustomers');

Route::get('reports', 'ApiController@getReports');
Route::post('reports', 'ApiController@postReports');
Route::get('reports/{report_id}', 'ApiController@getReports');
Route::put('reports/{report_id}', 'ApiController@putReports');
Route::delete('reports/{report_id}', 'ApiController@deleteReports');
