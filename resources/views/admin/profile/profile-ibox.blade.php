<div class="ibox">
    <div class="ibox-title">
        <h5>Profile Information</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content">

        <div class="row">
          <div class="col-lg-6">
            @can('all permission')
              <div class="form-group"><label>Device ID:</label> 
                <p>{{ isset($data) && $data->device_id != '' ? $data->device_id : '---'}}</p>
                <input type="text" name="device_id" placeholder="Enter Device ID" class="form-control hidden-element">
              </div>
            @endcan
            <div class="form-group"><label>Surname:</label> 
              <p>{{ isset($data) && $data->surname != '' ? $data->surname : '---'}}</p>
              <input type="text" name="surname" placeholder="Enter Surname" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Firstname:</label> 
              <p>{{ isset($data) && $data->firstname != '' ? $data->firstname : '---'}}</p>
              <input type="text" name="firstname" placeholder="Enter Firstname" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Middlename:</label> 
              <p>{{ isset($data) && $data->middlename != '' ? $data->middlename : '---'}}</p>
              <input type="text" name="middlename" placeholder="Enter Middlename" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Suffix:</label> 
              <p>{{ isset($data) && $data->suffix != '' ? $data->suffix : '---'}}</p>
              <input type="text" name="suffix" placeholder="Enter Suffix" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Department:</label> 
              <p>{{ isset($data) && $data->department != '' ? $data->department : '---'}}</p>
              <input type="text" name="department" placeholder="Enter Department" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Section:</label> 
              <p>{{ isset($data) && $data->section != '' ? $data->section : '---'}}</p>
              <input type="text" name="section" placeholder="Enter Section" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Position:</label> 
              <p>{{ isset($data) && $data->position != '' ? $data->position : '---'}}</p>
              <input type="text" name="position" placeholder="Enter Position" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Salary Schedule:</label> 
              <p>{{ isset($data) && $data->salary_schedule != '' ? $data->salary_schedule : '---'}}</p>
              <input type="date" name="salary_schedule" placeholder="Enter Salary Schedule" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>SG:</label> 
              <p>{{ isset($data) && $data->sg != '' ? $data->sg : '---'}}</p>
              <input type="text" name="sg" placeholder="Enter SG" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Step:</label> 
              <p>{{ isset($data) && $data->step != '' ? $data->step : '---'}}</p>
              <input type="text" name="step" placeholder="Enter Step" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Citizenship:</label> 
              <p>{{ isset($data) && $data->citizenship != '' ? $data->citizenship : '---'}}</p>
              <input type="text" name="citizenship" placeholder="Enter Citizenship" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Country:</label> 
              <p>{{ isset($data) && $data->country != '' ? $data->country : '---'}}</p>
              <input type="text" name="country" placeholder="Enter Country" class="form-control hidden-element">
            </div>
          </div>

          <div class="col-lg-6">
            @can('all permission')
              <div class="form-group"><label>Employee ID:</label> 
                <p>{{ isset($data) && $data->employee_id_no != '' ? $data->employee_id_no : '---'}}</p>
                <input type="text" name="employee_id_no" placeholder="Enter Employee ID" class="form-control hidden-element">
              </div>
            @endcan
            <div class="form-group"><label>Month Salary:</label> 
              <p>{{ isset($data) && $data->monthly_salary != '' ? $data->monthly_salary : '---'}}</p>
              <input type="text" name="monthly_salary" placeholder="Enter Month Salary" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Date of Birth:</label> 
              <p>{{ isset($data) && $data->date_of_birth != '' ? $data->date_of_birth : '---'}}</p>
              <input type="date" name="date_of_birth" placeholder="Enter Date of Birth" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Sex:</label> 
              <p>{{ isset($data) && $data->sex != '' ? $data->sex : '---'}}</p>
              <select class="form-control m-b hidden-element" name="sex">
                  <option value=""></option>
                  <option value="Male">Male</option>
                  <option value="Male">Female</option>
              </select>
            </div>
            <div class="form-group"><label>Civil Status:</label> 
              <p>{{ isset($data) && $data->civil_Status != '' ? $data->civil_Status : '---'}}</p>
              <select class="form-control m-b hidden-element" name="civil_Status">
                  <option value=""></option>
                  <option value=""></option>
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Widowed">Widowed</option>
                  <option value="Divorced">Divorced</option>
              </select>
            </div>
            <div class="form-group"><label>Height(m):</label> 
              <p>{{ isset($data) && $data->height != '' ? $data->height : '---'}}</p>
              <input type="text" name="height" placeholder="Enter Height(m)" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Weight(Kg):</label> 
              <p>{{ isset($data) && $data->weight != '' ? $data->weight : '---'}}</p>
              <input type="text" name="weight" placeholder="Enter Weight(Kg)" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>GSIS ID No.:</label> 
              <p>{{ isset($data) && $data->gsis_id_no != '' ? $data->gsis_id_no : '---'}}</p>
              <input type="text" name="gsis_id_no" placeholder="Enter GSIS ID No." class="form-control hidden-element">
            </div>
            <div class="form-group"><label>PAG-IBIG ID No.:</label> 
              <p>{{ isset($data) && $data->pagibig_id_no != '' ? $data->pagibig_id_no : '---'}}</p>
              <input type="text" name="pagibig_id_no" placeholder="Enter PAG-IBIG ID No." class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Phil Health No.:</label> 
              <p>{{ isset($data) && $data->phil_health_no != '' ? $data->phil_health_no : '---'}}</p>
              <input type="text" name="phil_health_no" placeholder="Enter Phil Health No." class="form-control hidden-element">
            </div>
            <div class="form-group"><label>SSS No.:</label> 
              <p>{{ isset($data) && $data->sss_no != '' ? $data->sss_no : '---'}}</p>
              <input type="text" name="sss_no" placeholder="Enter SSS No." class="form-control hidden-element">
            </div>
            <div class="form-group"><label>TIN No.:</label> 
              <p>{{ isset($data) && $data->tin_no != '' ? $data->tin_no : '---'}}</p>
              <input type="text" name="tin_no" placeholder="Enter TIN No." class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Agency Emplo. No:</label> 
              <p>{{ isset($data) && $data->agency_emp_no != '' ? $data->agency_emp_no : '---'}}</p>
              <input type="text" name="agency_emp_no" placeholder="Enter Agency Emplo. No" class="form-control hidden-element">
            </div>
          </div>
        </div>

    </div>
