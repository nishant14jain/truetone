@extends('layout')
@section ('content')

<!-- page html goes here  -->
<div class='page-content dyesPage'>
	<section class='page-hero pos-rel'>
		<div class='vCenter pos-abs centerXY'>
			<h1 class='quote'>Empower yourself with colours</h1>
		</div>
	</section>

	<section class='introduction'>
		<div class='container'>
			<div class='row'>
				<div class='col-md-6 col-lg-6 col-sm-12 col-xs-12'>
					<div class='creative-wrapper center-block'>
						<!-- <img src='{{asset('images/dye.png')}}' /> -->
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-12 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<h1>Dyes</h1>
						<p>
							We offer all natural, herbal dyes that are completely eco-friendly and biodegradable. You can
							purchase the dyes in powder or liquid form. Please get in touch with us to order our dyes. We can also
							offer customization of colours catering to your requirements.
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

	<section class='description-tabs'>
		<div class='container'>
			<div class="pmd-card">
				<div class="pmd-tabs pmd-tabs-bg">
					<div class="pmd-tab-active-bar"></div>
					<ul role="tablist" class="nav nav-tabs nav-justified notVisible">
						<li class="active" role="presentation">
							<a data-toggle="tab" role="tab" aria-controls="home" href="#dyes-tab-1" aria-expanded="true">Process</a>
						</li>
						<li role="presentation" class="">
							<a data-toggle="tab" role="tab" aria-controls="profile" href="#dyes-tab-2" aria-expanded="false">History</a>
						</li>
						<li role="presentation" class="">
							<a data-toggle="tab" role="tab" aria-controls="messages" href="#dyes-tab-3" aria-expanded="false">Benefits</a>
						</li>
						<li role="presentation" class="">
							<a data-toggle="tab" role="tab" aria-controls="messages" href="#dyes-tab-4" aria-expanded="false">Properties</a>
						</li>
						<li role="presentation" class="">
							<a data-toggle="tab" role="tab" aria-controls="messages" href="#dyes-tab-5" aria-expanded="false">Ayurveda</a>
						</li>
						<li role="presentation" class="">
							<a data-toggle="tab" role="tab" aria-controls="messages" href="#dyes-tab-6" aria-expanded="false">Order Form</a>
						</li>
					</ul>
				</div>
				<div class="pmd-card-body">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="dyes-tab-1">
							<p>
								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
								architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.
							</p>
						</div>
						<div role="tabpanel" class="tab-pane" id="dyes-tab-2">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div role="tabpanel" class="tab-pane" id="dyes-tab-3">
							<p>
								At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
								Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
							</p>
						</div>
						<div role="tabpanel" class="tab-pane" id="dyes-tab-4">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
						<div role="tabpanel" class="tab-pane" id="dyes-tab-5">
							<p>
								At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
							</p>
						</div>
						<div role="tabpanel" class="tab-pane" id="dyes-tab-6">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class='shadeCard text-center'>
		<div class='container'>
			<h1>Shade Cards</h1>
			<div class='card-wrapper'>
				<div data-toggle='shade-content-1' class='shade-card shade1'></div>
				<div data-toggle='shade-content-2' class='shade-card shade2'></div>
				<div data-toggle='shade-content-3' class='shade-card shade3'></div>
				<div data-toggle='shade-content-4' class='shade-card shade4 active'></div>
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
			<!-- Shade content 1 -->
			<div class='row shade-content shade-content-1'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade1'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Alum</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/Alum.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 2 -->
			<div class='row shade-content shade-content-2'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade2'>
							<div class='pull-left'>
								<span class='shadeName'>Yellow</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Marigold</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/marigold.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 3 -->
			<div class='row shade-content shade-content-3'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade3'>
							<div class='pull-left'>
								<span class='shadeName'>Yellow</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Turmeric</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/turmeric.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 4 -->
			<div class='row shade-content shade-content-4 active'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade4'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Madder</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/madder.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 5 -->
			<div class='row shade-content shade-content-5'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade5'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Pomegranate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/pomegranate.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 6 -->
			<div class='row shade-content shade-content-6'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade6'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Pomegranate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/pomegranate.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 7 -->
			<div class='row shade-content shade-content-7'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade7'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Pomegranate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/pomegranate.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 8 -->
			<div class='row shade-content shade-content-8'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade8'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Pomegranate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/pomegranate.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 9 -->
			<div class='row shade-content shade-content-9'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade9'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Pomegranate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/pomegranate.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 10 -->
			<div class='row shade-content shade-content-10'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade10'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Pomegranate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/pomegranate.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 11 -->
			<div class='row shade-content shade-content-11'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade11'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Pomegranate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/pomegranate.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 12 -->
			<div class='row shade-content shade-content-12'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade12'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Pomegranate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/pomegranate.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 13 -->
			<div class='row shade-content shade-content-13'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade13'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Pomegranate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/pomegranate.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 14 -->
			<div class='row shade-content shade-content-14'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade14'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Pomegranate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/pomegranate.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 15 -->
			<div class='row shade-content shade-content-15'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade15'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Pomegranate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/pomegranate.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 16 -->
			<div class='row shade-content shade-content-16'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade16'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Pomegranate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/pomegranate.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 17 -->
			<div class='row shade-content shade-content-17'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade17'>
							<div class='pull-left'>
								<span class='shadeName'>Indigo</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>20-2351 KGX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Indigo</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/Indigo.png')}}' />
					</div>
				</div>
			</div>
			<!-- Shade content 18 -->
			<div class='row shade-content shade-content-18'>
				<div class='col-md-6 col-lg-6 col-sm-7 col-xs-12'>
					<div class='desc-wrapper text-left'>
						<div class='shade-info shade18'>
							<div class='pull-left'>
								<span class='shadeName'>Red</span>
							</div>
							<div class='pull-right'>
								<span class='shadeNo'>15-1306 TPX</span>
							</div>
							<div class='clearfix'></div>
						</div>
						<h3>Pomegranate</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<h3>Specification</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						</p>
					</div>
				</div>
				<div class='col-md-6 col-lg-6 col-sm-4 col-xs-12'>
					<div class='herb-wrapper'>
						<img src='{{asset('images/herbs/pomegranate.png')}}' />
					</div>
				</div>
			</div>
		</div>
	</section>

</div>


@endsection