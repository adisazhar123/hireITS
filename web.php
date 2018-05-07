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
    return view('homepage');
});

Route::post('store', 'UsersController@store');
Route::get('jobs','ProjectsController@index')->name('browse.jobs')->middleware('freelancer');
Route::get('profile', 'UsersController@index')->name('view.profile');
Route::get('projects', 'ProjectsController@viewProject')->name('view.project');
Route::get('showcase', 'ProjectsController@browseShowcase')->name('browse.showcase');
Route::post('test', 'UsersController@test')->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::get('check', 'Auth\LoginController@check')->name('check');
