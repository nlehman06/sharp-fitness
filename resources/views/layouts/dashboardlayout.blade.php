<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Sharp Fitness</title>
		
		<link rel='stylesheet' href='/css/all.css'>
		<script src='/js/all.js'></script>
		
	</head>

	<body>
	
    @include('partials.nav')
	
	@include('partials.flash')
	
	@yield('content')
	
	@yield('footer')
	
	<script>
		$('div.alert').not('.alert-important').delay(3000).slideUp(300);
	</script>

	</body>
  
</html>