@extends('layout.appnav')
@section('content')

<script>
    document.body.style.backgroundColor = "rgb(248,248,248)";
</script>

<div class="row" style = "max-height: 200vh; margin:0;">

    
    {{-- <div class="col-md-1 d-flex flex-column align-items-center" style="padding-top: 25%;background: #ffffff;max-height: 100%;padding-right: 0px;"><i class="la la-dashboard" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-briefcase" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="fa fa-folder-open-o" style="margin-bottom: 30px;font-size: 20px;color: rgb(85,85,85);"></i><i class="la la-book" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-user" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i></div> --}}
    <div class="col-md-12" id="DashMainCon" style="max-height: 100vh;">
        {{-- side con----------------------------------- --}}
        <div class="row">
            <div class="col-3">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">User Compliance</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Admin Compliance</a>
                
              </div>
            </div>
            <div class="col-9">
              <div class="tab-content" id="v-pills-tabContent">
                {{-- user milestone compliance-------------------------------------- --}}
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="container">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Contract</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Downpayment</a>
                            </li>
                            <li class="nav-item" role="presentation">
                              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Balance</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            {{-- contract verification--------------------------------------------------------------------- --}}
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            
                                <div class="container" style="margin-bottom: 12px;margin-top: 30px; background-color: white; padding: 25px;">
                                    <h4 style="margin-bottom: 30px;">Contract Verification</h4>
                                    @foreach ($contract as $contract)
                                            <div class="d-flex justify-content-between" style="padding: 10px;padding-left: 20px;padding-right: 20px;">
                    
                                                
                                                <div class="d-flex">
                                                    <div style="width: 20px;height: 20px; background: var(--blue); border-radius: 50%;"></div>
                                                    <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">
                                                        GTS: {{ $contract->CompanyName}}
                                                    </h6>
                                                </div>
                                                <div class="d-flex align-content-center">
                                                    <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">
                                                        GT: {{ $contract->gigtalent->FirstName}}
                                                    </h6>
                                                </div>
                                                <div>
                                                    <a href = "{{ url('evaluation/') }}">
                                                        <button class="btn btn-info" type="button" style="border-radius: 99px;border-style: none;">See Contract <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-pen-fill">
                                                                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"></path>
                                                            </svg>
                                                        </button>
                                                    </a>
                                                    <a href = "{{ url('evaluation/') }}">
                                                        <button class="btn btn-primary" type="button" style="border-radius: 99px;border-style: none;">Verify Contract
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                    @endforeach             
                                </div>
            
                            </div>
            
                            {{-- downpayment verification------------------------------------------------------------------ --}}
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            
                                <div class="container" style="margin-bottom: 12px;margin-top: 30px; background-color: white; padding: 25px;">
                                    <h4 style="margin-bottom: 30px;">Downpayment Verification</h4>
                                    @foreach ($downpayment as $downpayment)
                                            <div class="d-flex justify-content-between" style="padding: 10px;padding-left: 20px;padding-right: 20px;">
                    
                                                
                                                <div class="d-flex">
                                                    <div style="width: 20px;height: 20px; background: var(--blue); border-radius: 50%;"></div>
                                                    <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">
                                                        GTS: {{ $downpayment->CompanyName}}
                                                    </h6>
                                                </div>
                                                <div class="d-flex align-content-center">
                                                    <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">
                                                        GT: {{ $downpayment->gigtalent->FirstName}}
                                                    </h6>
                                                </div>
                                                <div>
                                                    <a href = "{{ url('evaluation/') }}">
                                                        <button class="btn btn-info" type="button" style="border-radius: 99px;border-style: none;">See downpayment <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-pen-fill">
                                                                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"></path>
                                                            </svg>
                                                        </button>
                                                    </a><a href = "{{ url('evaluation/') }}">
                                                        <button class="btn btn-primary" type="button" style="border-radius: 99px;border-style: none;">Verify Downpayment
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                    @endforeach             
                                </div>
            
                            </div>
            
                            {{-- balance verification---------------------------------------------------------------------- --}}
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            
                                <div class="container" style="margin-bottom: 12px;margin-top: 30px; background-color: white; padding: 25px;">
                                    <h4 style="margin-bottom: 30px;">Balance Verification</h4>
                                    @foreach ($balance as $balance)
                                            <div class="d-flex justify-content-between" style="padding: 10px;padding-left: 20px;padding-right: 20px;">
                    
                                                
                                                <div class="d-flex">
                                                    <div style="width: 20px;height: 20px; background: var(--blue); border-radius: 50%;"></div>
                                                    <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">
                                                        GTS: {{ $balance->CompanyName}}
                                                    </h6>
                                                </div>
                                                <div class="d-flex align-content-center">
                                                    <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">
                                                        GT: {{ $balance->gigtalent->FirstName}}
                                                    </h6>
                                                </div>
                                                <div>
                                                    <a href = "{{ url('evaluation/') }}">
                                                        <button class="btn btn-info" type="button" style="border-radius: 99px;border-style: none;">See balance <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-pen-fill">
                                                                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"></path>
                                                            </svg>
                                                        </button>
                                                    </a>
                                                    <a href = "{{ url('evaluation/') }}">
                                                        <button class="btn btn-primary" type="button" style="border-radius: 99px;border-style: none;">Verify Balance
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                    @endforeach             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- admin compliance---------------------------------------------------------- --}}
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="container">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Payment to GT</a>
                            </li>
                            {{-- <li class="nav-item" role="presentation">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">GT Payment</a>
                            </li> --}}
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            {{-- contract verification--------------------------------------------------------------------- --}}
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="container" style="margin-bottom: 12px;margin-top: 30px; background-color: white; padding: 25px;">
                                    <h4 style="margin-bottom: 30px;">Payment to GT</h4>
                                    @foreach ($gtpayment as $gtpayment)
                                            <div class="d-flex justify-content-between" style="padding: 10px;padding-left: 20px;padding-right: 20px;">
                    
                                                
                                                <div class="d-flex">
                                                    <div style="width: 20px;height: 20px; background: var(--blue); border-radius: 50%;"></div>
                                                    <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">
                                                        GT: {{ $gtpayment->gigtalent->FirstName}}
                                                    </h6>
                                                </div>
                                                <div class="d-flex align-content-center">
                                                    <input type="file" class="form-control" />
                                                </div>
                                                <div>
                                                    
                                                    <a href = "{{ url('evaluation/') }}">
                                                        <button class="btn btn-primary" type="button" style="border-radius: 99px;border-style: none;">Upload Receipt
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                    @endforeach             
                                </div>
            
                            </div>
            
                            {{-- downpayment verification------------------------------------------------------------------ --}}
                            {{-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            
                                <div class="container" style="margin-bottom: 12px;margin-top: 30px; background-color: white; padding: 25px;">
                                    <h4 style="margin-bottom: 30px;">Downpayment Verification</h4>
                                    @foreach ($downpayment as $downpayment)
                                            <div class="d-flex justify-content-between" style="padding: 10px;padding-left: 20px;padding-right: 20px;">
                    
                                                
                                                <div class="d-flex">
                                                    <div style="width: 20px;height: 20px; background: var(--blue); border-radius: 50%;"></div>
                                                    <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">
                                                        GTS: {{ $downpayment->CompanyName}}
                                                    </h6>
                                                </div>
                                                <div class="d-flex align-content-center">
                                                    <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">
                                                        GT: {{ $downpayment->gigtalent->FirstName}}
                                                    </h6>
                                                </div>
                                                <div>
                                                    <a href = "{{ url('evaluation/') }}">
                                                        <button class="btn btn-info" type="button" style="border-radius: 99px;border-style: none;">See downpayment <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-pen-fill">
                                                                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"></path>
                                                            </svg>
                                                        </button>
                                                    </a><a href = "{{ url('evaluation/') }}">
                                                        <button class="btn btn-primary" type="button" style="border-radius: 99px;border-style: none;">Verify Downpayment
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                    @endforeach             
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
        
    
    </div>
</div>


@endsection