</div>
<div class="ibox ">
    <div class="ibox-title">
        <h5>Residential Address</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content" style="display: none;">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group"><label>House/Block/Lot No.:</label> 
              <p>{{ isset($data) && $data->house_block_lot != '' ? $data->house_block_lot : '---'}}</p>
              <textarea name="house_block_lot" placeholder="enter House/Block/Lot No." class="form-control hidden-element"></textarea>
            </div>
            <div class="form-group"><label>Street:</label> 
              <p>{{ isset($data) && $data->street != '' ? $data->street : '---'}}</p>
              <input type="text" name="street" placeholder="enter Street" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Subdivision/Village:</label> 
              <p>{{ isset($data) && $data->subdivision_or_village != '' ? $data->subdivision_or_village : '---'}}</p>
              <input type="text" name="subdivision_or_village" placeholder="enter Subdivision/Village" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Barangay:</label> 
              <p>{{ isset($data) && $data->barangay != '' ? $data->barangay : '---'}}</p>
              <input type="text" name="barangay" placeholder="enter Barangay" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>City/Municipality:</label> 
              <p>{{ isset($data) && $data->city_or_municipality != '' ? $data->city_or_municipality : '---'}}</p>
              <input type="text" name="city_or_municipality" placeholder="enter City/Municipality" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Province:</label> 
              <p>{{ isset($data) && $data->province != '' ? $data->province : '---'}}</p>
              <input type="text" name="province" placeholder="enter Province" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Zip Code:</label> 
              <p>{{ isset($data) && $data->zipcode != '' ? $data->zipcode : '---'}}</p>
              <input type="text" name="zipcode" placeholder="enter Zip Code" class="form-control hidden-element">
            </div>
          </div>
          <div class="col-lg-6">
          </div>
        </div>
    </div>
