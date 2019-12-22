@extends('layouts.backend')

@section('css-extend')
<!-- Toastr style -->
    <link href="{{ asset('inspinia_admin-v2.9.2/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
        <h2>Job Hirings</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/home">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
              <a href="#">Job Hirings</a> 
            </li>
        </ol>

@endsection


@section('left-sidebar')
        @include ('layouts.lsidebar',["currentModule" => "jobhirings"])
@endsection

@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Header Title <small>Short Description of the header</small></h5>
                            <!-- <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#" class="dropdown-item">Config option 1</a>
                                    </li>
                                    <li><a href="#" class="dropdown-item">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div> -->
                        </div>
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-md-12">
                                     <a href="{{ url('/admin/jobhirings/create') }}" class="btn btn-success btn-sm" title="Add New jobhiring">
                                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                                    </a>

                                    {!! Form::open(['method' => 'GET', 'url' => '/admin/jobhirings', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
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
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>#</th><th>Title</th><th>Description</th><th>Requirements</th><th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($jobhirings as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->title }}</td><td>{{ $item->description }}</td><td>{{ $item->requirements }}</td>
                                                    <td>
                                                        <a href="{{ url('/admin/jobhirings/' . $item->id) }}" title="View jobhiring">
                                                            <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                                                        </a>
                                                        <a href="{{ url('/admin/jobhirings/' . $item->id . '/applicants') }}" title="View Applicants">
                                                            <button class="btn btn-info btn-sm">
                                                                <i class="fa fa-users" aria-hidden="true"></i> View Applicants
                                                                <?php 
                                                                    $count_by_jh = 0;
                                                                    if (isset(array_count_values(array_column($data_new_applicants, 'jobhiring_id'))[$item->id])) {
                                                                        $count_by_jh = array_count_values(array_column($data_new_applicants, 'jobhiring_id'))[$item->id]; 
                                                                    }
                                                                ?>
                                                                <?php if ($count_by_jh != 0): ?>
                                                                    <span class="label label-danger swing animated infinite">
                                                                           {{$count_by_jh}} 
                                                                    </span>
                                                                <?php endif ?>
                                                            </button>

                                                        </a>
                                                        <a href="{{ url('/admin/jobhirings/' . $item->id . '/edit') }}" title="Edit jobhiring"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                        {!! Form::open([
                                                            'method'=>'DELETE',
                                                            'url' => ['/admin/jobhirings', $item->id],
                                                            'style' => 'display:inline'
                                                        ]) !!}
                                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                                    'type' => 'submit',
                                                                    'class' => 'btn btn-danger btn-sm',
                                                                    'title' => 'Delete jobhiring',
                                                                    'onclick'=>'return confirm("Confirm delete?")'
                                                            )) !!}
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="pagination-wrapper"> {!! $jobhirings->appends(['search' => Request::get('search')])->render() !!} </div>
                                    </div>

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
