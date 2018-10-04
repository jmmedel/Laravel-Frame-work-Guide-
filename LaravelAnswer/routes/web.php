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

// This is the home page
Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::get('/about','PageController\PageController@about')->name('about');
Route::get('/contact','PageController\PageController@contact')->name('contact');
Route::post('/contact','PageController\PageController@submitContact')->name('submitContact');
Route::resource('question','QuestionController');

