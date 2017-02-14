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
    $firstname = "Romain";
    $lastname = "Giraud";

    return view('welcome', [
        'nom' => $lastname,
        'prenom' => $firstname
    ]);
});

Route::get('/task', 'TaskController@index');

Route::get('/task/create', 'TaskController@create');

Route::get('/task/{id}', 'TaskController@show');

Route::put('/task/{id}/edit', 'TaskController@edit' );

Route::put('/task/{id}', 'TaskController@update' );

Route::post('/task', 'TaskController@store');

Route::delete('/task/{id}', 'TaskController@delete');

Route::resource('task', 'TaskController');

Route::get('/iim', function(){
    return view('iim.iim');
});

Route::get('/iim/{axe}', function ($axe){
    return view('iim.axe', compact('axe'));
});

Auth::routes();

Route::resource('/home', 'HomeController');

Route::resource('/articles', 'ArticleController');

Route::get('/user', 'HomeController@indexhome');

