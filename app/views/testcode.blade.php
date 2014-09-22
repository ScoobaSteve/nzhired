@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-lg-12">
			<h1 class="text-center">Job Listing's</h1>
		</div>
		<div class="col-md-2">
			{{ Form::open(['route' => 'jobsearch', 'method' => 'post', 'class' => 'form-horizontal']) }}

			<div class="form-group">
				<div class="col-sm-12">
					{{ Form::select('location', array('All Regions' => 'All Regions', 'Northland' => 'Northland', 'Auckland' => 'Auckland',
					 'Waikato' => 'Waikato', 'Bay Of Plenty' => 'Bay Of Plenty', 'Gisborne' => 'Gisborne', 'Hawke&#39;s Bay' => 'Hawke&#39;s Bay',
					 'Taranaki' => 'Taranaki', 'Manawatu / Wanganui' => 'Manawatu / Wanganui', 'Wellington' => 'Wellington', 'Nelson / Marlborough' => 'Nelson / Marlborough',
					 'West Coast' => 'West Coast', 'Canterbury' => 'Canterbury', 'Otago' => 'Otago', 'Southland' => 'Southland'), null, array('class' => 'form-control')) }}
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
				@foreach ($joblistings as $joblisting)
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
			@else
				<h1>No joblisitings :(</h1>
			@endif
		</div>
	</div>
	
@stop



location_Northland = new Array("test1", "test2");

var dropdown = document.getElementById("area");

for (var i = 0; i < location_Northland.length; i++) {
	dropdown[dropdown.length] = new Option(location_Northland[i], location_Northland[i]);
}

document.getElementById("test").value=selectedItem.options[selectedItem.selectedIndex].text;

function updateArea(){
// ON selection of category this function will work

removeAllOptions($('#area'));
addOption($('#area'), "", "SubCat", "");

if($('#location') == 'Auckland'){
addOption($('#area'),"Mango", "Mango");
addOption($('#area'),"Banana", "Banana");
addOption($('#area'),"Orange", "Orange");
}

function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}


function addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;

	selectbox.options.add(optn);
}


function populateSelect(){
	location=$('#location').val();
	$('#area').html('');

	if(location=='All Regions'){
		location_Northland.forEach(function(t) {

			$('#area').append('<option>'+t+'</option>');
		});
	}

	if(location=='Auckland'){
		location_Auckland.forEach(function(t) {

			$('#area').append('<option>'+t+'</option>');
		});

	}
}

$(function() {

	$('#location').change(function() {
		populateSelect();
	});
});




location_Northland=new Array("test1", "test2");
location_Auckland=new Array("test3", "test4");



<option value="">All categories</option>
	<option value="5001">Accounting</option>
	<option value="5015">Agriculture, fishing &amp; forestry</option>
	<option value="5021">Banking, finance &amp; insurance</option>
	<option value="5033">Construction &amp; architecture</option>
	<option value="5045">Customer service</option>
	<option value="5050">Education</option>
	<option value="5056">Engineering</option>
	<option value="9831">Executive &amp; general management</option>
	<option value="5077">Government &amp; council</option>
	<option value="5082">Healthcare</option>
	<option value="5097">Hospitality &amp; tourism</option>
	<option value="5106">HR &amp; recruitment</option>
	<option value="5112">IT</option>
	<option value="5126">Legal</option>
	<option value="5132">Manufacturing &amp; operations</option>
	<option value="5143">Marketing, media &amp; communications</option>
	<option value="5155">Office &amp; administration</option>
	<option value="810">Property</option>
	<option value="5171">Retail</option>
	<option value="5163">Sales</option>
	<option value="5179">Science &amp; technology</option>
	<option value="5180">Trades &amp; services</option>
	<option value="5068">Transport &amp; logistics</option>
	<option value="5199">Other</option>


		<div class="form-group">
			{{ Form::label('category', 'Category: ', array('class' => 'col-sm-2 control-label')) }}
			<div class="col-sm-10">
				{{ Form::select('category', array('All categories' => 'All categories',
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

		.round:hover {
    width: 130%;
    height: 130%;
    left: -15%;
    top: -15%;
    font-size: 75px;
    padding-top: 40%;
    -webkit-box-shadow: 5px 5px 10px rgba(0,0,0,.3);
    -o-box-shadow: 5px 5px 10px rgba(0,0,0,.3);
    -moz-box-shadow: 5px 5px 10px rgba(0,0,0,.3);
    box-shadow: 5px 5px 10px rgba(0,0,0,.3);
    z-index: 2;
    border-size: 10px;
    -webkit-transform: rotate(-360deg);
    -moz-transform: rotate(-360deg);
    -o-transform: rotate(-360deg);
    transform: rotate(-360deg);
}


a.work:hover {
    color: white;
}

a.hire:hover {
    color: white;
}
