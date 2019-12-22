@extends('layouts.backend')

@section('content')
    <div class="">
        <div class="">
            @section('left-sidebar')
                    @include ('layouts.lsidebar',["currentModule" => "jobhirings"])
            @endsection

            <div class="col-md-7">
                <div class="card">
                    <div class="card-header">jobhiring</div>
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
                                        <th>ID</th>
                                        <td>{{ $jobhiring->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Title </th>
                                        <td> {{ $jobhiring->title }} </td>
                                    </tr>
                                    <tr>
                                        <th> Description </th>
                                        <td> {{ $jobhiring->description }} </td>
                                    </tr>
                                    <tr>
                                        <th> Requirements </th>
                                        <td> {{ $jobhiring->requirements }} </td>
                                    </tr>
                                    <tr>
                                        <th> Responsibilities </th>
                                        <td> {{ $jobhiring->responsibilities }} </td>
                                    </tr>
                                    <tr>
                                        <th> Others </th>
                                        <td> {{ $jobhiring->others }} </td>
                                    </tr>
                                    <tr>
                                        <th> Location </th>
                                        <td> {{ $jobhiring->location }} </td>
                                    </tr>
                                    <tr>
                                        <th> How To Apply </th>
                                        <td> {{ $jobhiring->how_to_apply }} </td>
                                    </tr>
                                    <tr>
                                        <th> Slot </th>
                                        <td> {{ $jobhiring->slot }} </td>
                                    </tr>
                                    <tr>
                                        <th> Position </th>
                                        <td> {{ $jobhiring->position }} </td>
                                    </tr>
                                    <tr>
                                        <th> Skill Requirement </th>
                                        <td> {{ $jobhiring->skill_requirement }} </td>
                                    </tr>
                                    <tr>
                                        <th> Available From </th>
                                        <td> {{ $jobhiring->available_from }} </td>
                                    </tr>
                                    <tr>
                                        <th> Available To </th>
                                        <td> {{ $jobhiring->available_to }} </td>
                                    </tr>
                                    <tr>
                                        <th> Email Address </th>
                                        <td> {{ $jobhiring->email_address }} </td>
                                    </tr>
                                    <tr>
                                        <th> Availability </th>
                                        <td> {{ $jobhiring->is_active == 1 ? 'Active' : 'Inactive' }} </td>
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
