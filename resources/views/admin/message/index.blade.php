@extends('layouts.backend')

@section('css-extend')
<!-- Toastr style -->
    <link href="{{ asset('inspinia_admin-v2.9.2/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">
@endsection

@section('breadcrumb')
        <h2>Messages</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Home</a>
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
                <div class="col-lg-7">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Messages<small>Short Description of the header</small></h5>
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

                                    {!! Form::open(['method' => 'GET', 'url' => '/admin/message', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
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
                                                    <th>#</th>
                                                    <th>Job Post</th>
                                                    <th>Sent by</th>
                                                    <th>Message</th>
                                                    <th>Sent Date</th>
                                                    
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($message as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration or $item->id }}</td>
                                                    <td><a href="/view/jobpost/{{$item->jh_id}}">{{ $jh[$item->jh_id]->title }}</a></td>
                                                    <?php $fullname = $p[$item->user_id]->firstname . " " . $p[$item->user_id]->surname; ?>
                                                    <td>{{ $fullname }}</td>
                                                    <td>{{ $item->message }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>
                                                        <a href="{{ url('/admin/message/' . $item->id) }}" title="View Message"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                        
                                                        {!! Form::open([
                                                            'method'=>'DELETE',
                                                            'url' => ['/admin/message', $item->id],
                                                            'style' => 'display:inline'
                                                        ]) !!}
                                                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                                    'type' => 'submit',
                                                                    'class' => 'btn btn-danger btn-sm',
                                                                    'title' => 'Delete Message',
                                                                    'onclick'=>'return confirm("Confirm delete?")'
                                                            )) !!}
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <div class="pagination-wrapper"> {!! $message->appends(['search' => Request::get('search')])->render() !!} </div>
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
