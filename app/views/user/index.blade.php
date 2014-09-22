@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-6">
			<h1>All Users</h1>
			@if ($users->count())
				@foreach ($users as $user)
				<li>Email: {{ link_to("/user/show", $user->email) }} , Role: {{ $user->role }}</li>
				@endforeach
			@else
				<h1>No users :(</h1>
			@endif
			<hr>
			<h3>Add new {{ HTML::link('user/create', 'User') }}
		</div>
	</div>
	
@stop