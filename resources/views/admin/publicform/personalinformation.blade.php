<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <h4><u>Personal Information</u></h4>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="form-group row">
      <label for="employee-upload" class="col-sm-3 col-form-label text-right">Upload</label>
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
                 @include ('modules.employeeinformation.options.department', ['data' => isset($data->department) ? $data->department : ''])
            </select>
         </div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="section" class="col-sm-3 col-form-label text-right">Section</label>
         <div class="col-sm-9 ">
            <select class="form-control" id="section" name="section">
               @include ('modules.employeeinformation.options.section', ['data' => isset($data->section) ? $data->section : ''])
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
               @include ('modules.employeeinformation.options.position', ['data' => isset($data->position) ? $data->position : ''])
            </select>
         </div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="status" class="col-sm-3 col-form-label text-right">Status</label>
         <div class="col-sm-9 ">
            <select class="form-control" id="status" name="status">
               @include ('modules.employeeinformation.options.status', ['data' => isset($data->status) ? $data->status : ''])
            </select>
         </div>
      </div>
  </div>
</div>
<div class="row">
   <div class="col-lg-6">
      <div class="form-group row">
         <label for="salary_schedule" class="col-sm-3 col-form-label text-right">Salary Sched.</label>
         <div class="col-sm-9"><input class="form-control" type="Date" id="salary_schedule" name="salary_schedule" value="{{ isset($data->salary_schedule) ? $data->salary_schedule : date('Y-m-d') }}"></div>
      </div>
   </div>
   <div class="col-lg-6">
      <div class="form-group row">
         <label for="sg" class="col-sm-3 col-form-label text-right">SG</label>
         <div class="col-sm-9">
            <select class="form-control" id="sg" name="sg">
               @include ('modules.employeeinformation.options.sg', ['data' => isset($data->sg) ? $data->sg : ''])
            </select>
         </div>
      </div>
   </div>
</div>
<div class="row">
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="monthly_salary" class="col-sm-3 col-form-label text-right">Monthly Salary</label>
         <div class="col-sm-9"><input class="form-control" type="Number" placeholder="Monthly Salary" id="monthly_salary" name="monthly_salary" value="{{ isset($data->monthly_salary) ? $data->monthly_salary : 0 }}"></div>
      </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group row">
       <label for="step" class="col-sm-3 col-form-label text-right">Step</label>
       <div class="col-sm-9">
          <select class="form-control" id="step" name="step">
             @include ('modules.employeeinformation.options.step', ['data' => isset($data->step) ? $data->step : ''])
          </select>
       </div>
    </div>
  </div>  
</div>
<div class="row">
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="example-text-input" class="col-sm-3 col-form-label text-right">Date Of Birth</label>
         <div class="col-sm-9"><input class="form-control" type="Date" placeholder="Date Of Birth" id="date_of_birth" name="date_of_birth" value="{{ isset($data->date_of_birth) ? $data->date_of_birth : date('Y-m-d') }}"></div>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="place_of_birth" class="col-sm-3 col-form-label text-right">Place of birth</label>
         <div class="col-sm-9">
          <textarea class="form-control" rows="5" id="place_of_birth" name="place_of_birth">{{ isset($data->place_of_birth) ? $data->place_of_birth : '' }}</textarea>
         </div>

      </div>
  </div>
</div>
<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="sex" class="col-sm-3 col-form-label text-right">Sex</label>
         <div class="col-sm-9">
            <select class="form-control" id="sex" name="sex">
               @include ('modules.employeeinformation.options.sex', ['data' => isset($data->sex) ? $data->sex : ''])
            </select>
         </div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="civil_service" class="col-sm-3 col-form-label text-right">Civil Service</label>
         <div class="col-sm-9 ">
            <select class="form-control" id="civil_service" name="civil_service">
               @include ('modules.employeeinformation.options.civil_service', ['data' => isset($data->civil_service) ? $data->civil_service : ''])
            </select>
         </div>
      </div>
  </div>
</div>
<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="example-text-input" class="col-sm-3 col-form-label text-right">Height (m)</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="Height (m)" id="height" name="height" value="{{ isset($data->height) ? $data->height : '' }}"></div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="weight" class="col-sm-3 col-form-label text-right">Weight (Kg)</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="Weight (Kg)" id="weight" name="weight" value="{{ isset($data->weight) ? $data->weight : '' }}"></div>
      </div>
  </div>
</div>
<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <h4><u>Government ID Numbers</u></h4>
      </div>
  </div>
