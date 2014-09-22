@extends('layouts.master')

@section('content')
	<h1 class="text-center">LOGIN PAGE</h1>
	<div class="col-sm-2">

	</div>
	<div class="col-sm-8">
		{{ Form::open(['route' => 'auth.store', 'method' => 'post', 'class' => 'form-horizontal']) }}

		<div class="form-group">
			{{ Form::label('email', 'Email: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::email('email', '', array('class' => 'form-control', 'placeholder' => 'Email')) }}
			</div>
		</div>

		<div class="form-group">
			{{ Form::label('password', 'Password: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{{ Form::submit('Login User', array('class' => 'btn btn-default')) }}
			</div>			
		</div>

		{{ Form::close() }}
	</div>
	<div class="col-sm-2">

	</div>
@stop