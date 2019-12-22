<ul class="nav navbar-top-links navbar-right">
    <!-- notifications -->
    <li class="dropdown">
        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
        </a>
        <ul class="dropdown-menu dropdown-messages">
            <li>
                <div class="dropdown-messages-box">
                    <a class="dropdown-item float-left" href="profile.html">
                        <img alt="image" class="rounded-circle" src="{{ asset('inspinia_admin-v2.9.2/img/a7.jpg') }}">
                    </a>
                    <div class="media-body">
                        <small class="float-right">46h ago</small>
                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                    </div>
                </div>
            </li>
            <!-- <li class="dropdown-divider"></li> -->
        </ul>
    </li>
    <?php if ($new_applicants > 0): ?>
        <li class="dropdown">
            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                <i class="fa fa-bell"></i>  
                <span class="label label-primary count-notif swing animated infinite">{{ $new_applicants }}</span>
            </a>
            <ul class="dropdown-menu dropdown-alerts">
                <li class="count-notif">
                    <a href="/admin/jobhirings" class="dropdown-item">
                        <div>
                            <i class="fa {{ $new_applicants == 1 ? 'fa-user' : 'fa-users' }} fa-fw"></i> You have {{ $new_applicants }} new {{ $new_applicants == 1 ? 'applicant' : 'applicants' }}
                            <span class="float-right text-muted small moment-label">{{ $latest_applicants->created_at }}</span>
                        </div>
                    </a>
                </li>
                <!-- <li class="dropdown-divider"></li> -->
            </ul>
        </li>
    <?php endif ?>
    <!-- notifications -->
    <li>
        <a href="/logout">
            <i class="fa fa-sign-out"></i> Log out
        </a>
    </li>
</ul>