</div>
<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="gsis_id_no" class="col-sm-3 col-form-label text-right">GSIS ID No.</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="GSIS ID No." id="gsis_id_no" name="gsis_id_no" value="{{ isset($data->gsis_id_no) ? $data->gsis_id_no : '' }}"></div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="pagibig_id_no" class="col-sm-3 col-form-label text-right">PAG-IBIG ID No.</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="PAG-IBIG ID No." id="pagibig_id_no" name="pagibig_id_no" value="{{ isset($data->pagibig_id_no) ? $data->pagibig_id_no : '' }}"></div>
      </div>
  </div>
</div>
<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="phil_health_no" class="col-sm-3 col-form-label text-right">Phil Health No.</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="Phil Health No" id="phil_health_no" name="phil_health_no" value="{{ isset($data->phil_health_no) ? $data->phil_health_no : '' }}"></div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="sss_no" class="col-sm-3 col-form-label text-right">SSS No.</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="SSS No." id="sss_no" name="sss_no" value="{{ isset($data->sss_no) ? $data->sss_no : '' }}"></div>
      </div>
  </div>
</div>
<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="agency_emp_no" class="col-sm-3 col-form-label text-right">Agency Emplo. No.</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="Agency Employee No." id="agency_emp_no" name="agency_emp_no" value="{{ isset($data->agency_emp_no) ? $data->agency_emp_no : '' }}"></div>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
    <div class="form-group row">
      <label for="filipino" class="col-sm-3 col-form-label text-right">Citizenship</label>
      <div class="col-sm-9">
          <div class="row">
            <div class="col-lg-8">
              <div class="my-2" style="padding-left: 6px;">
                <div class="my-2">
                   <div class="custom-control custom-radio">
                    <input type="radio" id="filipino" name="citizenship" class="custom-control-input" value="filipino" {{ isset($data->citizenship) && $data->citizenship == 'filipino' ? 'checked' : '' }}> 
                    <label class="custom-control-label" for="filipino">filipino</label>
                  </div>
                </div>
                <div class="my-2">
                   <div class="custom-control custom-radio">
                    <input type="radio" id="dual_citizenship" name="citizenship" class="custom-control-input" value="dual_citizenship" {{ isset($data->citizenship) && $data->citizenship == 'dual_citizenship' ? 'checked' : '' }}> 
                    <label class="custom-control-label" for="dual_citizenship">Dual Citizenship</label>
                  </div>
                </div>
              </div>
              <hr>
              <div class="my-2" style="padding-left: 6px;">
                <div class="my-2">
                   <div class="custom-control custom-radio">
                      <input type="radio" id="citizenship_by_birth"  name="citizenship_by" class="custom-control-input" value="by birth" {{ isset($data->citizenship_by) && $data->citizenship_by == 'by birth' ? 'checked' : '' }}> 
                      <label class="custom-control-label" for="citizenship_by_birth">by birth</label>
                    </div>
                </div>
                <div class="my-2">
                   <div class="custom-control custom-radio">
                    <input type="radio" id="citizenship_by_naturalization"  name="citizenship_by" class="custom-control-input" value="naturalization" {{ isset($data->citizenship_by) && $data->citizenship_by == 'naturalization' ? 'checked' : '' }}> 
                    <label class="custom-control-label" for="citizenship_by_naturalization">naturalization</label>
                   </div>
                </div>
              </div>
              
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="country" class="col-sm-3 col-form-label text-right">Country</label>
         <div class="col-sm-9">
            <select class="form-control" id="country" name="country">
               <@include ('modules.employeeinformation.options.country', ['data' => isset($data->country) ? $data->country : ''])
            </select>
         </div>
      </div>
  </div>
