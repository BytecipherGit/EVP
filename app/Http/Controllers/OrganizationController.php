<?php

namespace App\Http\Controllers;
use App\Models\CompanyReg;
use Illuminate\Http\Request;
use DB;

class OrganizationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
  //  public function getOrganization(){
  //     return view('superadmin/organization');
  // }

    public function getIndividual(){
        return view('superadmin/individual-user');
    }


    public function index()
        {
        $data['countries'] = Country::get(["name", "id"]);
        return view('welcome', $data);
    }
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
  
  public function getOrganization(Request $request){
    $employees=CompanyReg::paginate('5');
    // if($request->keyword != ''){
    //   $employees = CompanyReg::where('oname','LIKE','%'.$request->keyword.'%')->get();
    //   }
      // return response()->back(['employees' => $employees]);
      return view('superadmin/organization',compact('employees'));
  }

  public function getDetails($id){
    $details=CompanyReg::findOrFail($id);
   /* $details = DB::table('company_regs')
            ->join('cities','company_regs.city', '=','cities.id')
            ->join('states','company_regs.state', '=','states.id')
            ->select('company_regs.*','cities.*','states.*')->where('company_regs.id',$id)
            ->get();*/

            // echo'<pre>';
            // print_r($details->cities); die();
    return view('superadmin/organization-details',compact('details'));
  }
}
