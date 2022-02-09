<?php

namespace App\Http\Controllers;

use App\Models\gigtalent;
use App\Models\gigtalentseeker;
use App\Models\applicants;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){

        if (session('AccountType') == 'GTS'){
            $data = ['LoggedUserInfo' => gigtalentseeker::where('ID', '=', session('LoggedUser'))->first()];
            $jobApp = applicants::where('CompanyID', '=', session('LoggedUser'))->get();
            return view('dashboard2', [
                $data,
                'jobApp'=>$jobApp,
            ]);
        }else{
            $data = ['LoggedUserInfo' => gigtalent::where('ID', '=', session('LoggedUser'))->first()];
       
        
            $jobApp = applicants::where('Applicant', '=', session('LoggedUser'))->get();
            return view('dashboard', [
                $data,
                'jobApp'=>$jobApp,
            ]);
            // return session('LoggedUser');
            // return $jobApp;
        }
        
    }

    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            session()->pull('AccountType');
            return redirect('/login');
        }
    }
}
