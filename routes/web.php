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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('slamer')->group(function () {
    Route::get('/', function () {
        //print_r(DB::connection()->select('select * FROM sessions'));
        $data = DB::connection()->table('sessions')->get();
        echo $data;

    });
});
Auth::routes();

Route::resource('player', 'PlayerController', ['only' => [
		'index', 'show', 'create'
]]);

Route::get('/home', 'HomeController@index')->name('home');
