<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\Forgot;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Superlogin;

class SuperadminController extends Controller
{

       public function getSuperLogin(Request $request){
            $user = Superlogin::where('email', request('email'))->first();
          
            if(!$user || !Hash::check($request->password,$user->password))
            {
               return redirect()->back()->with('message',"Email and password Not Match");     
            }
            $request->session()->put('user',$user);
            return redirect('dashboard')->with('message','successfully login');
            
            //   return redirect()->back()->with('message','successfully login');
                 
            }

          public function logout(Request $request) {	  	  	
            Auth::logout();
            Session::flush();	
            return redirect('superlogin');
          }
    
        public function getMail(Request $request){
              $request->validate([
             'email'=>'required|email',
          ]);

         DB::table('forgot_password')->insert(['email'=>$request->email,'created_at'=>Carbon::now()]);
           $data = Forgot::find(1)->toArray();  
           
          mail::send('emails.test', $data, function($message) use ($request){
              $message->from('test2@mailinator.com');
              $message->to([$request->email]);
              $message->subject('Your mail send successfully');
       });
       return back()->with('status', 'You have successfully sent an email to the admin!');
     }

//      public function mail()  
//       {  
//     $user = Forgot::find(1)->toArray();  
//     Mail::send('emails.mail', $user, function($message) use ($user) {  
//         $message->to($user->email);  
//         $message->subject('Mailgun Testing');  
//     });  
//     dd('Mail is Successfully Send');  
//      }   

   
}
