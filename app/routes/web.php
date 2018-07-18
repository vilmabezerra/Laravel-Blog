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
	$paginator = \App\Models\Post::paginate(2);
    return view('welcome', ['paginator' => $paginator]);
});

Auth::routes();

Route::group(['prefix' => '/', 'middleware' => ['auth']], function () {
    Route::get('home', 'HomeController@index')->name('home');
    Route::resource('post', 'Dashboard\PostController');

});

