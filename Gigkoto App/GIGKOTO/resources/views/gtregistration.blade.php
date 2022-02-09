@extends('layout.appnav')
@section('content')

<script>
    $(document).ready(function(){
        var weCounter = 1;
        var spCounter = 1;
        var ebCounter = 1;
        var scCounter = 1;
        $('#regPersonalInfo').modal('toggle');
        
        $("#piNext").click(function(){
            $('#regPersonalInfo').modal('toggle');
            $('#regAreaOfExp').modal('toggle');
        });

        $("#aoeBack").click(function(){
            $('#regPersonalInfo').modal('toggle');
            $('#regAreaOfExp').modal('toggle');
        });

        $("#aoeNext").click(function(){
            $('#regWorkExp').modal('toggle');
            $('#regAreaOfExp').modal('toggle');
        });

        $("#weBack").click(function(){
            $('#regWorkExp').modal('toggle');
            $('#regAreaOfExp').modal('toggle');
        });

        $("#weNext").click(function(){
            $('#regWorkExp').modal('toggle');
            $('#regIntroVid').modal('toggle');
        });

        $("#ivBack").click(function(){
            $('#regWorkExp').modal('toggle');
            $('#regIntroVid').modal('toggle');
        });

        $("#ivNext").click(function(){
            $('#regIntroVid').modal('toggle');
            $('#regEduBg').modal('toggle');
        });

        $("#ebBack").click(function(){
            $('#regIntroVid').modal('toggle');
            $('#regEduBg').modal('toggle');
        });

        $("#ebNext").click(function(){
            $('#regCred').modal('toggle');
            $('#regEduBg').modal('toggle');
        });

        $("#credBack").click(function(){
            $('#regCred').modal('toggle');
            $('#regEduBg').modal('toggle');
        });

        // Dynamic Work Experience Counter --------------------------------------------------
        $("#weAdd").click(function(){
            // weCounter++;
            // $("#weContainer").append('<hr><span class="badge badge-pill badge-secondary">'+weCounter+'</span><div class="container" style="margin-bottom: 5px;"><div class="row" style="margin-bottom: 5px;"><div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Company</label><input type="text" id="company'+weCounter+'" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div></div></div><div class="container" style="margin-bottom: 5px;"><div class="row" style="margin-bottom: 5px;"><div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Country</label><input type="text" id="country'+weCounter+'" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div></div></div><div class="container" style="margin-bottom: 5px;"><div class="row"><div class="col-md-6" style="padding-right: 2px;padding-left: 0px;"><label>Date from</label><input id="datefrom'+weCounter+'" class="form-control" type="date" /></div><div class="col-md-6" style="padding-left: 2px;padding-right: 0px;"><label>Until</label><input id="until'+weCounter+'" class="form-control" type="date" /></div></div></div><div class="container" style="margin-bottom: 5px;"><div class="row" style="margin-bottom: 5px;"><div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Role</label><input type="text" id="role'+weCounter+'" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div></div></div><div class="container" style="margin-bottom: 5px;"><div class="row" style="margin-bottom: 5px;"><div class="col-md-12" style="margin-bottom: 30px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Achievements</label><input type="text" id="achievements'+weCounter+'" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div></div></div>');
            weCounter++;
            $("#weContainer").append('<hr><span class="badge badge-pill badge-secondary">'+weCounter+'</span><div class="container" style="margin-bottom: 5px;"><div class="row" style="margin-bottom: 5px;"><div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Company</label><input type="text" name="company[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div></div></div><div class="container" style="margin-bottom: 5px;"><div class="row" style="margin-bottom: 5px;"><div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Country</label><input type="text" name="country[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div></div></div><div class="container" style="margin-bottom: 5px;"><div class="row"><div class="col-md-6" style="padding-right: 2px;padding-left: 0px;"><label>Date from</label><input name="datefrom[]" class="form-control" type="date" /></div><div class="col-md-6" style="padding-left: 2px;padding-right: 0px;"><label>Until</label><input name="until[]" class="form-control" type="date" /></div></div></div><div class="container" style="margin-bottom: 5px;"><div class="row" style="margin-bottom: 5px;"><div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Role</label><input type="text" name="role[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div></div></div><div class="container" style="margin-bottom: 5px;"><div class="row" style="margin-bottom: 5px;"><div class="col-md-12" style="margin-bottom: 30px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Achievements</label><input type="text" name="achievements[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div></div></div>');
            
        });

        // Dynamic Sample Project -----------------------------------------------------------
        $("#spAdd").click(function(){
            spCounter++;
            // $("#spContainer").append('<input type="text" id="sp'+spCounter+'" class="form-control" style="height: 30px;margin-bottom: 5px;" />');
            $("#spContainer").append('<input type="text" name="sp[]" class="form-control" style="height: 30px;margin-bottom: 5px;" />');
            
        });

        // Dynamic Educational Background Counter --------------------------------------------------
        $("#ebAdd").click(function(){
            // ebCounter++;
            // $("#ebContainer").append('<hr><span class="badge badge-pill badge-secondary">'+ebCounter+'</span><div class="container" style="margin-bottom: 5px;"><div class="row" style="margin-bottom: 5px;"><div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Highest Qualification</label><input type="text" id="highestQualification'+ebCounter+'" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div></div></div><div class="container" style="margin-bottom: 5px;"><div class="row"><div class="col-md-6" style="padding-right: 2px;padding-left: 0px;"><label>Name of School</label><input type="text" id="nameOfSchool'+ebCounter+'" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div><div class="col-md-6" style="padding-left: 2px;padding-right: 0px;"><label>Date Graduated</label><input id="dateGraduated'+ebCounter+'" class="form-control" type="date" /></div></div></div><div class="container" style="margin-bottom: 35px;"><div class="row"><div class="col-md-6" style="padding-right: 2px;padding-left: 0px;"><label>Course</label><input type="text" id="course'+ebCounter+'" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div><div class="col-md-6" style="padding-left: 2px;padding-right: 0px;"><label>Specialization</label><input type="text" id="specialization'+ebCounter+'" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div></div></div>');
            ebCounter++;
            $("#ebContainer").append('<hr><span class="badge badge-pill badge-secondary">'+ebCounter+'</span><div class="container" style="margin-bottom: 5px;"><div class="row" style="margin-bottom: 5px;"><div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Highest Qualification</label><input type="text" name="highestQualification[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div></div></div><div class="container" style="margin-bottom: 5px;"><div class="row"><div class="col-md-6" style="padding-right: 2px;padding-left: 0px;"><label>Name of School</label><input type="text" name="nameOfSchool[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div><div class="col-md-6" style="padding-left: 2px;padding-right: 0px;"><label>Date Graduated</label><input name="dateGraduated[]" class="form-control" type="date" /></div></div></div><div class="container" style="margin-bottom: 35px;"><div class="row"><div class="col-md-6" style="padding-right: 2px;padding-left: 0px;"><label>Course</label><input type="text" name="course[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div><div class="col-md-6" style="padding-left: 2px;padding-right: 0px;"><label>Specialization</label><input type="text" name="specialization[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div></div></div>');
            
        });

        // Dynamic Short Course -----------------------------------------------------------
        $("#scAdd").click(function(){
            scCounter++;
            // $("#scContainer").append('<input type="text" id="sc'+scCounter+'" class="form-control" style="height: 30px;margin-bottom: 5px;" />');
            $("#scContainer").append('<input type="text" name="sc[]" class="form-control" style="height: 30px;margin-bottom: 5px;" />');
            
        });

        

    });


