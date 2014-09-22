@extends('layouts.master')

@section('content')
	<h1 class="text-center">Create Job Seeker Page</h1>
	<div class="col-sm-2">

	</div>
	<div class="col-sm-8">
		{{ Form::open(['route' => 'jobseeker.store', 'method' => 'post', 'class' => 'form-horizontal']) }}

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
			{{ Form::label('firstname', 'First Name: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('firstname', '', array('class' => 'form-control', 'placeholder' => 'First Name')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('lastname', 'Last Name: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('lastname', '', array('class' => 'form-control', 'placeholder' => 'Last Name')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('dob', 'Date of Birth: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::input('date', 'dob', null, array('class' => 'form-control', 'placeholder' => 'Date of Birth')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('location', 'Location: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('location', array('All Regions' => 'All Regions', 'Northland' => 'Northland', 'Auckland' => 'Auckland',
					 'Waikato' => 'Waikato', 'Bay Of Plenty' => 'Bay Of Plenty', 'Gisborne' => 'Gisborne', 'Hawke&#39;s Bay' => 'Hawke&#39;s Bay',
					 'Taranaki' => 'Taranaki', 'Manawatu / Wanganui' => 'Manawatu / Wanganui', 'Wellington' => 'Wellington', 'Nelson / Marlborough' => 'Nelson / Marlborough',
					 'West Coast' => 'West Coast', 'Canterbury' => 'Canterbury', 'Otago' => 'Otago', 'Southland' => 'Southland'), null, array('class' => 'form-control', 
					 'id' => 'location', 'name' => 'location', 'onChange' => "updateArea()")) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('area', 'Area: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('area', array(''), null, array('class' => 'form-control', 'id' => 'area', 'name' => 'area', 'disabled' => 'disabled')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('phone', 'Contact Phone Number: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('phone', '', array('class' => 'form-control', 'placeholder' => 'Phone Number')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('licence', 'Current Licence ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('licence', array('Full Licence' => 'Full Licence', 'Restricted Licence' => 'Restricted Licence',
				 'Learner Licence' => 'Learner Licence'), null, array('class' => 'form-control')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('workpermit', 'Permit to work in New Zealand: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('workpermit', array('Yes' => 'Yes', 'No' => 'No'), null, array('class' => 'form-control')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('availability', 'Availability: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('availability', array('Full Time' => 'Full Time', 'Part Time' => 'Part Time',
				 'Casual' => 'Casual'), null, array('class' => 'form-control')) }}
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{{ Form::submit('Create Job Seeker', array('class' => 'btn btn-default')) }}
			</div>			
		</div>

		{{ Form::close() }}
	</div>
	<div class="col-sm-2">

	</div>
@stop

