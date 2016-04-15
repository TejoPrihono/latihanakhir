@extends("layouts.application")
@section("content")
{!! Form::open(['url' => 'comments', 'class' => 'form-horizontal', 'role' => 'form']) !!}
  <div class="form-group label-floating">
    {!! Form::label('content', 'Content', array('class' => 'col-lg-3 control-label')) !!}
    <div class="col-lg-9">
      {!! Form::textarea('content', null, array('class' => 'form-control', 'rows' => 10)) !!}
      {!! $errors->first('content') !!}
    </div>
    <div class="clear"></div>
  </div>

  <div class="form-group label-floating">
    <div class="col-lg-3"></div>
    <div class="col-lg-9">
      {!! Form::submit('Save', array('class' => 'btn btn-primary')) !!}
    </div>
    <div class="clear"></div>
  </div>
{!! Form::close() !!}
@stop