$('#gtregistration').submit(function() {
    // Work Experience to JSON-----------------------------------------
    let WorkExperienceList = [
            {
                "company": $("#company1").val(),
                "country": $("#country1").val(),
                "datefrom": $("#datefrom1").val(),
                "until": $("#until1").val(),
                "role": $("#role1").val(),
                "achievements": $("#achievements1").val()
            }
        ];
        if( weCounter >1 ){
            for (var weLooper = 2; weLooper <= weCounter; weLooper++){
                var obj = {
                        "company": $("#company"+weLooper+"").val(),
                        "country": $("#country"+weLooper+"").val(),
                        "datefrom": $("#datefrom"+weLooper+"").val(),
                        "until": $("#until"+weLooper+"").val(),
                        "role": $("#role"+weLooper+"").val(),
                        "achievements": $("#achievements"+weLooper+"").val()
                }
                WorkExperienceList.push(obj);
            }
        }
        $('#weJSON').val(JSON.stringify(WorkExperienceList));
        // $('#weJSON').val(WorkExperienceList.toString());
        alert($('#weJSON').val());

        // Sample Project to JSON-----------------------------------------
        let SampleProjectList = [
            {
                "SampleProject": $("#sp1").val(),
            }
        ];
        for (var spLooper = 2; spLooper <= spCounter; spLooper++){
            var obj = {
                    "SampleProject": $("#sp"+spLooper+"").val(),
            }
            SampleProjectList.push(obj);
        }
        $('#spJSON').val(JSON.stringify(SampleProjectList));
        console.log($("#spJSON").val());


        // Educational Background to JSON-----------------------------------------
        let EducationalBackgroundList = [
            {
                "highestQualification": $("#highestQualification1").val(),
                "nameOfSchool": $("#nameOfSchool1").val(),
                "dateGraduated": $("#dateGraduated1").val(),
                "course": $("#course1").val(),
                "specialization": $("#specialization1").val(),
                
            }
        ];
        for (var ebLooper = 2; ebLooper <= ebCounter; ebLooper++){
            var obj = {
                    "highestQualification": $("#highestQualification"+ebLooper+"").val(),
                    "nameOfSchool": $("#nameOfSchool"+ebLooper+"").val(),
                    "dateGraduated": $("#dateGraduated"+ebLooper+"").val(),
                    "course": $("#course"+ebLooper+"").val(),
                    "specialization": $("#specialization"+ebLooper+"").val(),
                    
            }
            EducationalBackgroundList.push(obj);
        }
        $('#ebJSON').val(JSON.stringify(EducationalBackgroundList));
        console.log($("#ebJSON").val());

        // Short Course to JSON--------------------------------------------------------
        let ShortCourseList = [
            {
                "ShortCourse": $("#sc1").val(),
            }
        ];
        for (var scLooper = 2; scLooper <= scCounter; scLooper++){
            var obj = {
                    "ShortCourse": $("#sc"+scLooper+"").val(),
            }
            ShortCourseList.push(obj);
        }
        $('#scJSON').val(JSON.stringify(ShortCourseList));
        console.log($("#scJSON").val());
    return true; 
});
</script>


