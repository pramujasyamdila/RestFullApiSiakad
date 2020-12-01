<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Siswa RestFull API
Route::Get('/siswa','SiswaController@get');
Route::Get('/siswa/{id}','SiswaController@getById');
Route::Post('/siswa','SiswaController@post');
Route::Put('/siswa/{id}','SiswaController@put');
Route::Delete('/siswa/{id}','SiswaController@delete');
