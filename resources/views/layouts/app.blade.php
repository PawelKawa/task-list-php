<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Laravel 11 task list</title>
</head>
<body>
	<h1>@yield('title')</h1>
	<div>
		@if (session('msg'))
			<div>{{ session('msg') }}</div>
		@endif
		@yield('content')
		@yield('styles')
	</div>
</body>
</html>