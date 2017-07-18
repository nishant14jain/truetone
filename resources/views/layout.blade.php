<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Truetone Inc.</title>
	<!-- Fonts -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Styles -->
	<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

</head>
<body>
	<header id='header' class='headnav headroom'>
		<div class='limitWidth'>
			<div class='pull-left'>
				<ul class='headnav-links'>
					<li>
						<a href='#!'>Dyes</a>
					</li>
					<li>
						<a href='#!'>Yarns</a>
					</li>
					<li>
						<a href='#!'>Fabrics</a>
					</li>
				</ul>
			</div>
			<div class='logo'>
				<img class='svg' src='{{asset('images/logo.svg')}}'>
			</div>
			<div class='pull-right'>
				<ul class='headnav-links'>
					<li>
						<a href='#!'>About Us</a>
					</li>
					<li>
						<a href='#!'>R & D</a>
					</li>
					<li>
						<a href='#!'>Contact</a>
					</li>
					<li>
						<a href='#!'>Account</a>
					</li>
				</ul>
			</div>
			<div class='clearfix'></div>
		</div>
	</header>

	@yield('content')

	<footer>
		All rights Reserved.
	</footer>
	<script src='https://unpkg.com/headroom.js'></script>
	<script src='{{asset('js/app.js')}}'></script>
</body>
</html>
