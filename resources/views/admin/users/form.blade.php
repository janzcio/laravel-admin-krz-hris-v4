 <style type="text/css">
     .custom-file{
        width: 40% !important;
     }

     .input-group.date>input{
        font-size: 12px !important;
     }
 </style>
 <div class="row">
    <div class="col-lg-12">
        <div class="ibox  ">
            <div class="ibox-title">
                <h5>Accounts <small>Credentials.</small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                    {!! Form::label('email', 'Email: ', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
                        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
                    {!! Form::label('password', 'Password: ', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        @php
                            $passwordOptions = ['class' => 'form-control'];
                            if ($formMode === 'create') {
                                $passwordOptions = array_merge($passwordOptions, ['required' => 'required']);
                            }
                        @endphp
                        {!! Form::password('password', $passwordOptions) !!}
                        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
                    </div>
                </div>
                <div class="form-group{{ $errors->has('roles') ? ' has-error' : ''}}">
                    {!! Form::label('role', 'Role: ', ['class' => 'col-md-4 control-label']) !!}
                    <div class="col-md-6">
                        {!! Form::select('roles[]', $roles, isset($user_roles) ? $user_roles : [], ['class' => 'form-control', 'multiple' => true]) !!}
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</div>

 <div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Profile <small>Information</small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <!-- Personal Information Start -->
                <div class="form-group  row">
                    <label class="col-sm-4 col-form-label"><u>Personal Information</u></label>        <!-- Header -->
                    <div class="col-sm-8">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Photo</label>
                    <div class="col-sm-10">
                        <div class="custom-file">
                            <input id="profpic" type="file" name="file" class="custom-file-input">
                            <label for="profpic" class="custom-file-label">Choose file...</label>
                        </div>
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Employed</label>
                    <div class="col-sm-10">
                        <div class="i-checks">
                            <label> 
                                <input type="checkbox" value="" checked="" name="is_employed"> 
                                <i></i> 
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Department Head</label>
                    <div class="col-sm-10">
                        <div class="i-checks">
                            <label> 
                                <input type="checkbox" value="" checked="" name="is_department_head"> 
                                <i></i> 
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Device ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="device_id">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Employee ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="employee_id_no">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Surname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="surname">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Firstname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="firstname">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Middlename</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="middlename">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Suffix</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="suffix">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Department</label>
                    <div class="col-sm-2">
                        <select class="form-control m-b" name="department">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Section</label>
                    <div class="col-sm-10">
                        <select class="form-control m-b" name="section">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Position</label>
                    <div class="col-sm-10">
                        <select class="form-control m-b" name="position">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="form-control m-b" name="status">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Salary Schedule</label>
                    <div class="col-sm-2">
                        <div class="input-group date">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                            <input type="date" class="form-control" value="03/04/2014" name="salary_schedule">
                        </div>
                    </div>
                    <label class="col-sm-1 col-form-label">SG</label>
                    <div class="col-sm-3">
                        <select class="form-control m-b" name="sg">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                        </select>
                    </div>
                    <label class="col-sm-1 col-form-label">Step</label>
                    <div class="col-sm-3">
                        <select class="form-control m-b" name="step">
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Month Salary</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="monthly_salary">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-10">
                        <div class="input-group date">
                            <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span>
                            <input type="date" class="form-control" value="03/04/2014" name="date_of_birth">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Place of Birth</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="place_of_birth"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sex</label>
                    <div class="col-sm-4">
                        <select class="form-control m-b" name="sex">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label">Civil Status</label>
                    <div class="col-sm-4">
                        <select class="form-control m-b" name="civil_Status">
                            <option>Single</option>
                            <option>Maried</option>
                            <option>Devorced</option>
                        </select>
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Height(m)</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="height">
                    </div>
                    <label class="col-sm-2 col-form-label">Weight(Kg)</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="weight">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">GSIS ID No.</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="gsis_id_no">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">PAG-IBIG ID No.</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="pagibig_id_no">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Phil Health No.</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="phil_health_no">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">SSS No.</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="sss_no">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">TIN No.</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tin_no">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Agency Emplo. No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="agency_emp_no">
                    </div>
                </div>
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Citizenship</label>
                    <div class="col-sm-4">
                        <div class="i-checks">
                            <label> 
                                <input type="radio" value="option1" name="citizenship"> 
                                <i></i> Filipino
                            </label>
                        </div>
                        <div class="i-checks">
                            <label> 
                                <input type="radio" checked="" value="option2" name="citizenship"> 
                                <i></i> Dual Citizenship
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="i-checks">
                            <label> 
                                <input type="radio" value="option1" name="citizenship_by"> 
                                <i></i> by birth
                            </label>
                        </div>
                        <div class="i-checks">
                            <label> 
                                <input type="radio" checked="" value="option2" name="citizenship_by"> 
                                <i></i> by naturalization
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Country</label>
                    <div class="col-sm-4">
                        <select class="form-control m-b" name="country">
                            <option>Country 1</option>
                            <option>Country 1</option>
                        </select>
                    </div>
                </div>
                <!-- Personal Information End -->
                <div class="hr-line-dashed"></div>
                <!-- Residential Address Start -->
                <div class="form-group  row">
                    <label class="col-sm-4 col-form-label"><u>Residential Address</u></label>        <!-- Header -->
                    <div class="col-sm-8">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">House/Block/Lot No.</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="house_block_lot"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Street</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="street"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Subdivision/Village</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="subdivision_or_village">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Barangay</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="barangay">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">City/Municipality</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="city_or_municipality">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Province</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="province">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Zip Code</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="zipcode">
                    </div>
                </div>
                <!-- Residential Address End -->
                <div class="hr-line-dashed"></div>
                <!-- Contact Information start -->
                <div class="form-group  row">
                    <label class="col-sm-4 col-form-label"><u>Contact Information</u></label>        <!-- Header -->
                    <div class="col-sm-8">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tel. No.</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="tel_no">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Mobile No.</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mobile_no">
                    </div>
                </div>
                <!-- Contact Information End -->
                <div class="hr-line-dashed"></div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Highest Educational Attainment</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="highest_educational_attainment">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">First Day of Service In Gov't</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="first_day_of_service_in_govt">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Casual Appointment</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="casual_appointment">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Original Appointment</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="original_appointment">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nature of Appointment</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nature_of_appointment">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-4">
                        <div class="i-checks">
                            <label> 
                                <input type="checkbox" value="" name="status_type"> 
                                <i></i> Smoker </label>
                            </div>
                        <div class="i-checks">
                            <label> 
                                <input type="checkbox" value="" name="status_type"> 
                                <i></i> Indigenous People
 
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="i-checks">
                            <label> 
                                <input type="checkbox" value="" name="status_type"> 
                                <i></i> PWD </label>
                            </div>
                        <div class="i-checks">
                            <label> 
                                <input type="checkbox" value="" name="status_type"> 
                                <i></i> Solo Parent
                            </label>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Family Background <small> Family Information</small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <!-- Spouse's Information Start -->
                <div class="form-group  row">
                    <label class="col-sm-4 col-form-label"><u>Spouse's Information</u></label>        <!-- Header -->
                    <div class="col-sm-8">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Spouse's Surname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="spouse_surname">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Spouse's Firstname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Spouse's Middle Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="spouse_middlename">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Spouse's Occupation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="spouse_occupation">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Spouse's Employer/Bus. Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="spouse_employer_bus_name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Spouse's Business Address</label>
                    <div class="col-sm-10">
                        <textarea type="text" class="form-control" name="spouse_business_address"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Spouse's Telephone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="spouse_bus_telephone">
                    </div>
                </div>
                <!-- Spouse's Information End -->
                <!-- Father's Information Start -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Father's Surname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="father_surname">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Father's First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="father_firstname">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Father's Middle Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="father_middlename">
                    </div>
                </div>
                <!-- Father's Information End -->
                <!-- Mother's Information -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Mother's Maiden Surname</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mother_surname">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Mother's First Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mother_firstname">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Mother's Middle Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="mother_middlename">
                    </div>
                </div>
                <!-- Mother's Information -->

                <!-- Children start -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Mother's Middle Name</label>
                    <div class="col-sm-10">
                         <table id="myTable" class="table children-list">
                            <thead>
                                <tr>
                                    <td>Name</td>
                                    <td>Birthdate</td>
                                    <td>Age</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                              <?php if (isset($data->children)): ?>
                                <?php foreach ($data->children as $key => $value): ?>
                                  <tr>
                                      <td><input type="text" class="form-control children_name" value="{{$value->name}}" /></td>
                                      <td><input type="date" class="form-control children_birthdate" value="{{$value->dob}}"/></td>
                                      <td><input type="number" class="form-control children_age" value="{{$value->age}}"/></td>
                                      <td><input type="button" class="ibtnDelChildren btn btn-md btn-danger btn-xs"  value="Delete"></td>
                                  </tr>
                                <?php endforeach ?>
                              <?php endif ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5" style="text-align: left;">
                                        <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs" id="addChildren" value="Add Children" title="Add Children" />
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- Children end -->
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Educational <small> </small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;" id="addEducational" value="Add Work Experience" />
                <div class="table-responsive" style="overflow: auto;">
                  <table class="table table-striped mb-0 educational-list"> 
                     <thead class="">
                        <tr>
                           <th style="width: 30% !important;">Level</th>
                           <th style="width: 30% !important;">Name of School</th>
                           <th style="width: 30% !important;">Degree Course</th>
                           <th style="width: 30% !important;">Year Graduated</th>
                           <th style="width: 30% !important;">Highest Grade/Level/Units Earned</th>
                           <th style="width: 30% !important;">Date From</th>
                           <th style="width: 30% !important;">Date to</th>
                           <th style="width: 30% !important;">Scholarship/Academic Honors Recieved</th>
                           <th style="width: 30% !important;">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php if (isset($data->educational)): ?>
                          <?php foreach ($data->educational as $key => $value): ?>
                            <tr>
                              <td><input style="width: 100px;"  type="text" class="form-control-sm level" value="{{$value->level}}" /></td>
                              <td><input style="width: 100px;"  type="text" class="form-control-sm name_of_school" value="{{$value->name_of_school}}" /></td>
                              <td><input style="width: 100px;"  type="text" class="form-control-sm degree_course" value="{{$value->degree_course}}" /></td>
                              <td><input style="width: 100px;"  type="text" class="form-control-sm year_graduated" value="{{$value->year_graduated}}" /></td>
                              <td><input style="width: 500px;"  type="text" class="form-control-sm highest_grade_level_units_earned" value="{{$value->highest_grade_level_units_earned}}" /></td>
                              <td><input style="width: 100%;"  type="date" class="form-control-sm date_from" value="{{$value->date_from}}" /></td>
                              <td><input style="width: 100%;"  type="date" class="form-control-sm date_to" value="{{$value->date_to}}" /></td>
                              <td><input style="width: 100px;"  type="text" class="form-control-sm scholarship_academic_honors_recieved" value="{{$value->scholarship_academic_honors_recieved}}" /></td>

                              <td><input type="button" class="ibtnDelEducational btn btn-md btn-danger btn-xs"  value="Delete"></td>
                            </tr>
                          <?php endforeach ?>
                        <?php endif ?>
                        
                     </tbody>
                     <!-- <tfoot>
                        <tr>
                            <td colspan="9" style="text-align: left;">
                                
                            </td>
                        </tr>
                    </tfoot> -->
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Civil Service Eligibility <small> </small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-3" id="addCSE" value="Add Civil Service Eligibility"  style="margin-bottom: 5px;" />
                <div class="table-responsive" style="overflow: auto;">
                  <table class="table table-striped mb-0 CSE-list">
                     <thead>
                        <tr>
                           <th style="width: 30% !important;">Action</th>
                           <th style="width: 30% !important;">Type of Eligibility</th>
                           <th style="width: 30% !important;">Career Service / RA 1080 (Board/Bar) Under Special LAWS/CES/CSEE</th>
                           <th style="width: 30% !important;">Rating</th>
                           <th style="width: 30% !important;">Date of Examination/Conferment</th>
                           <th style="width: 30% !important;">Place of Examination/Conferment</th>
                           <th style="width: 30% !important;">Highest Grade/Level/Units Earned</th>
                           <th style="width: 30% !important;">Licince No.</th>
                           <th style="width: 30% !important;">Date of Release</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        <?php if (isset($data->cse)): ?>
                          <?php foreach ($data->cse as $key => $value): ?>
                            <tr>
                              <td><input style="width: 100px;"  type="text" class="form-control-sm date_of_release" value="{{$value->date_of_release}}" /></td>
                              <td><input style="width: 100px;"  type="text" class="form-control-sm type_of_eligibility" value="{{$value->type_of_eligibility}}" /></td>
                              <td><input style="width: 389px;"  type="text" class="form-control-sm career_service_under_special_laws_ces_csee" value="{{$value->career_service_under_special_laws_ces_csee}}" /></td>
                              <td><input style="width: 100px;"  type="text" class="form-control-sm rating" value="{{$value->rating}}" /></td>
                              <td><input style="width: 100px;"  type="text" class="form-control-sm date_of_examination_conferment" value="{{$value->date_of_examination_conferment}}" /></td>
                              <td><input style="width: 500px;"  type="text" class="form-control-sm place_of_examination_conferment" value="{{$value->place_of_examination_conferment}}" /></td>
                              <td><input style="width: 100%;"  type="date" class="form-control-sm highest_grade_level_units_earned" value="{{$value->highest_grade_level_units_earned}}" /></td>
                              <td><input style="width: 100%;"  type="date" class="form-control-sm licince_no" value="{{$value->licince_no}}" /></td>
                              

                              <td><input type="button" class="ibtnDelCSE btn btn-md btn-danger btn-xs"  value="Delete"></td>
                            </tr>
                          <?php endforeach ?>
                        <?php endif ?>
                     </tbody>
                     <tfoot>
                        <tr>
                            <td colspan="9" style="text-align: left;">
                                
                            </td>
                        </tr>
                    </tfoot>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Work Experience <small> </small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;" id="addWE" value="Add Work Experience" />
                <div class="table-responsive" style="overflow: auto;">
                  <table class="table table-striped mb-0 WE-list">
                     <thead>
                        <tr>
                           <th style="width: 30% !important;">Actions</th>
                           <th style="width: 30% !important;">Include Date From</th>
                           <th style="width: 30% !important;">Include Date To</th>
                           <th style="width: 30% !important;">Position Title</th>
                           <th style="width: 30% !important;">Department/Agency/Office/Company</th>
                           <th style="width: 30% !important;">Monthly Salary</th>
                           <th style="width: 30% !important;">Salary Grade & Step Increment</th>
                           <th style="width: 30% !important;">Status of Appointment</th>
                           <th style="width: 30% !important;">Gov't Service</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        <?php if (isset($data->we)): ?>
                          <?php foreach ($data->we as $key => $value): ?>
                            <tr>
                              <td><input type="button" class="ibtnDelWE btn btn-md btn-danger btn-xs"  value="Delete"></td>
                              <td><input style="width: 150px;"  type="date" class="form-control-sm include_date_from" 
                                value="{{ isset($value->include_date_from) ? $value->include_date_from : date('Y-m-d', strtotime('0000-00-00')) }}" /></td>
                              <td><input style="width: 150px;"  type="date" class="form-control-sm include_date_to" 
                                value="{{ isset($value->include_date_to) ? $value->include_date_to : date('Y-m-d', strtotime('0000-00-00')) }}" /></td>
                              <td><input style="width: 200px;"  type="text" class="form-control-sm position_title" value="{{ $value->position_title }}" /></td>
                              <td><input style="width: 200px;"  type="text" class="form-control-sm department_agency_office_company" value="{{ $value->department_agency_office_company }}" /></td>
                              <td><input style="width: 200px;"  type="number" class="form-control-sm monthly_salary" value="{{ $value->monthly_salary }}" /></td>
                              <td><input style="width: 200px;"  type="text" class="form-control-sm salary_grade_step_increment" value="{{ $value->salary_grade_step_increment }}" /></td>
                              <td><input style="width: 100%;"  type="text" class="form-control-sm status_of_appointment" value="{{ $value->status_of_appointment }}" /></td>
                              <td><input style="width: 200px;"  type="text" class="form-control-sm govt_service" value="{{ $value->govt_service }}" /></td>

                              
                            </tr>
                          <?php endforeach ?>
                        <?php endif ?>
                     </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Voluntary Work <small> </small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;" id="addVW" value="Add Voluntary Work" />
                <div class="table-responsive" style="overflow: auto;">
                  <table class="table table-striped mb-0 VW-list">
                     <thead>
                        <tr>
                           <th style="width: 30% !important;">Actions</th>
                           <th style="width: 30% !important;">Name and address of organization</th>
                           <th style="width: 30% !important;">Include Date from</th>
                           <th style="width: 30% !important;">Include Date To</th>
                           <th style="width: 30% !important;">Number of hours</th>
                           <th style="width: 30% !important;">Position/Nature of work</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        <?php if (isset($data->vw)): ?>
                          <?php foreach ($data->vw as $key => $value): ?>
                            <tr>
                              <td><input type="button" class="ibtnDelVW btn btn-md btn-danger btn-xs"  value="Delete"></td>
                              <td><textarea style="width: 230px;"  type="text" class="form-control-sm name_address_of_organization" >{{ $value->name_address_of_organization }} </textarea></td>
                              <td><input style="width: 150px;"  type="date" class="form-control-sm include_date_from" value="{{ $value->include_date_from }}" /></td>
                              <td><input style="width: 150px;"  type="date" class="form-control-sm include_date_to" value="{{ $value->include_date_to }}" /></td>
                              <td><input style="width: 100px;"  type="number" class="form-control-sm number_of_hours" value="{{ $value->number_of_hours }}" /></td>
                              <td><input style="width: 200px;"  type="text" class="form-control-sm position_nature_of_work" value="{{ $value->position_nature_of_work }}" /></td>
                              
                            </tr>
                          <?php endforeach ?>
                        <?php endif ?>
                     </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Training Programs <small> </small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;" id="addTP" value="Add Training Programs" />
                <div class="table-responsive" style="overflow: auto;">
                  <table class="table table-striped mb-0 TP-list">
                     <thead>
                        <tr>
                           <th style="width: 30% !important;">Actions</th>
                           <th style="width: 30% !important;">Title of learning and Development Inventions/Training program</th>
                           <th style="width: 30% !important;">Include Date From</th>
                           <th style="width: 30% !important;">Include Date to</th>
                           <th style="width: 30% !important;">Number of hours</th>
                           <th style="width: 30% !important;">Type of LD</th>
                           <th style="width: 30% !important;">Conducted/Sponsored by</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        <?php if (isset($data->tp)): ?>
                          <?php foreach ($data->tp as $key => $value): ?>
                            <tr>
                              <td><input type="button" class="ibtnDelTP btn btn-md btn-danger btn-xs"  value="Delete" /></td>
                              <td><textarea style="width: 210px;"  type="text" class="form-control-sm title_of_learning_and_dev_inventions_tp">{{ $value->title_of_learning_and_dev_inventions_tp }}</textarea></td>
                              <td><input style="width: 150px;"  type="date" class="form-control-sm include_date_from" value="{{ $value->include_date_from }}" /></td>
                              <td><input style="width: 150px;"  type="date" class="form-control-sm include_date_to" value="{{ $value->include_date_to }}" /></td>
                              <td><input style="width: 100px;"  type="number" class="form-control-sm number_of_hours" value="{{ $value->number_of_hours }}" /></td>
                              <td><input style="width: 150px;"  type="text" class="form-control-sm tpy_of_ld" value="{{ $value->tpy_of_ld }}" /></td>
                              <td><input style="width: 150px%;"  type="text" class="form-control-sm conducted_sponsored_by" value="{{ $value->conducted_sponsored_by }}" /></td>
                              
                            </tr>
                          <?php endforeach ?>
                        <?php endif ?>
                     </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Other Information <small> </small></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="form-group  row">
                    <label class="col-sm-4 col-form-label"><u>Other Information</u></label>        <!-- Header -->
                    <div class="col-sm-8">
                    </div>
                </div>
                <div class="row">
                    <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;" id="addOI" value="Add Other Informtion" />
                    <div class="table-responsive" style="overflow: auto;">
                      <table class="table table-striped mb-0 OI-list">
                         <thead>
                            <tr>
                               <th style="width: 30% !important;">Special Skills / Hobbies</th>
                               <th style="width: 30% !important;">Non-Academ Distinctions / Recognition</th>
                               <th style="width: 30% !important;">Membership in Association/Organization</th>
                               <th style="width: 30% !important;">Actions</th>
                            </tr>
                         </thead>
                         <tbody>
                            <?php if (isset($data->oi)): ?>
                              <?php foreach ($data->oi as $key => $value): ?>
                                <tr>
                                  <td><textarea style="width: 250px;"  type="text" class="form-control-sm special_skills_hobbies">{{ $value->special_skills_hobbies }}</textarea></td>
                                  <td><textarea style="width: 250px;"  type="text" class="form-control-sm non_academic_distinctions_recognitions">{{ $value->non_academic_distinctions_recognitions }}</textarea></td>
                                  <td><textarea style="width: 250px;"  type="text" class="form-control-sm membership_in_assoc_org">{{ $value->membership_in_assoc_org }}</textarea></td>

                                  <td><input type="button" class="ibtnDelOI btn btn-md btn-danger btn-xs"  value="Delete"></td>
                                </tr>
                              <?php endforeach ?>
                            <?php endif ?>
                         </tbody>
                      </table>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>.
                <div class="form-group  row">
                    <label class="col-sm-4 col-form-label"><u>References (Person not related by consanguinity or affinity to applicant / appointee)</u></label>        <!-- Header -->
                    <div class="col-sm-8">
                    </div>
                </div>
                <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;" id="addReferences" value="Add References" />
                <div class="table-responsive" style="overflow: auto;">
                  <table class="table table-striped mb-0 References-list">
                     <thead>
                        <tr>
                           <th style="width: 30% !important;">Name</th>
                           <th style="width: 30% !important;">Address</th>
                           <th style="width: 30% !important;">Tel No</th>
                           <th style="width: 30% !important;">Actions</th>
                        </tr>
                     </thead>
                          <?php if (isset($data->reference)): ?>
                            <?php foreach ($data->reference as $key => $value): ?>
                              <tr>
                                <td>
                                  <textarea style="width: 250px;"  type="text" class="form-control-sm name">{{ $value->name }}</textarea></td>
                                <td><textarea style="width: 250px;"  type="text" class="form-control-sm address">{{ $value->address }}</textarea></td>
                                <td><textarea style="width: 250px;"  type="text" class="form-control-sm tel_no">{{ $value->tel_no }}</textarea></td>

                                <td><input type="button" class="btnRef btn btn-md btn-danger btn-xs"  value="Delete"></td>
                              </tr>
                            <?php endforeach ?>
                          <?php endif ?>
                     <tbody>
                     </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <div class="col-md-offset-4 col-md-4">
                <!-- {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!} -->
                <button type="submit" class="btn btn-primary btn-save">{{ $formMode === 'edit' ? 'Update' : 'Create' }}</button>
            </div>
        </div>
    </div>
</div>

