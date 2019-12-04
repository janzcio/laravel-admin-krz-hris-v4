@extends('layouts.backend')



@section('css-extend')
    <link href="{{ asset('inspinia_admin-v2.9.2/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    <style type="text/css">
        .paging_simple_numbers{
            float: right;
        }
    </style>
@endsection
  

@section('breadcrumb')
        <h2>Message</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/home">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
              <a href="#">Message</a> 
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
                            <h5>Job Offer : <b>Web Developers</b> <small>List of applicants</small></h5>
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
                                    <br/>
                                    {!! Form::open(['url' => '/admin/message', 'class' => 'form-horizontal', 'files' => true]) !!}
                        
                                        <div class="form-group {{ $errors->has('jh_id') ? 'has-error' : ''}}">
                                            {!! Form::label('jh_id', 'Job Hiring Name', ['class' => 'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                <input type="text" name="jhname" class="form-control" disabled="disabled" value="{{$j->title}}">
                                                {!! Form::hidden('jh_id', $jh_id, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control','value' => '{{$jh_id}}']) !!}
                                                {!! $errors->first('jh_id', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div><div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
                                            {!! Form::label('user_id', 'Recipient Name or ID', ['class' => 'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                <?php $recepient = 0; ?>
                                                <?php if ($prof->firstname == '' && $prof->surname == ''): ?>
                                                    <?php $recepient = $user_id; ?>
                                                <?php else: ?>
                                                    <?php $recepient = $prof->firstname . " " . $prof->surname; ?>
                                                <?php endif ?>
                                                <input type="text" name="uname" class="form-control" disabled="disabled" value="{{ $recepient }}">
                                                {!! Form::hidden('user_id', $user_id, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control', 'value' => '{{$user_id}}']) !!}
                                                {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div><div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
                                            {!! Form::label('message', 'Message', ['class' => 'col-md-4 control-label']) !!}
                                            <div class="col-md-6">
                                                {!! Form::textarea('message', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                                {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-offset-4 col-md-4">
                                                <button class="btn btn-success" type="submit">Send</button>
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection


@section('js-extend')
    <script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            console.log('asdasdasd');
            $('#table-applicants').DataTable({
                pageLength: 25,
                responsive: true,
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]
            });
        })
    </script>
@endsection



