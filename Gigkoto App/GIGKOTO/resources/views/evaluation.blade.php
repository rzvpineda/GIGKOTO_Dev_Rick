@extends('layout.appnavwithsidebar')
@section('content')

<script>
    document.body.style.backgroundColor = "rgb(248,248,248)";
    var currentDrag;
    function allowDrop(ev) {
      ev.preventDefault();
    }
    
    function drag(ev) {
        currentDrag = ev.target.id;
        ev.dataTransfer.setData("text", ev.target.id);

    }
    
    function drop(ev) {
    
      ev.preventDefault();
      var data = ev.dataTransfer.getData("text");
    
        $('#applicantProf').hide();
        $('#startingMsg').show();
      var typeis = ev.target.id;
      var status = "none";

      if(typeis == "e1" || typeis == "e2" || typeis == "e3"){
          if(typeis == "e1"){
            //   $('#c' + currentDrag).val("shortlisted");
            //   $("#"+this.getElementById+"con").val("naisu");
            status = "sl";
          }else if(typeis == "e2"){
            status = "kov";
          }else if(typeis == "e3"){
            status = "fi";
          }

          $.ajax({
            url: '/evaluationupdate',
            method: 'get',
            data: {
                ID: currentDrag,
                Job: $('#job').val(),
                status: status
            },
            success: function (res) {

                console.log(res);
               
            }
        });
      
      ev.target.appendChild(document.getElementById(data));

      }
      
    }
    $(document).ready(function(){
        $('#applicantProf').hide();
        $('#startingMsg').show();
       

        $(".aitem, .aitemfi").click(function(){
                $('#startingMsg').hide();
                $('#applicantProf').show();
                
                var jID = $(this).attr("class");
                var parentstat = $(this).parent('div').attr('id');
                
                $.ajax({
                url: '/evaluationapp',
                method: 'get',
                data: {
                    ID: $(this).attr("id")
                },
                success: function (res) {
                    console.log(res);

                    $("#namecon").html(res[0].FirstName + " " + res[0].LastName);
                    var eb = JSON.parse(res[0].EducationalBackground);
                    // for (j = eb.length; j < eb.length; j--){
                        $("#coursecon").html(eb[eb.length-1].course + "<br>" + eb[eb.length-1].nameOfSchool);
                    // }
                    console.log(eb.length);

                    var we = JSON.parse(res[0].WorkExperience);
                    // for (i = we.length; i < we.length; i--){
                        $("#rolecon").html(we[we.length-1].role + "<br>" + we[we.length-1].company);
                    // }
                    if (parentstat == 'e3'){
                        $('#hirebutton').css('display', 'block');
                        $('#seletedGT').val(res[0].ID);
                    }else{
                        $('#hirebutton').css('display', 'none');
                    }
                }

            });
        });
    });
</script>

