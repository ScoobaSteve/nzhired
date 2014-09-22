@extends('layouts.master')

@section('content')
	<h2>Sorry you do not have permission.</h2>
	{{ HTML::linkroute('home', 'Return Home', null, ['class' => 'btn btn-lg btn-primary']) }}
@stop