<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
    <!-- Bootstrap -->
	  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	  
	  <style type="text/css">
	  	.container-fluid{
	  		
	  		margin: 0 auto;
	  		padding: 0px;
	  	}
	  	.sidenav{
	  		padding-left: 10px !important;
	  		background-color: #868686 !important;	  		
	  	}
	  </style>	
</head>
<body>



	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				@include('partials.header')	
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 sidenav">
				@include('partials.menu')
			</div>

			<div class="col-md-8">
				    @yield('content')
				    @include('partials.admincontent')
			</div>
		</div>
		
	</div>

</body>
</html>