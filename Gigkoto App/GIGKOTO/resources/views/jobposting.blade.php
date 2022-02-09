@extends('layout.appnav')
@section('content')

<script>
    $(document).ready(function(){
        var reqCounter = 1;
        var milestoneCounter = 1;
        $('#jobpostingmodal').modal('toggle');
    
        $("#reqAdd").click(function(){
                reqCounter++;
                // $("#spContainer").append('<input type="text" id="sp'+spCounter+'" class="form-control" style="height: 30px;margin-bottom: 5px;" />');
                $("#reqCon").append('<input type="text" name = "requirements[]" class="form-control" style="height: 30px;margin-bottom: 5px;" />');
                
        });

        $("#milestoneAdd").click(function(){
                milestoneCounter++;
                // $("#spContainer").append('<input type="text" id="sp'+spCounter+'" class="form-control" style="height: 30px;margin-bottom: 5px;" />');
                $("#milestoneCon").append('<div class="row"><div class="col-md-8" style="padding-right: 2px;padding-left: 0px;"><label>Milestone</label><input type="text" class="form-control" name = "milestone[]" style="height: 30px;margin-bottom: 5px;" /></div><div class="col-md-4" style="padding-left: 2px;padding-right: 0px;"><label>Date and Time</label><input class="form-control" name = "milestonedate[]" type="date" /></div></div>');
                
        });


    });

