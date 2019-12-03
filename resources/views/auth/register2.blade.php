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

    <div id="" class=""> 
        <div id="" class="">
            <div class="center wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
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

                                <form id="form" action="#" class="wizard-big">
                                    <h1>Account</h1>
                                    <fieldset>
                                        <h2>Account Information</h2>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <label>Username *</label>
                                                    <input id="userName" name="userName" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password *</label>
                                                    <input id="password" name="password" type="text" class="form-control required">
                                                </div>
                                                <div class="form-group">
                                                    <label>Confirm Password *</label>
                                                    <input id="confirm" name="confirm" type="text" class="form-control required">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="text-center">
                                                    <div style="margin-top: 20px">
                                                        <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </fieldset>
                                    <h1>Profile</h1>
                                    <fieldset>
                                        <h2>Profile Information</h2>
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <div class="ibox">
                                                <div class="ibox-title">
                                                    <h5>####################</h5>
                                                    <div class="ibox-tools">
                                                        <a class="collapse-link">
                                                            <i class="fa fa-chevron-up"></i>
                                                        </a>
                                                        <a class="fullscreen-link">
                                                            <i class="fa fa-expand"></i>
                                                        </a>
                                                        <a class="close-link">
                                                            <i class="fa fa-times"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="ibox-content">
                                                    <div class="row">
                                                      <div class="col-lg-6">
                                                        <div class="form-group row">
                                                          <label for="employee-upload" class="col-sm-3 col-form-label text-left ">Upload</label>
                                                          <div class="col-sm-9">
                                                              <input id="img-prof" type="file" name="file" class="dropify" data-default-file="{{ isset($data->id) ? asset('images/users/'.$data->id.'.jpg') : '' }}">
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <div class="row">
                                                      <div class="col-lg-6">
                                                        <div class="form-group row">
                                                          <label for="is_employed" class="col-sm-3 col-form-label text-right">Employed</label>
                                                          <div class="col-sm-9">
                                                              <div class="checkbox my-2">
                                                                 <div class="custom-control custom-checkbox">
                                                                  <input type="checkbox" class="custom-control-input" id="is_employed" name="is_employed" data-parsley-multiple="groups" data-parsley-mincheck="2" {{ isset($data->is_employed) && $data->is_employed == 1 ? 'checked' : '' }}> <label class="custom-control-label" for="is_employed" value="true"></label></div>
                                                              </div>
                                                          </div>
                                                        </div>
                                                        <div class="form-group row">
                                                          <label for="is_department_head" class="col-sm-3 col-form-label text-right">Department Head</label>
                                                          <div class="col-sm-9">
                                                              <div class="checkbox my-2">
                                                                 <div class="custom-control custom-checkbox">
                                                                  <input type="checkbox" class="custom-control-input" id="is_department_head" name="is_department_head" data-parsley-multiple="groups" data-parsley-mincheck="2" {{ isset($data->is_department_head) && $data->is_department_head == 1 ? 'checked' : '' }}> <label class="custom-control-label" for="is_department_head"></label></div>
                                                              </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="col-lg-6"></div>
                                                    </div>
                                                    <div class="row">
                                                       <div class="col-lg-6">
                                                          <div class="form-group row">
                                                             <label for="device_id" class="col-sm-3 col-form-label text-right">Device ID</label>
                                                             <div class="col-sm-9"><input class="form-control" type="text" placeholder="Device ID"  id="device_id" name="device_id" value="{{ isset($data->device_id) ? $data->device_id : '' }}"></div>
                                                          </div>
                                                          <div class="form-group row">
                                                             <label for="example-text-input" class="col-sm-3 col-form-label text-right">Employee ID</label>
                                                             <div class="col-sm-9"><input class="form-control" type="text" placeholder="Employee ID" id="employee_id" name="employee_id" value="{{ isset($data->employee_id) ? $data->employee_id : '' }}"></div>
                                                          </div>
                                                       </div>
                                                    </div>
                                                    <div class="row"> 
                                                      <div class="col-lg-6">
                                                          <div class="form-group row">
                                                             <label for="surname" class="col-sm-3 col-form-label text-right">Surname</label>
                                                             <div class="col-sm-9"><input class="form-control" type="text" placeholder="Surname" id="surname" name="surname" value="{{ isset($data->surname) ? $data->surname : '' }}"></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-6">
                                                          <div class="form-group row">
                                                             <label for="firstname" class="col-sm-3 col-form-label text-right">First Name</label>
                                                             <div class="col-sm-9"><input class="form-control" type="text" placeholder="First Name" id="firstname" name="firstname" value="{{ isset($data->firstname) ? $data->firstname : '' }}"></div>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="row"> 
                                                      <div class="col-lg-6">
                                                          <div class="form-group row">
                                                             <label for="middlename" class="col-sm-3 col-form-label text-right">Middle Name</label>
                                                             <div class="col-sm-9"><input class="form-control" type="text" placeholder="Middle Name" id="middlename" name="middlename" value="{{ isset($data->middlename) ? $data->middlename : '' }}"></div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-6">
                                                          <div class="form-group row">
                                                             <label for="suffix" class="col-sm-3 col-form-label text-right">Suffix</label>
                                                             <div class="col-sm-3"><input class="form-control" type="text" placeholder="Suffix" id="suffix" name="suffix" value="{{ isset($data->suffix) ? $data->suffix : '' }}"></div>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="row"> 
                                                      <div class="col-lg-6">
                                                          <div class="form-group row">
                                                             <label for="department" class="col-sm-3 col-form-label text-right">Department</label>
                                                             <div class="col-sm-9">
                                                                <select class="form-control" id="department" name="department">
                                                                    <option>aaaa</option>
                                                                </select>
                                                             </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-6">
                                                          <div class="form-group row">
                                                             <label for="section" class="col-sm-3 col-form-label text-right">Section</label>
                                                             <div class="col-sm-9 ">
                                                                <select class="form-control" id="section" name="section">
                                                                  <option>aaaa</option>
                                                                </select>
                                                             </div>
                                                          </div>
                                                      </div>
                                                    </div>
                                                    <div class="row"> 
                                                      <div class="col-lg-6">
                                                          <div class="form-group row">
                                                             <label for="position" class="col-sm-3 col-form-label text-right">Position</label>
                                                             <div class="col-sm-9">
                                                                <select class="form-control" id="position" name="position">
                                                                   <option>aaaa</option>
                                                                </select>
                                                             </div>
                                                          </div>
                                                      </div>
                                                      <div class="col-lg-6">
                                                          <div class="form-group row">
                                                             <label for="status" class="col-sm-3 col-form-label text-right">Status</label>
                                                             <div class="col-sm-9 ">
                                                                <select class="form-control" id="status" name="status">
                                                                   <option>aaaa</option>
                                                                </select>
                                                             </div>
                                                          </div>
                                                      </div>
                                                    </div>
                                                </div>
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
