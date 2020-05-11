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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/docs', function () {
    return view('routedocs');
});
Route::get('/blogs/{nom_du_parametre_get}', function () {
    $nom_dans_la_fonction_anonyme = request('nom_du_parametre_get');

    return view('routeblogs', [
        'nom_dans_la_vue' => $nom_dans_la_fonction_anonyme,
    ]);
});
Route::get('/news', function () {
    return view('routenews');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