</div>
<div class="ibox ">
    <div class="ibox-title">
        <h5>Contact Information</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content" style="display: none;"> 
       <div class="row">
         <div class="col-lg-6">
            <div class="form-group"><label>Tel. No.:</label> 
              <p>{{ isset($data) && $data->tel_no != '' ? $data->tel_no : '---'}}</p>
              <input type="text" name="tel_no" placeholder="Enter Tel. No." class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Mobile No.:</label> 
              <p>{{ isset($data) && $data->mobile_no != '' ? $data->mobile_no : '---'}}</p>
              <input type="text" name="mobile_no" placeholder="Enter Mobile No." class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Highest Educational Attainment:</label> 
              <p>{{ isset($data) && $data->highest_educational_attainment != '' ? $data->highest_educational_attainment : '---'}}</p>
              <input type="text" name="highest_educational_attainment" placeholder="Enter Highest Educational Attainment" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>First Day of Service In Gov't:</label> 
              <p>{{ isset($data) && $data->first_day_of_service_in_govt != '' ? $data->first_day_of_service_in_govt : '---'}}</p>
              <input type="text" name="first_day_of_service_in_govt" placeholder="Enter First Day of Service In Gov't" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Casual Appointment:</label> 
              <p>{{ isset($data) && $data->casual_appointment != '' ? $data->casual_appointment : '---'}}</p>
              <input type="text" name="casual_appointment" placeholder="Enter Casual Appointment" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Original Appointment:</label> 
              <p>{{ isset($data) && $data->original_appointment != '' ? $data->original_appointment : '---'}}</p>
              <input type="text" name="original_appointment" placeholder="Enter Original Appointment" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Nature of Appointment:</label> 
              <p>{{ isset($data) && $data->nature_of_appointment != '' ? $data->nature_of_appointment : '---'}}</p>
              <input type="text" name="nature_of_appointment" placeholder="Enter Nature of Appointment" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Status type:</label> 
              <p>{{ isset($data) && $data->status_type != '' ? $data->status_type : '---'}}</p>
              <input type="text" name="status_type" placeholder="Enter Status type" class="form-control hidden-element">
            </div>
         </div>
       </div>
    </div>
</div>
<div class="ibox ">
    <div class="ibox-title">
        <h5>Family Background</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content" style="display: none;">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group"><label><strong><u>Spouse's Information</u></strong></label></div>
            <div class="form-group"><label>Surname:</label> 
              <p>{{ isset($data) && $data->spouse_surname != '' ? $data->spouse_surname : '---'}}</p>
              <input type="text" name="spouse_surname" placeholder="Enter Surname" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Firstname:</label> 
              <p>{{ isset($data) && $data->spouse_firstname != '' ? $data->spouse_firstname : '---'}}</p>
              <input type="text" name="spouse_firstname" placeholder="Enter Firstname" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Middle Name:</label> 
              <p>{{ isset($data) && $data->spouse_middlename != '' ? $data->spouse_middlename : '---'}}</p>
              <input type="text" name="spouse_middlename" placeholder="Enter Middle Name" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Occupation:</label> 
              <p>{{ isset($data) && $data->spouse_occupation != '' ? $data->spouse_occupation : '---'}}</p>
              <input type="text" name="spouse_occupation" placeholder="Enter Occupation" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Employer/Bus. Name:</label> 
              <p>{{ isset($data) && $data->spouse_employer_bus_name != '' ? $data->spouse_employer_bus_name : '---'}}</p>
              <input type="text" name="spouse_employer_bus_name" placeholder="Enter Employer/Bus. Name" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Business Address:</label> 
              <p>{{ isset($data) && $data->spouse_business_address != '' ? $data->spouse_business_address : '---'}}</p>
              <input type="text" name="spouse_business_address" placeholder="Enter Business Address" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Telephone:</label> 
              <p>{{ isset($data) && $data->spouse_bus_telephone != '' ? $data->spouse_bus_telephone : '---'}}</p>
              <input type="text" name="spouse_bus_telephone" placeholder="Enter Telephone" class="form-control hidden-element">
            </div>
            <br>
            <div class="form-group"><label><strong><u>Father's Information</u></strong></label></div>
            <div class="form-group"><label>Surname:</label> 
              <p>{{ isset($data) && $data->father_surname != '' ? $data->father_surname : '---'}}</p>
              <input type="text" name="father_surname" placeholder="Enter Surname" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>First Name:</label> 
              <p>{{ isset($data) && $data->father_firstname != '' ? $data->father_firstname : '---'}}</p>
              <input type="text" name="father_firstname" placeholder="Enter First Name" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Middle Name:</label> 
              <p>{{ isset($data) && $data->father_middlename != '' ? $data->father_middlename : '---'}}</p>
              <input type="text" name="father_middlename" placeholder="Enter Middle Name" class="form-control hidden-element">
            </div>
            <br>
            <div class="form-group"><label><strong><u>Mother's Information</u></strong></label></div>
            <div class="form-group"><label>Maiden Surname:</label> 
              <p>{{ isset($data) && $data->mother_surname != '' ? $data->mother_surname : '---'}}</p>
              <input type="text" name="mother_surname" placeholder="Enter Maiden Surname" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>First Name:</label> 
              <p>{{ isset($data) && $data->mother_firstname != '' ? $data->mother_firstname : '---'}}</p>
              <input type="text" name="mother_firstname" placeholder="Enter First Name" class="form-control hidden-element">
            </div>
            <div class="form-group"><label>Middle Name:</label> 
              <p>{{ isset($data) && $data->mother_middlename != '' ? $data->mother_middlename : '---'}}</p>
              <input type="text" name="mother_middlename" placeholder="Enter Middle Name" class="form-control hidden-element">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-group"><label><strong><u>Children</u></strong></label></div>
          </div>
          <div class="col-lg-6">
            <button class="btn btn-info btn-xs pull-right button-edit-children"><i class="fa fa-pencil btn-xs"></i></button>
            <button class="btn btn-primary btn-xs pull-right button-save-children" style="display: none;"><i class="fa fa-save btn-xs"></i></button>
          </div>
          
          <div class="table-children-display">
            <table class="table" width="100">
                  <thead>
                    <tr>
                        <th>Name</th>
                        <th>Birthday</th>
                        <th>Age</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!isset($data->children)): ?>
                      <tr>
                        <td colspan="3" class="text-center">No Children</td>
                      </tr>
                    <?php else: ?>
                        <?php foreach (json_decode($data->children) as $item): ?>
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->dob }}</td>
                                <td>{{ $item->age }}</td>
                            </tr>
                        <?php endforeach ?>

                    <?php endif ?>
                  </tbody> 
            </table>
          </div>
          <div class="table table-children-edit " style="display: none;">
            <table width="100%" class="children-list">
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
                    <?php foreach (json_decode($data->children) as $key => $value): ?>
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
    </div>
