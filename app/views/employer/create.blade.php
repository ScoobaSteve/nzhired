@extends('layouts.master')

@section('content')
	<h1 class="text-center">Create Employer Page</h1>
	<div class="col-sm-2">

	</div>
	<div class="col-sm-8">
		{{ Form::open(['route' => 'employer.store', 'method' => 'post','files' => true, 'class' => 'form-horizontal']) }}

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
			{{ Form::label('companyname', 'Company Name: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('companyname', '', array('class' => 'form-control', 'placeholder' => 'Company Name')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('contactname', 'Contact Person: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('contactname', '', array('class' => 'form-control', 'placeholder' => 'Contact Name')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('website', 'Company Website: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('website', '', array('class' => 'form-control', 'placeholder' => 'Company Website')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('location', 'Company Location: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('location', array('All Regions' => 'All Regions', 'Northland' => 'Northland', 'Auckland' => 'Auckland',
					 'Waikato' => 'Waikato', 'Bay Of Plenty' => 'Bay Of Plenty', 'Gisborne' => 'Gisborne', 'Hawke&#39;s Bay' => 'Hawke&#39;s Bay',
					 'Taranaki' => 'Taranaki', 'Manawatu / Wanganui' => 'Manawatu / Wanganui', 'Wellington' => 'Wellington', 'Nelson / Marlborough' => 'Nelson / Marlborough',
					 'West Coast' => 'West Coast', 'Canterbury' => 'Canterbury', 'Otago' => 'Otago', 'Southland' => 'Southland'), null, array('class' => 'form-control', 
					 'id' => 'location', 'name' => 'location', 'onChange' => "updateArea()")) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('area', 'Company Area: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('area', array(''), null, array('class' => 'form-control', 'id' => 'area', 'name' => 'area', 'disabled' => 'disabled')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('phone', 'Company Contact Phone Number: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('phone', '', array('class' => 'form-control', 'placeholder' => 'Phone Number')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('logo', 'Company Logo: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::file('logo') }}
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{{ Form::submit('Create Employer Account', array('class' => 'btn btn-default')) }}
			</div>			
		</div>

		{{ Form::close() }}
	</div>
	<div class="col-sm-2">

	</div>
@stop
