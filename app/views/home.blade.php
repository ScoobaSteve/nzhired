@extends('layouts.master')

@section('content')

<div class="row">
	<div class="col-md-8">
		<h1>Home Page</h1>
		@if(Auth::check())
            <p>User logged in: {{ Auth::id() }}
            @else
            <p>no one logged in ?!</p>
            @endif
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Panel title</h3>
            </div>
            <div class="panel-body">
              Panel content
            </div>
          </div>
        
	</div>
	<div class="col-md-4">
		<div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Home Page Functions</h3>
            </div>
            <div class="panel-body">
                @if(Auth::check())
                    <h3 class="text-center"><a class="btn btn-lg btn-primary text-center" href="/abc/public/logout">Logout</a></h3>
                @else
                    <h3 class="text-center">{{ HTML::linkroute('auth.create', 'Login', null, ['class' => 'btn btn-lg btn-primary']) }}</h3>
                    <h3 class="text-center">{{ HTML::linkroute('joblisting.index', 'Search Jobs', null, ['class' => 'btn btn-lg btn-primary']) }}</h3>
                    <h3 class="text-center">{{ HTML::linkroute('jobseeker.create', 'Register New Jobseeker', null, ['class' => 'btn btn-lg btn-primary']) }}</h3>
                    <h3 class="text-center">{{ HTML::linkroute('employer.create', 'Register New Employer', null, ['class' => 'btn btn-lg btn-primary']) }}</h3>
                @endif
            </div>
        </div>
    </div>
</div>
@stop

