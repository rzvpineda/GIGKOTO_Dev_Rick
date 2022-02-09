<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jobposting;
use App\Models\gigtalentseeker;

class JobPostingController extends Controller
{
    public function index(){
        if (session('AccountType') == "GTS"){
            $GTS = gigtalentseeker::where('ID', '=', session('LoggedUser'))->get();
            return view('jobposting',[
                'GTS'=>$GTS,
            ]);
        }else{
            return view('dashboard');

        }
        
    }

    public function store(Request $request){
       
        $msArray = array();
        for ($msLooper = 0; $msLooper < count($request->milestone); $msLooper++){
            $myObj1=new \stdClass();

            if (is_null($request->milestone[$msLooper])){
                $myObj1->milestone = "N/A";
            }else{
                $myObj1->milestone = $request->milestone[$msLooper];
            }

            if (is_null($request->milestonedate[$msLooper])){
                $myObj1->milestonedate = "N/A";
            }else{
                $myObj1->milestonedate = $request->milestonedate[$msLooper];
            }

            array_push($msArray, $myObj1);
        }

        $reqArray = array();
        for ($reqLooper = 0; $reqLooper < count($request->requirements); $reqLooper++){
            $myObj2=new \stdClass();

            if (is_null($request->requirements[$reqLooper])){
                $myObj2->requirements = "N/A";
            }else{
                $myObj2->requirements = $request->requirements[$reqLooper];
            }

            array_push($reqArray, $myObj2);
        }

        
        $user = new jobposting;
        // $user->JobTitle = $request->JobTitle;
        $user->AreaOfExpertise = $request->AreaOfExpertise;
        // $user->JobCode = $request->JobCode;
        $user->CompanyID = $request->CompanyID;
        $user->CompanyName = $request->CompanyName;
        $user->CompanyAbout = $request->CompanyAbout;
        $user->Description = $request->Description;
        $user->ProposedSalary = $request->ProposedSalary;
        $user->ApplicationStatus = 'selection';

        $user->requirements = json_encode($reqArray);
        $user->milestone = json_encode($msArray);
        // $user->PASSWORD = Hash::make($request->registrationpassword);
        $user->save();
        $save = $user->save();

        if($save){
            // return redirect()->route('dashboard');
            // return back()->with('success', 'Congratulations, you have successfully created an account');
            return redirect ('login');
        }else{
            // return back()->with('fail', 'Something went wrong, try again');
            return redirect ('login');
        }
        
        

        

        
        
        // foreach ($weArray as $value) {
        //     echo "$value <br>";
        //   }
        print_r($weArray);
        
        

    }
}
