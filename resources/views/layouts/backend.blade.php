<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 20:38:11 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>KRZ-HRIS - @yield('title')</title>

    <link href="{{ asset('inspinia_admin-v2.9.2/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia_admin-v2.9.2/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('inspinia_admin-v2.9.2/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia_admin-v2.9.2/css/style.css') }}" rel="stylesheet">
    <!-- Toastr style -->
    <link href="{{ asset('inspinia_admin-v2.9.2/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
    @yield('css-extend')  
</head>

<body class="">

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element">
                        <img alt="image" class="rounded-circle" src="img/profile_small.jpg"/>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">{{ Auth::user()->name}}</span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a class="dropdown-item" href="/profile">Profile</a></li>
                            <li class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>

                @yield('left-sidebar')  
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.9.2/search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <div class="div-notifications">
                <!-- notifications here -->
            </div>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>@yield('main-title')</h2>
                    @yield('breadcrumb')
                </div>
                <!-- <div class="col-sm-8">
                    <div class="title-action">
                        <a href="#" class="btn btn-primary">This is action area</a>
                    </div>
                </div> -->
            </div>

            <div class="wrapper wrapper-content fadeInRightBig">
                @yield('content')
            </div>



            <div class="footer">
                <div class="float-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2018
                </div>
            </div>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="{{ asset('inspinia_admin-v2.9.2/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('inspinia_admin-v2.9.2/js/popper.min.js') }}"></script>
    <script src="{{ asset('inspinia_admin-v2.9.2/js/bootstrap.js') }}"></script>
    <script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('inspinia_admin-v2.9.2/js/inspinia.js') }}"></script>
    <script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/pace/pace.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/fullcalendar/moment.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $.ajax({
              url: "/notifications",
              method: "get",
              dataType: "html",
              success: function(res){
                $('.div-notifications').html(res);

                setTimeout(function(){
                    loadDateMoment();
                }, 1000)
                // console.log(res, "resresresresresresres");
                // if (res.applicants_count > 0) {
                //     $('.count-notif').removeAttr('hidden');
                //     // $('.count-notif').text(res.applicants_count);
                                
                // }
              }
            });
        });


        function loadDateMoment(){
            $('.moment-label').each(function(){
                var date = $(this).text();
                $(this).text(moment(date).startOf('hour').fromNow());
                
            });
        }
    </script>
    @yield('js-extend')  

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/empty_page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 20:38:11 GMT -->
</html>