</script>
<form action = "{{ route('jobpost') }}" method="POST">
    @csrf

    
    <div role="dialog" tabindex="-1" class="modal fade show" id = "jobpostingmodal">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="padding-right: 50px;padding-left: 50px;">
                    <div style="text-align: center;margin-bottom: 10px;"><img src="../storage/img/logoblack.png" width="80px" /></div>
                    <h6 style="color: rgb(98,98,98);text-align: center;margin-bottom: 30px;">JOB POSTING FORM</h6>
                    <div style="background: #FDC307;padding: 5px;padding-left: 9px;padding-bottom: 1px;margin-bottom: 20px;">
                        <h6 style="color: rgb(255,255,255);margin-bottom: 5px;">A. JOB DETAILS</h6>
                    </div>
                    <input type = "hidden" name = "CompanyID" value = "{{ $GTS[0]->ID }}">
                    <input type = "hidden" name = "CompanyName" value = "{{ $GTS[0]->CompanyName }}">
                    {{-- <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 2px;padding-left: 0px;"><label style="margin-bottom: 5px;">Job Title</label><input type="text" class="form-control" name = "JobTitle" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div> --}}
                    <div class="container">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Job Title</label><select class="form-control" name = "AreaOfExpertise">
                                {{-- <option value="AVS">Administrative Virtual Assistant</option>
                                <option value="PC">Program Coordination</option>
                                <option value="IS">IT/Tech Services</option>
                                <option value="PS">Professional Services</option> --}}
                                    <optgroup label="Administrative Virtual Assistant">
                                        <option value="General Admin VA">General Admin VA</option>
                                        <option value="Personal Assistant VA">Personal Assistant VA</option>
                                        <option value="Data Entry Encoder">Data Entry Encoder</option>
                                        <option value="Appointment Setters">Appointment Setters</option>
                                    </optgroup>
                                    <optgroup label="Program Coordination">
                                        <option value="Virtual Event Producer">Virtual Event Producer</option>
                                        <option value="Virtual Project Coordinator">Virtual Project Coordinator</option>
                                        <option value="Project Manager">Project Manager</option>
                                    </optgroup>
                                    <optgroup label="IT/Tech Services">
                                        <option value="Programmer">Programmer</option>
                                        <option value="Web Application Developer">Web Application Developer</option>
                                        <option value="Mobile Application Developer">Mobile Application Developer</option>
                                        <option value="Web Designer">Web Designer</option>
                                        <option value="SEO Strategist">SEO Strategist</option>
                                        <option value="SEM Strategist">SEM Strategist</option>
                                        <option value="Fullstack Developer">Fullstack Developer</option>
                                    </optgroup>
                                    <optgroup label="Professional Services">
                                        <option value="Lawyer">Lawyer</option>
                                        <option value="Accountant">Accountant</option>
                                        <option value="Change Transformation Consultant">Change Transformation Consultant</option>
                                        <option value="Executive Coach">Executive Coach</option>
                                        <option value="Speaker (SME)">Speaker (SME)</option>
                                        <option value="Digital Transformation Consultant">Digital Transformation Consultant</option>
                                    </optgroup>
                                    <optgroup label="Sales &amp; Marketing">
                                        <option value="Graphics Designer">Graphics Designer</option>
                                        <option value="Video Animator">Video Animator</option>
                                        <option value="Telemarketer">Telemarketer</option>
                                        <option value="Content Creator">Content Creator</option>
                                        <option value="Copywriter/Proofreader">Copywriter/Proofreader</option>
                                        <option value="Social Media Manager">Social Media Manager</option>
                                        <option value="E-Commerce Promoters/Sellers">E-Commerce Promoters/Sellers</option>
                                    </optgroup>
                                </select></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 2px;padding-left: 0px;"><label style="margin-bottom: 5px;">About the Company</label><input type="text" class="form-control" name = "CompanyAbout" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 2px;padding-left: 0px;"><label style="margin-bottom: 5px;">Description of the role</label><textarea class="form-control-sm form-control" name = "Description" placeholder="Write a brief description of the job" rows="10"></textarea></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 35px;">
                        <div class="row">
                            <div class="col-md-12" style="padding-right: 2px;padding-left: 0px;"><label>Proposed Salary</label><input type="text" name = "ProposedSalary" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 25px;">
                        <div class="row">
                            <div class="col-sm-11" style="padding-right: 2px;padding-left: 0px;">
                                <label>Requirements</label>
                                <div  id = "reqCon">
                                    <input type="text" class="form-control" name = "requirements[]" style="height: 30px;margin-bottom: 5px;" />
                                </div>
                                <small style="color: rgb(163,163,163);">Click on the plus button to add another one.  </small>
                            </div>
                            <div class="col-sm-1" style="padding-left: 2px;padding-right: 0px;">
                                <div class="d-flex justify-content-center" style="height: 100%;width: 100%;padding-top: 35px;"><button class="btn form-control" id = "reqAdd" type="button" style="background: rgb(253,195,7);color: rgb(255,255,255);border-radius: 50%;width: 25px;height: 25px;font-size: 20px;padding-top: -25px;padding-right: 2px;padding-bottom: -4px;"></button></div>
                            </div>
                        </div>
                    </div>
                    <div style="background: #FDC307;padding: 5px;padding-left: 9px;padding-bottom: 1px;margin-bottom: 20px;">
                        <h6 style="color: rgb(255,255,255);margin-bottom: 5px;">B. PROJECT TIMELINE</h6>
                    </div>
                    <div class="container" id = "milestoneCon" style="margin-bottom: 35px;">
                        <div class="row">
                            <div class="col-md-8" style="padding-right: 2px;padding-left: 0px;"><label>Milestone</label><input type="text" class="form-control" name = "milestone[]" style="height: 30px;margin-bottom: 5px;" /></div>
                            <div class="col-md-4" style="padding-left: 2px;padding-right: 0px;"><label>Date and Time</label><input class="form-control" name = "milestonedate[]" type="date" /></div>
                        </div>
                    </div>
                    <div class="d-flex" style="margin-bottom: 30px;"><button class="btn form-control" type="button" id = "milestoneAdd" style="background: rgb(253,195,7);color: rgb(255,255,255);border-radius: 50%;width: 25px;height: 25px;font-size: 20px;padding-top: -25px;padding-right: 2px;padding-bottom: -4px;margin-right: 15px;"></button>
                        <h6 style="color: rgb(115,115,115);">Add another Milestone</h6>
                    </div>
                    <div style="text-align: center;margin-bottom: 30px;"><button class="btn form-control" type="submit" style="background: rgb(253,195,7);width: 162.1094px;color: rgb(255,255,255);">Post</button></div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection