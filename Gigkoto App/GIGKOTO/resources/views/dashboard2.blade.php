@extends('layout.appnavwithsidebar')
@section('content')

<script>
    document.body.style.backgroundColor = "rgb(248,248,248)";
</script>

<div class="row">
    {{-- <div class="col-md-1 d-flex flex-column align-items-center" style="padding-top: 25%;background: #ffffff;max-height: 100vh;padding-right: 0px;"><i class="la la-dashboard" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-briefcase" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="fa fa-folder-open-o" style="margin-bottom: 30px;font-size: 20px;color: rgb(85,85,85);"></i><i class="la la-book" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-user" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i></div> --}}
    <div class="col-md-9" id="DashMainCon" style="max-height: 100vh;">
        <div class="container">
            <div>
                <section class="features-boxed" style="background: rgba(255,218,89,0);margin-top: 51px;">
                    <div class="container">
                        <div>
                            <h3>Dashboard</h3>
                            <h4 style="margin-top: 40px;">Start your career</h4>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.<br /></p>
                        <div class="row justify-content-center features" style="padding-top: 0px;padding-bottom: 10px;">
                            <div class="col-sm-6 col-md-5 col-lg-4 item">
                                <div class="box" style="box-shadow: 0px 1px 6px 0px rgb(221,221,221);border-radius: 9px;"><i class="fa fa-map-marker icon" style="color: rgb(255,218,89);"></i>
                                    <h3 class="name">Apply for a GIG</h3>
                                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-5 col-lg-4 item">
                                <div class="box" style="box-shadow: 0px 1px 6px 0px rgb(221,221,221);border-radius: 9px;"><i class="fa fa-clock-o icon" style="color: rgb(255,218,89);"></i>
                                    <h3 class="name">Get Hired</h3>
                                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-5 col-lg-4 item">
                                <div class="box" style="box-shadow: 0px 1px 6px 0px rgb(221,221,221);border-radius: 9px;"><i class="fa fa-list-alt icon" style="color: rgb(255,218,89);"></i>
                                    <h3 class="name">Get Paid</h3>
                                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container" style="margin-bottom: 50px;margin-top: 50px;">
                    <h6 style="font-weight: bold;margin-bottom: 30px;">Applicants</h6>
                    @if(count($jobApp)>0)
                        @foreach($jobApp as $jobApp)

                        
                        <div class="d-flex justify-content-between align-items-center" style="padding: 10px;padding-left: 20px;padding-right: 20px;box-shadow: 0px 1px 6px rgb(228,228,228);background: #ffffff;border-radius: 5px;margin-bottom: 10px;">
                            <div class="d-flex align-items-center">
                                <div style="height: 40px;width: 40px;background: url('storage/img/user/default.png') center / cover no-repeat;border-radius: 50px;"></div>
                                <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">
                                    {{ $jobApp->gigtalent->FirstName }} {{ $jobApp->gigtalent->LastName }}
                                    {{-- {{ $jobApp->CompanyID}} --}}
                                </h6>
                            </div>
                            <div class="d-flex align-self-center" style="padding-top: 15px;">
                                <p>Date applied: {{ $jobApp->created_at }}</p>
                            </div>
                            <div><button class="btn btn-primary" type="button" style="background: #FDC407;border-radius: 99px;border-style: none;color: rgb(255, 255, 255);"> Learn more</button></div>
                        </div>

                        @endforeach
                    @else
                            <small><i> No applicants yet! </i></small>
                    @endif
                </div>
                {{-- <div class="container" style="margin-bottom: 50px;">
                    <div style="padding: 20px;box-shadow: 0px 1px 2px 0px rgb(180,180,180);border-radius: 6px;background: #ffffff;">
                        <h6 style="font-weight: bold;margin-bottom: 30px;">Your Application Trend</h6>
                        <div><canvas height="334" style="display: block; width: 668px; height: 334px;" width="668"></canvas></div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="col-md-3" id="DashSideCon" style="max-height: 100vh;padding-right: 15px;padding-left: 0px;">
        <div class="container">
            <div>
                <div class="container" style="margin-bottom: 50px;margin-top: 50px;">
                    <h6 style="font-weight: bold;margin-bottom: 30px;"><i class="la la-briefcase" style="font-size: 20px;"></i>  Recent Job Postings from GTS</h6>
                    <div class="d-flex justify-content-between align-items-center" style="padding: 10px;padding-left: 20px;padding-right: 20px;background: #ffffff;margin-bottom: 5px;box-shadow: 0px 1px 6px rgb(228,228,228);border-radius: 10px;">
                        <div class="d-flex align-items-center">
                            <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">nCR Corporation</h6>
                        </div>
                        <div class="d-flex align-content-center"><span class="badge badge-primary">Tech/IT</span></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center" style="padding: 10px;padding-left: 20px;padding-right: 20px;background: #ffffff;margin-bottom: 5px;box-shadow: 0px 1px 6px rgb(228,228,228);border-radius: 10px;">
                        <div class="d-flex align-items-center">
                            <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">GOC</h6>
                        </div>
                        <div class="d-flex align-content-center"><span class="badge badge-primary">Admintrative</span></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center" style="padding: 10px;padding-left: 20px;padding-right: 20px;background: #ffffff;margin-bottom: 5px;box-shadow: 0px 1px 6px rgb(228,228,228);border-radius: 10px;">
                        <div class="d-flex align-items-center">
                            <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">GDS Link</h6>
                        </div>
                        <div class="d-flex align-content-center"><span class="badge badge-primary">Tech/IT</span></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center" style="padding: 10px;padding-left: 20px;padding-right: 20px;background: #ffffff;margin-bottom: 5px;box-shadow: 0px 1px 6px rgb(228,228,228);border-radius: 10px;">
                        <div class="d-flex align-items-center">
                            <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">Terminus</h6>
                        </div>
                        <div class="d-flex align-content-center"><span class="badge badge-primary">Tech/IT</span></div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center" style="padding: 10px;padding-left: 20px;padding-right: 20px;background: rgba(255,255,255,0);margin-bottom: 5px;border-radius: 10px;">
                        <div class="d-flex align-items-center"></div>
                        <div class="d-flex align-content-center"></div><small>See more&gt;</small>
                    </div>
                </div>
            </div>
            <div>
                <div class="container" style="margin-bottom: 50px;margin-top: 50px;">
                    <h6 style="font-weight: bold;margin-bottom: 30px;"><i class="la la-bell" style="font-size: 20px;"></i>  Notifications</h6>
                    <div class="d-flex justify-content-between align-items-center" style="background: rgba(255,255,255,0);margin-bottom: 5px;">
                        <div class="d-flex justify-content-between align-items-center" style="padding-top: 10px;padding-bottom: 5px;">
                            <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">Your application was accepted</h6>
                        </div><small>3 mins ago</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center" style="background: rgba(255,255,255,0);margin-bottom: 5px;">
                        <div class="d-flex justify-content-between align-items-center" style="padding-top: 10px;padding-bottom: 5px;">
                            <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">Your application was accepted</h6>
                        </div><small>3 mins ago</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center" style="background: rgba(255,255,255,0);margin-bottom: 5px;">
                        <div class="d-flex justify-content-between align-items-center" style="padding-top: 10px;padding-bottom: 5px;">
                            <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">Your application was accepted</h6>
                        </div><small>3 mins ago</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center" style="background: rgba(255,255,255,0);margin-bottom: 5px;">
                        <div class="d-flex justify-content-between align-items-center" style="padding-top: 10px;padding-bottom: 5px;">
                            <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">Your application was accepted</h6>
                        </div><small>3 mins ago</small>
                    </div>
                    <div class="d-flex justify-content-between align-items-center" style="padding: 10px;padding-left: 20px;padding-right: 20px;background: rgba(255,255,255,0);margin-bottom: 5px;border-radius: 10px;">
                        <div class="d-flex align-items-center"></div>
                        <div class="d-flex align-content-center"></div><small>See more&gt;</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection