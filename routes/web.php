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


Route::group(['prefix' => 'articles'], function () {
	Route::get('view/{id}', [
        'uses'	=>	'TestController@view',
        'as'	=>	'articlesView'
	]);
});
 
Route::get('articles/{nombre?}', function ($nombre = "No se indico nombre") {
	return "hola como estas $nombre";
});