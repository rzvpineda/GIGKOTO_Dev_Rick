<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\gigtalent;
use App\Models\gigtalentseeker;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function Login(Request $request){
        $this->validate($request, [
            'gtUsername' => 'required',
            'gtPassword' => 'required',
        ]);

        
        // if(!auth()->attempt($request->only('username', 'password'))){
        //     return back()->with('status', 'Invalid Login Credentials');
        // }

        //check db for the username
        $userInfo = gigtalent::where('Username', '=', $request->gtUsername)->first();
        //compares the located username with the password
        if(!$userInfo){
            // return back()->with('status', 'We do not recognize your email address');
            
            //gts check if no gt found--------------------------------------------------------------------------------
            $userInfogts = gigtalentseeker::where('Username', '=', $request->gtUsername)->first();
        
            if(!$userInfogts){
                // return back()->with('status', 'We do not recognize your email address');
                echo ('no username');
            }else{
                if(Hash::check($request->gtPassword, $userInfogts->Password)){
                    // $request->session()->put('LoggedUser', $userInfogts->Username);
                    $request->session()->put('LoggedUser', $userInfogts->ID);
                    $request->session()->put('AccountName', $userInfogts->CompanyName);
                    $request->session()->put('AccountAOE', $userInfogts->Industry);
                    $request->session()->put('AccountType', 'GTS');
                    return redirect()->route('dashboard');
                  
                }else{
                    
                    echo ('bad pw');
                }
            }
        }else{
            if(Hash::check($request->gtPassword, $userInfo->Password)){
                // $request->session()->put('LoggedUser', $userInfo->Username);
                $request->session()->put('LoggedUser', $userInfo->ID);
                $request->session()->put('AccountName', $userInfo->FirstName.' '.$userInfo->LastName);
                $request->session()->put('AccountAOE', $userInfo->AreaOfExpertise);
                $request->session()->put('AccountType', 'GT');
                return redirect()->route('dashboard');
               
            }else{
                
                
                //gts check if no gt found--------------------------------------------------------------------------------
                $userInfogts = gigtalentseeker::where('Username', '=', $request->gtUsername)->first();
        
                if(!$userInfogts){
                    
                    echo ('no username');
                }else{
                    if(Hash::check($request->gtPassword, $userInfogts->Password)){
                        // $request->session()->put('LoggedUser', $userInfogts->Username);
                        $request->session()->put('LoggedUser', $userInfogts->ID);
                        $request->session()->put('AccountName', $userInfogts->CompanyName);
                        $request->session()->put('AccountAOE', $userInfogts->Industry);
                        $request->session()->put('AccountType', 'GTS');
                        return redirect()->route('dashboard');
                        
                    }else{
                        
                        echo ('bad pw');
                    }
                }
            }
        }

        
    }
}
