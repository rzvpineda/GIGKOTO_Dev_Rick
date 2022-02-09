@extends('layout.appnav')
@section('content')

<script>
    $(document).ready(function(){
        
        $('#regComInfo').modal('toggle');
        
        $("#companyInfoNext").click(function(){
            $('#regComInfo').modal('toggle');
            $('#regSurvey').modal('toggle');
        });

        $("#surveyBack").click(function(){
            $('#regComInfo').modal('toggle');
            $('#regSurvey').modal('toggle');
        });

        $("#surveyNext").click(function(){
            $('#regCred').modal('toggle');
            $('#regSurvey').modal('toggle');
        });

        $("#credBack").click(function(){
            $('#regCred').modal('toggle');
            $('#regSurvey').modal('toggle');
        });

        

    });

</script>


<form action = "{{ route('gtsRegister') }}" method="POST">
    @csrf

    {{-- Company Info---------------------------------------------------------------------------------------- --}}
    <div role="dialog" tabindex="-1" class="modal fade show" id="regComInfo">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="padding-right: 50px;padding-left: 50px; max-height: calc(100vh - 210px);
                overflow-y: auto;">
                    <div style="text-align: center;margin-bottom: 10px;"><img src="../storage/img/logoblack.png" width="80px" /></div>
                    <h6 style="color: rgb(98,98,98);text-align: center;margin-bottom: 10px;">GIG TALENT-SEEKER(GTS) REGISTRATION FORM</h6>
                    <div style="text-align: center;margin-bottom: 20px;"><img src="storage/img/companyinfo.png" width="700px" /></div>
                    <div style="background: #FDC307;padding: 5px;padding-left: 9px;padding-bottom: 1px;margin-bottom: 20px;">
                        <h6 style="color: rgb(255,255,255);margin-bottom: 5px;">COMPANY INFORMATION</h6>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Company name</label><input type="text" name = "gtsCompanyName" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row">
                            <div class="col-md-8" style="padding-right: 2px;padding-left: 0px;"><label>Complete address</label><input type="text" name = "gtsCompanyAddress" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                            <div class="col-md-4" style="padding-left: 2px;padding-right: 0px;"><label>Office #</label><input type="text" name = "gtsOfficeNumber" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Industry</label><select name = "gtsIndustry" class="form-control">
                                    <option value="Administrative Virtual Assistant" selected>Administrative Virtual Assistant</option>
                                    <option value="Program or Project Coordination">Program or Project Coordination</option>
                                    <option value="IT/Tech Services">IT/Tech Services</option>
                                    <option value="Professional Services">Professional Services</option>
                                    <option value="Sales & Marketing">Sales &amp; Marketing</option>
                                </select></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Email address</label><input type="text" name = "gtsEmailAddress" class="form-control" style="height: 30px;margin-bottom: 5px;" placeholder="Enter a valid email address" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 30px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Billing details</label><input type="text" name = "gtsBillingDetails" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div style="background: #FDC307;padding: 5px;padding-left: 9px;padding-bottom: 1px;margin-bottom: 20px;">
                        <h6 style="color: rgb(255,255,255);margin-bottom: 5px;">COMPANY REPRESENTATIVE</h6>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Name</label><input type="text" name = "gtsCompanyRepName" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 70px;">
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 2px;padding-left: 0px;"><label>Phone number</label><input type="text" name = "gtsCompanyRepPhoneNumber" class="form-control" style="height: 30px;margin-bottom: 5px;" placeholder="Start with area code" /></div>
                            <div class="col-md-6" style="padding-left: 2px;padding-right: 0px;"><label>Email address</label><input type="text" name = "gtsCompanyRepEmailAddress" class="form-control" style="height: 30px;margin-bottom: 5px;" placeholder="Enter a valid email address" /></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between" style="text-align: center;margin-bottom: 30px;">
                    <button class="btn form-control" id="companyInfoNext" type="button" style="background: rgb(253,195,7);width: 162.1094px;color: rgb(255,255,255);">Next</button></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Survey---------------------------------------------------------------------------------------------- --}}
    <div role="dialog" tabindex="-1" class="modal fade" id="regSurvey">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="padding-right: 50px;padding-left: 50px;">
                    <div style="text-align: center;margin-bottom: 10px;"><img src="storage/img/logoblack.png" width="80px" /></div>
                    <h6 style="color: rgb(98,98,98);text-align: center;margin-bottom: 10px;">GIG TALENT-SEEKER(GTS) REGISTRATION FORM</h6>
                    <div style="text-align: center;margin-bottom: 20px;"><img src="storage/img/survey.png" width="700px" /></div>
                    <div style="background: #FDC307;padding: 5px;padding-left: 9px;padding-bottom: 1px;margin-bottom: 20px;">
                        <h6 style="color: rgb(255,255,255);margin-bottom: 5px;">SURVEY</h6>
                    </div>
                    <p style="color: rgb(156,156,156);font-size: 14PX;"><br />Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br /><br /></p>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Type of Gig Talent Needed</label><input type="text" name = "gtsS1" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Type of budget (Hourly rate per gig talent selected)</label><input type="text" name = "gtsS2" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">How often the gig talent services is required in a year&#39;s time</label><input type="text" name = "gtsS3" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between" style="text-align: center;margin-bottom: 30px;">
                        <button class="btn btn-dark form-control" id="surveyBack" type="button" style="width: 162.1094px;color: rgb(255,255,255);">Back</button>
                        <button class="btn form-control" id="surveyNext" type="button" style="background: rgb(253,195,7);width: 162.1094px;color: rgb(255,255,255);">Next</button></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Credentials----------------------------------------------------------------------------------------- --}}
    <div role="dialog" tabindex="-1" class="modal fade" id="regCred">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body" style="padding-right: 50px;padding-left: 50px;">
                    <div style="text-align: center;margin-bottom: 50px;"><img src="storage/img/logoblack.png" width="80px" /></div>
                    <div style="text-align: center;margin-bottom: 20px;">
                        <div style="height: 200px;background: url('storage/img/4565.jpg') center / cover no-repeat;width: 340px;margin: auto;"></div>
                    </div>
                    <h6 style="color: rgb(98,98,98);text-align: center;margin-bottom: 10px;">GIG TALENT(GT) LOGIN DETAILS</h6>
                    <p class="text-center" style="font-size: 12px;color: rgb(164,164,164);">We&#39;re almost there, setup your login details and let&#39;s get started</p>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Username</label><input type="text" name = "gtsUsername" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 2px;padding-left: 0px;"><label>Password</label><input type="password" name = "gtsPassword" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                            <div class="col-md-6" style="padding-left: 2px;padding-right: 0px;"><label>Confirm Password</label><input type="password" name = "gtsPassword_confirmation" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                            <small style="font-size: 12px;color: rgb(170,170,170);"><br /> Password should contain at least 8 alphanumeric characters<br /></small>
                        </div>
                    </div>
                    <div class="d-flex justify-content-xl-center" style="text-align: center;margin-bottom: 30px;margin-top: 35px;"><input type="checkbox" style="margin-right: 10px;margin-top: 3px;" />
                        <p style="color: rgb(128,128,128);font-size: 12px;">I agree to the Gigkoto Terms of Service and Privacy Policy</p>
                    </div>
                    <div class="d-flex justify-content-between" style="text-align: center;margin-bottom: 30px;">
                        <button class="btn btn-dark form-control" id="credBack" type="button" style="width: 162.1094px;color: rgb(255,255,255);">Back</button>
                        <button class="btn form-control" type="submit" style="background: rgb(253,195,7);width: 162.1094px;color: rgb(255,255,255);">Register</button></div>
                </div>
            </div>
        </div>
    </div>



</form>





    
@endsection