</div>
<div class="ibox ">
    <div class="ibox-title">
        <h5>Educational</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content" style="display: none;">
        
        <div class="row">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
          <button class="btn btn-info btn-xs pull-right button-edit-educational"><i class="fa fa-pencil btn-xs"></i></button>
          <button class="btn btn-primary btn-xs pull-right button-save-educational" style="display: none;"><i class="fa fa-save btn-xs"></i></button>
        </div>
          <div class="table-responsive table-educational-display" style="overflow: auto;">
           <table class="table"> 
             <thead>
                <tr>
                   <th style="width: 30% !important;">Level</th>
                   <th style="width: 30% !important;">Name of School</th>
                   <th style="width: 30% !important;">Degree Course</th>
                   <th style="width: 30% !important;">Year Graduated</th>
                   <th style="width: 30% !important;">Highest Grade/Level/Units Earned</th>
                   <th style="width: 30% !important;">Date From</th>
                   <th style="width: 30% !important;">Date to</th>
                   <th style="width: 30% !important;">Scholarship/Academic Honors Recieved</th>
                </tr>
             </thead>
             <tbody>
                <?php if (isset($data->educational)): ?>
                  <?php foreach (json_decode($data->educational) as $key => $value): ?>
                    <tr>
                      <td>{{$value->level}}</td>
                      <td>{{$value->name_of_school}}</td>
                      <td>{{$value->degree_course}}</td>
                      <td>{{$value->year_graduated}}</td>
                      <td>{{$value->highest_grade_level_units_earned}}</td>
                      <td>{{$value->date_from}}</td>
                      <td>{{$value->date_to}}</td>
                      <td>{{$value->scholarship_academic_honors_recieved}}</td>
                    </tr>
                  <?php endforeach ?>
                <?php else: ?>
                      <tr>
                        <td colspan="9" class="text-center">No data</td>
                      </tr>
                <?php endif ?>
                
             </tbody>
            </table>
        </div>
        <div class="table-responsive table-educational-edit" style="overflow: auto;display: none;">
           <table class="table educational-list"> 
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
                  <?php foreach (json_decode($data->educational) as $key => $value): ?>
                    <tr>
                      <td><input style="width: 100px;"  type="text" class="form-control level" value="{{$value->level}}" /></td>
                      <td><input style="width: 300px;"  type="text" class="form-control name_of_school" value="{{$value->name_of_school}}" /></td>
                      <td><input style="width: 100px;"  type="text" class="form-control degree_course" value="{{$value->degree_course}}" /></td>
                      <td><input style="width: 100px;"  type="text" class="form-control year_graduated" value="{{$value->year_graduated}}" /></td>
                      <td><input style="width: 500px;"  type="text" class="form-control highest_grade_level_units_earned" value="{{$value->highest_grade_level_units_earned}}" /></td>
                      <td><input style="width: 100%;"  type="date" class="form-control date_from" value="{{$value->date_from}}" /></td>
                      <td><input style="width: 100%;"  type="date" class="form-control date_to" value="{{$value->date_to}}" /></td>
                      <td><textarea style="width: auto;"  type="text" class="form-control scholarship_academic_honors_recieved">{{$value->scholarship_academic_honors_recieved}}</textarea>
                    </td>

                      <td><input type="button" class="ibtnDelEducational btn btn-md btn-danger btn-xs"  value="Delete"></td>
                    </tr>
                  <?php endforeach ?>
                <?php endif ?>
                
             </tbody>
            </table>
        </div>
        </div>
        
        <br><br>
        <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;display: none;" id="addEducational" value="Add Educational" />

    </div>
