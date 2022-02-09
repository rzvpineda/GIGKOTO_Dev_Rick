<?php

namespace App\Http\Controllers;

use App\Models\applicants;
use App\Models\gigtalent;
use App\Models\jobposting;
use Illuminate\Http\Request;
use PDF;

class jobsummaryController extends Controller
{
    public function pdfread(){
        
    }
    public function index(Request $request){
        $ID = $_POST['selectedGT'];
        $updaterec = jobposting::where('ID', "=", session('jobselected'))
        ->update([
            'HiredGT'     => $ID,
            'ApplicationStatus'     => 'ongoing'
        ]);
        $job = jobposting::where('ID', '=', session('jobselected'))->first();
        $applicant = gigtalent::where('ID', '=', $job->HiredGT)->first();
        return view('jobsummary', [
            'applicant'=> $applicant,
            'job'=>$job,
        ]);
    }

    function pdf(){
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->contractGenerate());
        return $pdf->stream();
        // $pdf = PDF::loadView('contractpage');
        // return $pdf->stream();
        
        // $pdf = PDF::loadView('login');
        // return $pdf->stream();
    }

    public function contractGenerate(){
        $output = '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <div style = "font size: 13px; font-family: Segeo UI">
        <div class="d-flex justify-content-between align-items-xl-center" style="background: rgba(255,227,83,0);"><img src="storage/img/gigkoto res/logoblack.png" height="120px" />
            <div class="text-right">
                <p style="font-weight: bold;margin-bottom: 0px; font-size: 12px;">GIGKOTO TALENT AND TECHNOLOGY SOLUTIONS PTE. LTD<br /></p><small>JANUARY 05, 2022</small>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-xl-center" style="background: rgba(255,227,83,0);">
            <p class="text-left" style="font-weight: normal;text-align: right;"><br />(303) 657-5441<br />8829 Winona Ct<br />Westminster, Colorado(CO), 80031<br /><br />GDS Link Asia<br />Company ID: 00001</p>
            <p style="font-weight: normal;text-align: right;"><br />(304) 442-8155<br />249 Rr 1<br />West Union, West Virginia(WV), 26456<br /><br />JACOB ANDERSON<br />Talent ID: 00001</p>
        </div>
        <div>
            <h6 class="text-center" style="margin-top: -100px; margin-bottom: 10px;">JOB AGREEMENT</h6>
            <h6 class="text-left">Job Details</h6>
            <p style="text-align: justify;">            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.<br /></p>
            <ul>
                <li style="font-weight: normal;">Project Description. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.<br /><br /></li>
                <li style="font-weight: normal;">Requirements.  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.<br /><br /></li>
                <li style="font-weight: normal;">Milestone. Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.<br /><br /></li>
                <li style="font-weight: normal;">Gig Talent.  Dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.<br /><br /></li>
            </ul>
            <h6 class="text-left">Compensation</h6>
            <p style="text-align: justify;">            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.<br /></p>
            <h6 class="text-left">Project Completion</h6>
            <p style="text-align: justify;">            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est.<br /></p>
            <h6 class="text-left">Breach of Contract</h6>
            <p style="text-align: justify;">            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est.<br /></p>
        </div>
        <div class="d-flex justify-content-between align-items-xl-center" style="background: rgba(255,227,83,0);margin-top: 80px;margin-bottom: 80px;">
            <div style = "float: left;">
                <p class="text-center" style="text-align: center;font-style: normal;color: rgb(47,47,47);margin-bottom: 5px;font-weight: bold;">GDS LINK ASIA</p>
                <hr style="margin-bottom: 0px;height: 1px;border: none;color: #333;background-color: #333;margin-top: 0px;" />
                <p class="text-left" style="text-align: right;font-style: italic; font-size: 10px; color: rgb(133,133,133);">Signature of GigTalent-Seeker Representative over name and date</p>
            </div>
            <div style = "float: right;">
                <p class="text-center" style="text-align: center;font-style: normal;color: rgb(47,47,47);margin-bottom: 5px;font-weight: bold;">JACOB ANDERSON</p>
                <hr style="margin-bottom: 0px;height: 1px;border: none;color: #333;background-color: #333;margin-top: 0px;" />
                <p class="text-left" style="text-align: right;font-style: italic; font-size: 10px; color: rgb(133,133,133);">Signature of GigTalent over name and date</p>
            </div>
        </div>
    </div>';

    return $output;
    }
}