</div>
<div class="row"> 
  <div class="col-lg-6">
      <div class="form-group row">
         <h4><u>Residential Address</u></h4>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="house_block_lot" class="col-sm-3 col-form-label text-right">House/Block/Lot No.</label>
         <div class="col-sm-9">
          <textarea class="form-control" rows="2" id="house_block_lot" name="house_block_lot">{{ isset($data->house_block_lot) ? $data->house_block_lot : ''}}</textarea>
         </div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="street" class="col-sm-3 col-form-label text-right">Street</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="Street" id="street" name="street" value="{{ isset($data->street) ? $data->street : '' }}"></div>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="subdivision_or_village" class="col-sm-3 col-form-label text-right">Subdivision/Village</label>
         <div class="col-sm-9">
          <textarea class="form-control" rows="2" id="subdivision_or_village" name="subdivision_or_village">{{ isset($data->street) ? $data->street : '' }}</textarea>
         </div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="barangay" class="col-sm-3 col-form-label text-right">Barangay</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="Barangay" id="barangay" name="barangay" value="{{ isset($data->barangay) ? $data->barangay : '' }}"></div>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="city_or_municipality" class="col-sm-3 col-form-label text-right">City/Municipality</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="City/Municipality" id="city_or_municipality" name="city_or_municipality" value="{{ isset($data->city_or_municipality) ? $data->city_or_municipality : '' }}"></div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="example-text-input" class="col-sm-3 col-form-label text-right">Province</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="Province" id="province" name="province" value="{{ isset($data->province) ? $data->province : '' }}"></div>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="zipcode" class="col-sm-3 classol-form-label text-right">Zip Code</label>
         <div class="col-sm-5"><input class="form-control" type="text" placeholder="Zip Code" id="zipcode" name="zipcode" value="{{ isset($data->zipcode) ? $data->zipcode : '' }}"></div>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="tel_no" class="col-sm-3 col-form-label text-right">Tel. No.</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="Tel. No." id="tel_no" name="tel_no" value="{{ isset($data->tel_no) ? $data->tel_no : '' }}"></div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="mobile_no" class="col-sm-3 col-form-label text-right">Mobile No.</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="Mobile No." id="mobile_no" name="mobile_no" value="{{ isset($data->mobile_no) ? $data->mobile_no : '' }}"></div>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="email" class="col-sm-3 col-form-label text-right">E-mail Address</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="E-mail Address" id="email" name="email" value="{{ isset($data->email) ? $data->email : '' }}"></div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="highest_educational_attainment" class="col-sm-3 col-form-label text-right">Highest Educational Attainment</label>
         <div class="col-sm-9"><input class="form-control" type="text" id="highest_educational_attainment" name="highest_educational_attainment" value="{{ isset($data->highest_educational_attainment) ? $data->highest_educational_attainment : '' }}"></div>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="first_day_of_service_in_govt" class="col-sm-3 col-form-label text-right">First Day of Service In Gov't</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="First Day of Service In Gov't" id="first_day_of_service_in_govt" name="first_day_of_service_in_govt" value="{{ isset($data->first_day_of_service_in_govt) ? $data->first_day_of_service_in_govt : '' }}"></div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="casual_appointment" class="col-sm-3 col-form-label text-right">Casual Appointment</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="Casual Appointment" id="casual_appointment" name="casual_appointment" value="{{ isset($data->casual_appointment) ? $data->casual_appointment : '' }}"></div>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="original_appointment" class="col-sm-3 col-form-label text-right">Original Appointment</label>
         <div class="col-sm-9"><input class="form-control" type="text" placeholder="Original Appointment" id="original_appointment" name="original_appointment" value="{{ isset($data->original_appointment) ? $data->original_appointment : '' }}"></div>
      </div>
  </div>
  <div class="col-lg-6">
      <div class="form-group row">
         <label for="nature_of_appointment" class="col-sm-3 col-form-label text-right">Nature of Appointment</label>
         <div class="col-sm-9"><input class="form-control" type="text" value="Artisanal kale" id="nature_of_appointment" name="nature_of_appointment" value="{{ isset($data->nature_of_appointment) ? $data->nature_of_appointment : '' }}"></div>
      </div>
  </div>
</div>
<div class="row">
   <div class="col-lg-6">
           <div class="form-group mb-0 row">
           <label class="col-md-3 my-2 control-label"></label>
           <div class="col-md-9">
              <div class="form-check-inline my-2 col-md-5">
                 <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="smoker" name="status_type" data-parsley-multiple="lol" data-parsley-mincheck="2" value="smoker" 
                  {{in_array("smoker", isset($statustype) ? $statustype : []) ? 'checked' : '' }}> <label class="custom-control-label" for="smoker" >Smoker </label></div>
              </div>
              <div class="form-check-inline my-2 col-md-5">
                 <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="pwd" name="status_type" data-parsley-multiple="lol" data-parsley-mincheck="2" value="pwd"
                  {{in_array("pwd", isset($statustype) ? $statustype : []) ? 'checked' : '' }}> <label class="custom-control-label" for="pwd" >PWD</label></div>
              </div>
           </div>
       </div>
    </div>
</div>
<div class="row">
   <div class="col-lg-6">
           <div class="form-group mb-0 row">
           <label class="col-md-3 my-2 control-label"></label>
           <div class="col-md-9">
              <div class="form-check-inline my-2 col-md-5">
                 <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="indigenous_people" name="status_type" data-parsley-multiple="groups" data-parsley-mincheck="2" value="Indigenous People"
                  {{in_array("Indigenous People", isset($statustype) ? $statustype : []) ? 'checked' : '' }}> <label class="custom-control-label" for="indigenous_people" >Indigenous People</label></div>
              </div>
              <div class="form-check-inline my-2 col-md-5">
                 <div class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="solo_parent" name="status_type" data-parsley-multiple="groups" data-parsley-mincheck="2" value="Solo Parent" 
                  {{in_array("Solo Parent", isset($statustype) ? $statustype : []) ? 'checked' : '' }}> <label class="custom-control-label" for="solo_parent" >Solo Parent</label></div>
              </div>
           </div>
       </div>
    </div>
</div>