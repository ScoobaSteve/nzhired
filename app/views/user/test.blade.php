@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-primary">
            <div class="panel-heading">
              	<h3 class="panel-title">Register as Employer</h3>
            </div>
            <div class="panel-body" style="background-color:#64BB4A">
              	{{ Form::open(['route' => 'test']) }}
					<div class="form-group">
						{{ Form::label('email', 'Email: ') }}
						{{ Form::email('email')}}
					</div>
					<div class="form-group">
						{{ Form::label('password', 'Password: ') }}
						{{ Form::password('password')}}
					</div>
					<div class="form-group">
						{{ Form::label('companyname', 'Company Name: ') }}
						{{ Form::text('companyname')}}
					</div>
					<div class="form-group">
						{{ Form::label('contactname', 'Contact Person: ') }}
						{{ Form::text('contactname')}}
					</div>
					<div class="form-group">
						{{ Form::label('website', 'Company Website: ') }}
						{{ Form::text('website')}}
					</div>
					<div class="form-group">
						{{ Form::label('location', 'Company Location: ') }}
						{{ Form::select('location', array('All Regions', 'Northland', 'Auckland', 'Waikato', 'Bay Of Plenty', 'Gisborne', 'Hawke&#39;s Bay', 'Taranaki', 'Manawatu / Wanganui', 
						'Wellington', 'Nelson / Marlborough', 'West Coast', 'Canterbury', 'Otago', 'Southland')) }}
					</div>
					<div class="form-group">
						{{ Form::label('area', 'Company Area: ') }}
						{{ Form::select('area', array('Area 1', 'Area 2')) }}
					</div>
					<div class="form-group">
						{{ Form::label('phone', 'Company Contact Phone Number: ') }}
						{{ Form::text('phone')}}
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