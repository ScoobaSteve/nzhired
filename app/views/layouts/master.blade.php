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
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/abc/public/"><span class="glyphicon glyphicon-home"></span> NZ Hired</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="about"><span class="glyphicon glyphicon-briefcase"></span> About</a></li>
            <li><a href="contact"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
            <li><a href="whatson"><span class="glyphicon glyphicon-comment"></span> Whats On?</a></li>
          </ul>
          <ul class="nav navbar-nav" style="float:right">
            @if(Auth::check())
              @if(Auth::user()->role == 'Employer')
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Emp <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li>{{ HTML::linkroute('auth.create', 'Account') }}</li>
                    <li>{{ HTML::linkroute('auth.create', 'Create Job Listing') }}</li>
                    <li>{{ link_to_route('employerdash', 'Employer Dashboard') }}</li>
                  </ul>
                </li>
              @endif
              @if(Auth::user()->role == 'Jobseeker')
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">JS <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li>{{ HTML::linkroute('auth.create', 'Account') }}</li>
                    <li>{{ HTML::linkroute('auth.create', 'Create Job Listing') }}</li>
                    <li><a href="#">Update Details</a></li>
                  </ul>
                </li>
              @endif
            <li class="align-right"><a href="/abc/public/logout"><span class="glyphicon glyphicon-user"></span>Logout {{ Auth::user()->email }}</a></li>
            @else
            <li><a href="/abc/public/login"><span class="glyphicon glyphicon-user"></span>Login</a></li>
            @endif
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
        <div>
            @yield('content')
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    {{ HTML::script('assets/js/bootstrap.min.js')}}
  </body>
</html>