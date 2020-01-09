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
        <div>
            <div class="feed-activity-list">
                <div class="feed-element">
                    <table width="100%">
                        @if($role != "jobseeker")
                            <tr>
                                <th style="width: 40%;">Device ID</th>
                                <td><span class="pull-left">:</span>  {{ isset($data) ? $data->device_id : ''}} </td>
                            </tr>

                            <tr>
                                <th>Employee ID</th>
                                <td><span class="pull-left">:</span>  <!-- {{ isset($data) ? $data->device_id : ''}} --> <input type="" name=""/> </td>
                            </tr>
                        @endif
                        <tr>
                            <th style="width: 40%;">Surname</th>
                            <td><span class="pull-left">:</span>
                              <!-- {{ isset($data) ? $data->surname : ''}} --><input type="text" class="" name="surname"> </td>
                        </tr>
                        <tr>
                            <th>Firstname</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="firstname" value="{{ isset($data) ? $data->firstname : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->firstname : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Middlename</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="middlename" value="{{ isset($data) ? $data->middlename : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->middlename : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Suffix</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="suffix" value="{{ isset($data) ? $data->suffix : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->suffix : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        @if($role != "jobseeker")
                            <tr>
                                <th>Department</th>
                                <td><span class="pull-left">:</span>
                                  <input type="text" class="" name="surname" value="{{ isset($data) ? $data->surname : ''}}"> {{ isset($data) ? $data->surname : ''}} 
                                </td>
                            </tr>
                        @endif
                        <tr>
                            <th>Department</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="department" value="{{ isset($data) ? $data->department : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->department : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Section</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="section" value="{{ isset($data) ? $data->section : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->section : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Position</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="position" value="{{ isset($data) ? $data->position : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->position : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Salary Schedule</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="salary_schedule" value="{{ isset($data) ? $data->salary_schedule : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->salary_schedule : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>SG</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="sg" value="{{ isset($data) ? $data->sg : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->sg : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Step</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="step" value="{{ isset($data) ? $data->step : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->step : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Month Salary</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="monthly_salary" value="{{ isset($data) ? $data->monthly_salary : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->monthly_salary : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="date_of_birth" value="{{ isset($data) ? $data->date_of_birth : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->date_of_birth : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Sex</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="sex" value="{{ isset($data) ? $data->sex : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->sex : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Civil Status</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="civil_Status" value="{{ isset($data) ? $data->civil_Status : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->civil_Status : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Height(m)</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="height" value="{{ isset($data) ? $data->height : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->height : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Weight(Kg)</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="weight" value="{{ isset($data) ? $data->weight : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->weight : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>GSIS ID No.</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="gsis_id_no" value="{{ isset($data) ? $data->gsis_id_no : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->gsis_id_no : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>PAG-IBIG ID No.</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="pagibig_id_no" value="{{ isset($data) ? $data->pagibig_id_no : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->pagibig_id_no : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Phil Health No.</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="phil_health_no" value="{{ isset($data) ? $data->phil_health_no : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->phil_health_no : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>SSS No.</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="sss_no" value="{{ isset($data) ? $data->sss_no : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->sss_no : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>TIN No.</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="tin_no" value="{{ isset($data) ? $data->tin_no : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->tin_no : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Agency Emplo. No</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="agency_emp_no" value="{{ isset($data) ? $data->agency_emp_no : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->agency_emp_no : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Citizenship</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="citizenship" value="{{ isset($data) ? $data->citizenship : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->citizenship : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>GSIS</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="gsis_id_no" value="{{ isset($data) ? $data->gsis_id_no : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->gsis_id_no : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="country" value="{{ isset($data) ? $data->country : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->country : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                    </table>
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
        <div>
            <div class="feed-activity-list">
                <div class="feed-element">
                    <table width="100%">
                        <tr>
                            <th style="width: 40%;">House/Block/Lot No.</th>
                            <td> <span class="pull-left">:</span>  
                              <?php if ($isupdate != 0): ?>
                                   <textarea style="width: 99%;" name="house_block_lot"> 
                                      {{ isset($data) ? $data->house_block_lot : ''}}
                                    </textarea>
                              <?php else: ?>
                                    {{ isset($data) ? $data->house_block_lot : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Street</th>
                            <td> <span class="pull-left">:</span>  
                              <?php if ($isupdate != 0): ?>
                                   <textarea style="width: 99%;" name="street"> 
                                      {{ isset($data) ? $data->street : ''}}
                                    </textarea>
                              <?php else: ?>
                                    {{ isset($data) ? $data->street : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Subdivision/Village</th>
                            <td> <span class="pull-left">:</span>  
                              <?php if ($isupdate != 0): ?>
                                   <textarea style="width: 99%;" name="subdivision_or_village"> 
                                      {{ isset($data) ? $data->subdivision_or_village : ''}}
                                    </textarea>
                              <?php else: ?>
                                    {{ isset($data) ? $data->subdivision_or_village : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Barangay</th>
                            <td> <span class="pull-left">:</span>  
                              <?php if ($isupdate != 0): ?>
                                   <textarea style="width: 99%;" name="barangay"> 
                                      {{ isset($data) ? $data->barangay : ''}}
                                    </textarea>
                              <?php else: ?>
                                    {{ isset($data) ? $data->barangay : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>City/Municipality</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="city_or_municipality" value="{{ isset($data) ? $data->city_or_municipality : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->city_or_municipality : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Province</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="province" value="{{ isset($data) ? $data->province : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->province : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Zip Code</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="zipcode" value="{{ isset($data) ? $data->zipcode : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->zipcode : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                    </table>
                </div>
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
        <div>
            <div class="feed-activity-list">
                <div class="feed-element">
                    <table width="100%">
                        <tr>
                            <th style="width: 40%;">Tel. No.</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="tel_no" value="{{ isset($data) ? $data->tel_no : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->tel_no : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Mobile No.</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="mobile_no" value="{{ isset($data) ? $data->mobile_no : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->mobile_no : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Highest Educational Attainment</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="highest_educational_attainment" value="{{ isset($data) ? $data->highest_educational_attainment : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->highest_educational_attainment : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>First Day of Service In Gov't</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="first_day_of_service_in_govt" value="{{ isset($data) ? $data->first_day_of_service_in_govt : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->first_day_of_service_in_govt : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Casual Appointment</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="casual_appointment" value="{{ isset($data) ? $data->casual_appointment : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->casual_appointment : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Original Appointment</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="original_appointment" value="{{ isset($data) ? $data->original_appointment : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->original_appointment : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Nature of Appointment</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="nature_of_appointment" value="{{ isset($data) ? $data->nature_of_appointment : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->nature_of_appointment : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                        <tr>
                            <th>Status type</th>
                            <td><span class="pull-left">:</span>
                              <?php if ($isupdate != 0): ?>
                                   <input type="text" class="" name="status_type" value="{{ isset($data) ? $data->status_type : ''}}">
                              <?php else: ?>
                                    {{ isset($data) ? $data->status_type : ''}}  
                              <?php endif ?> 
                            </td>
                        </tr>
                    </table>
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
        <div>
            <div class="feed-activity-list">
                <div class="feed-element">
                    <table>
                        <tr>
                           <th colspan="2">
                               <i><u>Spouse's Information</u></i>
                           </th> 
                        </tr>
                        <tr>
                            <th>Spouse's Surname</th>
                            <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->spouse_surname : ''}}  </td>
                        </tr>
                        <tr>
                            <th>Spouse's Firstname</th>
                            <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->spouse_firstname : ''}}  </td>
                        </tr>
                        <tr>
                            <th>Spouse's Middle Name</th>
                            <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->spouse_middlename : ''}}  </td>
                        </tr>
                        <tr>
                            <th>Spouse's Occupation</th>
                            <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->spouse_occupation : ''}}  </td>
                        </tr>
                        <tr>
                            <th>Spouse's Employer/Bus. Name</th>
                            <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->spouse_employer_bus_name : ''}}  </td>
                        </tr>
                        <tr>
                            <th>Spouse's Business Address</th>
                            <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->spouse_business_address : ''}}  </td>
                        </tr>
                        <tr>
                            <th>Spouse's Telephone</th>
                            <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->spouse_bus_telephone : ''}}  </td>
                        </tr>
                        <tr>
                            <th>Father's Surname</th>
                            <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->father_surname : ''}}  </td>
                        </tr>
                        <tr>
                            <th>Father's First Name</th>
                            <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->father_firstname : ''}}  </td>
                        </tr>
                        <tr>
                            <th>Father's Middle Name</th>
                            <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->father_middlename : ''}}  </td>
                        </tr>
                        <tr>
                            <th>Mother's Maiden Surname</th>
                            <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->mother_surname : ''}}  </td>
                        </tr>
                        <tr>
                            <th>Mother's First Name</th>
                            <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->mother_firstname : ''}}  </td>
                        </tr>
                        <tr>
                            <th>Mother's Middle Name</th>
                            <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->mother_middlename : ''}}  </td>
                        </tr>
                    </table>
                </div>
                
                <table class="table" width="100">
                    <tr>
                        <th colspan="3"><i class="fa fa-child"> Children</i></th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>Birthday</th>
                        <th>Age</th>
                    </tr>
                    <?php if ($data->children == null): ?>
                        <i>No Children</i>
                    <?php else: ?>
                        <?php foreach (json_decode($data->children) as $item): ?>
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->dob }}</td>
                                <td>{{ $item->age }}</td>
                            </tr>
                        <?php endforeach ?>

                    <?php endif ?>
                    
                </table>
                
            </div>

        </div>

    </div>
</div>
<div class="ibox ">
    <div class="ibox-title">
        <h5>Civil Service Eligibility</h5>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content" style="display: none;">
        <div>
            <div class="feed-activity-list">
                <div class="feed-element">
                    <table class="table" width="100">
                        <tr>
                            <th>Type of Eligibility</th>
                            <th>Career Service / RA 1080 (Board/Bar) Under Special LAWS/CES/CSEE</th>
                            <th>Rating</th>
                            <th>Date of Examination/Conferment</th>
                            <th>Rating</th>
                            <th>Rating</th>
                            <th>Rating</th>
                            <th>Rating</th>
                        </tr>
                        <tr>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                        </tr>
                        <tr>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                        </tr>
                        <tr>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                        </tr>
                    </table>
                </div>
                
                
                
            </div>

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
        <div>
            <div class="feed-activity-list">
                <div class="feed-element">
                    <table class="table" width="100">
                        <tr>
                            <th>Include Date From</th>
                            <th>Include Date To </th>
                            <th>Position Title</th>
                            <th>Department/Agency/Office/Company</th>
                            <th>Monthly Salary</th>
                            <th>Salary Grade & Step Increment</th>
                            <th>Status of Appointment</th>
                            <th>Gov't Service</th>
                        </tr>
                        <tr>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                        </tr>
                    </table>
                </div>
                
                
                
            </div>

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
        <div>
            <div class="feed-activity-list">
                <div class="feed-element">
                    <table class="table" width="100">
                        <tr>
                            <th>Name and address of organization</th>
                            <th>Include Date from</th>
                            <th>Include Date To</th>
                            <th>Number of hours</th>
                            <th>Position/Nature of work</th>
                        </tr>
                        <tr>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                        </tr>
                    </table>
                </div>
                
                
                
            </div>

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
        <div>
            <div class="feed-activity-list">
                <div class="feed-element">
                    <table class="table" width="100">
                        <tr>
                            <th>    Title of learning and Development Inventions/Training program</th>
                            <th>Include Date From</th>
                            <th>Include Date to</th>
                            <th>Number of hours</th>
                            <th>Position/Nature of work</th>
                        </tr>
                        <tr>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                        </tr>
                    </table>
                </div>
                
                
                
            </div>

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
        <div>
            <div class="feed-activity-list">
                <div class="feed-element">
                    <table class="table" width="100">
                        <tr>
                            <th>Special Skills / Hobbies</th>
                            <th>Non-Academ Distinctions / Recognition</th>
                            <th>Membership in Association/Organization  </th>
                        </tr>
                        <tr>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                        </tr>
                    </table>
                </div>
                
                
                
            </div>

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
        <div>
            <div class="feed-activity-list">
                <div class="feed-element">
                    <table class="table" width="100">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Tel No </th>
                        </tr>
                        <tr>
                            <td>xxxx</td>
                            <td>xxxx</td>
                            <td>xxxx</td>
                        </tr>
                    </table>
                </div>
                
                
                
            </div>

        </div>

    </div>
</div>