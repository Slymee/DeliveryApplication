<!doctype html>
<html lang="en">
<head>
    <title>@yield('page-title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    @vite(['resources/css/login-register/css/style.css'])

</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">Delivery Application</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                        <div class="text w-100">
                            <h2>@yield('signup-login-title')</h2>
                            <p>@yield('signup-login-description')</p>
                            <a href="@yield('signup-login-route')" class="btn btn-white btn-outline-white">@yield('signup-login-navigate')</a>
                        </div>
                    </div>
                    <div class="login-wrap p-4 p-lg-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">@yield('form-title')</h3>
                            </div>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                </p>
                            </div>
                        </div>
                        @yield('login-register-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--@vite(['resources/js/login-register/js/jquery.min.js'])--}}
{{--@vite(['resources/js/login-register/js/popper.js'])--}}
{{--@vite(['resources/js/login-register/js/bootstrap.min.js'])--}}
{{--@vite(['resources/js/login-register/js/main.js'])--}}
</body>
</html>

