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
Route::get('/', 'HomeViewController@index');
Route::get('/news/{detail_news}', 'HomeViewController@detail_news');
Route::get('/blogs/{detail_blog}', 'HomeViewController@detail_blog');


//Route::get('/tournaments/{tournament}', 'TournamentsController@show');


//Route::get('/', function () {
//    $tournaments = App\Tournaments::all();
//    return view('index', ['tournaments' => $tournaments]);
//});
//
//Route::get('/tournaments/{tournaments}', function ($id) {
//    $tournament = App\Tournaments::find($id);
//    return view('show', ['tournament' => $tournament]);
//});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
