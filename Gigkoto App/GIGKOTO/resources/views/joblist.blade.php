@extends('layout.appnavwithsidebar')
@section('content')

<script>
    document.body.style.backgroundColor = "#D9DBDA";

    $(document).ready(function(){

        $('#jobselected').hide();
        $('#startingMsg').show();
        // $.ajax({
        //     url: 'joblist-fetch',
        //     method: 'post',
        //     success: function (res) {
        //         console.log(res);
                
        //     }
        //     // ,
        //     // error: function(xhr, ajaxOptions, thrownError){
        //     //         console.log(xhr.status+" ,"+" "+ajaxOptions+", "+thrownError);
        //     //     }
            
        // });

        $(".jobItem").click(function(){
            $('#jobselected').show();
            $('#startingMsg').hide();
            var jID = $(this).attr("id");
            $.ajax({
            url: 'jobitem-fetch',
            method: 'POST',
            data: {
                ID: $(this).attr("id")
            },
            success: function (res) {

                // clearing of fields----------------------------------------------------------------------
                $("#jobTitle").html("");
                $("#jobCompany").html("");
                $("#jobDescription").html("");
                $("#proposedsalary").html("");
                $("#requirements").html("");
                $("#milestone").html("");
                $("#CompanyID").val("");
                $("#Job").val("");

                // refreshing main content------------------------------------------------------------------
                
                
                $("#jobTitle").html(res[0].AreaOfExpertise);
                $("#jobCompany").html(res[0].CompanyName);
                $("#jobDescription").html(res[0].Description);
                $("#proposedsalary").html("<b>" + res[0].ProposedSalary + " USD" + "</b>");
                $("#Job").val(jID);
                $("#CompanyID").val(res[0].CompanyID);

                
                
                
                var req = JSON.parse(res[0].requirements);
                for (i = 0; i<req.length; i++){
                    $("#requirements").append("<li>" + req[i].requirements + "</li>");
                }

                var mil = JSON.parse(res[0].milestone);
                for (j = 0; j<mil.length; j++){
                    $("#milestone").append("<li>" + mil[j].milestonedate + " - " + mil[j].milestone + "</li>");
                }
               
                
            }
        });
            
        });
    });
</script>

<div class="row">
    <!-- {{-- <div class="col-md-1 d-flex flex-column align-items-center" style="padding-top: 25%;background: #ffffff;max-height: 100vh;padding-right: 0px;"><i class="la la-dashboard" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-briefcase" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="fa fa-folder-open-o" style="margin-bottom: 30px;font-size: 20px;color: rgb(85,85,85);"></i><i class="la la-book" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-user" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i></div> --}} -->
    <div class="col-md-12" id="DashMainCon" style="max-height: 100vh;">

        <div class="container" style="margin-top: 25px;">
            <div style="margin-top: 5px;margin-bottom: 10px;">
                <h5>Sign up to our weekly newsletter</h5>
                <p class="text-left" style="color: rgb(120,120,120);">Get the latest updates and GIG offers from our partners as soon as it is posted</p><input type="text" class="form-control" placeholder="Your Email Here" />
            </div>
            <div class="d-flex align-items-xl-center" style="margin-top: 40px;margin-bottom: 10px;">
                <h6 style="margin-top: 5px;margin-right: 15px;">Filter: </h6>
                <div class="form-check" style="margin-right: 20px;"><input type="checkbox" class="form-check-input" id="formCheck-1" /><label class="form-check-label" for="formCheck-1">Administrative Virtual Assistant</label></div>
                <div class="form-check" style="margin-right: 20px;"><input type="checkbox" class="form-check-input" id="formCheck-1" /><label class="form-check-label" for="formCheck-1">Program Coordination</label></div>
                <div class="form-check" style="margin-right: 20px;"><input type="checkbox" class="form-check-input" id="formCheck-2" /><label class="form-check-label" for="formCheck-1">IT/Tech Services</label></div>
                <div class="form-check" style="margin-right: 20px;"><input type="checkbox" class="form-check-input" id="formCheck-2" /><label class="form-check-label" for="formCheck-1">Professional Services</label></div><button class="btn btn-primary btn-sm" type="button">Search</button>
            </div>
            <div class="container">
                <div class="row">
                  
                @if( count($joblist)>0 )
                    <div class="col-md-4" id="jobList" style="height: 800px;background: #ffffff;border-right: 1px solid #D9DBDA ;">
                        @foreach ($joblist as $joblist)
                        
                            <div class = "jobItem" style="margin-top: 10px;padding: 5px;border-bottom: 1px solid var(--yellow) ;" id = "{{ $joblist->ID }}">
                            <h5>{{ $joblist->gigtalentseeker->CompanyName }}</h5>
                                <small style="color: rgb(150,150,150);">{{ $joblist->AreaOfExpertise }}</small><br>
                                <small>Proposed Salary: {{ $joblist->ProposedSalary }}</small>
                            </div>
                        @endforeach
                    </div>
                    <!-- no jobselected screen------------------------------------------- -->
                    <div class="col-md-8" id="startingMsg" style="background: #ffffff;padding-top: 20px;">
                        <div class="row">
                            <div class="col-md-12 d-flex align-items-center" style="max-height: 400px;background: rgb(255,255,255);height: 400px;padding-top: 15px;border: 2px none rgb(207,207,207);">
                                
                                    <div style="margin: auto;">
                                        <p style="text-align: center;font-style: italic;font-size: 16px;color: rgb(162,162,162);"><i class='bx bxs-message-dots' ></i><br>Select a job to view more</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- job selected---------------------------------------------------- -->
                    <div class="col-md-8" id="jobselected" style="background: #ffffff;padding-top: 20px; padding-left: 50px;">
                        <h4 style="color: rgb(108,108,108);" id ="jobTitle">Software Engineer</h4><small id = "jobCompany"></small>
                        <p id = "jobDescription"><br /><br /></p>
                        <h5 style="color: rgb(108,108,108);">Requirements</h5>
                        <ul id = "requirements"></ul>
                        <h5 style="color: rgb(108,108,108);">Project Timeline</h5>
                        <ul id = "milestone"></ul>
                        <h5 style="color: rgb(108,108,108);">Proposed Salary</h5>
                        <p>Please note that the proposed salary is indicated by the employer and may subject to changes before, during and/or after the contract with the discretion of the employer.<br /><b><p id = "proposedsalary">150 USD - 300 USD</p><br /><br /></p></b>
                        <form action = "{{ route('apply') }}" method = "post">
                            @csrf
                            <input type = "hidden" name = "Applicant" value = "{{ session('LoggedUser') }}">
                            <input type = "hidden" name = "Job" id = "Job">
                            <input type = "hidden" name = "CompanyID" id = "CompanyID">
                            <button class="btn btn-primary" type="submit" style="background: #FDC407;border-style: none;border-bottom-style: none;">Apply for this GIG</button>
                        </form>
                    </div>
                @else
                    <div class="col-md-12 pt-4" id="jobList" style="text-align:center; height: 800px;background: #ffffff;border-right: 1px solid rgb(237,237,237) ;">
                    <small><i> No available jobs at this time! </i></small>
                    </div>
                @endif
                </div>
            </div>
        </div>

    </div>
</div>

@endsection