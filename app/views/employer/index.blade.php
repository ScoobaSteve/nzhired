@extends('layouts.master')

@section('content')
	<h1>All Employers</h1>
	@if ($employers->count())
		@foreach ($employers as $employer)
		<li>Employer Name: {{ link_to("/employer/show", $employer->name) }}</li>
		<li>Employer Location: {{ $employer->location }}</li>
		<li>Employer UserID: {{ $employer->user_id }}</li>
		<hr>

		@endforeach
		<h1>that was all the employers</h1>
	@else
		<h1>No employer :(</h1>
	@endif

	<h3>Add new {{ HTML::link('employer/create', 'Employer') }}
@stop