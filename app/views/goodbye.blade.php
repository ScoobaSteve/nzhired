@extends('layouts.master')

@section('content')
	<h2>Logged out successfully, Thank you for using NZ Hired</h2>
	{{ HTML::linkroute('home', 'Return Home', null, ['class' => 'btn btn-lg btn-primary']) }}
@stop