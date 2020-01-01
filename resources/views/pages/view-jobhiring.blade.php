<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 20:43:09 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>INSPINIA - Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('inspinia_admin-v2.9.2/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Animation CSS -->
    <link href="{{ asset('inspinia_admin-v2.9.2/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia_admin-v2.9.2/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('inspinia_admin-v2.9.2/css/style.css') }}" rel="stylesheet">
    <!-- Toastr style -->
    <link href="{{ asset('inspinia_admin-v2.9.2/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
</head>
<body id="page-top" class="landing-page ">


<section id="job-hirings" class="container services">
	<a href="/" class="ladda-button btn btn-info" data-style="zoom-in" title="Apply here" disabled><i class="fa fa-arrow-left"></i> Back </a>
	<br><br>
    <div class="row">
            <div class="col-lg-12">
                <div class="ibox-content m-b-sm">
                    <div class="text-center p-lg">
                        <h1><strong>{{ $jobhiring->title }}</strong></h1>
                        <p>{{ $jobhiring->description }}</p>
            			<br>	
                       	<h3 class="text-left">REQUIREMENTS</h3>
                		<?php if (count($jobhiring->requirements) > 1): ?>
                			<ul class="text-left">
                    			<?php foreach ($jobhiring->requirements as $item): ?>
		                    			<?php if ($item != ""): ?>
		                    				<li><p>{{ $item }}</p></li>
		                    			<?php endif ?>
                    			<?php endforeach ?>
                			</ul>
                		<?php else: ?>
                			<p class="text-left">{{ $jobhiring->requirements[0] }}</p>
                		<?php endif ?>
                    	<h3 class="text-left">RESPONSIBILITIES</h3>
                    	<?php if (count($jobhiring->responsibilities) > 1): ?>
                			<ul class="text-left">
                    			<?php foreach ($jobhiring->responsibilities as $item): ?>
		                    			<?php if ($item != ""): ?>
		                    				<li><p>{{ $item }}</p></li>
		                    			<?php endif ?>
                    			<?php endforeach ?>
                			</ul>
                		<?php else: ?>
                			<p class="text-left">{{ $jobhiring->responsibilities[0] }}</p>
                		<?php endif ?>
                    	<h3 class="text-left">OTHER INFO</h3>
                    	<?php if (count($jobhiring->others) > 1): ?>
                			<ul class="text-left">
                    			<?php foreach ($jobhiring->others as $item): ?>
		                    			<?php if ($item != ""): ?>
		                    				<li><p>{{ $item }}</p></li>
		                    			<?php endif ?>
                    			<?php endforeach ?>
                			</ul>
                		<?php else: ?>
                			<p class="text-left">{{ $jobhiring->others[0] }}</p>
                		<?php endif ?>
                    	<h3 class="text-left">LOCATION:</h3>
                    	<?php if (count($jobhiring->location) > 1): ?>
                			<ul class="text-left">
                    			<?php foreach ($jobhiring->location as $item): ?>
		                    			<?php if ($item != ""): ?>
		                    				<li><p>{{ $item }}</p></li>
		                    			<?php endif ?>
                    			<?php endforeach ?>
                			</ul>
                		<?php else: ?>
                			<p class="text-left">{{ $jobhiring->location[0] }}</p>
                		<?php endif ?>
                    	<h3 class="text-left">HOW TO APPLY</h3>
                    	<?php if (count($jobhiring->how_to_apply) > 1): ?>
                			<ul class="text-left">
                    			<?php foreach ($jobhiring->how_to_apply as $item): ?>
		                    			<?php if ($item != ""): ?>
		                    				<li><p>{{ $item }}</p></li>
		                    			<?php endif ?>
                    			<?php endforeach ?>
                			</ul>
                		<?php else: ?>
                			<p class="text-left">{{ $jobhiring->how_to_apply[0] }}</p>
                		<?php endif ?>
                    </div>
                    <div class="text-center p-lg">
                        <!-- isset($applicants[Auth::user()->id][$j->id]) -->
                        <?php if (Auth::user() !== null && isset($applicants[Auth::user()->id][$jhid])): ?>
                            <button class="ladda-button btn btn-warning" disabled="">Applied</button>
                            <p><small><i>2019-12-28 10:16:12</i></small></p>
                            
                        <?php else: ?>
                            <a href="/apply/{{ $jhid }}" class="ladda-button btn btn-warning" data-style="zoom-in" title="Apply here" disabled><i class="fa fa-send-o"></i> Apply Now! </a>
                        <?php endif ?>
                    	 

                    </div>
                    

                </div>
                <div class="ibox-content m-b-sm"></div>
                
            </div>
        </div>
    </div>
</section>
<!-- Mainly scripts -->
<script src="{{ asset('inspinia_admin-v2.9.2/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('inspinia_admin-v2.9.2/js/popper.min.js') }}"></script>
<script src="{{ asset('inspinia_admin-v2.9.2/js/bootstrap.js') }}"></script>
<script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
<script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Custom and plugin javascript -->
<script src="{{ asset('inspinia_admin-v2.9.2/js/inspinia.js') }}"></script>
<script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/pace/pace.min.js') }}"></script>
<script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/wow/wow.min.js') }}"></script>
<script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/fullcalendar/moment.min.js') }}"></script>

 <!-- Toastr -->
<script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/toastr/toastr.min.js') }}"></script>
<script>

    $(document).ready(function () {
        setTimeout(function() {
            @if(\Session::has('message'))
            toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
            toastr.success('Success!', '{{session()->get('message')}}');
            @endif

        }, 1300);

        $('body').scrollspy({
            target: '#navbar',
            offset: 80
        });

        // Page scrolling feature
        $('a.page-scroll').bind('click', function(event) {
            var link = $(this);
            $('html, body').stop().animate({
                scrollTop: $(link.attr('href')).offset().top - 50
            }, 500);
            event.preventDefault();
            $("#navbar").collapse('hide');
        });
        
        // setInterval(function(){ 
            setTimeout(function(){
                $('.label-date-created').each(function(){   
                    $(this).text(moment($(this).text()).startOf('days').fromNow());
                });
            }, 1000)
        // }, 60000);
        
    });

    var cbpAnimatedHeader = (function() {
        var docElem = document.documentElement,
                header = document.querySelector( '.navbar-default' ),
                didScroll = false,
                changeHeaderOn = 200;
        function init() {
            window.addEventListener( 'scroll', function( event ) {
                if( !didScroll ) {
                    didScroll = true;
                    setTimeout( scrollPage, 250 );
                }
            }, false );
        }
        function scrollPage() {
            var sy = scrollY();
            if ( sy >= changeHeaderOn ) {
                $(header).addClass('navbar-scroll')
            }
            else {
                $(header).removeClass('navbar-scroll')
            }
            didScroll = false;
        }
        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }   
        init();

    })();

    // Activate WOW.js plugin for animation on scrol
    new WOW().init();

</script>

</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 20:44:07 GMT -->
</html>
