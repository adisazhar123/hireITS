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


Route::get('/', 'HomeController@index')->name('home.page');

Route::get('/frequently-asked', function () {
    return view('faq');
})->name('faq');

Route::get('get-image','UsersController@getImage')->name('get.navbar.pic');
Route::get('top-user', 'UsersController@topuser')->name('user.top');

//freelancer
Route::get('freelancer/get/job-details', 'FreelancerController@getJobDetails')->name('get.job.details');
Route::get('freelancer/get/messages', 'FreelancerController@getMessages')->name('get.messages.freelancer');

Route::middleware(['freelancer'])->group(function () {
  Route::get('/freelancer', 'FreelancerController@index')->name('view.freelancer.profile');
  Route::get('/freelancer/fill-data', 'FreelancerController@freeget')->name('freelancer.fill.data');
  Route::put('freelancer/updateProfile', 'FreelancerController@updateProfile')->name('update.freelancer.profile');
  Route::post('dataupd', 'FreelancerController@getData');
  Route::post('/addPortfolio', 'FreelancerController@addPortfolio')->name('add.portfolio');
  Route::delete('/deletePortfolio/{id}', 'FreelancerController@deletePortfolio')->name('delete.portfolio'); //harus di cek apakah portfolio milik user
  Route::delete('/freelancer/delete-skill', 'FreelancerController@deleteSkill')->name('delete.skill'); //harus di cek apakah skill milik user
  Route::post('/freelancer/store-dp' ,'FreelancerController@storeProfilePic')->name('store.freelancer.dp');
  Route::post('/freelancer/store-skills', 'FreelancerController@addnewSkills')->name('store.freelancer.skills');
  Route::get('freelancer/dashboard', 'FreelancerController@dashboard')->name('view.freelancer.dashboard');
  Route::post('/bid-project', 'FreelancerController@bidProject')->name('bid.project');
  Route::get('freelancer/getprofile', 'FreelancerController@getProfile')->name('get.freelancer.profile');
});

Route::post('/freelancer/post-showcase', 'FreelancerController@postShowcase')->name('post.showcase');
Route::delete('/freelancer/delete-showcase', 'FreelancerController@deleteShowcase')->name('delete.showcase');


Route::get('freelancer/get-my-projects', 'FreelancerController@getOngoingProjects')->name('get.ongoing.projects');
Route::get('jobs','ProjectsController@index')->name('browse.jobs');
Route::get('showcase', 'ProjectsController@browseShowcase')->name('browse.showcase');
Route::get('/getSkills', 'FreelancerController@getSkills')->name('search.skills');
Route::post('freelancer/send-progress', 'FreelancerController@sendProgress')->name('send.progress');
Route::get('/freelancer/{username}','FreelancerController@viewFreelancer')->name('view.freelancer');
Route::post('/rate-employer', 'FreelancerController@rateEmployer')->name('rate.employer');


Route::get('/project/messages/download-file/{id}', 'ProjectsController@downloadFileMessage');

//employer
Route::middleware(['employer'])->group(function(){
  Route::post('post-project', 'EmployerController@storeProject')->name('store.project');
});
Route::post('/rate-freelancer', 'EmployerController@rateFreelancer')->name('rate.freelancer');
Route::get('post-project', 'EmployerController@postProject')->name('post.project.page');
Route::post('/employer/store-dp' ,'EmployerController@storeProfilePic')->name('store.employer.dp');
Route::post('employer/send-progress', 'EmployerController@sendProgress')->name('send.progress.employer');
Route::get('employer/get/job-details', 'EmployerController@getJobDetails')->name('get.job.details.employer');
Route::get('employer/get/messages', 'EmployerController@getMessages')->name('get.messages.employer');
Route::get('employer/dashboard', 'EmployerController@dashboard')->name('view.employer.dashboard');
Route::get('projects/{slug}', 'ProjectsController@viewProject')->name('view.project');
Route::get('/employer/fill-data', 'EmployerController@empget')->name('employer.fill.data');
Route::post('empupd', 'EmployerController@getData');
Route::get('employer', 'EmployerController@index')->name('view.employer.profile');
Route::get('employer/getprofile', 'EmployerController@getProfile')->name('get.employer.profile');
Route::put('employer/updateProfile', 'EmployerController@updateProfile')->name('update.employer.profile');
Route::post('employer/hire-freelancer', 'EmployerController@hireFreelancer')->name('hire.freelancer');
Route::get('employer/{username}', 'EmployerController@viewEmployer')->name('view.employer');  //MASIH BELOM
Route::post('employer/project/payment-details', 'EmployerController@getPaymentDetails')->name('get.payment.details');



//payment
Route::get('check', 'Auth\LoginController@check')->name('check');
Route::post('pay', 'PaymentController@payWithpaypal')->name('paywithpaypal');
Route::get('status', 'PaymentController@getPaymentStatus')->name('status');
Route::post('create', 'PaymentController@getCheckout')->name('create');
Route::post('execute', 'PaymentController@getDone')->name('execute');
Route::post('cancel', 'PaymentController@getCancel')->name('cancel');
