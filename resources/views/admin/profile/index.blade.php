@extends('layouts.backend')

@section('css-extend')
@endsection

@section('breadcrumb')
        <h2>Profile</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/home">Home</a>
            </li>
            <li class="breadcrumb-item active">
              <a href="/Profile">Profile</a> 
            </li>
        </ol>

@endsection

@section('left-sidebar')
        @include ('layouts.lsidebar',["currentModule" => "profile"])
@endsection

@section('content')
<div class="row animated fadeInRight">
    <div class="col-md-4">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Profile Detail</h5>
            </div>
            <div>
                <div class="ibox-content no-padding border-left-right">
                    <img alt="image" class="img-fluid" src="{{ asset('inspinia_admin-v2.9.2/img/profile_big.jpg') }}">
                </div>
                <div class="ibox-content profile-content">
                    <h4><strong>{{ isset($data) ? $data->firstname : ''}} {{ isset($data) ? $data->surname : '' }}</strong></h4>
                    <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                    <h5>
                        About me
                    </h5>
                    <p>
                        {{ isset($data) ? $data->bio : '' }}
                    </p>
                    <!-- <div class="user-button">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                            </div>
                            <div class="col-md-6">
                                <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            
        </div>
        <div>
            <button class="btn btn-primary pull-left"><i class="fa fa-arrow-left"></i> Back</button>
            <button class="btn btn-success pull-right">Edit</button>
        </div>
    </div>
    <div class="col-md-8">
        <div class="ibox">
            <div class="ibox-title">
                <h5>Profile Information</h5>
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
                                @if($role != "jobseeker")
                                    <tr>
                                        <th>Device ID</th>
                                        <td><span class="pull-left">:</span>  {{ isset($data) ? $data->device_id : ''}} </td>
                                    </tr>

                                    <tr>
                                        <th>Employee ID</th>
                                        <td><span class="pull-left">:</span>  {{ isset($data) ? $data->device_id : ''}} </td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>Surname</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->surname : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Firstname</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->firstname : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Middlename</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->middlename : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Suffix</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->suffix : ''}} </td>
                                </tr>
                                @if($role != "jobseeker")
                                    <tr>
                                        <th>Department</th>
                                        <td><span class="pull-left">:</span>  {{ isset($data) ? $data->surname : ''}} </td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>Department</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->department : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Section</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->section : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Position</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->position : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Salary Schedule</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->salary_schedule : ''}} </td>
                                </tr>
                                <tr>
                                    <th>SG</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->sg : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Step</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->step : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Month Salary</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->monthly_salary : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Date of Birth</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->date_of_birth : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Sex</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->sex : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Civil Status</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->civil_Status : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Height(m)</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->height : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Weight(Kg)</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->weight : ''}} </td>
                                </tr>
                                <tr>
                                    <th>GSIS ID No.</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->gsis_id_no : ''}} </td>
                                </tr>
                                <tr>
                                    <th>PAG-IBIG ID No.</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->pagibig_id_no : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Phil Health No.</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->phil_health_no : ''}} </td>
                                </tr>
                                <tr>
                                    <th>SSS No.</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->sss_no : ''}} </td>
                                </tr>
                                <tr>
                                    <th>TIN No.</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->tin_no : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Agency Emplo. No</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->agency_emp_no : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Citizenship</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->citizenship : ''}} </td>
                                </tr>
                                <tr>
                                    <th>GSIS</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->gsis_id_no : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td><span class="pull-left">:</span>  {{ isset($data) ? $data->country : ''}} </td>
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
                            <table>
                                <tr>
                                    <th>House/Block/Lot No.</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->house_block_lot : ''}}  </td>
                                </tr>
                                <tr>
                                    <th>Street</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->street : ''}}  </td>
                                </tr>
                                <tr>
                                    <th>Subdivision/Village</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->subdivision_or_village : ''}}  </td>
                                </tr>
                                <tr>
                                    <th>Barangay</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->barangay : ''}}  </td>
                                </tr>
                                <tr>
                                    <th>City/Municipality</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->city_or_municipality : ''}}  </td>
                                </tr>
                                <tr>
                                    <th>Province</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->province : ''}}  </td>
                                </tr>
                                <tr>
                                    <th>Zip Code</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->zipcode : ''}}  </td>
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
                            <table>
                                <tr>
                                    <th>Tel. No.</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->tel_no : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Mobile No.</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->mobile_no : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Highest Educational Attainment</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->highest_educational_attainment : ''}} </td>
                                </tr>
                                <tr>
                                    <th>First Day of Service In Gov't</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->first_day_of_service_in_govt : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Casual Appointment</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->casual_appointment : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Original Appointment</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->original_appointment : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Nature of Appointment</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->nature_of_appointment : ''}} </td>
                                </tr>
                                <tr>
                                    <th>Status type</th>
                                    <td> <span class="pull-left">:</span>  {{ isset($data) ? $data->status_type : ''}} </td>
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

    </div>
</div>
@endsection

@section('js-extend')
@endsection
