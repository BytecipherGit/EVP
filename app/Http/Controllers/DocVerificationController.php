<?php

namespace App\Http\Controllers;
use App\Models\DocVerification;
use Illuminate\Http\Request;

class DocVerificationController extends Controller
{
    public function index(Request $request){

        $request->validate([
            'rid' => 'required',
            'doc' => 'mimes:doc,pdf,docx,zip,png,jpge,jpg',
            'doctype'=>'required'
        ]);

        $data = new DocVerification();
        $data->rid=$request->input('rid');
        $data->doc=$request->input('doc');
        $data->doctype=$request->input('doctype');
       
        

        if($request->file('doc')){
            $file= $request->file('doc');
            $filename=$file->getClientOriginalName();
            $file->move(public_path().'/Image/',$filename); 
            // $file-> move(public_path('public/Image'), $filename);
            $data['doc']= $filename;
    
        }
        $data->save();
        return redirect()->back();
    }
}