<form action = "{{ route('gtRegister') }}" method="POST">
    @csrf
    <input type="hidden" id="weJSON" name="weJSON">
<input type="hidden" id="spJSON" name="spJSON">
<input type="hidden" id="ebJSON" name="ebJSON">
<input type="hidden" id="scJSON" name="scJSON">
{{-- Personal Information------------------------------------------------------------------------------------------------------------------- --}}
<div role="dialog" tabindex="-1" class="modal fade" id="regPersonalInfo" style="display: block;">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding-right: 50px;padding-left: 50px;">
                <div style="text-align: center;margin-bottom: 10px;"><img src="../storage/img/logoblack.png" width="80px" /></div>
                <h6 style="color: rgb(98,98,98);text-align: center;margin-bottom: 10px;">GIG TALENT(GT) REGISTRATION FORM</h6>
                <div style="text-align: center;margin-bottom: 20px;"><img src="storage/img/PersonalInfo.png" width="700px" /></div>
                <div style="background: #FDC307;padding: 5px;padding-left: 9px;padding-bottom: 1px;margin-bottom: 20px;">
                    <h6 style="color: rgb(255,255,255);margin-bottom: 5px;">USER INFORMATION</h6>
                </div>
                <div class="container" style="margin-bottom: 5px;">
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-md-6" style="margin-bottom: 5px;padding-right: 2px;padding-left: 0px;"><label style="margin-bottom: 5px;">First name</label><input type="text" name="gtFirstName" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        <div class="col-md-6" style="margin-bottom: 5px;padding-right: 0px;padding-left: 2px;"><label style="margin-bottom: 5px;">Last name</label><input type="text" name="gtLastName"class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                    </div>
                </div>
                <div class="container" style="margin-bottom: 5px;">
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-md-6" style="margin-bottom: 5px;padding-right: 2px;padding-left: 0px;"><label style="margin-bottom: 5px;">Age</label><input type="text" name="gtAge" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        <div class="col-md-6" style="margin-bottom: 5px;padding-right: 0px;padding-left: 2px;"><label style="margin-bottom: 5px;">Gender</label><select name="gtGender" class="form-control" style="height: 30px;font-size: 12px;">
                                <option value="Male" selected>Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select></div>
                    </div>
                </div>
                <div class="container" style="margin-bottom: 5px;">
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Complete address</label><input type="text" name="gtAddress" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                    </div>
                </div>
                <div class="container" style="margin-bottom: 70px;">
                    <div class="row">
                        <div class="col-md-6" style="padding-right: 2px;padding-left: 0px;"><label>Phone Number</label><input type="text" name="gtPhoneNumber" class="form-control" style="height: 30px;" placeholder="Start with area code" /></div>
                        <div class="col-md-6" style="padding-left: 2px;padding-right: 0px;"><label>Email address</label><input type="text" name="gtEmailAddress" class="form-control" style="height: 30px;" placeholder="Enter a valid email address" /></div>
                    </div>
                </div>
                <div style="text-align: center;margin-bottom: 30px;"><button class="btn form-control" id="piNext" type="button" style="background: rgb(253,195,7);width: 162.1094px;color: rgb(255,255,255);">Next</button></div>
            </div>
        </div>
    </div>
