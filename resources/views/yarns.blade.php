@extends('layout')
@section ('content')

<!-- page html goes here  -->
<div class='page-content yarnsPage'>
	<section class='page-hero pos-rel'>
		<div class='vCenter pos-abs centerXY'>
			<h1 class='quote'>"Pull a thread here and you’ll find it attached to the rest of the world." <br /> <small>- Nadeem Aslam</small></h1>
		</div>
	</section>
	<section class='introduction'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-6 col-lg-6 col-sm-12 col-xs-12'>
					<div class='creative-wrapper center-block' style="background:url('images/yarns/bg-small.jpg');background-size:cover;background-position:center;">
						<!-- <img src='{{asset('images/dye.png')}}' /> -->
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-12 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<h1>Yarns</h1>
						<p>
							100% organic yarn is made even more true to nature with our in-house herbal dyes. We can supply yarn
							in hanks and cones. Refer to the shade card bellow for a better understanding of our colours. Place an
							order for your custom dyed yarns today.
						</p>
						<a href="#!" class="true-btn">
							<span class="pull-left">Order Now</span>
							<span class="pull-right"><i class="material-icons"></i></span>
							<div class="clearfix"></div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class='shades'>
		<div class='container text-center'>
			<h1>Shade Card</h1>
			<p>
				You can place your yarn order with the help of this shade card or ask us about developing a customized
				colour for your need.
			</p>
			<img class='shades' src='{{asset('images/yarns/shadecard.png')}}' />
		</div>
	</section>
	<section class='showcase'>
		<div class='container text-center'>
			<h1>Yarn dyed fabric</h1>
			<p>
				Not only can we get you yarns in the colour of your choice, we can even make the fabric out of it.
				Custom design your yarn-dyed weave in organic cotton fabrics. Get in touch!
			</p>
			<div class='showcase-wrapper row'>
				<div class='col-md-6 col-lg-6 col-sm-6 col-xs-12'>
					<img src='{{asset('images/yarns/pic2.jpg')}}'	 />
				</div>
				<div class='col-md-6 col-lg-6 col-sm-6 col-xs-12'>
					<img src='{{asset('images/yarns/pic3.jpg')}}'	 />
				</div>
			</div>
		</div>
	</section>
</div>

@endsection
