<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gigtalent;
use Illuminate\Support\Facades\Hash;


class gigtalentRegistrationController extends Controller
{
    public function index(){
        
        return view('gtregistration');
    }

    public function store(Request $request){
       

        $weArray = array();
        for ($weLooper = 0; $weLooper < count($request->company); $weLooper++){
            $myObj=new \stdClass();

            if (is_null($request->company[$weLooper])){
                $myObj->company = "N/A";
            }else{
                $myObj->company = $request->company[$weLooper];
            }

            if (is_null($request->country[$weLooper])){
                $myObj->country = "N/A";
            }else{
                $myObj->country = $request->country[$weLooper];
            }

            if (is_null($request->datefrom[$weLooper])){
                $myObj->datefrom = "N/A";
            }else{
                $myObj->datefrom = $request->datefrom[$weLooper];
            }

            if (is_null($request->until[$weLooper])){
                $myObj->until = "N/A";
            }else{
                $myObj->until = $request->until[$weLooper];
            }

            if (is_null($request->role[$weLooper])){
                $myObj->role = "N/A";
            }else{
                $myObj->role = $request->role[$weLooper];
            }

            if (is_null($request->achievements[$weLooper])){
                $myObj->achievements = "N/A";
            }else{
                $myObj->achievements = $request->achievements[$weLooper];
            }
            array_push($weArray, $myObj);
        }

        $spArray = array();
        for ($spLooper = 0; $spLooper < count($request->sp); $spLooper++){
            $myObj12=new \stdClass();

            if (is_null($request->sp[$spLooper])){
                $myObj12->sp = "N/A";
            }else{
                $myObj12->sp = $request->sp[$spLooper];
            }

            array_push($spArray, $myObj12);
        }

        $ebArray = array();
        for ($ebLooper = 0; $ebLooper < count($request->highestQualification); $ebLooper++){
            $myObj2=new \stdClass();

            if (is_null($request->highestQualification[$ebLooper])){
                $myObj2->highestQualification = "N/A";
            }else{
                $myObj2->highestQualification = $request->highestQualification[$ebLooper];
            }

            if (is_null($request->nameOfSchool[$ebLooper])){
                $myObj2->nameOfSchool = "N/A";
            }else{
                $myObj2->nameOfSchool = $request->nameOfSchool[$ebLooper];
            }

            if (is_null($request->dateGraduated[$ebLooper])){
                $myObj2->dateGraduated = "N/A";
            }else{
                $myObj2->dateGraduated = $request->dateGraduated[$ebLooper];
            }

            if (is_null($request->course[$ebLooper])){
                $myObj2->course = "N/A";
            }else{
                $myObj2->course = $request->course[$ebLooper];
            }

            if (is_null($request->specialization[$ebLooper])){
                $myObj2->specialization = "N/A";
            }else{
                $myObj2->specialization = $request->specialization[$ebLooper];
            }

            array_push($ebArray, $myObj2);
        }

        $scArray = array();
        for ($scLooper = 0; $scLooper < count($request->sc); $scLooper++){
            $myObj22=new \stdClass();

            if (is_null($request->sc[$scLooper])){
                $myObj22->sc = "N/A";
            }else{
                $myObj22->sc = $request->sc[$scLooper];
            }

            array_push($scArray, $myObj22);
        }

        $this->validate($request, [
            'gtUsername' => 'required|max:255',
            'gtPassword' => 'required|confirmed',
        ]);

        // $name = $request->fname." ".$request->lname;

        // User::create([
        //     'Name' => $name,
        //     'Birthdate' => $request->bday,
        //     'Email' => $request->email,
        //     'PhoneNumber' => $request->phonenumber,
        //     'Username' => $request->registration_username,
        //     'registrationpassword' => Hash::make($request->registrationpassword),
        // ]);

        
        // auth()->attempt($request->only('registration_username', 'registrationpassword'));
        
        $user = new gigtalent;
        $user->Username = $request->gtUsername;
        $user->Password = Hash::make($request->gtPassword);
        $user->FirstName = $request->gtFirstName;
        $user->LastName = $request->gtLastName;
        $user->Age = $request->gtAge;
        $user->Gender = $request->gtGender;
        $user->CompleteAddress = $request->gtAddress;
        $user->PhoneNumber = $request->gtPhoneNumber;
        $user->EmailAddress = $request->gtEmailAddress;
        $user->AreaOfExpertise = $request->gtAreaOfExpertise;
        $user->IntroVideo = $request->gtIntroVid;
        $user->WorkExperience = json_encode($weArray);
        $user->SampleProject = json_encode($spArray);
        $user->EducationalBackground = json_encode($ebArray);
        $user->ShortCourses = json_encode($scArray);

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
