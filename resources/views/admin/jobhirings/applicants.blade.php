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
        <h2>Applicants</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/home">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
              <a href="#">Applicants</a> 
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
                            <h4>Applicants for : <b>{{$jh[$jhid]->title}}</b></h4>
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
                                    <br/>

                                    <div class="table-responsive">
                                        <a href="/admin/jobhirings" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
                                        <br><br>
                                        <table class="table table-hover" id="table-applicants">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>name</th>
                                                    <th>Bio</th>
                                                    <th>Date Applied</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($applicants as $item)
                                                    @if(isset($p[$item->user_id]))
                                                        <tr>
                                                            <td>{{ $p[$item->user_id]->id }}</td>
                                                            <td>{{ $p[$item->user_id]->firstname . " " . $p[$item->user_id]->surname }}</td>
                                                            <td>{{ $p[$item->user_id]->bio }}</td>
                                                            <td><span class="label label-info ">{{ $item->created_at }}</span></td>
                                                            <td class="text-center">
                                                                <a href="/profile?uid={{$item->user_id}}" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> View Profile</a>
                                                                <?php if (isset($message[$item->user_id][$item->jobhiring_id])): ?>
                                                                    <button disabled="disabled" class="btn btn-w-m btn-info btn-xs" title="Date Send: {{$message[$item->user_id][$item->jobhiring_id]->created_at}}"><i class="fa fa-check"></i> Message Sent</button>
                                                                <?php else: ?>
                                                                    <a href="/admin/message/create?uid={{$item->user_id}}&&jhid={{$item->jobhiring_id}}" class="btn btn-warning btn-xs"><i class="fa fa-paper-plane"></i> Send a message</a>
                                                                <?php endif ?>
                                                            </td>
                                                        </tr>
                                                    @endif
                                                @endforeach
                                            </tbody>
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
    <script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/dataTables/datatables.min.js') }}"></script>
    <script src="{{ asset('inspinia_admin-v2.9.2/js/plugins/dataTables/dataTables.bootstrap4.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            @if(\Session::has('message'))
            toastr.options = {
                    closeButton: true,
                    progressBar: true,
                    showMethod: 'slideDown',
                    timeOut: 4000
                };
            toastr.success('Success!', '{{session()->get('message')}}');
            @endif

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



