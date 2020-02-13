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
                        <select name="roles[]" class="form-control">
                            <option value="user">User/Employee</option>
                        </select>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
</d iv>

 <div class="col-lg-12">
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

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Sex</label>
                    <div class="col-sm-10">
                        <select class="form-control m-b" name="sex">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
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
                <div class="form-group  row">
                    <label class="col-sm-2 col-form-label">Bio (brief intro) *</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="firstname">
                    </div>
                </div
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

