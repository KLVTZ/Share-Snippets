<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8' />
    <title></title>
	{{ HTML::style('css/vendors/bootstrap.css') }}
	{{ HTML::style('css/main.css') }}
	@yield('stylesheets')
</head>
<body>
	<div class='container'>   
		 @yield('container')	
	</div>

	{{ HTML::script('js/vendors/jquery.js') }}
	{{ HTML::script('js/vendors/tabby.js') }}
	
	@yield('scripts')

	<script >
		$('textarea').tabby();
	</script>
</body>
</html>



