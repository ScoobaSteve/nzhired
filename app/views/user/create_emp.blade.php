@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-primary">
            <div class="panel-heading">
              	<h3 class="panel-title">Register as Employer</h3>
            </div>
            <div class="panel-body" style="background-color:#64BB4A">
              	{{ Form::open(['route' => 'ue.store']) }}
					<div class="form-group">
						{{ Form::label('email', 'Email: ') }}
						{{ Form::email('email')}}
					</div>
					<div class="form-group">
						{{ Form::label('password', 'Password: ') }}
						{{ Form::password('password')}}
					</div>
					<div class="form-group">
						{{ Form::submit('Create User', ['class' => 'btn btn-primary']) }}
					</div>
				{{ Form::close() }}
            </div>
        </div>	
	</div>
</div>

@stop