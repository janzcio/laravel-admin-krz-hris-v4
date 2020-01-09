


@if(Auth::user() !== null && Auth::user()->roles->pluck('name')[0] === 'jobseeker')
    <li class="">
        <a href="/"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
    </li>
    <li class="{{ $currentModule == 'profile' ? 'active' : '' }}">
        <a href="/profile"><i class="fa fa-book"></i> <span class="nav-label">Profile</span></a>
    </li>
    <li class="{{ $currentModule == 'messages' ? 'active' : '' }}">
        <a href="/messages"><i class="fa fa-book"></i> <span class="nav-label">Messages</span></a>
    </li>

@elseif(Auth::user() !== null && Auth::user()->roles->pluck('name')[0] === 'User')
    <li class="">
        <a href="/"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
    </li>
    <li class="{{ $currentModule == 'profile' ? 'active' : '' }}">
        <a href="/profile"><i class="fa fa-book"></i> <span class="nav-label">Profile</span></a>
    </li>
    <li class="{{ $currentModule == 'messages' ? 'active' : '' }}">
        <a href="/messages"><i class="fa fa-book"></i> <span class="nav-label">Messages</span></a>
    </li>
@else
    <li class="">
        <a href="/"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
    </li>
    <li class="{{ $currentModule == 'dashboard' ? 'active' : '' }}">
        <a href="/dashboard"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
    </li>

    <li class="{{ $currentModule == 'jobhirings' ? 'active' : '' }}">
        <a href="/admin/jobhirings"><i class="fa fa-book"></i> <span class="nav-label">Job Hirings</span></a>
    </li>

    <li class="{{ ($currentModule == 'users' || $currentModule == 'roles' || $currentModule == 'permissions' || $currentModule == 'generator' || $currentModule == 'jobseekers') ? 'active' : '' }}">
        <a href="#"><i class="fa fa fa-cogs"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
        <ul class="nav nav-second-level collapse">
            <li class="{{ $currentModule == 'users' || $currentModule == 'jobseekers' }}">
                <a href="#" aria-expanded="false">Users <span class="fa arrow"></span></a>
                <ul class="nav nav-third-level collapse" aria-expanded="false" style="height: 0px;">
                    <li class="{{ $currentModule == 'users' ? 'active' : '' }}">
                        <a href="/admin/users">Employee</a>
                    </li>
                    <li class="{{ $currentModule == 'jobseekers' ? 'active' : '' }}">
                        <a href="/admin/jobseekers">Jobseekers</a>
                    </li>

                </ul>
            </li>
            <li class="{{ $currentModule == 'roles' ? 'active' : '' }}"><a href="/admin/roles">Roles</a></li>
            <li class="{{ $currentModule == 'permissions' ? 'active' : '' }}"><a href="/admin/permissions">Permissions</a></li>
            <li class="{{ $currentModule == 'generator' ? 'active' : '' }}"><a href="/admin/generator">Generator</a></li>
        </ul>
    </li>
@endif
