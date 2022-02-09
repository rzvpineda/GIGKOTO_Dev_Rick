<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jobposting;
use App\Models\applicants;

class joblistController extends Controller
{
    public function index(){

        $joblist = jobposting::all();
        return view('joblist', [
            'joblist'=>$joblist,
        ]);

       

    }

    public function refresh(){
        return 'hahahahahahahahahahha';
    }

    public function jobitemrefresh(){
        $ID = $_POST['ID'];
        $jobApp = jobposting::where('ID', '=', $ID)->get();
        // foreach ($jobApp as $jobApp){
        //     $req =  $jobApp->requirements;
        //     $req = json_decode($req, true);
        //     foreach ($req as $req){
        //         echo nl2br($req['requirements']."\n");
                
        //     }
        // }
        return $jobApp;

    }

    public function apply(Request $request){
        $application = new applicants;
        $application->Applicant = $request->Applicant;
        $application->JobCode = $request->Job;
        $application->CompanyID = $request->CompanyID;
        $application->Status = 'sl';

        $application->save();
        $save = $application->save();

        if($save){
            return redirect ('home');
        }else{
        
            return redirect ('home');
        }
    }
}
