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
                    <h4><strong>{{ $data->firstname }} {{ $data->surname }}</strong></h4>
                    <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                    <h5>
                        About me
                    </h5>
                    <p>
                        {{ $data->bio }}
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
            <button class="btn btn-primary pull-right">Edit</button>
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
                                        <td> {{ $data->device_id}} </td>
                                    </tr>

                                    <tr>
                                        <th>Employee ID</th>
                                        <td> {{ $data->device_id}} </td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>Surname</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>Firstname</th>
                                    <td> {{ $data->firstname}} </td>
                                </tr>
                                <tr>
                                    <th>Middlename</th>
                                    <td> {{ $data->middlename}} </td>
                                </tr>
                                <tr>
                                    <th>Suffix</th>
                                    <td> {{ $data->suffix}} </td>
                                </tr>
                                @if($role != "jobseeker")
                                    <tr>
                                        <th>Department</th>
                                        <td> {{ $data->surname}} </td>
                                    </tr>
                                @endif
                                <tr>
                                    <th>Department</th>
                                    <td> {{ $data->department}} </td>
                                </tr>
                                <tr>
                                    <th>Section</th>
                                    <td> {{ $data->section}} </td>
                                </tr>
                                <tr>
                                    <th>Position</th>
                                    <td> {{ $data->position}} </td>
                                </tr>
                                <tr>
                                    <th>Salary Schedule</th>
                                    <td> {{ $data->salary_schedule}} </td>
                                </tr>
                                <tr>
                                    <th>SG</th>
                                    <td> {{ $data->sg}} </td>
                                </tr>
                                <tr>
                                    <th>Step</th>
                                    <td> {{ $data->step}} </td>
                                </tr>
                                <tr>
                                    <th>Month Salary</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>Date of Birth</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>Sex</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>Civil Status</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>Height(m)</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>Weight(Kg)</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>GSIS ID No.</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>PAG-IBIG ID No.</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>Phil Health No.</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>SSS No.</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>TIN No.</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>Agency Emplo. No</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>Citizenship</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>GSIS</th>
                                    <td> {{ $data->surname}} </td>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <td> {{ $data->surname}} </td>
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
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Street</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Subdivision/Village</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Barangay</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>City/Municipality</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Province</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Zip Code</th>
                                    <td> xxxxx </td>
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
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Mobile No.</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Highest Educational Attainment</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>First Day of Service In Gov't</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Casual Appointment</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Original Appointment</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Nature of Appointment</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Status type</th>
                                    <td> xxxxx </td>
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
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Spouse's Firstname</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Spouse's Middle Name</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Spouse's Occupation</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Spouse's Employer/Bus. Name</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Spouse's Business Address</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Spouse's Telephone</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Father's Surname</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Father's First Name</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Father's Middle Name</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Mother's Maiden Surname</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Mother's First Name</th>
                                    <td> xxxxx </td>
                                </tr>
                                <tr>
                                    <th>Mother's Middle Name</th>
                                    <td> xxxxx </td>
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
