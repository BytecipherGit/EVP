<?php

use App\Models\Superlogin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\SuperMail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Superadmin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Superadmin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Superadmin" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('superadmin/dashboard');
});

Route::get('/dashboard', function () {
  return view('superadmin/dashboard');
});

Route::post('/forgot-password', [App\Http\Controllers\SuperadminController::class,'getMail']);  


Route::get('/company-dashboard', function () {
    return view('company/company-dashboard');
});

Route::get('/company-login', function () {
  return view('company/company-login');
});

Route::get('/company-verification-document', function () {
  return view('company/company-verification-document');
});

Route::get('/logout', [App\Http\Controllers\SuperadminController::class, 'logout']);

Route::get('/organization',[App\Http\Controllers\OrganizationController::class,'getOrganization'])->name('organization');

Route::get('/individual-user',[App\Http\Controllers\OrganizationController::class,'getIndividual']);
  
Route::get('/forgot-password',[App\Http\Controllers\LoginController::class,'getForgotPassword']);
 
Route::get('/reset-password',[App\Http\Controllers\LoginController::class,'getResetPassword']);

// Route::post('/superlogin',[App\Http\Controllers\SuperadminController::class,'getSuperLogin']);

Route::get('/company-signup',[App\Http\Controllers\companySignupController::class,'index']);

// Route::get('/company-signup',[App\Http\Controllers\companySignupController::class,'countryIndex']);

Route::post('api/fetch-states', [App\Http\Controllers\companySignupController::class, 'fetchState']);

Route::post('api/fetch-cities', [App\Http\Controllers\companySignupController::class, 'fetchCity']);

Route::post('/company-signup',[App\Http\Controllers\companySignupController::class,'getSignup']);

Route::post('/company-login',[App\Http\Controllers\companyLoginController::class,'getLogin']);

// Route::get('/organization',[App\Http\Controllers\OrganizationController::class,'getData'])->name('org.search');

Route::get('/organization-details/{id}',[App\Http\Controllers\OrganizationController::class,'getDetails']);

Route::post('/company-verification-document',[App\Http\Controllers\DocVerificationController::class,'index']);

// mailgun Route

// Route::get('/m', function () {
//      $data=[
//          'title'=>'This mail for Testing',
//          'contant'=>'Hello Good Morning'
//      ];
//      mail::send('emails.test',function($message){
//       $message->to('jharshita4296@gmail.com','Harshita')->subject('Your mail send successfully');
// });

// });


// next try for mail

Route::get('send-email', function(){
  $data = [
      "name" => "Test NAME",
      "dob" => "12/12/1990"
  ];

  Mail::to("loop@mailinator.com")->send(new SuperMail($data));

  dd("Mail Sent Successfully!");
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 
Route::get('country-state-city', [App\Http\Controllers\companySignupController::class, 'index']);
Route::post('get-states-by-country', [App\Http\Controllers\companySignupController::class, 'getState']);
Route::post('get-cities-by-state', [App\Http\Controllers\companySignupController::class, 'getCity']);

/*
|--------------------------------------------------------------------------
| Company Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Company routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Company" middleware group. Now create something great!
|
*/


Route::get('/company-forgot-password',[App\Http\Controllers\Auth\companyLoginController::class,'getForgotPassword']);
Route::get('forget-password', [App\Http\Controllers\Auth\Forgot_password_controller::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [App\Http\Controllers\Auth\Forgot_password_controller::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
// Route::get('reset-password/{token}', [App\Http\Controllers\Auth\Forgot_password_controller::class, 'showResetPasswordForm'])->name('reset.password.get');
// Route::post('reset-password', [App\Http\Controllers\Auth\Forgot_password_controller::class, 'submitResetPasswordForm'])->name('reset.password.post');


/*
|--------------------------------------------------------------------------
| Individual Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Superadmin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Superadmin" middleware group. Now create something great!
|
*/

Route::get('/individual-login', function () {
  return view('indivisule/individual-login');
});

Route::get('/individual-login-otp', function () {
  return view('indivisule/individual-login-otp');
});

Route::get('/individual-login-verified', function () {
  return view('indivisule/individual-login-verified');
});

Route::get('/individual-info', function () {
  return view('indivisule/individual-info');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admin" middleware group. Now create something great!
|
*/

Route::get('/admin-index', function () {
  return view('admin/index');
});

Route::get('/search-history', function () {
  return view('admin/search-history');
});

Route::get('/all-employee', function () {
  return view('admin/all-employee');
});

Route::get('/current-employee', function () {
  return view('admin/current-employee');
});

Route::get('/onboarding', function () {
  return view('admin/onboarding');
});

Route::get('/employee-view-details', function () {
  return view('admin/employee-view-details');
});

Route::get('/employee-exit', function () {
  return view('admin/employee-exit');
});

Route::get('/notification', function () {
  return view('admin/notification');
});

Route::get('/post-employee', function () {
  return view('admin/post-employee');
});

Route::get('/post-employee-details', function () {
  return view('admin/post-employee-details');
});

Route::get('/invite-employee', function () {
  return view('admin/invite-employee');
});

Route::get('/invite-view-employee', function () {
  return view('admin/invite-view-employee');
});

Route::get('/reset-password', function () {
  return view('admin/reset-password');
});

Route::get('/schedule-for-interview', function () {
  return view('admin/schedule-for-interview');
});
Route::get('/settings',[App\Http\Controllers\companySettingsController::class,'index']);

Route::post('/settings',[App\Http\Controllers\companySettingsController::class,'getprofile']);

Route::get('/interview-video-call', function () {
  return view('admin/emails/candidate/interview-video-call');
});

Route::get('/interview-phone-call', function () {
  return view('admin/emails/candidate/interview-phone-call');
});

Route::get('/rejected-email', function () {
  return view('admin/emails/candidate/rejected-email');
});

Route::get('/schedule-video-interview', function () {
  return view('admin/web-email/schedule-video-interview');
});

Route::get('/schedule-phone-interview', function () {
  return view('admin/web-email/schedule-phone-interview');
});

Route::get('/reschedule-interview', function () {
  return view('admin/web-email/reschedule-interview');
});

Route::get('/suggest-new-time', function () {
  return view('admin/web-email/suggest-new-time');
});

Route::get('/interview-request-declined', function () {
  return view('admin/web-email/interview-request-declined');
});

Route::get('/decline-interview', function () {
  return view('admin/web-email/decline-interview');
});

Route::get('/interview-scheduled', function () {
  return view('admin/web-email/interview-scheduled');
});

Route::get('/reschedule-request', function () {
  return view('admin/web-email/reschedule-request');
});

Route::get('/invite-email', function () {
  return view('org-invite/invite-email');
});

Route::get('/invite-confirm', function () {
  return view('org-invite/invite-confirm');
});

Route::get('/basic-info', function () {
  return view('org-invite/basic-info');
});