@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Edit Sample Crud #{{ $sample crud->id }}</div>
                    <div class="card-body">
                        <a href="{{ url('/samplecruds/sample-crud') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::model($sample crud, [
                            'method' => 'PATCH',
                            'url' => ['/samplecruds/sample-crud', $sample crud->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('samplecruds.sample-crud.form', ['formMode' => 'edit'])

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