</div>

<div class="ibox">
  <div class="ibox-title">
    <h5>Civil Service Eligibility</h5>
      <div class="ibox-tools">
          <a class="collapse-link">
              <i class="fa fa-chevron-up"></i>
          </a>
      </div>
  </div>
  <div class="ibox-content" style="display: none;">
    <div class="row">
      <div class="col-lg-6"></div>
      <div class="col-lg-6">
        <button class="btn btn-info btn-xs pull-right button-edit-cse"><i class="fa fa-pencil btn-xs"></i></button>
        <button class="btn btn-primary btn-xs pull-right button-save-cse" style="display: none;"><i class="fa fa-save btn-xs"></i></button>
      </div>
      
        <div class="table-responsive table-cse-display" style="overflow: auto;">
          <table class="table" width="100%">
             <thead>
                <tr>
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
                  <?php foreach (json_decode($data->cse) as $key => $value): ?>
                    <tr>
                      <td>{{$value->type_of_eligibility}}</td>
                      <td>{{$value->career_service_under_special_laws_ces_csee}}</td>
                      <td>{{$value->rating}}</td>
                      <td>{{$value->date_of_examination_conferment}}</td>
                      <td>{{$value->place_of_examination_conferment}}</td>
                      <td>{{$value->highest_grade_level_units_earned}}</td>
                      <td>{{$value->licince_no}}</td>
                      <td>{{$value->date_of_release}}</td>
                      
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
        <div class="table-responsive table-cse-edit" style="overflow: auto;display: none;">
          <table class="table CSE-list" width="100%">
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
                  <?php foreach (json_decode($data->cse) as $key => $value): ?>
                    <tr>
                      <td><input type="button" class="ibtnDelCSE btn btn-md btn-danger btn-xs"  value="Delete"></td>
                      
                      <td><input style="width: 100px;"  type="text" class="form-control type_of_eligibility" value="{{$value->type_of_eligibility}}" /></td>
                      <td><input style="width: 389px;"  type="text" class="form-control career_service_under_special_laws_ces_csee" value="{{$value->career_service_under_special_laws_ces_csee}}" /></td>
                      <td><input style="width: 100px;"  type="text" class="form-control rating" value="{{$value->rating}}" /></td>
                      <td><input style="width: 100px;"  type="text" class="form-control date_of_examination_conferment" value="{{$value->date_of_examination_conferment}}" /></td>
                      <td><input style="width: 500px;"  type="text" class="form-control place_of_examination_conferment" value="{{$value->place_of_examination_conferment}}" /></td>
                      <td><input style="width: 100%;"  type="date" class="form-control highest_grade_level_units_earned" value="{{$value->highest_grade_level_units_earned}}" /></td>
                      <td><input style="width: 100%;"  type="date" class="form-control licince_no" value="{{$value->licince_no}}" /></td>
                      <td><input style="width: 100px;"  type="text" class="form-control date_of_release" value="{{$value->date_of_release}}" /></td>

                      
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
        </div><br><br>
        <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-3" id="addCSE" value="Add Civil Service Eligibility"  style="margin-bottom: 5px;display: none;" />
      
    </div>
  </div>
