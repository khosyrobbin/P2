
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Register PENCATDUK</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" type="image/png" href="{{asset('templateLogin')}}/images/icons/favicon.ico" />

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/vendor/bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/vendor/animate/animate.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/vendor/css-hamburgers/hamburgers.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/vendor/animsition/css/animsition.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/vendor/select2/select2.min.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/vendor/daterangepicker/daterangepicker.css">

        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/css/util.css">
        <link rel="stylesheet" type="text/css" href="{{asset('templateLogin')}}/css/main.css">

        <meta name="robots" content="noindex, follow">
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                        <span class="login100-form-title-1">
                            REGISTER PENCATATAN PENDUDUK
                        </span>
                    </div>
                    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="wrap-input100 validate-input m-b-26" data-validate="NIK is required">
                            <span class="label-input100">NIK</span>
                                <input class="input100" type="nik" name="nik" placeholder="Enter NIK">
                            <span class="focus-input100"></span>
                            @error('nik')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                            <span class="label-input100">Username</span>
                                <input class="input100" type="name" name="name" placeholder="Enter username">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
                            <span class="label-input100">Email</span>
                                <input class="input100" type="email" name="email" placeholder="Enter Email">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                            <span class="label-input100">Password</span>
                                <input class="input100" type="password" name="password" placeholder="Enter password">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                            <span class="label-input100">Confirm Password</span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Register
                            </button>
                        </div>
                        <div class="flex-sb-m w-full p-b-30">
                            <div></div>
                            <div>
                                <a href="{{ route('login') }}" class="txt2">
                                    Login
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="{{asset('templateLogin')}}/vendor/jquery/jquery-3.2.1.min.js"></script>

        <script src="{{asset('templateLogin')}}/vendor/animsition/js/animsition.min.js"></script>

        <script src="{{asset('templateLogin')}}/vendor/bootstrap/js/popper.js"></script>
        <script src="{{asset('templateLogin')}}/vendor/bootstrap/js/bootstrap.min.js"></script>

        <script src="{{asset('templateLogin')}}/vendor/select2/select2.min.js"></script>

        <script src="{{asset('templateLogin')}}/vendor/daterangepicker/moment.min.js"></script>
        <script src="{{asset('templateLogin')}}/vendor/daterangepicker/daterangepicker.js"></script>

        <script src="{{asset('templateLogin')}}/vendor/countdowntime/countdowntime.js"></script>

        <script src="{{asset('templateLogin')}}/js/main.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
            </script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"69a5a60ce9904583","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.9.0","si":100}'></script>
    </body>
</html>
