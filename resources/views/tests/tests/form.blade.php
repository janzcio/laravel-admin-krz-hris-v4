<div class="form-group {{ $errors->has('test_field') ? 'has-error' : ''}}">
    {!! Form::label('test_field', 'Test Field', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('test_field', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('test_field', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
