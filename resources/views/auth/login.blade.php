<?php if (Auth::user()): ?>
    <?= "Welcome! " . Auth::user()->name; ?>
<?php else: ?>
    <?= "" ?>
<?php endif ?>

<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/login_two_columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 20:38:11 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KRZ-HRIS | Login </title>

    <link href="{{ asset('inspinia_admin-v2.9.2/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia_admin-v2.9.2/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('inspinia_admin-v2.9.2/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia_admin-v2.9.2/css/style.css') }}" rel="stylesheet">
    <style type="text/css">
        .text-colo-cornsilk{
            color: cornsilk !important;
        }
    </style>
</head>

<body class="">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6 text-colo-cornsilk" >
                <h2 class="font-bold">Welcome to KRZ-HRIS</h2>

                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <input name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" required="">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required="">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="{{ url('/register') }}">Create an account</a>
                    </form>
                    <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright @SLDC
            </div>
            <div class="col-md-6 text-right">
               <small>© 2019-2020</small>
            </div>
        </div>
    </div>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/login_two_columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 20:38:11 GMT -->
</html>