</div>


{{-- Area of Expertise---------------------------------------------------------------------------------------------------------------------- --}}
<div role="dialog" tabindex="-1" class="modal fade" id="regAreaOfExp">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding-right: 50px;padding-left: 50px;">
                <div style="text-align: center;margin-bottom: 10px;"><img src="storage/img/logoblack.png" width="80px" /></div>
                <h6 style="color: rgb(98,98,98);text-align: center;margin-bottom: 10px;">GIG TALENT(GT) REGISTRATION FORM</h6>
                <div style="text-align: center;margin-bottom: 20px;"><img src="storage/img/pref.png" width="700px" /></div>
                <div style="background: #FDC307;padding: 5px;padding-left: 9px;padding-bottom: 1px;margin-bottom: 20px;">
                    <h6 style="color: rgb(255,255,255);margin-bottom: 5px;">AREA OF EXPERTISE</h6>
                </div>
                <div class="container" style="margin-bottom: 60px;">
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Area of Expertise</label><select name="gtAreaOfExpertise" class="form-control">
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
                <div class="d-flex justify-content-between" style="text-align: center;margin-bottom: 30px;">
                    <button class="btn btn-dark form-control" id="aoeBack" type="button" style="width: 162.1094px;color: rgb(255,255,255);">Back</button>
                    <button class="btn form-control" id="aoeNext" type="button" style="background: rgb(253,195,7);width: 162.1094px;color: rgb(255,255,255);">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Work Experience--------------------------------------------------------------------------------------------------- --}}
