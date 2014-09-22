<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NZ Hired</title>

    <!-- Bootstrap -->
    {{ HTML::style('assets/css/bootstrap.css') }}
    {{ HTML::style('assets/css/bootstrap-theme.min.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::script('assets/js/main.js') }}

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body role="document">
  	<div class="container">
	<div class="row">
		<div class="col-sm-2">
			<h3 class="text-center">Dropdown Menu</h3>
		</div>
		<div class="col-md-8">
			<a href="/"><img class="mid-image" src="assets/img/logo.jpg"alt="NZ Hired Logo"></img></a>
		</div>
		<div class="col-sm-2">
	        <ul style="padding:0; margin:0 auto">
			  	<li class="li-change2"><a href="#" class="roundSmall work2">Login</a></li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
			{{ Form::open(array('url' => 'foo/bar', 'class'=>'testerform')) }}
				{{ Form::submit('Search') }}
				{{ Form::text('search') }}
			{{ Form::close() }}
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
	<div class="row" style="margin-top: 70px;">
		<div class="col-md-6">
	        <ul>
			  	<li class="li-change"><a href="#" class="round work">WORK</a></li>
			</ul>
    	</div>
		<div class="col-md-6">
        	<ul>
			  	<li class="li-change"><a href="#" class="round hire">HIRE</a></li>
			</ul>
    	</div>
	</div>
</div>


<div class="fixedfooter navbar-inverse" style="z-index:10;">
	<div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/abc/public/"><span class="glyphicon glyphicon-home"></span> Home</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
          	<li class="footernavwidth"><a href="about"><span class="glyphicon glyphicon-briefcase"></span> About</a></li>
            <li class="footernavwidth"><a href="prices"><span class="glyphicon glyphicon-envelope"></span> Prices</a></li>
            <li class="footernavwidth"><a href="whatson"><span class="glyphicon glyphicon-comment"></span> Whats Going On</a></li>
            <li class="footernavwidth"><a href="terms"><span class="glyphicon glyphicon-comment"></span> Terms and Conditions</a></li>
            <li class="footernavwidth"><a href="contact"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
</div>


	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {{ HTML::script('assets/js/bootstrap.min.js')}}
  </body>
</html>

