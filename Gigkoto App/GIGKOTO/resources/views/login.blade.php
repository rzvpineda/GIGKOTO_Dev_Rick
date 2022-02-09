<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        {{-- font awesome----------------------------------------------------------------- --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css" integrity="sha512-72McA95q/YhjwmWFMGe8RI3aZIMCTJWPBbV8iQY3jy1z9+bi6+jHnERuNrDPo/WGYEzzNs4WdHNyyEr/yXJ9pA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- bootstrap---------------------------------------------------------- --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <style>
            /* login------------------------------------------- */
            .login-clean {
            background: #f1f7fc;
            padding: 80px 0;
            }

            .login-clean form {
            max-width: 400px;
            width: 90%;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 4px;
            color: #505e6c;
            box-shadow: 1px 1px 5px rgba(0,0,0,0.1);
            }

            .login-clean .illustration {
            text-align: center;
            padding: 0 0 20px;
            font-size: 100px;
            color: rgb(244,71,107);
            }

            .login-clean form .form-control {
            background: #f7f9fc;
            border: none;
            border-bottom: 1px solid #dfe7f1;
            border-radius: 0;
            box-shadow: none;
            outline: none;
            color: inherit;
            text-indent: 8px;
            height: 42px;
            }

            .login-clean form .btn-primary {
            background: #f4476b;
            border: none;
            border-radius: 4px;
            padding: 11px;
            box-shadow: none;
            margin-top: 26px;
            text-shadow: none;
            outline: none !important;
            }

            .login-clean form .btn-primary:hover, .login-clean form .btn-primary:active {
            background: #eb3b60;
            }

            .login-clean form .btn-primary:active {
            transform: translateY(1px);
            }

            .login-clean form .forgot {
            display: block;
            text-align: center;
            font-size: 12px;
            color: #6f7a85;
            opacity: 0.9;
            text-decoration: none;
            }

            .login-clean form .forgot:hover, .login-clean form .forgot:active {
            opacity: 1;
            text-decoration: none;
            }

            /* nav-------------------------------------------------------------------- */
            .navigation-clean {
            background: #fff;
            padding-top: .75rem;
            padding-bottom: .75rem;
            color: #333;
            border-radius: 0;
            box-shadow: none;
            border: none;
            margin-bottom: 0;
            }

            @media (min-width:768px) {
            .navigation-clean {
                padding-top: 1rem;
                padding-bottom: 1rem;
            }
            }

            .navigation-clean .navbar-brand {
            font-weight: bold;
            color: inherit;
            }

            .navigation-clean .navbar-brand:hover {
            color: #222;
            }

            .navigation-clean .navbar-toggler {
            border-color: #ddd;
            }

            .navigation-clean .navbar-toggler:hover, .navigation-clean .navbar-toggler:focus {
            background: none;
            }

            .navigation-clean .navbar-toggler {
            color: #888;
            }

            .navigation-clean .navbar-collapse, .navigation-clean .form-inline {
            border-top-color: #ddd;
            }

            .navigation-clean.navbar-light .navbar-nav .nav-link.active, .navigation-clean.navbar-light .navbar-nav .nav-link.active:focus, .navigation-clean.navbar-light .navbar-nav .nav-link.active:hover {
            color: #8f8f8f;
            box-shadow: none;
            background: none;
            pointer-events: none;
            }

            .navigation-clean.navbar .navbar-nav .nav-link {
            padding-left: 18px;
            padding-right: 18px;
            }

            .navigation-clean.navbar-light .navbar-nav .nav-link {
            color: #465765;
            }

            .navigation-clean.navbar-light .navbar-nav .nav-link:focus, .navigation-clean.navbar-light .navbar-nav .nav-link:hover {
            color: #37434d !important;
            background-color: transparent;
            }

            .navigation-clean .navbar-nav > li > .dropdown-menu {
            margin-top: -5px;
            box-shadow: none;
            background-color: #fff;
            border-radius: 2px;
            }

            .navigation-clean .dropdown-menu .dropdown-item:focus, .navigation-clean .dropdown-menu .dropdown-item {
            line-height: 2;
            color: #37434d;
            }

            .navigation-clean .dropdown-menu .dropdown-item:focus, .navigation-clean .dropdown-menu .dropdown-item:hover {
            background: #eee;
            color: inherit;
            }
        </style>
       
</head>

<body>
    
    <section class="login-clean" style="background: url('storage/img/loginBG.png') left / cover no-repeat;padding-top: 0px;padding-bottom: 0px;height: 100vh;">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background: rgba(255,255,255,0);">
            <div class="container"><a class="navbar-brand" href="#"><span><img src="storage/img/logoblack.png" style="height: 61px;" /></span></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{ route('gtsRegistration') }}" style="color: rgb(186,172,123);">Register as Gig Talent Seeker</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('gtRegistration') }}" style="color: rgb(186,172,123);">Register as Gig Talent</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <form action = "{{ route('Login') }}"  method="POST" style="margin-top: 5vh;max-width: 450px;padding-bottom: 100px;padding-top: 70px;">
        @csrf
            <div class="illustration" style="padding-bottom: 10px;">
                <h3 style="color: rgb(102,102,102);">Login</h3>
            </div>
            <div style="text-align: center;margin-bottom: 55px;"><small style="text-align: center;">REIMAGINE THE WORKFORCE OF THE FUTURE</small></div>
            <div class="form-group"><input type="text" class="form-control" name="gtUsername" placeholder="Username" style="background: rgba(247,249,252,0);border-style: none;border-bottom-style: solid;border-bottom-color: rgb(191,191,191);" /></div>
            <div class="form-group"><input type="password" class="form-control" name="gtPassword" placeholder="Password" style="background: rgba(247,249,252,0);border-bottom-style: solid;border-bottom-color: rgb(191,191,191);" /></div>
            <div class="form-group"><button class="btn btn-block" type="submit" style="background: #fdc81c;color: rgb(255,255,255);">Log In</button></div><a class="forgot" href="#" style="color: rgb(253,199,26);">Forgot your email or password?</a>
        </form>
    </section>

    {{-- bootstrap js--------------------------------------------------------------------------------------------------------- --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    {{-- ion icons---------------------------------------------------------------------------------------------------- --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</body>
</html>