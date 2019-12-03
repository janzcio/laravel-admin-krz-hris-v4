@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @section('left-sidebar')
                    @include ('layouts.lsidebar',["currentModule" => "jobhirings"])
            @endsection

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Create New jobhiring</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/jobhirings') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/jobhirings', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.jobhirings.form', ['formMode' => 'create'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
