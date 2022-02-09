@extends('layout.appnavwithsidebar')
@section('content')

<script>
    document.body.style.backgroundColor = "rgb(248,248,248)";
</script>

<div class="row" style = "max-height: 200vh; margin:0;">

    
    {{-- <div class="col-md-1 d-flex flex-column align-items-center" style="padding-top: 25%;background: #ffffff;max-height: 100%;padding-right: 0px;"><i class="la la-dashboard" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-briefcase" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="fa fa-folder-open-o" style="margin-bottom: 30px;font-size: 20px;color: rgb(85,85,85);"></i><i class="la la-book" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i><i class="la la-user" style="margin-bottom: 30px;font-size: 30px;color: rgb(85,85,85);"></i></div> --}}
    <div class="col-md-12" id="DashMainCon" style="max-height: 100vh;">
        <div class="container">
            
            
            <div class="container" style="margin-bottom: 12px;margin-top: 30px; background-color: white; max-width: 1000px; max-height: 1200px; padding: 25px;">
                <h4 style="margin-bottom: 30px;">Your Job List</h4>
                @foreach ($job as $job)
                        <div class="d-flex justify-content-between" style="padding: 10px;padding-left: 20px;padding-right: 20px;">

                            
                            <div class="d-flex">
                                <div style="width: 20px;height: 20px;
                                @if($job->ApplicationStatus == 'application')
                                    background: var(--blue);
                                @elseif($job->ApplicationStatus == 'selection')
                                    background: var(--orange);
                                @elseif($job->ApplicationStatus == 'ongoing')
                                    background: var(--green);
                                @endif
                                border-radius: 50%;"></div>

                                <h6 class="text-capitalize" style="margin-left: 20px;color: rgb(99,99,99);">
                                    {{ $job->AreaOfExpertise}}
                                </h6>
                            </div>
                            <div class="d-flex align-content-center">
                                <p>Date Added: {{ $job->create_at }}</p>
                               
                            </div>
                            <div>
                                <a href = "{{ url('evaluation/'.$job->ID) }}">
                                    <button class="btn btn-info" type="button" style="border-radius: 99px;border-style: none;">Process <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" class="bi bi-pen-fill">
                                            <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"></path>
                                        </svg>
                                    </button>
                                </a>
                            </div>
                        </div>
                @endforeach             
            </div>
            
        </div>
    
    </div>
</div>


@endsection