</div>

<div class="ibox ">
    <div class="ibox-title">
        <h5>Work Experience</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content" style="display: none;">
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
              <button class="btn btn-info btn-xs pull-right button-edit-we"><i class="fa fa-pencil btn-xs"></i></button>
              <button class="btn btn-primary btn-xs pull-right button-save-we" style="display: none;"><i class="fa fa-save btn-xs"></i></button>
            </div>
            <div class="table-responsive table-we-display" style="overflow: auto;">
                  <table class="table">
                     <thead>
                        <tr>
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
                          <?php foreach (json_decode($data->we) as $key => $value): ?>
                            <tr>
                              <td>{{ isset($value->include_date_from) ? $value->include_date_from : date('Y-m-d', strtotime('0000-00-00')) }}</td>
                              <td>{{ isset($value->include_date_to) ? $value->include_date_to : date('Y-m-d', strtotime('0000-00-00')) }}</td>
                              <td>{{ $value->position_title }}</td>
                              <td>{{ $value->department_agency_office_company }}</td>
                              <td>{{ $value->monthly_salary }}</td>
                              <td>{{ $value->salary_grade_step_increment }}</td>
                              <td>{{ $value->status_of_appointment }}</td>
                              <td>{{ $value->govt_service }}</td>
                            </tr>
                          <?php endforeach ?>
                        <?php endif ?>
                     </tbody>
                  </table>
            </div>
            <div class="table-responsive table-we-edit" style="overflow: auto;display: none;">
              <table class="table WE-list">
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
                      <?php foreach (json_decode($data->we) as $key => $value): ?>
                        <tr>
                          <td><input type="button" class="ibtnDelWE btn btn-md btn-danger btn-xs"  value="Delete"></td>
                          <td><input style="width: 150px;"  type="date" class="form-control include_date_from" 
                            value="{{ isset($value->include_date_from) ? $value->include_date_from : date('Y-m-d', strtotime('0000-00-00')) }}" /></td>
                          <td><input style="width: 150px;"  type="date" class="form-control include_date_to" 
                            value="{{ isset($value->include_date_to) ? $value->include_date_to : date('Y-m-d', strtotime('0000-00-00')) }}" /></td>
                          <td><input style="width: 200px;"  type="text" class="form-control position_title" value="{{ $value->position_title }}" /></td>
                          <td><input style="width: 200px;"  type="text" class="form-control department_agency_office_company" value="{{ $value->department_agency_office_company }}" /></td>
                          <td><input style="width: 200px;"  type="number" class="form-control monthly_salary" value="{{ $value->monthly_salary }}" /></td>
                          <td><input style="width: 200px;"  type="text" class="form-control salary_grade_step_increment" value="{{ $value->salary_grade_step_increment }}" /></td>
                          <td><input style="width: 100%;"  type="text" class="form-control status_of_appointment" value="{{ $value->status_of_appointment }}" /></td>
                          <td><input style="width: 200px;"  type="text" class="form-control govt_service" value="{{ $value->govt_service }}" /></td>

                          
                        </tr>
                      <?php endforeach ?>
                    <?php endif ?>
                 </tbody>
              </table>
            </div>
            <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;display: none;" id="addWE" value="Add Work Experience" />
        </div>
    </div>
