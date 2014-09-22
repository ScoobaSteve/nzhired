@extends('layouts.master')

@section('content')
	<h1>LOGIN PAGE</h1>
		{{ Form::open(), [class="form-horizontal"] }}

		<div class="form-group">
			{{ Form::label('email', 'Email: ', [class="col-sm-2 control-label"]) }}
			<div class="col-sm-10">
				{{ Form::email('email', [class="form-control"])}}
		    </div>
			
		</div>

		<div>
			{{ Form::label('password', 'Password: ') }}
			{{ Form::password('password')}}
		</div>

		<div>
			{{ Form::submit('Login User') }}
		</div>

	{{ Form::close() }}
@stop

<form class="form-horizontal" role="form">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>