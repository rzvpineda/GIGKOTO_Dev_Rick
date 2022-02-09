<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gigtalentseeker;
use Illuminate\Support\Facades\Hash;

class gigtalentseekerRegistrationController extends Controller
{
    public function index(){
        
        return view('gtsregistration');
    }

    public function store(Request $request){
        
        $this->validate($request, [
            'gtsUsername' => 'required|max:255',
            'gtsPassword' => 'required|confirmed',
        ]);

        $user = new gigtalentseeker;
        $user->Username = $request->gtsUsername;
        $user->Password = Hash::make($request->gtsPassword);
        $user->CompanyName = $request->gtsCompanyName;
        $user->CompanyAddress = $request->gtsCompanyAddress;
        $user->OfficeNumber = $request->gtsOfficeNumber;
        $user->Industry = $request->gtsIndustry;
        $user->EmailAddress = $request->gtsEmailAddress;
        $user->BillingDetails = $request->gtsBillingDetails;
        $user->CompanyRepName = $request->gtsCompanyRepName;
        $user->CompanyRepPhoneNumber = $request->gtsCompanyRepPhoneNumber;
        $user->CompanyRepEmailAddress = $request->gtsCompanyRepEmailAddress;
        $user->s1 = $request->gtsS1;
        $user->s2 = $request->gtsS2;
        $user->s3 = $request->gtsS3;

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

    }
}