</div>
<div class="ibox ">
    <div class="ibox-title">
        <h5>Voluntary Work</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content" style="display: none;">
        <div class="row">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
              <button class="btn btn-info btn-xs pull-right button-edit-vw"><i class="fa fa-pencil btn-xs"></i></button>
              <button class="btn btn-primary btn-xs pull-right button-save-vw" style="display: none;"><i class="fa fa-save btn-xs"></i></button>
            </div>
            <div class="table-responsive table-vw-display" style="overflow: auto;">
              <table class="table">
                 <thead>
                    <tr>
                       <th style="width: 30% !important;">Name and address of organization</th>
                       <th style="width: 30% !important;">Include Date from</th>
                       <th style="width: 30% !important;">Include Date To</th>
                       <th style="width: 30% !important;">Number of hours</th>
                       <th style="width: 30% !important;">Position/Nature of work</th>
                       
                    </tr>
                 </thead>
                 <tbody>
                    <?php if (isset($data->vw)): ?>
                      <?php foreach (json_decode($data->vw) as $key => $value): ?>
                        <tr>
                          <td>{{ $value->name_address_of_organization }}</td>
                          <td>{{ $value->include_date_from }}</td>
                          <td>{{ $value->include_date_to }}</td>
                          <td>{{ $value->number_of_hours }}</td>
                          <td>{{ $value->position_nature_of_work }}</td>
                        </tr>
                      <?php endforeach ?>
                    <?php endif ?>
                 </tbody>
              </table>
            </div>
            <div class="table-responsive table-vw-edit" style="overflow: auto;display: none;">
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
                      <?php foreach (json_decode($data->vw) as $key => $value): ?>
                        <tr>
                          <td><input type="button" class="ibtnDelVW btn btn-md btn-danger btn-xs"  value="Delete"></td>
                          <td><textarea style="width: 230px;"  type="text" class="form-control name_address_of_organization" >{{ $value->name_address_of_organization }} </textarea></td>
                          <td><input style="width: 150px;"  type="date" class="form-control include_date_from" value="{{ $value->include_date_from }}" /></td>
                          <td><input style="width: 150px;"  type="date" class="form-control include_date_to" value="{{ $value->include_date_to }}" /></td>
                          <td><input style="width: 100px;"  type="number" class="form-control number_of_hours" value="{{ $value->number_of_hours }}" /></td>
                          <td><input style="width: 200px;"  type="text" class="form-control position_nature_of_work" value="{{ $value->position_nature_of_work }}" /></td>
                          
                        </tr>
                      <?php endforeach ?>
                    <?php endif ?>
                 </tbody>
              </table>
            </div>
            <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;display: none;" id="addVW" value="Add Voluntary Work" />
        </div>
    </div>
</div>
<div class="ibox ">
    <div class="ibox-title">
        <h5>Training Programs</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content" style="display: none;">
        <div class="row">
          <div class="col-lg-6"></div>
          <div class="col-lg-6">
            <button class="btn btn-info btn-xs pull-right button-edit-tp"><i class="fa fa-pencil btn-xs"></i></button>
            <button class="btn btn-primary btn-xs pull-right button-save-tp" style="display: none;"><i class="fa fa-save btn-xs"></i></button>
          </div>
          <div class="table-responsive table-tp-display" style="overflow: auto;">
            <table class="table">
               <thead>
                  <tr>
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
                    <?php foreach (json_decode($data->tp) as $key => $value): ?>
                      <tr>
                        <td>{{ $value->title_of_learning_and_dev_inventions_tp }}</td>
                        <td>{{ $value->include_date_from }}</td>
                        <td>{{ $value->include_date_to }}</td>
                        <td>{{ $value->number_of_hours }}</td>
                        <td>{{ $value->tpy_of_ld }}</td>
                        <td>{{ $value->conducted_sponsored_by }}</td>
                        
                      </tr>
                    <?php endforeach ?>
                  <?php endif ?>
               </tbody>
            </table>
          </div>
          <div class="table-responsive table-tp-edit" style="overflow: auto;display: none;">
            <table class="table TP-list">
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
                    <?php foreach (json_decode($data->tp) as $key => $value): ?>
                      <tr>
                        <td><input type="button" class="ibtnDelTP btn btn-md btn-danger btn-xs"  value="Delete" /></td>
                        <td><textarea style="width: 210px;"  type="text" class="form-control title_of_learning_and_dev_inventions_tp">{{ $value->title_of_learning_and_dev_inventions_tp }}</textarea></td>
                        <td><input style="width: 150px;"  type="date" class="form-control include_date_from" value="{{ $value->include_date_from }}" /></td>
                        <td><input style="width: 150px;"  type="date" class="form-control include_date_to" value="{{ $value->include_date_to }}" /></td>
                        <td><input style="width: 100px;"  type="number" class="form-control number_of_hours" value="{{ $value->number_of_hours }}" /></td>
                        <td><input style="width: 150px;"  type="text" class="form-control tpy_of_ld" value="{{ $value->tpy_of_ld }}" /></td>
                        <td><input style="width: 150px%;"  type="text" class="form-control conducted_sponsored_by" value="{{ $value->conducted_sponsored_by }}" /></td>
                        
                      </tr>
                    <?php endforeach ?>
                  <?php endif ?>
               </tbody>
            </table>
          </div>
          <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;display: none;" id="addTP" value="Add Training Programs" />
        </div>

    </div>
