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

Auth::routes();


Route::get('/', function () {
    return view('homepage');
});

//freelancer
Route::get('jobs','ProjectsController@index')->name('browse.jobs');

Route::get('/freelancer', 'FreelancerController@index')->name('view.freelancer.profile');
Route::get('showcase', 'ProjectsController@browseShowcase')->name('browse.showcase');
Route::get('freelancer/getprofile', 'FreelancerController@getProfile')->name('get.freelancer.profile');
Route::put('freelancer/updateProfile', 'FreelancerController@updateProfile')->name('update.freelancer.profile');
Route::get('/portfolio', 'FreelancerController@portfolio');
Route::post('/addPortfolio', 'FreelancerController@addPortfolio')->name('add.portfolio');
Route::delete('/deletePortfolio/{id}', 'FreelancerController@deletePortfolio')->name('delete.portfolio');
Route::get('/getSkills', 'FreelancerController@getSkills')->name('search.skills');
Route::post('/bid-project', 'FreelancerController@bidProject')->name('bid.project');

//employer
Route::get('post-project', 'EmployerController@postProject')->name('post.project.page');
Route::post('post-project', 'EmployerController@storeProject')->name('store.project');
Route::get('projects/{slug}', 'ProjectsController@viewProject')->name('view.project');




//payment
Route::get('check', 'Auth\LoginController@check')->name('check');
Route::post('pay', 'PaymentController@payWithpaypal')->name('paywithpaypal');
Route::get('status', 'PaymentController@getPaymentStatus')->name('status');
Route::post('create', 'PaymentController@getCheckout')->name('create');
Route::post('execute', 'PaymentController@getDone')->name('execute');
Route::post('cancel', 'PaymentController@getCancel')->name('cancel');
