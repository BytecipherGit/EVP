<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{

       public function getForgotPassword(){
          return view('superadmin/forgot-password');
       }
    
       public function getResetPassword(){
          return view('superadmin/reset-password');
       }

}

