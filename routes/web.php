<?php

use App\Models\Superlogin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\SuperMail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/organization-details',[App\Http\Controllers\OrganizationController::class,'getOrgDetails']);


Route::get('/forgot-password',[App\Http\Controllers\LoginController::class,'getForgotPassword']);

// Route::post('/forgot',[App\Http\Controllers\SuperadminController::class,'getMail']);


Route::get('/reset-password',[App\Http\Controllers\LoginController::class,'getResetPassword']);

// Route::post('/superlogin',[App\Http\Controllers\SuperadminController::class,'getSuperLogin']);

Route::get('/company-signup',[App\Http\Controllers\companySignupController::class,'getCompanySignup']);

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

