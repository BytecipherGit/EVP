<?php

namespace App\Http\Controllers;
use App\Models\CompanyReg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class companyLoginController extends Controller
{
    function getLogin(Request $request){

        $user = CompanyReg::where(['email'=>$request->email])->first();
        if(!$user || !Hash::check($request->password,$user->password))
        {
            return redirect()->back()->with('message','Password Not Match');
        }
         else{
             $request->session()->put('user',$user);
             return redirect('company-verification-document');
             }
       }

       function getForgotPassword(){
        return view('company/forgot-password');
       }
}
