@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="row">
            @section('left-sidebar')
        @include ('layouts.lsidebar',["currentModule" => "roles"])
@endsection

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Role</div>
                    <div class="card-body">
                        <div class="kt-section__content kt-section__content--solid">
                            <a href="{{ url('/admin/roles') }}" class="btn btn-warning btn-sm" title="Back">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                            <a href="{{ url('/admin/roles/' . $role->id . '/edit') }}" title="Edit States" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>
                            {!! Form::open([
                                'method' => 'DELETE',
                                'url' => ['/admin/roles', $role->id],
                                'style' => 'display:inline'
                            ]) !!}
                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                        'type' => 'submit',
                                        'class' => 'btn btn-danger btn-sm',
                                        'title' => 'Delete Role',
                                        'onclick'=>'return confirm("Confirm delete?")'
                                ))!!}
                            {!! Form::close() !!}
                        </div>
                        
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID.</th> <th>Name</th><th>Label</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $role->id }}</td> <td> {{ $role->name }} </td><td> {{ $role->label }} </td>
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