<div class="modal fade" role="dialog" tabindex="-1" id="regWorkExp">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding-right: 50px;padding-left: 50px; max-height: calc(100vh - 210px);
            overflow-y: auto;">
                <div style="text-align: center;margin-bottom: 10px;"><img src="storage/img/logoblack.png" width="80px" /></div>
                <h6 style="color: rgb(98,98,98);text-align: center;margin-bottom: 10px;">GIG TALENT(GT) REGISTRATION FORM</h6>
                <div style="text-align: center;margin-bottom: 20px;"><img src="storage/img/workexperience.png" width="700px" /></div>
                <div style="background: #FDC307;padding: 5px;padding-left: 9px;padding-bottom: 1px;margin-bottom: 20px;">
                    <h6 style="color: rgb(255,255,255);margin-bottom: 5px;">A. WORK EXPERIENCE</h6>
                </div>
                <div id="weContainer">
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Company</label><input type="text" name="company[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Country</label><input type="text" name="country[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 2px;padding-left: 0px;"><label>Date from</label><input name="datefrom[]" class="form-control" type="date" /></div>
                            <div class="col-md-6" style="padding-left: 2px;padding-right: 0px;"><label>Until</label><input name="until[]" class="form-control" type="date" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Role</label><input name="role[]" type="text" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 30px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Achievements</label><input type="text" name="achievements[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex" style="margin-bottom: 30px;"><button class="btn form-control" id="weAdd" type="button" style="background: rgb(253,195,7);color: rgb(255,255,255);border-radius: 50%;width: 25px;height: 25px;font-size: 20px;padding-top: -25px;padding-right: 2px;padding-bottom: -4px;margin-right: 15px;"></button>
                    <h6 style="color: rgb(115,115,115);">Add another work experience</h6>
                </div>
                <hr style="margin-bottom: 30px;" />
                <div style="background: #FDC307;padding: 5px;padding-left: 9px;padding-bottom: 1px;margin-bottom: 20px;">
                    <h6 style="color: rgb(255,255,255);margin-bottom: 5px;">B. SAMPLE PROJECT</h6>
                </div>
                <div class="container" style="margin-bottom: 35px;">
                    <div class="row">
                        <div class="col-sm-11" style="padding-right: 2px;padding-left: 0px;"><label>Sample project (optional)</label>
                            <div id="spContainer">
                                <input type="text" name="sp[]" class="form-control" style="height: 30px;margin-bottom: 5px;" />
                            </div>
                            
                            <small style="color: rgb(163,163,163);">Add a link to your sample work and/or portfolio by typing or pasting in the given box above.<br />Click on the plus button to add another one.  </small></div>
                        <div class="col-sm-1" style="padding-left: 2px;padding-right: 0px;">
                            <div class="d-flex justify-content-center" style="height: 100%;width: 100%;padding-top: 35px;"><button id="spAdd" class="btn form-control" type="button" style="background: rgb(253,195,7);color: rgb(255,255,255);border-radius: 50%;width: 25px;height: 25px;font-size: 20px;padding-top: -25px;padding-right: 2px;padding-bottom: -4px;"></button></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between" style="text-align: center;margin-bottom: 30px;">
                    <button class="btn btn-dark form-control" id="weBack" type="button" style="width: 162.1094px;color: rgb(255,255,255);">Back</button>
                    <button class="btn form-control" id="weNext" type="button" style="background: rgb(253,195,7);width: 162.1094px;color: rgb(255,255,255);">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Intro Video------------------------------------------------------------------------------------------------------- --}}
<div role="dialog" tabindex="-1" class="modal fade" id="regIntroVid">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding-right: 50px;padding-left: 50px;">
                <div style="text-align: center;margin-bottom: 10px;"><img src="storage/img/logoblack.png" width="80px" /></div>
                <h6 style="color: rgb(98,98,98);text-align: center;margin-bottom: 10px;">GIG TALENT(GT) REGISTRATION FORM</h6>
                <div style="text-align: center;margin-bottom: 20px;"><img src="storage/img/workexperience.png" width="700px" /></div>
                <div style="background: #FDC307;padding: 5px;padding-left: 9px;padding-bottom: 1px;margin-bottom: 20px;">
                    <h6 style="color: rgb(255,255,255);margin-bottom: 5px;">C. INTRODUCTORY VIDEO</h6>
                </div>
                <div style="margin-bottom: 70px;"><label>Introductory Video (optional)</label><small style="color: rgb(163,163,163);"><br />Add a link to your 30-second video (preferably on youtube) introducing yourself and describing your previous work and achievements.<br />Be yourself and have fun. Good luck!  </small>
                    <input type="text" class="form-control" name = "gtIntroVid" />
                    {{-- <div class="form-group files color"><input type="file" multiple name="files" /></div> --}}
                </div>
                <div class="d-flex justify-content-between" style="text-align: center;margin-bottom: 30px;">
                    <button class="btn btn-dark form-control" id="ivBack" type="button" style="width: 162.1094px;color: rgb(255,255,255);">Back</button>
                    <button class="btn form-control" id="ivNext" type="button" style="background: rgb(253,195,7);width: 162.1094px;color: rgb(255,255,255);">Next</button></div>
            </div>
        </div>
    </div>
</div>


