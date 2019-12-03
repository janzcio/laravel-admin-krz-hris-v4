@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @section('left-sidebar')
                    @include ('layouts.lsidebar',["currentModule" => "jobhirings"])
            @endsection

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">jobhiring {{ $jobhiring->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/jobhirings') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/jobhirings/' . $jobhiring->id . '/edit') }}" title="Edit jobhiring"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/jobhirings', $jobhiring->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete jobhiring',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $jobhiring->id }}</td>
                                    </tr>
                                    <tr><th> Title </th><td> {{ $jobhiring->title }} </td></tr><tr><th> Description </th><td> {{ $jobhiring->description }} </td></tr><tr><th> Requirements </th><td> {{ $jobhiring->requirements }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
