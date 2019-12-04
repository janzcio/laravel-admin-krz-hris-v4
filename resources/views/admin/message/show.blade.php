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
                            <h5>Messages<small> Short Description of the header</small></h5>
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
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>ID</th>
                                                <td>{{ $message->id }}</td>
                                            </tr>
                                            <tr>
                                                <th> Jh Id </th>
                                                <td> {{ $message->jh_id }} </td></tr><tr><th> User Id </th>
                                                <td> {{ $message->user_id }} </td></tr><tr><th> Message </th>
                                                <td> {{ $message->message }} </td>
                                            </tr>
                                        </tbody>
                                    </table>
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
