@extends('layout')
@section ('content')

<!-- page html goes here  -->
<div class='page-content dyesPage'>
	<section class='page-hero pos-rel'>
		<div class='vCenter pos-abs centerXY'>
			<h1 class='quote'>"Let me, O let me bathe my soul in colours; let me swallow the sunset and drink the rainbow." <small>- Kahlil Gibran</small></h1>
		</div>
	</section>

	<section class='introduction'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-6 col-lg-6 col-sm-12 col-xs-12'>
					<div class='creative-wrapper center-block' style="background:url('images/dye.png');background-size:cover;">						
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-12 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<h1>Dyes</h1>
						<p>
							We offer all natural, herbal dyes that are completely eco-friendly and biodegradable. You can
							purchase the dyes in powder or liquid form. Get in touch with us to order our herbal dyes today!
							Available in all colours of nature…
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

	<section class="history hidden">
		<div class="container">
			<h1>History</h1>
			<p>
				On turning the wheels of time we will find that right from their evolution, human beings have fancied
				colours and used natural matters to stain hides and decorate shells.
			</p>
			<p>
				From the walls of ancient caves to the red fabric found in the coffin of Tutankhamen reveals the use of
				natural dyes present even centuries ago. However the use of dyestuff became very prominent only after
				15 th century as the art of dyeing spread from China and Egypt to Japan, Europe and Central America.
				Even Indian text notes the use of yellow, blue and red dyestuff.
				With the increase in the trade of wool, silk and cotton around the world, dyes became a prominent
				commodity.
			</p>
			<p>
				Since the creation of synthetic dyes in 1856, the use of natural materials to create dyes quickly became
				rare. Synthetic dyes cause a lot of harm to the environment and to us, which is why Truetone is reviving
				the art of herbal dyeing in the industrial set up.
			</p>
		</div>
	</section>
	<section class="env-benefits hidden">
		<div class="container">
			<h1>Environmental Benefits</h1>
			<p>
				Herbal dyes are in the front line to achieving sustainability in the fashion industry because they are
				biodegradable, do not pollute our waters, and help in utilizing those parts of a plant which would usually
				be called a waste, such as the peels.
			</p>
			<p>
				Synthetic dyes are toxic to animals and our ecosystems when the waste effluent reaches our oceans and
				grounds, where it is dumped carelessly.
			</p>
			<p>
				By using all natural material for the same processes, we eliminate those harms. At Truetone we are also
				sharing the herbal dye process as a means to create employment in the rural sector of the society,
				because we know that sustainability has to be all rounded.
			</p>
		</div>
	</section>
	<section class="health-benefits hidden">
		<div class="container">
			<h1>Health Benefits</h1>
			<p>
				Our skin is the largest of the breathing organ on our body and herbs, with their Ayurvedic goodness, can
				help with keeping our skin safe and healthy.
			</p>
			<p>
				Herbs have some well recorded health benefits. For example turmeric helps in healing and moistening
				the skin and Indigo acts as a natural mosquito repellent. While we may not be looking for nutritional
				value in our clothing, it is important to think about what we want our skin to be in contact with every
				second of everyday.
			</p>
			<p>
				Herbal dyes are not only free from carcinogenic component but are also natural antioxidant agents,
				because they are not made in a lab using synthetic chemicals, but with the goodness of nature.
			</p>
			<p>
				If it has got to be a fabric, why not have it be a gift of nature?
			</p>
		</div>
	</section>

	<section class='description-tabs'>
		<div class='container'>
			<div class="pmd-card">
				<div class="pmd-tabs pmd-tabs-bg">
					<div class="pmd-tab-active-bar"></div>
					<ul role="tablist" class="nav nav-tabs nav-justified notVisible">
						<li role="presentation" class="active">
							<a data-toggle="tab" role="tab" aria-controls="profile" href="#dyes-tab-1" aria-expanded="false">History</a>
						</li>
						<li role="presentation" class="">
							<a data-toggle="tab" role="tab" aria-controls="messages" href="#dyes-tab-2" aria-expanded="false">Environmental Benefits</a>
						</li>
						<li role="presentation" class="">
							<a data-toggle="tab" role="tab" aria-controls="messages" href="#dyes-tab-3" aria-expanded="false">Health Benefits</a>
						</li>
					</ul>
				</div>
				<div class="pmd-card-body">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="dyes-tab-1">
							<!-- History -->
							<p>
								On turning the wheels of time we will find that right from their evolution, human beings have fancied
								colours and used natural matters to stain hides and decorate shells.
								From the walls of ancient caves to the red fabric found in the coffin of Tutankhamen reveals the use of
								natural dyes present even centuries ago. However the use of dyestuff became very prominent only after
								15 th century as the art of dyeing spread from China and Egypt to Japan, Europe and Central America.
								Even Indian text notes the use of yellow, blue and red dyestuff.
								With the increase in the trade of wool, silk and cotton around the world, dyes became a prominent
								commodity.
								Since the creation of synthetic dyes in 1856, the use of natural materials to create dyes quickly became
								rare. Synthetic dyes cause a lot of harm to the environment and to us, which is why Truetone is reviving
								the art of herbal dyeing in the industrial set up.
							</p>
						</div>
						<div role="tabpanel" class="tab-pane" id="dyes-tab-2">
							<!-- Environmental benefits -->
							<p>
								Herbal dyes are in the front line to achieving sustainability in the fashion industry because they are
								biodegradable, do not pollute our waters, and help in utilizing those parts of a plant which would usually
								be called a waste, such as the peels.
							</p>
							<p>
								Synthetic dyes are toxic to animals and our ecosystems when the waste effluent reaches our oceans and
								grounds, where it is dumped carelessly.
							</p>
							<p>
								By using all natural material for the same processes, we eliminate those harms. At Truetone we are also
								sharing the herbal dye process as a means to create employment in the rural sector of the society,
								because we know that sustainability has to be all rounded.
							</p>
						</div>
						<div role="tabpanel" class="tab-pane" id="dyes-tab-3">
							<!-- Health benefits -->
							<p>
								Our skin is the largest of the breathing organ on our body and herbs, with their Ayurvedic goodness, can
								help with keeping our skin safe and healthy.
							</p>
							<p>
								Herbs have some well recorded health benefits. For example turmeric helps in healing and moistening
								the skin and Indigo acts as a natural mosquito repellent. While we may not be looking for nutritional
								value in our clothing, it is important to think about what we want our skin to be in contact with every
								second of everyday.
							</p>
							<p>
								Herbal dyes are not only free from carcinogenic component but are also natural antioxidant agents,
								because they are not made in a lab using synthetic chemicals, but with the goodness of nature.
							</p>
							<p>
								If it has got to be a fabric, why not have it be a gift of nature?
							</p>
						</div>
					</div>
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
	<section class="applications">
		<div class='container text-center'>
			<h1>Applications</h1>
			<div class='row'>
				<div class='col-md-3 col-lg-3 col-sm-3 col-xs-6'>
					<img src='{{asset('images/dye/1.svg')}}' />
					<h3>Garment</h3>
				</div>
				<div class='col-md-3 col-lg-3 col-sm-3 col-xs-6'>
					<img src='{{asset('images/dye/2.svg')}}' />
					<h3>Fabric</h3>
				</div>
				<div class='col-md-3 col-lg-3 col-sm-3 col-xs-6'>
					<img src='{{asset('images/dye/3.svg')}}' />
					<h3>Cone</h3>
				</div>
				<div class='col-md-3 col-lg-3 col-sm-3 col-xs-6'>
					<img src='{{asset('images/dye/4.svg')}}' />
					<h3>Yarn</h3>
				</div>
			</div>
		</div>
	</section>


</div>


@endsection
