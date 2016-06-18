<!doctype html>
<html>
	<head>
		<title>Slidebar Links Example</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Slidebars CSS -->
		<link rel="stylesheet" href="{{asset('slidebars/slidebars.css')}}">
		
		<!-- Example Styles -->
		<link rel="stylesheet" href="{{asset('example-styles.css')}}">
	</head>
	
	<body>	
		<div id="sb-site">
			
			<ul>
				<li class="sb-toggle-left">Toggle left Slidebar</li>
			</ul>
		</div>
		
		<div class="sb-slidebar sb-left">
			<ul>
				<li><a href="#">Normal Link</a></li>
				<li><a href="#">Normal Link</a></li>
				<li><a href="#">Normal Link</a></li>
				<li><a href="#">Normal Link</a></li>
				<li><a href="#" class="sb-close">Close Enabled Link</a></li>
			</ul>
		</div>
				
		<!-- jQuery -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		
		<!-- Slidebars -->
		<script src="{{asset('slidebars/slidebars.js')}}"></script>
		<script>
			(function($) {
				$(document).ready(function() {
					$.slidebars();
				});
			}) (jQuery);
		</script>
	</body>
</html>