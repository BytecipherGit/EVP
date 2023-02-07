<?php

namespace App\Http\Controllers;
use App\Models\CompanyProfile;
use Illuminate\Http\Request;

class companySettingsController extends Controller
{

    public function index(){
        return view('admin/settings');
    }

    public function getprofile(request $request){

        $add=new CompanyProfile();

        $add->com_name=$request->input('com_name');
        $add->brand_name=$request->input('brand_name');
        $add->website=$request->input('website');
        $add->domain_name=$request->input('domain_name');
        $add->industry=$request->input('industry');
        $add->phone=$request->input('phone');
        $add->logo=$request->input('logo');
        $add->description=$request->input('description');
      
    //    $add->save();

       if($request->file('logo')){
        $file= $request->file('logo');
        $filename=$file->getClientOriginalName();
        $file->move(public_path().'/Image/',$filename); 
        $add['logo']= $filename;

        }
        $add->save();
     return redirect()->back()->with('message',"Company Profile Successfully Done ");
        // return('admin/settings');
    }
}
