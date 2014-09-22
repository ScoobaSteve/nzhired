@extends('layouts.master')

@section('content')
	<div class="row">
		@if ($employer->count())
		<div class="col-md-8">
			<h1>Employer Dashbard Page for : {{ $employer->companyname }}</h1>
			<img src="{{ asset('assets/img/Uploads/' . $employer->logo) }}" style="width:100px; height:100px"></br>
			{{ HTML::linkroute('joblisting.create', 'Create Job Listing') }}
			<h3>Update Account Information . . .</h3>
		</div>
		<div class="col-md-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Current Job Listings for {{ $employer->companyname }}</h3>
				</div>
				<div class="panel-body">
					@if ($joblistings->count())
						@foreach ($joblistings as $joblisting)
							<li>Name: {{ link_to("/joblisting/show", $joblisting->title) }}</li>
							<hr>
						@endforeach
						<h1>that was all the joblistings</h1>
					@else
						<h1>No Job Listings</h1>
					@endif
				</div>
			</div>
		</div>
		@else
		<div class="col-md-8">
			<h1>You need to create your {{ HTML::linkroute('employer.create', 'Employer Profile') }}</h1>
		</div>
		@endif
	</div>
@stop