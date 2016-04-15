<div>
  {!! link_to('users/create', 'Write User', array('class' => 'btn btn-raised btn-success')) !!}
</div>
<br/>
<p>Sort User By : <a id="id">ID &nbsp;<i id="ic-direction"></i></a></p>
<br/>
@foreach ($users as $user)
  <div>
    <p>{!! $user->id !!}</p>
    <h1>{!! $user->name !!}</h1>
    <p>{!! $user->email !!}</p>
    <div>
        {!! link_to('users/'.$user->id, 'Show', array('class' => 'btn btn-info')) !!}
        {!! link_to('users/'.$user->id.'/edit', 'Edit', array('class' => 'btn btn-warning')) !!}
        {!! Form::open(array('route' => array('users.destroy', $user->id), 'method' => 'delete')) !!}
        {!! Form::submit('Delete', array('class' => 'btn btn-danger', "onclick" => "return confirm('are you sure?')")) !!}
        {!! Form::close() !!}
    </div>
  </div>
@endforeach
