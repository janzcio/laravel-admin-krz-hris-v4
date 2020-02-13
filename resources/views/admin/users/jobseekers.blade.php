@extends('layouts.backend')


@section('css-extend')
<!-- Toastr style -->
    <link href="{{ asset('inspinia_admin-v2.9.2/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="">
        <div class="">
            @section('left-sidebar')
                    @include ('layouts.lsidebar',["currentModule" => "jobseekers"])
            @endsection

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Users</div>
                    <div class="card-body">

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/users', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search...">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <div class="ibox ">
                        <div class="ibox-content">

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $item)
                                    @if(isset($profile[$item->id]))
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>
                                                <a href="{{ url('/admin/users/' . $item->id) }}" title="View User"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="/profile?uid={{$item->id}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Profile</a>
                                                <a href="{{ url('/admin/users/' . $item->id . '/edit') }}" title="Edit User"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'url' => ['/admin/users', $item->id],
                                                    'style' => 'display:inline'
                                                ]) !!}
                                                    {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                            'type' => 'submit',
                                                            'class' => 'btn btn-danger btn-sm',
                                                            'title' => 'Delete User',
                                                            'onclick'=>'return confirm("Confirm delete?")'
                                                    )) !!}
                                                {!! Form::close() !!}
                                                @can('can-request-for-update')
                                                <?php if ($profile[$item->id]->rfu != 1): ?>
                                                    
                                                        <a href="{{ url('/admin/rfu/jobseekers/' . $item->id) }}" title="Request for profile update">
                                                            <button class="btn btn-warning btn-sm"><i class="fa fa-paper-plane" aria-hidden="true"></i> Request for profile update
                                                            </button>
                                                        </a>
                                                <?php else: ?>
                                                    <button disabled class="btn btn-warning btn-sm"><i class="fa fa-paper-plane" aria-hidden="true"></i> Request for profile update sent
                                                        </button>
                                                <?php endif ?>
                                                @endcan
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                            <div class="pagination"> {!! $users->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js-extend')
<script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/toastr/toastr.min.js') }}"></script>
    <script type="text/javascript">
         @if(\Session::has('message'))
            toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
            toastr.success('Success!', '{{session()->get('message')}}');
            @endif
    </script>
@endsection
