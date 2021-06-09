<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/rate', 'App\Http\Controllers\Controller@rate');

Route::post('/testposts/saverecord', 'App\Http\Controllers\PostController@store');
Route::post('/testposts/updaterecord', 'App\Http\Controllers\PostController@update');

Route::get('/', 'App\Http\Controllers\PostController@index');
Route::resource('posts', 'App\Http\Controllers\PostController');



require __DIR__.'/auth.php';
