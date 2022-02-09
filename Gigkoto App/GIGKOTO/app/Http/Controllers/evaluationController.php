<?php

namespace App\Http\Controllers;

use App\Models\applicants;
use App\Models\gigtalent;
use App\Models\jobposting;
use Illuminate\Http\Request;


class evaluationController extends Controller
{
    public function index(Request $request, $jID){
        
        $request->session()->put('jobselected', $jID);

        $job = jobposting::where('ID', '=', session('jobselected'))->first();
        if($job->ApplicationStatus == "application"){
            return ('application');
        }elseif($job->ApplicationStatus == "ongoing"){
            $applicant = gigtalent::where('ID', '=', $job->HiredGT)->first();
            return view('jobsummary', [
                'applicant'=> $applicant,
                'job'=>$job,
            ]);
        }elseif($job->ApplicationStatus == "selection"){
            $applicants = applicants::where('JobCode', '=', session('jobselected'))
            ->where(function($q){
                $q->where('Status', '=', 'sl')->orWhere('Status', '=', 'kov')->orWhere('Status', '=', 'fi');
            })
            ->get();

            return view('evaluation', [
                'applicants'=> $applicants,
                'job'=>$job,
            ]);
        }
        
        
    }

    public function update(){
        $ID = $_GET['ID'];
        $status = $_GET['status'];
        $Job = $_GET['Job'];

        $updaterec = applicants::where([
            ['Applicant', "=", $ID],
            ['JobCode', "=", $Job],
         ])
        ->update([
            'Status'     => $status
        ]);
        return ($ID.$status.$Job);
        
    }

    public function refreshHighlight(){
        $ID = $_GET['ID'];
        $applicant = gigtalent::where('ID', '=', $ID)->get();
        // foreach ($applicant as $applicant){
        //     $req =  $applicant->requirements;
        //     $req = json_decode($req, true);
        //     foreach ($req as $req){
        //         echo nl2br($req['requirements']."\n");
                
        //     }
        // }
        return $applicant;  
    }

    public function gtsjoblist(){
        $job = jobposting::where('CompanyID', '=', session('LoggedUser'))->get();
        return view('gtsjoblist',[
            'job'=>$job,
        ]);
    }
}