{{-- Educational Background----------------------------------------------------------------------------------------- --}}
<div role="dialog" tabindex="-1" class="modal fade" id="regEduBg">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body" style="padding-right: 50px;padding-left: 50px; max-height: calc(100vh - 210px);
            overflow-y: auto;">
                <div style="text-align: center;margin-bottom: 10px;"><img src="storage/img/logoblack.png" width="80px" /></div>
                <h6 style="color: rgb(98,98,98);text-align: center;margin-bottom: 10px;">GIG TALENT(GT) REGISTRATION FORM</h6>
                <div style="text-align: center;margin-bottom: 20px;"><img src="storage/img/educationalbackground.png" width="700px" /></div>
                <div style="background: #FDC307;padding: 5px;padding-left: 9px;padding-bottom: 1px;margin-bottom: 20px;">
                    <h6 style="color: rgb(255,255,255);margin-bottom: 5px;">EDUCATIONAL BACKGROUND</h6>
                </div>
                <div id = "ebContainer">
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row" style="margin-bottom: 5px;">
                            <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Highest Qualification</label><input type="text" name="highestQualification[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 5px;">
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 2px;padding-left: 0px;"><label>Name of School</label><input type="text" name="nameOfSchool[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                            <div class="col-md-6" style="padding-left: 2px;padding-right: 0px;"><label>Date Graduated</label><input name="dateGraduated[]" class="form-control" type="date" /></div>
                        </div>
                    </div>
                    <div class="container" style="margin-bottom: 35px;">
                        <div class="row">
                            <div class="col-md-6" style="padding-right: 2px;padding-left: 0px;"><label>Course</label><input type="text" name="course[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                            <div class="col-md-6" style="padding-left: 2px;padding-right: 0px;"><label>Specialization</label><input type="text" name="specialization[]" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        </div>
                    </div>
                </div>
                
                <div class="d-flex" style="margin-bottom: 30px;"><button id = "ebAdd" class="btn form-control" type="button" style="background: rgb(253,195,7);color: rgb(255,255,255);border-radius: 50%;width: 25px;height: 25px;font-size: 20px;padding-top: -25px;padding-right: 2px;padding-bottom: -4px;margin-right: 15px;"></button>
                    <h6 style="color: rgb(115,115,115);">Add another Qualification (optional)</h6>
                </div>
                <hr style="margin-bottom: 30px;" />
                <div class="container" style="margin-bottom: 70px;">
                    <div class="row">
                        <div class="col-sm-11" style="padding-right: 2px;padding-left: 0px;"><label>Add other short course relevant to your area of expertise (optional)</label>
                            <div id="scContainer">
                            <input type="text" name="sc[]" class="form-control" style="height: 30px;margin-bottom: 5px;" />
                            </div>
                            <small style="color: rgb(163,163,163);">Click on the plus button to add another one.  </small></div>
                        <div class="col-sm-1" style="padding-left: 2px;padding-right: 0px;">
                            <div class="d-flex justify-content-center" style="height: 100%;width: 100%;padding-top: 35px;"><button id="scAdd" class="btn form-control" type="button" style="background: rgb(253,195,7);color: rgb(255,255,255);border-radius: 50%;width: 25px;height: 25px;font-size: 20px;padding-top: -25px;padding-right: 2px;padding-bottom: -4px;"></button></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between" style="text-align: center;margin-bottom: 30px;">
                    <button class="btn btn-dark form-control" id="ebBack" type="button" style="width: 162.1094px;color: rgb(255,255,255);">Back</button>
                    <button class="btn form-control" type="button" id = "ebNext" style="background: rgb(253,195,7);width: 162.1094px;color: rgb(255,255,255);">Next</button></div>
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
                        <div class="col-md-12" style="margin-bottom: 5px;padding-right: 0px;padding-left: 0px;"><label style="margin-bottom: 5px;">Username</label><input type="text" name = "gtUsername" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                    </div>
                </div>
                <div class="container" style="margin-bottom: 5px;">
                    <div class="row">
                        <div class="col-md-6" style="padding-right: 2px;padding-left: 0px;"><label>Password</label><input type="password" name = "gtPassword" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
                        <div class="col-md-6" style="padding-left: 2px;padding-right: 0px;"><label>Confirm Password</label><input type="password" name = "gtPassword_confirmation" class="form-control" style="height: 30px;margin-bottom: 5px;" /></div>
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