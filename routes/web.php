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
    Route::get('test', function () {
        return view('test');
        //debugbar(App());

    });
});
Route::prefix('profile')->group(function () {
    Route::get('/', 'Profile@showProfile')->name('profile');
    Route::get('/settings', 'Profile@settings')->name('settings');
});

Route::resource('player', 'PlayerController',
		[
				'except' => ['update', 'edit'],
				'middleware' => ['auth'],
		]
);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/mongo', 'MongoController@mongo')->name('mongo');

