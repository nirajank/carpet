<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kabul Carpet System</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<style type="text/css">
	i{
		color:red;
		}</style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body style="background-color:#0066FF">
	<div class="row" style="background-color:white;height:80px">
   <div class="col-md-6">
     <div>
        <img src="{{asset('images/logo.jpg')}}" height="80px" id="ttt">
           <BIG style="font-size:1.8em">CARPOOL CARPET</BIG>
                  <span>
                     <small style="position:relative;top:13px;right:200px">wholesaler of carpet worldwide</small>
                     </span>
        </div>
    </div>
  <div class="col-md-2 col-md-offset-3" style="position:relative;top:20px;left:150px">
     <a href="#"><img src="{{asset('images/facebook.png')}}" height="40px" ></a>
     <caption>facebook</caption>
</div>
</div>
	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