</div>
<div class="ibox ">
    <div class="ibox-title">
        <h5>Other Information</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content" style="display: none;">
        <div class="row">
           <div class="col-lg-6"></div>
           <div class="col-lg-6">
            <button class="btn btn-info btn-xs pull-right button-edit-oi"><i class="fa fa-pencil btn-xs"></i></button>
            <button class="btn btn-primary btn-xs pull-right button-save-oi" style="display: none;"><i class="fa fa-save btn-xs"></i></button>
           </div>
          <div class="table-responsive table-oi-display" style="overflow: auto;">
            <table class="table" width="100%">
               <thead>
                  <tr>
                     <th style="width: 30% !important;">Special Skills / Hobbies</th>
                     <th style="width: 30% !important;">Non-Academ Distinctions / Recognition</th>
                     <th style="width: 30% !important;">Membership in Association/Organization</th>
                  </tr>
               </thead>
               <tbody>
                  <?php if (isset($data->oi)): ?>
                    <?php foreach (json_decode($data->oi) as $key => $value): ?>
                      <tr>
                        <td>{{ $value->special_skills_hobbies }}</td>
                        <td>{{ $value->non_academic_distinctions_recognitions }}</td>
                        <td>{{ $value->membership_in_assoc_org }}</td>
                      </tr>
                    <?php endforeach ?>
                  <?php endif ?>
               </tbody>
            </table>
          </div>
          <div class="table-responsive table-oi-edit" style="overflow: auto;display: none;">
            <table class="table table-striped mb-0 OI-list" width="100%">
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
                    <?php foreach (json_decode($data->oi) as $key => $value): ?>
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
          <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;display: none;" id="addOI" value="Add Other Informtion" />
        </div>

    </div>
</div>
<div class="ibox ">
    <div class="ibox-title">
        <h5>References (Person not related by consanguinity or affinity to applicant / appointee)</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content" style="display: none;">
        <div class="row">
          <div class="col-lg-6"></div>
          <div class="col-lg-6">
            <button class="btn btn-info btn-xs pull-right button-edit-reference"><i class="fa fa-pencil btn-xs"></i></button>
            <button class="btn btn-primary btn-xs pull-right button-save-reference" style="display: none;"><i class="fa fa-save btn-xs"></i></button>
          </div>
          <div class="table-responsive table-reference-display" style="overflow: auto;">
              <table class="table" width="100%">
                 <thead>
                    <tr>
                       <th style="width: 30% !important;">Name</th>
                       <th style="width: 30% !important;">Address</th>
                       <th style="width: 30% !important;">Tel No</th>
                    </tr>
                 </thead>
                      <?php if (isset($data->reference)): ?>
                        <?php foreach (json_decode($data->reference) as $key => $value): ?>
                          <tr>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->address }}</td>
                            <td>{{ $value->tel_no }}</td>

                          </tr>
                        <?php endforeach ?>
                      <?php endif ?>
                 <tbody>
                 </tbody>
              </table>
            </div>
            <div class="table-responsive table-reference-edit" style="overflow: auto;display: none;">
              <table class="table table-striped mb-0 References-list" width="100%">
                 <thead>
                    <tr>
                       <th style="width: 30% !important;">Name</th>
                       <th style="width: 30% !important;">Address</th>
                       <th style="width: 30% !important;">Tel No</th>
                       <th style="width: 30% !important;">Actions</th>
                    </tr>
                 </thead>
                      <?php if (isset($data->reference)): ?>
                        <?php foreach (json_decode($data->reference) as $key => $value): ?>
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
           <input type="button" class="btn btn-lg btn-block btn btn-success waves-effect waves-light btn-xs col-lg-4" style="margin-bottom: 5px;display: none;" id="addReferences" value="Add References" />
        </div>

    </div>
</div>