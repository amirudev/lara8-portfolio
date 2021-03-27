<!DOCTYPE html>
<html>
<head>
	<title>LaraPortfolio</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body class="bg-gray-100">
	<nav class="p-6 bg-white flex justify-between">
		<ul class="flex items-center">
			<li><a href="/" class="p-4 font-bold">Home</a></li>
			<li><a href="{{ route('skill') }}" class="p-4 font-bold">Skills</a></li>
			<li><a href="{{ route('blog') }}" class="p-4 font-bold">Blogs</a></li>
			<li><a href="{{ route('forum') }}" class="p-4 font-bold">Forum</a></li>
		</ul>
		<ul class="flex items-center">
			@if(!auth()->user())
			<li><a href="{{ route('login') }}" class="p-4 font-bold">Log In</a></li>
			<li><a href="{{ route('register') }}" class="p-4 font-bold">Register</a></li>
			@else
			<li><a href="#" class="p-4 font-bold">Halo, {{ auth()->user()->name }}</a></li>
			<form action="{{route('signout') }}" method="post">
				@csrf
				<li><a href="{{ route('signout') }}" class="p-4 font-bold">Sign Out</a></li>				
			</form>
			@endif
		</ul>
	</nav>
	@yield('content')
</body>
</html>