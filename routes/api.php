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

<<<<<<< HEAD
Route::get('especialidad','EspecialidadController@index');

=======
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('especialidad','EspecialidadController@index');
>>>>>>> a08127cf86ddf8a2dd5c65a072317d25f7dc39b8
