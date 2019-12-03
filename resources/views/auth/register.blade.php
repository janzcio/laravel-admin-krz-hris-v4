<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/form_wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 20:37:43 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Wizards</title>

    <link href="{{ asset('inspinia_admin-v2.9.2/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia_admin-v2.9.2/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia_admin-v2.9.2/css/plugins/iCheck/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia_admin-v2.9.2/css/plugins/steps/jquery.steps.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia_admin-v2.9.2/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('inspinia_admin-v2.9.2/css/style.css') }}" rel="stylesheet">
    <style type="text/css">
        .center{
            margin: auto;
            width: 80%;
            /* border: 3px solid green; */
            padding: 10px;
        }

         .content.clearfix{
            background-color:  white    !important;
        }
    </style>
</head>

<body>
    <!-- hidden -->

    <div id="" class=""> 
        <div id="" class="">
            <div class="center wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="/" class="btn btn-primary"><i class="fa fa-home"></i> Home</a>
                        <div class="ibox" style="margin-top: 25px;">
                            <div class="ibox-title">
                                <h5>Registration</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#" class="dropdown-item">Config option 1</a>
                                        </li>
                                        <li><a href="#" class="dropdown-item">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">
                                <h2>
                                    Authentication and Profile Infornation
                                </h2>
                                <p>
                                    Filll the fields.
                                </p>

                                <form id="form" method="post" action="/js/store" class="wizard-big">
                                  <input name="_token" value="{{ csrf_token() }}" type="hidden" />
                                  <input type="hidden" value="{{ isset($jhid) ? $jhid : '' }}" name="jhid">
                                    <h1>Account</h1>
                                    <fieldset>
                                        <h2>Account Information</h2>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label>Firstname *</label>
                                                    <input id="Firstname" name="firstname" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Lastname *</label>
                                                    <input id="Lastname" name="lastname" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email *</label>
                                                    <input id="Email" name="email" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password *</label>
                                                    <input id="password" name="password" type="password" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password *</label>
                                                    <input id="confirm" name="confirm" type="password" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-center">
                                                    <div style="margin-top: 20px">
                                                        <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-center">
                                                    <select name="roles[]" class="form-control" style="display: none;">
                                                      <option value="jobseeker" selected="selected">jobseeker</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                    </fieldset>
                                    <h1>Bio</h1>
                                    <fieldset>
                                        <h2>Bio</h2>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label>Gender</label>
                                                    <select name="sex" class="form-control" style="">
                                                      <option value="male" selected="selected">Male</option>
                                                      <option value="female" selected="selected">Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Date of Birth</label>
                                                    <input id="dob" name="date_of_birth" type="date" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Photo</label>
                                                    <div class="">
                                                        <div class="custom-file">
                                                            <input id="profpic" type="file" name="file" class="custom-file-input">
                                                            <label for="profpic" class="custom-file-label">Choose file...</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Bio (brief intro) *</label>
                                                    <textarea name="bio" id="bio" class="form-control"></textarea>
                                                </div>

                                            </div>
                                        </div>
                                    </fieldset>

                                    <h1>Warning</h1>
                                    <fieldset>
                                        <div class="text-center" style="margin-top: 120px">
                                            <h2>You did it Man :-)</h2>
                                        </div>
                                    </fieldset>

                                    <h1>Finish</h1>
                                    <fieldset>
                                        <h2>Terms and Conditions</h2>
                                        <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>

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

    <!-- Steps -->
    <script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/steps/jquery.steps.min.js') }}"></script>

    <!-- Jquery Validate -->
    <script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/validate/jquery.validate.min.js') }}"></script>


    <script>
        $(document).ready(function(){
            /*For File upload */
            $('.custom-file-input').on('change', function() {
                console.log('asdadadasd');
               let fileName = $(this).val().split('\\').pop();
               $(this).next('.custom-file-label').addClass("selected").html(fileName);
            }); 
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.2/form_wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Oct 2019 20:37:44 GMT -->
</html>
