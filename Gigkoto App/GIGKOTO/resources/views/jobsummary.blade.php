@extends('layout.appnavwithsidebar')
@section('content')
<script>
    $(function () {
    $('[data-toggle="popover"]').popover()
    })
</script>
<div class="row">

    
    {{-- <div class="col-md-1 d-flex flex-column align-items-center" style="padding-top: 25%;background: #ffffff;max-height: 100vh;padding-right: 0px;"><i class="la la-dashboard" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-briefcase" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="fa fa-folder-open-o" style="margin-bottom: 30px;font-size: 20px;color: rgb(85,85,85);"></i><i class="la la-book" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-user" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i></div> --}}
    <div class="col-md-12" id="DashMainCon" style="max-height: 100vh;">

        <div style="text-align: center;"><img src="../storage/img/man-office-computer_4x.jpg" style="max-height: 500px;" />
            <h1 style="color: rgb(81,81,81);font-style: italic;">Nice Work!</h1>
            <p style="color: rgb(142,142,142);">You successfully hired {{ $applicant->FirstName }} {{ $applicant->LastName }} for this job.<br />Let&#39;s get working, check your candidate&#39;s contact information below.<br /><br />An email was sent to your talent but feel free to engage at own discretion.</p>
        </div>

        <div class=" container-fluid my-5 ">
            <div class="row justify-content-center ">
                <div class="col-xl-10">
                    <div class="card shadow-lg ">
                        <div class="row p-2 mt-3 justify-content-between mx-sm-2">
                            <div class="col">
                                <a href = "{{ url('home')}}"><p class="text-muted space mb-0 shop"> Back to Dashboard</p></a>
                            </div>
                            <div class="col">
                                
                            </div>
                            <div class="col-auto"> <p class="text-muted space mb-0 shop">Job Code {{ $job->ID }}</p>
                            </div>
                        </div>
                        <div class="row justify-content-around">
                            <div class="col-md-12">
                                <div class="card border-0">
                                    <div class="card-header pb-0">
                                        <h2 class="card-title space ">Agreement Details</h2>
                                        <p class="card-text text-muted mt-4 space">JOB DETAILS</p>
                                        <hr class="my-0">
                                    </div>
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <div class="col-auto mt-0">
                                                <p><b>{{ $job->AreaOfExpertise }}</b></p>
                                            </div>
                                            <div class="col-auto">
                                                <p><b>Proposed Salary: {{ $job->ProposedSalary }} USD</b> </p>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col">
                                                <p class="text-muted mb-2">HIRED TALENT</p>
                                                <hr class="mt-0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="NAME" class="small text-muted mb-1">FULL NAME</label> 
                                            <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" placeholder="BBBootstrap Team" value = "{{ $applicant->FirstName }} {{ $applicant->LastName }}"> 
                                        </div>
                                        <div class="form-group"> <label for="NAME" class="small text-muted mb-1">COMPLETE ADDRESS</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" value = "{{ $applicant->CompleteAddress }}"> </div>
                                        <div class="row no-gutters">
                                            <div class="col-sm-6 pr-sm-2">
                                                <div class="form-group"> <label for="NAME" class="small text-muted mb-1">PHONE NUMBER</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" value = "{{ $applicant->PhoneNumber }}"> </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group"> <label for="NAME" class="small text-muted mb-1">EMAIL ADDRESS</label> <input type="text" class="form-control form-control-sm" name="NAME" id="NAME" aria-describedby="helpId" value = "{{ $applicant->EmailAddress }}"> </div>
                                            </div>
                                        </div>
                                        {{-- <div class="row mb-md-5">
                                            <div class="col"> 
                                                <button type="button" name="" id="" class="btn btn-lg btn-block ">
                                             </div>
                                        </div> --}}
                                        <div class="row mt-4">
                                            <div class="col">
                                                <p class="text-muted mb-2">MILESTONE</p>
                                                <hr class="mt-0">
                                            </div>
                                        </div>
                                        <div class="form-group mb-5">
                                            <img src="../storage/img/checkmark.png" height="20px" /><label for="NAME" class="text-muted mb-1 ml-2">1. Upload signed contract between GT and GTS</label> <div class="float-right"><a href = "{{ route('jobsummarycontract') }}" class="ml-2" style = "font-size: 12px;">Generate contract</a></div>
                                            <input type="file" class="form-control" />
                                            <small><i>status: confirmed</i></small>
                                        </div>
                                        <div class="form-group mb-5">
                                            <img src="../storage/img/checkmark.png" height="20px" style="filter: grayscale(100%);" /><label for="NAME" class="text-muted mb-1 ml-2">2. Upload receipt for downpayment to gig talent</label>
                                            <div class = "float-right mb-2" data-toggle="popover" title="Payment Details" data-content="Bank name: BDO<br/>Account Number: xxxxxxxxx<br/>Account Name: Someone's Name" data-html = "true" style ="cursor: pointer; font-size: 12px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                                </svg>
                                                How to settle payment in GKT?
                                              
                                            </div>
                                            <input type="file" class="form-control" />
                                            <small><i>status: waiting for verification</i></small>
                                        </div>
                                        <div class="form-group mb-5">
                                            <img src="../storage/img/checkmark.png" height="20px" style="filter: grayscale(100%);" /><label for="NAME" class="text-muted mb-1 ml-2">3. Set mid-point check-in with Gigkoto for GT performance evaluation</label> 
                                            <input class="form-control" type="date" />
                                        </div>
                                        <div class="form-group mb-5">
                                            <img src="../storage/img/checkmark.png" height="20px" style="filter: grayscale(100%);" /><label for="NAME" class="text-muted mb-1 ml-2">4. Upload receipt for the remaining payment balance to GT</label>
                                            <div class = "float-right mb-2" data-toggle="popover" title="Payment Details" data-content="Bank name: BDO<br/>Account Number: xxxxxxxxx<br/>Account Name: Someone's Name" data-html = "true" style ="cursor: pointer; font-size: 12px;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                                </svg>
                                                How to settle payment in GKT?
                                              
                                            </div>
                                            <input type="file" class="form-control" />
                                            <small><i>status: pending</i></small>
                                        </div>
                                        <div class="form-group mb-5">
                                            <img src="../storage/img/checkmark.png" height="20px" style="filter: grayscale(100%);" /><label for="NAME" class="text-muted mb-1 ml-2">5. Performance Evaluation of GT (provide comments/testimonials)</label> 
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection