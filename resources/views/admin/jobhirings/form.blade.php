<div class="form-group {{ $errors->has('title') ? 'has-error' : ''}}">
    {!! Form::label('title', 'Title', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('title', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    {!! Form::label('description', 'Description', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('description', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('requirements') ? 'has-error' : ''}}">
    {!! Form::label('requirements', 'Requirements', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('requirements', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('requirements', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('responsibilities') ? 'has-error' : ''}}">
    {!! Form::label('responsibilities', 'Responsibilities', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('responsibilities', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('responsibilities', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('others') ? 'has-error' : ''}}">
    {!! Form::label('others', 'Others', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('others', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('others', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
    {!! Form::label('location', 'Location', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('location', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('how_to_apply') ? 'has-error' : ''}}">
    {!! Form::label('how_to_apply', 'How To Apply', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('how_to_apply', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('how_to_apply', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('slot') ? 'has-error' : ''}}">
    {!! Form::label('slot', 'Slot', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('slot', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('slot', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('position') ? 'has-error' : ''}}">
    {!! Form::label('position', 'Position', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('position', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('position', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('skill_requirement') ? 'has-error' : ''}}">
    {!! Form::label('skill_requirement', 'Skill Requirement', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('skill_requirement', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('skill_requirement', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('available_from') ? 'has-error' : ''}}">
    {!! Form::label('available_from', 'Available From', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('available_from', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('available_from', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('available_to') ? 'has-error' : ''}}">
    {!! Form::label('available_to', 'Available To', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('available_to', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('available_to', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('email_address') ? 'has-error' : ''}}">
    {!! Form::label('email_address', 'Email Address', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('email_address', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('email_address', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('is_active') ? 'has-error' : ''}}">
    {!! Form::label('is_active', 'Is Active', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('is_active', '1') !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('is_active', '0', true) !!} No</label>
</div>
        {!! $errors->first('is_active', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    {!! Form::hidden('user_id', 'User Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::hidden('user_id', Auth::user()->id, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
