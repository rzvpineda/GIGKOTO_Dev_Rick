@extends('layout.appnav')
@section('content')

<div class="row">
    <div class="col-md-1 d-flex flex-column align-items-center" style="padding-top: 25%;background: #ffffff;max-height: 100vh;padding-right: 0px;"><i class="la la-dashboard" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-briefcase" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="fa fa-folder-open-o" style="margin-bottom: 30px;font-size: 20px;color: rgb(85,85,85);"></i><i class="la la-book" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-user" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i></div>
    
    <div class="col-md-11" id="DashMainCon" style="max-height: 100vh;">
    {{-- ------------------------------------------------------------------------------------------------------------------------------------- --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-nav-tabs">
                    <div class="card-header card-header-primary">
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab"><i class="material-icons">face</i>
                                            Match Making
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link" href="#messages" data-toggle="tab"><i class="material-icons">chat</i>
                                            Applicants
                                        </a></li>
                                    <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"><i class="material-icons">build</i>
                                            Short Listed
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                
                            </div>
                            <div class="tab-pane" id="messages">
                                <div class="container">
                                    <div class="heading mt-5">
                                        <h4>Applicants</h4><small>Here are the list of the applicants and requested talents.<br /><i>Note: Once the applicant accepted the request, they will be transferred to the short listed group</i></small>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card">
                                                <div class="row no-gutters">
                                                    <div class="col-md-4">
                                                        <div class="card-img" style="background-image:url('3.jpg');background-size:cover;height:100%;background-repeat:no-repeat;background-position:center;"></div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body" style="  text-align: left;
    ">
                                                            <h4>John Doe</h4>
                                                            <div><span class="badge badge-primary" style="  margin-right: 4px;
      background: #FDC407;
    ">Programmer</span><span class="badge badge-primary" style="  margin-right: 4px;
      background: #FDC407;
    ">Web Developer</span><span class="badge badge-primary" style="  margin-right: 4px;
      background: #FDC407;
    ">Fullstack Developer</span></div>
                                                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                                            <div style="  text-align: right;
    "><button class="btn btn-primary btn-sm" type="button" style="  background: rgb(255,255,255);
      border-color: rgb(253,196,7);
      border-radius: 32px;
      color: #585858;
      margin-right: 10px;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x">
                                                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                                                    </svg> Reject</button><button class="btn btn-primary btn-sm" type="button" style="  background: rgb(253,196,7);
      border-color: rgb(253,196,7);
      border-radius: 32px;
      color: #ffffff;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2">
                                                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                                    </svg> Add to short list</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card">
                                                <div class="row no-gutters">
                                                    <div class="col-md-4">
                                                        <div class="card-img" style="background-image:url('3.jpg');background-size:cover;height:100%;background-repeat:no-repeat;background-position:center;"></div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body" style="  text-align: left;
    ">
                                                            <h4>John Doe</h4>
                                                            <div><span class="badge badge-primary" style="  margin-right: 4px;
      background: #FDC407;
    ">Programmer</span><span class="badge badge-primary" style="  margin-right: 4px;
      background: #FDC407;
    ">Web Developer</span><span class="badge badge-primary" style="  margin-right: 4px;
      background: #FDC407;
    ">Fullstack Developer</span></div>
                                                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                                            <div style="  text-align: right;
    ">
                                                                <p style="  color: rgb(15,197,0);
      font-size: 15.4px;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2">
                                                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                                    </svg>  Requested</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card">
                                                <div class="row no-gutters">
                                                    <div class="col-md-4">
                                                        <div class="card-img" style="background-image:url('3.jpg');background-size:cover;height:100%;background-repeat:no-repeat;background-position:center;"></div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body" style="  text-align: left;
    ">
                                                            <h4>John Doe</h4>
                                                            <div><span class="badge badge-primary" style="  margin-right: 4px;
      background: #FDC407;
    ">Programmer</span><span class="badge badge-primary" style="  margin-right: 4px;
      background: #FDC407;
    ">Web Developer</span><span class="badge badge-primary" style="  margin-right: 4px;
      background: #FDC407;
    ">Fullstack Developer</span></div>
                                                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                                            <div style="  text-align: right;
    ">
                                                                <p style="  color: rgb(15,197,0);
      font-size: 15.4px;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2">
                                                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                                    </svg>  Requested</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12">
                                            <div class="card">
                                                <div class="row no-gutters">
                                                    <div class="col-md-4">
                                                        <div class="card-img" style="background-image:url('3.jpg');background-size:cover;height:100%;background-repeat:no-repeat;background-position:center;"></div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body" style="  text-align: left;
    ">
                                                            <h4>John Doe</h4>
                                                            <div><span class="badge badge-primary" style="  margin-right: 4px;
      background: #FDC407;
    ">Programmer</span><span class="badge badge-primary" style="  margin-right: 4px;
      background: #FDC407;
    ">Web Developer</span><span class="badge badge-primary" style="  margin-right: 4px;
      background: #FDC407;
    ">Fullstack Developer</span></div>
                                                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                                                            <div style="  text-align: right;
    "><button class="btn btn-primary btn-sm" type="button" style="  background: rgb(255,255,255);
      border-color: rgb(253,196,7);
      border-radius: 32px;
      color: #585858;
      margin-right: 10px;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x">
                                                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                                                    </svg> Reject</button><button class="btn btn-primary btn-sm" type="button" style="  background: rgb(253,196,7);
      border-color: rgb(253,196,7);
      border-radius: 32px;
      color: #ffffff;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2">
                                                                        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                                                                    </svg> Add to short list</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="settings">
                                <div class="container mt-4">
                                    <div class="heading mt-5">
                                        <h4>Short Listed</h4><small>Here are the list of the applicants and requested talents that passed initial screening<br />Once satisfied, you may proceed to evaluation, selection and contract signing</small>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mt-4" style="  padding: 10px;
      padding-left: 20px;
      padding-right: 20px;
    ">
                                        <div class="d-flex align-items-center"><img src="blob:file:///61a4c61f-5676-4006-afc8-36aafbdf3379" style="  border-radius: 50%;
    " height="40px" />
                                            <h6 class="text-capitalize" style="  margin-left: 20px;
      color: rgb(99,99,99);
    ">ANDREW WALKER</h6>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <p>Date Added: January 01, 2022</p>
                                        </div>
                                        <div><button class="btn btn-primary" type="button" style="  background: rgb(255,94,94);
      border-radius: 99px;
      border-style: none;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x">
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                                </svg> Remove</button></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center" style="  padding: 10px;
      padding-left: 20px;
      padding-right: 20px;
    ">
                                        <div class="d-flex align-items-center"><img src="blob:file:///61a4c61f-5676-4006-afc8-36aafbdf3379" style="  border-radius: 50%;
    " height="40px" />
                                            <h6 class="text-capitalize" style="  margin-left: 20px;
      color: rgb(99,99,99);
    ">ANDREW WALKER</h6>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <p>Date Added: January 01, 2022</p>
                                        </div>
                                        <div><button class="btn btn-primary" type="button" style="  background: rgb(255,94,94);
      border-radius: 99px;
      border-style: none;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x">
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                                </svg> Remove</button></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center" style="  padding: 10px;
      padding-left: 20px;
      padding-right: 20px;
    ">
                                        <div class="d-flex align-items-center"><img src="blob:file:///61a4c61f-5676-4006-afc8-36aafbdf3379" style="  border-radius: 50%;
    " height="40px" />
                                            <h6 class="text-capitalize" style="  margin-left: 20px;
      color: rgb(99,99,99);
    ">ANDREW WALKER</h6>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <p>Date Added: January 01, 2022</p>
                                        </div>
                                        <div><button class="btn btn-primary" type="button" style="  background: rgb(255,94,94);
      border-radius: 99px;
      border-style: none;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x">
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                                </svg> Remove</button></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center" style="  padding: 10px;
      padding-left: 20px;
      padding-right: 20px;
    ">
                                        <div class="d-flex align-items-center"><img src="blob:file:///61a4c61f-5676-4006-afc8-36aafbdf3379" style="  border-radius: 50%;
    " height="40px" />
                                            <h6 class="text-capitalize" style="  margin-left: 20px;
      color: rgb(99,99,99);
    ">ANDREW WALKER</h6>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <p>Date Added: January 01, 2022</p>
                                        </div>
                                        <div><button class="btn btn-primary" type="button" style="  background: rgb(255,94,94);
      border-radius: 99px;
      border-style: none;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x">
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                                </svg> Remove</button></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center" style="  padding: 10px;
      padding-left: 20px;
      padding-right: 20px;
    ">
                                        <div class="d-flex align-items-center"><img src="blob:file:///61a4c61f-5676-4006-afc8-36aafbdf3379" style="  border-radius: 50%;
    " height="40px" />
                                            <h6 class="text-capitalize" style="  margin-left: 20px;
      color: rgb(99,99,99);
    ">ANDREW WALKER</h6>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <p>Date Added: January 01, 2022</p>
                                        </div>
                                        <div><button class="btn btn-primary" type="button" style="  background: rgb(255,94,94);
      border-radius: 99px;
      border-style: none;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x">
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                                </svg> Remove</button></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center" style="  padding: 10px;
      padding-left: 20px;
      padding-right: 20px;
    ">
                                        <div class="d-flex align-items-center"><img src="blob:file:///61a4c61f-5676-4006-afc8-36aafbdf3379" style="  border-radius: 50%;
    " height="40px" />
                                            <h6 class="text-capitalize" style="  margin-left: 20px;
      color: rgb(99,99,99);
    ">ANDREW WALKER</h6>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <p>Date Added: January 01, 2022</p>
                                        </div>
                                        <div><button class="btn btn-primary" type="button" style="  background: rgb(255,94,94);
      border-radius: 99px;
      border-style: none;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x">
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                                </svg> Remove</button></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center" style="  padding: 10px;
      padding-left: 20px;
      padding-right: 20px;
    ">
                                        <div class="d-flex align-items-center"><img src="blob:file:///61a4c61f-5676-4006-afc8-36aafbdf3379" style="  border-radius: 50%;
    " height="40px" />
                                            <h6 class="text-capitalize" style="  margin-left: 20px;
      color: rgb(99,99,99);
    ">ANDREW WALKER</h6>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <p>Date Added: January 01, 2022</p>
                                        </div>
                                        <div><button class="btn btn-primary" type="button" style="  background: rgb(255,94,94);
      border-radius: 99px;
      border-style: none;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x">
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                                </svg> Remove</button></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center" style="  padding: 10px;
      padding-left: 20px;
      padding-right: 20px;
    ">
                                        <div class="d-flex align-items-center"><img src="blob:file:///61a4c61f-5676-4006-afc8-36aafbdf3379" style="  border-radius: 50%;
    " height="40px" />
                                            <h6 class="text-capitalize" style="  margin-left: 20px;
      color: rgb(99,99,99);
    ">ANDREW WALKER</h6>
                                        </div>
                                        <div class="d-flex align-content-center">
                                            <p>Date Added: January 01, 2022</p>
                                        </div>
                                        <div><button class="btn btn-primary" type="button" style="  background: rgb(255,94,94);
      border-radius: 99px;
      border-style: none;
    "><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x">
                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                                </svg> Remove</button></div>
                                    </div>
                                    <div class="mt-5 text-center mb-5"><button class="btn btn-primary" type="button" style="  background: #FDC407;
      border-style: none;
    ">Proceed to Evaluation</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- ------------------------------------------------------------------------------------------------------------------------------------- --}}        
    </div>

</div>

@endsection