<div class="row">

    
    {{-- <div class="col-md-1 d-flex flex-column align-items-center" style="padding-top: 25%;background: #ffffff;max-height: 100vh;padding-right: 0px;"><i class="la la-dashboard" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-briefcase" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="fa fa-folder-open-o" style="margin-bottom: 30px;font-size: 20px;color: rgb(85,85,85);"></i><i class="la la-book" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-user" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i></div> --}}
    <div class="col-md-12" id="DashMainCon" style="max-height: 100vh;">
        <div class="container">
            {{-- job details-------------------------------------------------------------------------------------------------------- --}}
            <div class="container">
                <div class="d-flex justify-content-between align-items-baseline" style="margin-top: 50px;margin-bottom: 5px;">
                    <h3 style="color: rgb(89,89,89);">Talent Selection</h3>
                </div>
                <div class="d-flex justify-content-between align-items-baseline" style="margin-top: 20px;margin-bottom: 15px;">
                    <h5 style="color: rgb(89,89,89);">{{ $job->AreaOfExpertise }}</h5><small>JOB CODE: {{ $job->ID }}</small>
                </div>
                <div class="justify-content-between align-items-baseline">
                    <p>Gig Talent - Seeker Details </p>
                    <hr style="margin-top: 0px;" />
                </div>
                <div class="d-flex justify-content-between align-items-baseline" style="margin-bottom: 29px;">
                    <p>Company: {{ $job->CompanyName }}<br />Project Date: January 1, 2022<br />Proposed Salary: {{ $job->ProposedSalary }} USD</p>
                </div>
            </div>
            {{-- applicant information--------------------------------------------------------------------------------------------- --}}
            <div class="container" style="margin-bottom: 12px;margin-top: 30px;">
                <div class="row" id="applicantProf">
                    <div class="col-md-12 d-flex" style="max-height: 400px;background: rgb(255,255,255);height: 400px;padding-top: 15px;border: 2px none rgb(207,207,207);">
                        <div style="width: 350px;height: 350px;margin-right: 40px;margin-left: 10px;background: url('../storage/img/user/default.png') center / cover;"></div>
                        <div style="max-width: 600px;">
                            <h2 style="color: rgb(99,99,99);" id="namecon">Michael Walker</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.<br /></p>
                            <h6 style="color: rgb(99,99,99);">Highest Qualification</h6>
                            <p id="coursecon">Bachelor of Science in Computer Science 2010 - UST</p>
                            <h6 style="color: rgb(99,99,99);">Latest Work Experience</h6>
                            <p id="rolecon">Web Developer</p>
                            <a id = "hirebutton" class="btn btn" type="button" style="background: rgb(255,199,0);border-color: rgb(255,199,0);border-left-color: rgb(255,229,0);width: 104.1719px; color: white; display: none;" href="{{ route('jobsummary') }}">Hire</a>
                            <form action = "{{ route('jobsummary') }}" method="POST">
                                @csrf
                                <input type="hidden" id="selectedGT" name="selectedGT">
                                <button class="btn form-control" type="submit" style="background: rgb(253,195,7);width: 162.1094px;color: rgb(255,255,255);">Hire</button>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- no applicant selected--------------------------------------------------------------------- --}}
                <div class="row" id="startingMsg">
                    <div class="col-md-12 d-flex align-items-center" style="max-height: 400px;background: rgb(255,255,255);height: 400px;padding-top: 15px;border: 2px none rgb(207,207,207);">
                        
                            <div style="margin: auto;">
                                <p style="text-align: center;font-style: italic;font-size: 16px;color: rgb(162,162,162);"><i class="la la-user" style="font-size: 30px;"></i><br>Select an applicant to view his/her profile here</p>
                            </div>
                    </div>
                </div>
            </div>
            {{-- drag and drop section--------------------------------------------------------------------------------------------------------------- --}}
            <div class="container">
                <div class="row">
                    <div id = "e1" ondrop="drop(event)" ondragover="allowDrop(event)" class="col-md-3" style="max-height: 400px;background: rgb(255,255,255);height: 400px;border: 2px none rgb(207,207,207);box-shadow: 0px 2px 1px rgb(194,194,194);padding-top: 15px; overflow: auto;">
                        <h6 style="color: rgb(98,98,98);margin-bottom: 30px;">Short listed</h6>
                            @foreach ($applicants as $sl)
                                @if($sl->Status == "sl")
                                    <div class = "aitem" draggable="true" ondragstart="drag(event)" id="{{ $sl->Applicant }}" style="min-height: 50px;background: #ffef9b;height: 80px;border-left-style: solid;border-left-color: rgb(255,214,0);padding-top: 10px;padding-left: 10px;margin-bottom: 5px;">
                                        <small>Talent ID: {{ $sl->Applicant }}</small>
                                        <h6 style="color: rgb(98,98,98);">{{ $sl->gigtalent->FirstName }} {{ $sl->gigtalent->LastName }}</h6>
                                    </div>
                                @endif
                                
                            @endforeach
                            
                   
                    </div>
                    <div class="col-md-1" style="max-height: 400px;background: url('../storage/img/ARROW.png') center / contain no-repeat, rgba(255,255,255,0);height: 400px;border: 2px none rgb(207,207,207);box-shadow: 0px 2px 1px rgb(194,194,194);padding-top: 15px;">
                        <div></div>
                    </div>
                    <div id = "e2" ondrop="drop(event)" ondragover="allowDrop(event)" class="col-md-4" style="max-height: 400px;background: rgb(255,255,255);height: 400px;border: 2px none rgb(207,207,207);box-shadow: 0px 2px 1px rgb(194,194,194);padding-top: 15px;">
                        <h6 style="color: rgb(98,98,98);margin-bottom: 30px;">Keep in View</h6>
                        @foreach ($applicants as $kov)
                                @if($kov->Status == "kov")
                                    <div class = "aitem" draggable="true" ondragstart="drag(event)" id="{{ $kov->Applicant }}" style="min-height: 50px;background: #ffef9b;height: 80px;border-left-style: solid;border-left-color: rgb(255,214,0);padding-top: 10px;padding-left: 10px;margin-bottom: 5px;">
                                        <small>Talent ID: {{ $kov->Applicant }}</small>
                                        <h6 style="color: rgb(98,98,98);">{{ $kov->gigtalent->FirstName }} {{ $kov->gigtalent->LastName }}</h6>
                                    </div>
                                @endif
                        @endforeach
                    </div>
                    <div id = "e3" ondrop="drop(event)" ondragover="allowDrop(event)" class="col-md-4" style="max-height: 400px;background: rgb(255,255,255);height: 400px;border: 2px none rgb(207,207,207);box-shadow: 0px 2px 1px rgb(194,194,194);padding-top: 15px;">
                        <h6 style="color: rgb(98,98,98);margin-bottom: 30px;">For Interview</h6>
                        @foreach ($applicants as $fi)
                                @if($fi->Status == "fi")
                                    <div class = "aitemfi" draggable="true" ondragstart="drag(event)" id="{{ $fi->Applicant }}" style="min-height: 50px;background: #ffef9b;height: 80px;border-left-style: solid;border-left-color: rgb(255,214,0);padding-top: 10px;padding-left: 10px;margin-bottom: 5px;">
                                        <small>Talent ID: {{ $fi->Applicant }}</small>
                                        <h6 style="color: rgb(98,98,98);">{{ $fi->gigtalent->FirstName }} {{ $fi->gigtalent->LastName }}</h6>
                                        
                                    </div>
                                @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>

<input type = "hidden" id ="job" value = "{{ session('jobselected') }}" />
@endsection

