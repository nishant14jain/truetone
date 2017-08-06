@extends('layout')
@section ('content')

<!-- page html goes here  -->
<div class='page-content fabricsPage'>
	<section class='page-hero pos-rel'>
		<div class='vCenter pos-abs centerXY'>
			<h1 class='quote'>"Nature uses only the longest threads to weave her patterns, so that each small piece of her fabric reveals the organization of the entire tapestry." <br /> <small>- Richard P. Feynman</small></h1>
		</div>
	</section>
	<section class='shadeCard text-center'>
		<div class='container'>
			<div class='card-wrapper'>
				<div data-toggle='shade-content-1' class='shade-card shade1'></div>
				<div data-toggle='shade-content-2' class='shade-card shade2'></div>
				<div data-toggle='shade-content-3' class='shade-card shade3'></div>
				<div data-toggle='shade-content-4' class='shade-card shade4'></div>
				<div data-toggle='shade-content-5' class='shade-card shade5'></div>
				<div data-toggle='shade-content-6' class='shade-card shade6'></div>
				<div data-toggle='shade-content-7' class='shade-card shade7'></div>
				<div data-toggle='shade-content-8' class='shade-card shade8'></div>
				<div data-toggle='shade-content-9' class='shade-card shade9'></div>
				<div data-toggle='shade-content-10' class='shade-card shade10'></div>
				<div data-toggle='shade-content-11' class='shade-card shade11'></div>
				<div data-toggle='shade-content-12' class='shade-card shade12'></div>
				<div data-toggle='shade-content-13' class='shade-card shade13'></div>
				<div data-toggle='shade-content-14' class='shade-card shade14'></div>
				<div data-toggle='shade-content-15' class='shade-card shade15'></div>
				<div data-toggle='shade-content-16' class='shade-card shade16'></div>
				<div data-toggle='shade-content-17' class='shade-card shade17'></div>
				<div data-toggle='shade-content-18' class='shade-card shade18'></div>
			</div>
			<h3>Truetone Pallette</h3>
		</div>
	</section>
	<section class="showcase">
		<div class="container text-center">
			<h1>Fabrics</h1>
			<p>
				We have all kinds of organic cotton fabrics and techniques at our disposal. Buy various qualities of
				organic herbal dyed fabrics from our stock, or order customized fabrics, tailor made for your needs now.
				Get in touch to know more about our offerings.
			</p>
			<div class='fabric-types-wrapper'>
				<div class='fabric-type blockPrint' style="background:url('{{asset('images/fabrics/blockPrint.jpg')}}');">
					<h2>Block Print</h2>

				</div>
				<div class='fabric-type yarnDyed' style="background:url('{{asset('images/fabrics/yarnDyed.jpg')}}');">
					<h2>Yarn Dyed</h2>

				</div>
				<div class='fabric-type plains' style="background:url('{{asset('images/fabrics/plains.jpg')}}');">
					<h2>Plains</h2>

				</div>
				<div class='fabric-type printed' style="background:url('{{asset('images/fabrics/printed.jpg')}}');">
					<h2>Printed</h2>

				</div>
				<div class='fabric-type khadi' style="background:url('{{asset('images/fabrics/khadi.jpg')}}');">
					<h2>Khadi</h2>

				</div>
				<div class='fabric-type knits' style="background:url('{{asset('images/fabrics/knits.jpg')}}');">
					<h2>Knits</h2>

				</div>
			</div>
		</div>
	</section>
</div>

@endsection
