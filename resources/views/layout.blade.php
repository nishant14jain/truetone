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
	<link href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css' rel='stylesheet' type='text/css'>
	<link href='//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css' rel='stylesheet' type='text/css'>
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
						<a href='{{url("contact-us")}}'>Contact</a>
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
	<section class='certifications'>
		<div class='container'>
			<h1>Our Certifications</h1>
			<div class='cert-item'>
				<img src="{{asset('images/certifications/logo_1.jpg')}}">
			</div>
			<div class='cert-item'>
				<img src="{{asset('images/certifications/logo_2.jpg')}}">
			</div>
			<div class='cert-item'>
				<img src="{{asset('images/certifications/logo_3.jpg')}}">
			</div>
			<div class='cert-item'>
				<img src="{{asset('images/certifications/logo_4.jpg')}}">
			</div>
			<div class='cert-item'>
				<img src="{{asset('images/certifications/logo_5.jpg')}}">
			</div>
			<div class='cert-item'>
				<img src="{{asset('images/certifications/logo_6.jpg')}}">
			</div>
			<div class='cert-item'>
				<img src="{{asset('images/certifications/logo_7.jpg')}}">
			</div>
			<div class='cert-item'>
				<img src="{{asset('images/certifications/logo_8.jpg')}}">
			</div>
			<div class='cert-item'>
				<img src="{{asset('images/certifications/logo_9.jpg')}}">
			</div>			
		</div>
	</section>
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
					<a href="{{url('contact-us')}}">
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
			<img class='svg' src="{{asset('images/logo.svg')}}">
		</div>
		<p class='legal'>
			© Copyright 2017 | Truetone Inc. | All Rights Reserved
		</p>
	</footer>


	<!-- Shade card popup -->
	<div class="modal fade" id="shade-card-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					
				</div>
				<div class="modal-body">

				</div>				
			</div>
		</div>
	</div>

	<script src='https://unpkg.com/headroom.js'></script>
	<script src="{{asset('js/app.js')}}"></script>
	<script src='//cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
</body>
</html>
