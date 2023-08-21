<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	@yield('css-specific')
</head>
<body>
	<nav>
		<div>
			<div class="logo"><img src="{{ asset('imgs/logo3.png') }}" alt="logo"> <span>App_Name</span></div>
			<div class="separator"></div>
			<div class="navigation-links">
				<a href="/dashboard">Dashboard</a>
				<a href="#">Books</a>
				<a href="#">Students</a>
			</div>
		</div>
		<div class="user-info">
		@if (auth()->check())
			{{ auth()->user()->name }}
			<br>
			<span>{{ auth()->user()->email }}</span>
		@endif
		</div>
	</nav>
	<section class="main-container">
		<section class="top">
			<input type="text" placeholder="Search students">
		</section>
		<div class="rest">
			@yield('content')
		</div>
	</section>
</body>
</html>