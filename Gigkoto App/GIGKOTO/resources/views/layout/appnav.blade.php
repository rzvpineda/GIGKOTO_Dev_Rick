<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    
    
        
    {{-- line awesome----------------------------------------------------------------- --}}
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    {{-- font awesome----------------------------------------------------------------- --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- bootstrap---------------------------------------------------------- --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    
        
        <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> --}}
        {{-- <script src="jquery-3.5.1.min.js"></script> --}}
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script> --}}
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
        <script>$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });</script>

        <style>
            html, body{
                margin: 0;
            }
            /* navbar ------------------------------------------------------------------------------------*/
            .navigation-clean-button {
            background: #222222;
            padding-top: 10px;
            padding-bottom: 10px;
            color: #f2f5f8;
            border-radius: 0;
            box-shadow: none;
            border: none;
            margin-bottom: 0;
            }

            @media (max-width:767px) {
            .navigation-clean-button {
                padding-top: 0;
                padding-bottom: 0;
            }
            }

            @media (max-width:767px) {
            .navigation-clean-button .navbar-header {
                padding-top: 10px;
                padding-bottom: 10px;
            }
            }

            @media (max-width:767px) {
            .navigation-clean-button .navbar-right {
                margin-bottom: 20px;
            }
            }

            .navigation-clean-button .navbar-brand {
            font-weight: bold;
            color: inherit;
            }

            .navigation-clean-button .navbar-brand:hover {
            color: #1485ee;
            }

            .navigation-clean-button .navbar-brand img {
            height: 100%;
            display: inline-block;
            margin-right: 10px;
            width: auto;
            }

            .navigation-clean-button .navbar-toggle {
            border-color: #ddd;
            }

            .navigation-clean-button .navbar-toggle:hover, .navigation-clean-button .navbar-toggle:focus {
            background: none;
            }

            .navigation-clean-button .navbar-toggle .icon-bar {
            background-color: #888;
            }

            .navigation-clean-button .navbar-collapse, .navigation-clean-button .navbar-form {
            border-top-color: #ddd;
            }

            .navigation-clean-button .navbar-nav > .active > a, .navigation-clean-button .navbar-nav > .open > a {
            background: none;
            box-shadow: none;
            }

            .navigation-clean-button.navbar-default .navbar-nav > .active > a, .navigation-clean-button.navbar-default .navbar-nav > .active > a:focus, .navigation-clean-button.navbar-default .navbar-nav > .active > a:hover {
            color: #e04c40;
            border-top: 1px solid #e04c40;
            box-shadow: none;
            transition: background-color 0.25s;
            background: none;
            pointer-events: none;
            }

            .navigation-clean-button.navbar .navbar-nav > li > a {
            padding-left: 18px;
            padding-right: 18px;
            }

            .navigation-clean-button.navbar-default .navbar-nav > li > a {
            color: #dfe8ee;
            font-weight: 400;
            text-transform: uppercase;
            font-family: 'Work Sans';
            }

            .navigation-clean-button.navbar-default .navbar-nav > li > a:focus, .navigation-clean-button.navbar-default .navbar-nav > li > a:hover {
            color: #e04c40 !important;
            border-top: solid 1px #e04c40;
            background-color: transparent;
            transition: background 0.2s ease, padding 0.8s linear;
            transition: background-color 0.25s;
            }

            .navigation-clean-button .navbar-nav > li > .dropdown-menu {
            margin-top: -5px;
            box-shadow: 0 4px 8px rgba(0,0,0,.1);
            background-color: #222222;
            border-radius: 2px;
            }

            .navigation-clean-button .dropdown-menu > li > a:focus, .navigation-clean-button .dropdown-menu > li > a {
            line-height: 2;
            font-size: 14px;
            font-weight: 300;
            font-family: 'Roboto';
            color: #df4c40;
            }

            .navigation-clean-button .dropdown-menu > li > a:focus, .navigation-clean-button .dropdown-menu > li > a:hover {
            background: #df4c40;
            color: inherit;
            transition: background-color 0.25s;
            transition-timing-function: ease;
            transition-timing-function: cubic-bezier(0.25, 0.1, 0.25, 1);
            }

            .navigation-clean-button .actions {
            margin-top: 7px;
            margin-bottom: 0;
            }

            .navigation-clean-button .actions .login {
            margin-right: 7px;
            text-decoration: none;
            color: #ffffff;
            }

            .navigation-clean-button .action-button, .navigation-clean-button .action-button:active {
            background: transparent;
            border-radius: 0;
            color: #e04c40;
            box-shadow: none;
            border: 1px solid #e04c40;
            text-shadow: none;
            padding: 10px 22px;
            transition: background-color 0.25s;
            }

            .navigation-clean-button .action-button:hover {
            background: #e04c40;
            color: #fff;
            font-weight: 400;
            border: 1px solid #df4c40;
            }

            .navbar {
            margin-bottom: 0;
            }

            .btn {
            border-radius: 0;
            }

            a.navbar-brand.navbar-link {
            font-weight: 400;
            }

            p.navbar-text.navbar-right.actions {
            font-family: 'Roboto Slab';
            text-transform: uppercase;
            font-weight: 400;
            }

            a.navbar-link.login:hover {
            color: #e04c40;
            }

            .btn.focus, .btn:focus, .btn:hover {
            color: #ffffff;
            text-decoration: none;
            background-color: #1485ee;
            border: none;
            }

            .btn-default {
            color: #ffffff;
            background-color: #df4c40;
            border: none;
            }

            .btn {
            font-family: 'Roboto';
            font-weight: 400;
            }

            /* featured boxes -------------------------------------------------------------------------------- */

            #DashMainCon {
            overflow: auto;
            }


            .features-boxed {
            color: #313437;
            background-color: #eef4f7;
            }

            .features-boxed p {
            color: #7d8285;
            }

            .features-boxed h2 {
            font-weight: bold;
            margin-bottom: 40px;
            padding-top: 40px;
            color: inherit;
            }

            @media (max-width:767px) {
            .features-boxed h2 {
                margin-bottom: 25px;
                padding-top: 25px;
                font-size: 24px;
            }
            }

            .features-boxed .intro {
            font-size: 16px;
            max-width: 500px;
            margin: 0 auto;
            }

            .features-boxed .intro p {
            margin-bottom: 0;
            }

            .features-boxed .features {
            padding: 50px 0;
            }

            .features-boxed .item {
            text-align: center;
            }

            .features-boxed .item .box {
            text-align: center;
            padding: 30px;
            background-color: #fff;
            margin-bottom: 30px;
            }

            .features-boxed .item .icon {
            font-size: 60px;
            color: #1485ee;
            margin-top: 20px;
            margin-bottom: 35px;
            }

            .features-boxed .item .name {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 8px;
            margin-top: 0;
            color: inherit;
            }

            .features-boxed .item .description {
            font-size: 15px;
            margin-top: 15px;
            margin-bottom: 20px;
            }

            /* fileupload--------------------------------------------------------------------------------------- */
            /* .files input {
            outline: 2px dashed #92b0b3;
            outline-offset: -10px;
            -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
            transition: outline-offset .15s ease-in-out, background-color .15s linear;
            padding: 120px 0px 85px 35%;
            text-align: center !important;
            margin: 0;
            width: 100% !important;
            }

            .files input:focus {
            outline: 2px dashed #92b0b3;
            outline-offset: -10px;
            -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
            transition: outline-offset .15s ease-in-out, background-color .15s linear;
            border: 1px solid #92b0b3;
            }

            .files {
            position: relative;
            }

            .files:after {
            pointer-events: none;
            position: absolute;
            top: 60px;
            left: 0;
            width: 50px;
            right: 0;
            height: 56px;
            content: "";
            background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
            display: block;
            margin: 0 auto;
            background-size: 100%;
            background-repeat: no-repeat;
            }

            .color input {
            background-color: #eeeeee;
            }

            .files:before {
            position: absolute;
            bottom: 10px;
            left: 0;
            pointer-events: none;
            width: 100%;
            right: 0;
            height: 57px;
            content: " or drag it here. ";
            display: block;
            margin: 0 auto;
            color: #2ea591;
            font-weight: 600;
            text-transform: capitalize;
            text-align: center;
            } */

            /* job summary----------------------------------------------------------------------------------------------- */
            .space {
            letter-spacing: 0.8px !important;
            }

            .second a:hover {
            color: rgb(92, 92, 92);
            }

            .btn-lg, .form-control-sm:focus, .form-control-sm:active, a:focus, a:active {
            outline: none !important;
            box-shadow: none !important;
            }

            .btn-group-lg > .btn, .btn-lg {
            padding: .5rem 0.1rem;
            font-size: 1rem;
            border-radius: 0;
            color: white !important;
            background-color: rgb(255,199,0);
            height: 2.8rem !important;
            border-radius: 0.2rem !important;
            }

            .btn-group-lg > .btn:hover, .btn-lg:hover {
            background-color: rgb(255,138,0);
            }

            .card-2 {
            margin-top: 40px !important;
            }

            .card-header {
            background-color: #fff;
            border-bottom: 0px solid #aaaa !important;
            }

            p {
            font-size: 13px;
            }

            .small {
            font-size: 9px !important;
            }

            .cursor-pointer {
            cursor: pointer;
            }

            .bell {
            opacity: 0.5;
            cursor: pointer;
            }

        </style>
</head>

<body>
    
    <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button">
        <div class="container">
            <div><a class="navbar-brand" href="#"><span><img src="../storage/img/logowhite.png" style="height: 40px;"></span> </a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav nav-right">
                    {{-- <li class="nav-item"><a class="nav-link active" href="index.html" style="color: rgb(255,255,255);">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="index.html" style="color: rgb(255,255,255);">Applications</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html" style="color: rgb(255,255,255);">Available Jobs</a></li>
                    <li class="nav-item"><a class="nav-link" href="faq.html" style="color: rgb(255,255,255);">GIG Talent-Seeker</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="about.html" style="color: rgb(255,255,255);">Job Opportunities</a></li>
                    <li class="nav-item"><a class="nav-link" href="faq.html" style="color: rgb(255,255,255);">Support & Resources</a></li>
                </ul>
                <p class="ml-auto navbar-text actions"><a class="login" href="{{ route('logout') }}">Log out</a> </p>
            </div>
        </div>
    </nav>
    @yield('content')


    {{-- bootstrap js--------------------------------------------------------------------------------------------------------- --}}
    {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    {{-- ion icons---------------------------------------------------------------------------------------------------- --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

</body>
</html>