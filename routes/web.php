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
     return view('online.layout.index');
 });
<<<<<<< HEAD

 Route::get('/paciente', function () {
    return view('online.registrar.paciente');
});

Route::get('/doctor', function () {
    return view('online.registrar.doctor');
});
// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/', function () {
//    return view('admin.layout.index');
//});

=======
/* Route::get('/', function () {
    return view('admin.layout.index');
}); */
>>>>>>> 4154e314eff850fa1d6494c0c220b7a2f69257a8
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
