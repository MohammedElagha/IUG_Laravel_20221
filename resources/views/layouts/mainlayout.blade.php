<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>

	@include('includes.appstyle')
	@include('includes.calenders')
	@include('includes.tablestyle')
</head>
<body>

	<div class="container">

		@yield('content')

		</div>

</body>

@include('includes.appjs')
</html>