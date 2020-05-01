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
Route::get('/news/', 'HomeViewController@news');
Route::get('/blogs/detail/{detail_blog}', 'HomeViewController@detail_blog');


Route::get('/blogs/', 'BlogController@index');
Route::resource('blogs', 'BlogController');
Route::resource('comment_blogs', 'CommentsBlogController');
Route::resource('comments_news', 'CommentsNewsController');
Route::get('/guess_team/{id}', 'GuessTeamController@show');
Route::resource('guess_team', 'GuessTeamController');
Route::get('/guess_team_finish', 'GuessTeamController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
