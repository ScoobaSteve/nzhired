@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<h1 class="text-center">{{ $numberjobs->count() }} Jobs Found<input type="text" id="test" size="20"></h1>
		</div>
		<div class="col-md-2">
			{{ Form::open(['route' => 'jobsearch', 'method' => 'post', 'class' => 'form-horizontal']) }}

			<div class="form-group">
				<div class="col-sm-12">
					{{ Form::select('location', array('All Regions' => 'All Regions', 'Northland' => 'Northland', 'Auckland' => 'Auckland',
					 'Waikato' => 'Waikato', 'Bay Of Plenty' => 'Bay Of Plenty', 'Gisborne' => 'Gisborne', 'Hawke&#39;s Bay' => 'Hawke&#39;s Bay',
					 'Taranaki' => 'Taranaki', 'Manawatu / Wanganui' => 'Manawatu / Wanganui', 'Wellington' => 'Wellington', 'Nelson / Marlborough' => 'Nelson / Marlborough',
					 'West Coast' => 'West Coast', 'Canterbury' => 'Canterbury', 'Otago' => 'Otago', 'Southland' => 'Southland'), null, array('class' => 'form-control', 
					 'id' => 'location', 'name' => 'location', 'onChange' => "updateArea()")) }}
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-12">
					{{ Form::select('area', array(''), null, array('class' => 'form-control', 'id' => 'area', 'name' => 'area', 'disabled' => 'disabled')) }}
				</div>
			</div>

			<div class="form-group">
			<div class="col-sm-offset-2 col-sm-12">
				{{ Form::submit('Search', array('class' => 'btn btn-default')) }}
			</div>			
		</div>

			{{ Form::close() }}
		</div>
		<div class="col-md-10">

			@if ($joblistings)
				@foreach ($joblistings->getcollection()->all() as $joblisting)
				<div class="panel panel-primary">
					<div class="panel-heading">
		              	<h2 class="panel-title">{{ $joblisting->title }}</h2>
		            </div>
		            <div class="panel-body">
		            	<h4>Category: {{ $joblisting->category }}</h4>
		            	<h4>Location: {{ $joblisting->location }}</h4>
		            	<h4>Wage: ${{ $joblisting->wage }}</h4>
		                <h4>Description: {{ $joblisting->description }}</h4>
		            </div>
	            </div>		
				@endforeach
				{{ $joblistings->links() }}
			@else
				<h1>No joblisitings :(</h1>
			@endif
		</div>
	</div>
	
@stop