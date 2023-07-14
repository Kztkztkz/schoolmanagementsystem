<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>School Management</title>
    @include('layout.css')
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body class=" ">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>


    <div class=" container-fluid login-page">
        <div class="row vh-100 position-relative">
            <div class="col-5 bg-dark"></div>
            <div class="col-7">
                <div class="col-6 login-form position-absolute">
                    <div class="d-flex">
                        <div class="col-4 login-left bg-dark">
                            <div class=" d-flex flex-column align-items-center">
                                <img src="{{ asset('admin/assets/images/undraw_team_up_re_84ok.svg') }}" class="login-img img-fluid" alt="">
                                <p class="my-2 fw-bolder text-white">School Management System</p>
                            </div>
                        </div>
                        <div class="col-8 login-right">
                            <h4 class="text-center pb-2 border-bottom border-dark">Login</h4>
                            <div class="d-flex flex-column justify-content-center align-items-center mt-5">
                                <div class="form-group d-flex align-items-center w-100 mb-4">
                                    <label   for="startdate">Email</label>
                                    <input type="email" class="form-control w-75" id="enddate" placeholder="enter email">
                                </div>
                                <div class="form-group d-flex align-items-center w-100">
                                    <label   for="name">Password</label>
                                    <input type="password" class="form-control w-75" id="name" placeholder="enter password">
                                </div>
                                <a href="{{ route('student.index') }}" class="btn btn-primary btn-sm px-3 mt-3 fs-5">login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    @include('layout.script')

</body>

</html>
