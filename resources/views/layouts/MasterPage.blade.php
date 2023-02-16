<!DOCTYPE html>
<html>
	<head>
		<title>Project {{Session::get('test')}}</title>
		
		@include('links.stylesheet')
	</head>
	<body >
		@include('partials.navbar')
		@yield('home')
		
		<div class="margin-top-20" style="overflow: hidden;">
			<div class="row" style="margin-left: 5px;">
				
				
				@yield('content')
			</div>
		</div>
		
		@include('links.scripts')
	</body>
</html>