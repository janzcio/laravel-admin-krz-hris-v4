<ul class="nav navbar-top-links navbar-right">
    <!-- notifications -->
    <?php if (count($new_message) > 0): ?>
        <li class="dropdown">
            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope"></i>  <span class="label label-danger swing animated infinite">{{ count($new_message) }}</span>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <?php foreach ($new_message as $item): ?>
                    <li>
                        <div class="dropdown-messages-box">
                            <a class="dropdown-item float-left" href="profile.html">
                                <i class="fa fa-book"></i>
                            </a>
                            <div class="media-body">
                                <a href="/admin/message/{{ $item->id }}" class="dropdown-item">
                                    Message from 
                                    <strong>{{ $jobhirings[$item->jh_id]->title }}</strong> Sent by<strong> {{ $users[$item->sent_by] }}</strong>. <br>
                                    <small class="text-muted moment-label"> {{$item->created_at}} </small>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown-divider"></li>
                <?php endforeach ?>
                
            </ul>
        </li>
    <?php else: ?>
        <li class="dropdown">
            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope"></i> 
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <i>No message yet</i>
            </ul>
        </li>
    <?php endif ?>
    
    <?php if (Auth::user()->roles->pluck('name')[0] === 'Admin'): ?>
        <?php if ($new_applicants > 0): ?>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>  
                    <span class="label label-danger count-notif swing animated infinite">{{ $new_applicants }}</span>
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
                    <li class="dropdown-divider"></li>
                </ul>
            </li>
        <?php else: ?>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>  
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <i>No notifications yet</i>
                </ul>
            </li>
        <?php endif ?>

    <?php else: ?>
        <?php if ($rfu > 0): ?>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>  
                    <span class="label label-danger count-notif swing animated infinite">{{ $rfu }}</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li class="count-notif">
                        <a href="/admin/jobhirings" class="dropdown-item">
                            <div>
                                <i class="fa {{ $new_applicants == 1 ? 'fa-user' : 'fa-users' }} fa-fw"></i> Please update you profile
                                <span class="float-right text-muted small moment-label"><!-- {{ $latest_applicants->created_at }} --></span>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-divider"></li>
                </ul>
            </li>
        <?php else: ?>
            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i>  
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <i>No notifications yet</i>
                </ul>
            </li>
        <?php endif ?>
    <?php endif ?>
    
    <!-- notifications -->
    <li>
        <a href="/logout">
            <i class="fa fa-sign-out"></i> Log out
        </a>
    </li>
</ul>