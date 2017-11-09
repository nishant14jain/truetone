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
		<div class='limitWidth container'>
			<div class='pull-left'>
				<ul class='headnav-links'>
					<li>
						<a href='{{ url('dyes') }}'>Dyes</a>
					</li>
					<li>
						<a href='{{ url('yarns') }}'>Yarns</a>
					</li>
					<li>
						<a href='{{ url('fabrics') }}'>Fabrics</a>
					</li>
				</ul>
			</div>
			<div class='logo'>
				<a href='{{ url("/") }}'>
					<img class='svg' src='{{asset("images/logo.svg")}}'>
				</a>
			</div>
			<div class='pull-right'>
				<ul class='headnav-links'>
					<li>
						<a href='{{url("about")}}'>About Us</a>
					</li>					
					<li>
						<a href='#!'>Contact</a>
					</li>
					<li>
						<a href='{{url("terms")}}'>T&C</a>
					</li>					
				</ul>
			</div>
			<div class='clearfix'></div>
		</div>
	</header>

	@yield('content')
	<section class='linkpages'>
		<div class="container">
			<div class='row'>
				<div class='faq col-md-4 col-lg-4 col-sm-4 col-xs-4'>
					<a href="{{url('faq')}}">
						<h1>FAQs</h1>
					</a>
				</div>
				<div class='terms col-md-4 col-lg-4 col-sm-4 col-xs-4'>
					<a href="{{url('terms')}}">
						<h1>T & C</h1>
					</a>
				</div>
				<div class='contact col-md-4 col-lg-4 col-sm-4 col-xs-4'>
					<a href="{{url('contact')}}">
						<h1>Contact Us</h1>
					</a>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<h3 class='followUs'>Follow Us</h3>
		<div class="social">
			<a href="#" class="social__button facebook"><i class="fa fa-facebook"></i></a>
			<a href="#" class="social__button youtube"><i class="fa fa-youtube"></i></a>
			<a href="#" class="social__button twitter"><i class="fa fa-twitter"></i></a>
			<a href="#" class="social__button instagram"><i class="fa fa-instagram"></i></a>
			<a href="#" class="social__button whatsapp"><i class="fa fa-whatsapp"></i></a>
		</div>
		<div class='foot-links'>
			<div class='link'>Dyes</div>
			<div class='link'>Yarns</div>
			<div class='link'>Fabrics</div>
		</div>
		<div class='logo-wrapper'>
			<img class='svg' src='{{asset('images/logo.svg')}}'>
		</div>
		<p class='legal'>
			© Copyright 2017 | Truetone Inc. | All Rights Reserved
		</p>
	</footer>
	<script src='https://unpkg.com/headroom.js'></script>
	<script src='{{asset('js/app.js')}}'></script>
</body>
</html>
