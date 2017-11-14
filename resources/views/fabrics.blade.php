@extends('layout')
@section ('content')

<!-- page html goes here  -->
<div class='page-content fabricsPage'>
	<section class='page-hero pos-rel'>
		<div class='vCenter pos-abs centerXY'>
			<h1 class='quote'>"Nature uses only the longest threads to weave her patterns, so that each small piece of her fabric reveals the organization of the entire tapestry." <br /> <small>- Richard P. Feynman</small></h1>
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
	<section class='shadeCard text-center'>
		<div class='container'>
			<h1>Shades of Nature</h1>
			<p>
				Each colour is made with special ingredients. Click on the colour to know what went in it.
			</p>
			<div class='card-wrapper appendShades'>
				
			</div>			
		</div>
	</section>
</div>

@endsection
