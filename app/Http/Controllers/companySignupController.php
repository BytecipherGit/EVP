<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\State;
use App\Models\CompanyReg;
use App\Models\City;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class companySignupController extends Controller
{
    public function getCompanySignup(){
        $data['countries'] = Country::get(["name", "id"]);
        return view('company/company-signup',$data);
    }

    public function countryIndex()
    {
        $countries = Country::all();
        $states = State::all();
        $city = City::all();

        return view('company/company-signup',compact('countries','states','city'));
    }

    public function getSignup(Request $request){

        $request->validate(
            [
                'oname'             =>      'required|string|max:20',
                'admin'             =>      'required|string|max:20',
                'website'           =>     'required|string|max:20',
                'email'             =>      'required|email|unique:company_regs,email',
                'password'          =>      'required|min:6',
                'confirm_password'  =>      'required|min:6',
                'designation'       =>      'required',
                'dept'              =>      'required',
                'address'           =>      'required',
                'country'           =>      'required',
                'state'             =>      'required',
                'city'              =>      'required',
                'pin'               =>      'required'



            ]
        );

        $add=new CompanyReg();
        $add->oname=$request->input('oname');
        $add->admin=$request->input('admin');
        $add->website=$request->input('website');
        $add->email=$request->input('email');
        $add->password=Hash::make($request->password);
        $add->designation=$request->input('designation');
        $add->dept=$request->input('dept');
        $add->address=$request->input('address');
        $add->country=$request->input('country');
        $add->state=$request->input('state');
        $add->city=$request->input('city');
        $add->pin=$request->input('pin');
        // $add->status=('pending');
       $add->save();

     return redirect()->back()->with('message',"Registration Successfully Done ");
    }

  

    // public function index()
    // {
    //     $data['countries'] = Country::get(["name", "id"]);
    //     return view('welcome', $data);
    // }

    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_id",$request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id",$request->state_id)->get(["name", "id"]);
        return response()->json($data);
    }
}
