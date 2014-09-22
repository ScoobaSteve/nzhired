@extends('layouts.master')

@section('content')
	<h1 class="text-center">Create Job Listing Page</h1>
	<div class="col-sm-2">

	</div>
	<div class="col-sm-8">
		{{ Form::open(['route' => 'joblisting.store', 'method' => 'post', 'class' => 'form-horizontal']) }}

		<div class="form-group">
			{{ Form::label('title', 'Job Title: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('title', '', array('class' => 'form-control', 'placeholder' => 'Job Title')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('wage', 'Wage: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10 input-group" style="padding-left:16px; padding-right:16px;">
				<div class="input-group-addon">$</div>
				{{ Form::text('wage', '', array('class' => 'form-control', 'placeholder' => 'Wage')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('location', 'Job Location: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('location', array('Northland' => 'Northland', 'Auckland' => 'Auckland',
					 'Waikato' => 'Waikato', 'Bay Of Plenty' => 'Bay Of Plenty', 'Gisborne' => 'Gisborne', 'Hawke&#39;s Bay' => 'Hawke&#39;s Bay',
					 'Taranaki' => 'Taranaki', 'Manawatu / Wanganui' => 'Manawatu / Wanganui', 'Wellington' => 'Wellington', 'Nelson / Marlborough' => 'Nelson / Marlborough',
					 'West Coast' => 'West Coast', 'Canterbury' => 'Canterbury', 'Otago' => 'Otago', 'Southland' => 'Southland'), null, array('class' => 'form-control', 
					 'id' => 'location', 'name' => 'location', 'onChange' => 'updateArea()')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('area', 'Job Area: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('area', array(''), null, array('class' => 'form-control', 'id' => 'area', 'name' => 'area', 'disabled' => 'disabled')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('category', 'Category: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('category', array(
				 'Accounting' => 'Accounting',
				 'Agriculture, fishing &amp; forestry' => 'Agriculture, fishing &amp; forestry',
				 'Banking, finance &amp; insurance' => 'Banking, finance &amp; insurance',
				 'Construction &amp; architecture' => 'Construction &amp; architecture',
				 'Customer service' => 'Customer service',
				 'Education' => 'Education',
				 'Engineering' => 'Engineering',
				 'Executive &amp; general management' => 'Executive &amp; general management',
				 'Government &amp; council' => 'Government &amp; council',
				 'Healthcare' => 'Healthcare',
				 'Hospitality &amp; tourism' => 'Hospitality &amp; tourism',
				 'HR &amp; recruitment' => 'HR &amp; recruitment',
				 'IT' => 'IT',
				 'Legal' => 'Legal',
				 'Manufacturing &amp; operations' => 'Manufacturing &amp; operations',
				 'Marketing, media &amp; communications' => 'Marketing, media &amp; communications',
				 'Office &amp; administration' => 'Office &amp; administration',
				 'Property' => 'Property',
				 'Retail' => 'Retail',
				 'Sales' => 'Sales',
				 'Science &amp; technology' => 'Science &amp; technology',
				 'Trades &amp; services' => 'Trades &amp; services',
				 'Transport &amp; logistics' => 'Transport &amp; logistics',
				 'Other' => 'Other',),
				  null, array('class' => 'form-control', 'id' => 'category', 'onChange' => 'updateSub()')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('subcategory', 'Sub-Category: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('subcategory', array(''), null, array('class' => 'form-control', 'id' => 'subCategory', 'disabled' => 'disabled')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('start', 'Start Date: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::input('date', 'start', null, array('class' => 'form-control', 'placeholder' => 'Start Date')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('type', 'Work Type: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('type', array('Full Time' => 'Full Time', 'Part Time' => 'Part Time',
				 'Casual' => 'Casual'), null, array('class' => 'form-control')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('description', 'Job Description: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::textarea('description', '', array('class' => 'form-control', 'placeholder' => 'Job Description')) }}
			</div>
		</div>
		<div class="form-group">
			{{ Form::label('keywords', 'Extra Keywords: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::text('keywords', '', array('class' => 'form-control', 'placeholder' => 'Keywords')) }}
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				{{ Form::submit('Create Job Listing', array('class' => 'btn btn-default')) }}
			</div>			
		</div>

		{{ Form::close() }}
	</div>
	<div class="col-sm-2">

	</div>
@stop