@extends('layouts.master')

@section('content')
	<h1>All Jobseekers</h1>
	@if ($jobseekers->count())
		@foreach ($jobseekers as $jobseeker)
		<li>Jobseeker Name: {{ link_to("/employer/show", $jobseeker->name) }}</li>
		<li>Jobseeker Location: {{ $jobseeker->location }}</li>
		<li>Jobseeker UserID: {{ $jobseeker->user_id }}</li>
		<hr>

		@endforeach
		<h1>that was all the jobseekers</h1>
	@else
		<h1>No jobseekers :(</h1>
	@endif

	<h3>Add new {{ HTML::link('jobseeker/create', 'Jobseeker') }}
@stop