@extends('layout')
@section ('content')

<div class='page-content faqPage'>
	<section class='page-hero pos-rel'>
	  <div class='vCenter pos-abs centerXY'>
		 <h1 class='quote'>Frequently Asked Questions</h1>
	  </div>
	</section>
	<section class='faq'>
		<div class='container'>
			<div class="pmd-card">
				<div class="pmd-tabs pmd-tabs-bg">
					<div class="pmd-tab-active-bar"></div>
					<ul role="tablist" class="nav nav-tabs nav-justified notVisible">
						<li class="active" role="presentation">
							<a data-toggle="tab" role="tab" aria-controls="home" href="#dyes-faq" aria-expanded="true">Dyes</a>
						</li>
						<li role="presentation" class="">
							<a data-toggle="tab" role="tab" aria-controls="profile" href="#yarns-faq" aria-expanded="false">Yarns</a>
						</li>
						<li role="presentation" class="">
							<a data-toggle="tab" role="tab" aria-controls="messages" href="#fabrics-faq" aria-expanded="false">Fabrics</a>
						</li>
						<!-- <li role="presentation" class="">
						<a data-toggle="tab" role="tab" aria-controls="messages" href="#partners-faq" aria-expanded="false">Partners</a>
					</li> -->
				</ul>
			</div>
			<div class="pmd-card-body">
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="dyes-faq">
						<!-- Dye related FAQs -->
						<div class="panel-group pmd-accordion pmd-accordion-nospace" id="accordion5" role="tablist" aria-multiselectable="true" >
							<!-- Question 1 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-1">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-1" aria-expanded="true" aria-controls="ans-dye-1" data-expandable="false">
											<span class='pull-left'>What type of fabrics can be dyed with Truetone herbal dyes?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-dye-1">
									<div class="panel-body"> Any natural fibre, Cotton, wool, silk, hemp, jute, linen for instances.</div>
								</div>
							</div>
							<!-- Question 2 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-2">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-2" aria-expanded="true" aria-controls="#ans-dye-2" data-expandable="false">
											<span class='pull-left'>Are there any heavy metals present in your dyes?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-2">
									<div class="panel-body">None, we do not work with any harmful metals.</div>
								</div>
							</div>
							<!-- Question 3 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-3">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-3" aria-expanded="true" aria-controls="ans-dye-3" data-expandable="false">
											<span class='pull-left'>How can I be sure that the dye that I am using is herbal?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-3">
									<div class="panel-body">
										Lemon is the most acidic substance in nature, so it tends to bleach the colour made from natural ingredient, indigo being an exception.
										<br />
										So when you run the lemon test on any herbal dyed fabrics the colour will partially come out of the fabric and will prove that the fabric has been processed with herbs or any natural substance.
									</div>
								</div>
							</div>
							<!-- Question 4 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-4">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-4" aria-expanded="true" aria-controls="ans-dye-4" data-expandable="false">
											<span class='pull-left'>In what forms are the dyes available in your dye stock?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-4">
									<div class="panel-body">
										Dyes can be in powder form, as printing paste, tie-dye paste or yarn dye paste
									</div>
								</div>
							</div>
							<!-- Question 5 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-5">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-5" aria-expanded="true" aria-controls="ans-dye-5" data-expandable="false">
											<span class='pull-left'>What are the main raw materials used by you?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-5">
									<div class="panel-body">
										The basic raw materials are various medicinally rich herbs and minerals. Please visit our Dye page to know more about each herb and its properties.
									</div>
								</div>
							</div>
							<!-- Question 6 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-6">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-6" aria-expanded="true" aria-controls="ans-dye-6" data-expandable="false">
											<span class='pull-left'>Can your dyes be used for dyeing at home?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-6">
									<div class="panel-body">
										Yes we do have DIY home dye kits. For further details please visit our dye kit segment.
									</div>
								</div>
							</div>
							<!-- question 7 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-7">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-7" aria-expanded="true" aria-controls="ans-dye-7" data-expandable="false">
											<span class='pull-left'>What is unique about your dye?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-7">
									<div class="panel-body">
										Our dyes are called herbal dyes for good reasons; they are different from the so called natural and vegetable dyes as both of them uses chemicals and are even extracted in solvents.
										<br />
										Herbal dyes are prepared with ancient recipes re-discovered and standardised for today’s requirements. Moreover, herbal dyes have huge medicinal benefits to our skin.
										<br />
										To know more you may ask us for our report and findings separately.
									</div>
								</div>
							</div>
							<!-- question 8 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-8">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-8" aria-expanded="true" aria-controls="ans-dye-8" data-expandable="false">
											<span class='pull-left'>How can we preserve herbal dyes?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-8">
									<div class="panel-body">
										It should be kept in air tight containers as these dyes are very sensitive to environment and may get fermented if kept in open for long time.
									</div>
								</div>
							</div>
							<!-- question 9 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-9">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-9" aria-expanded="true" aria-controls="ans-dye-9" data-expandable="false">
											<span class='pull-left'>Are your dyes bio-degradable?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-9">
									<div class="panel-body">
										They are more than bio-degradable; they are bio-compost in certain conditions.
									</div>
								</div>
							</div>
							<!-- question 10 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-10">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-10" aria-expanded="true" aria-controls="ans-dye-10" data-expandable="false">
											<span class='pull-left'>What is your minimum order quantity?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-10">
									<div class="panel-body">
										100 grams in dyes powder
										<br />
										1 kg in paste
									</div>
								</div>
							</div>
							<!-- question 11 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-11">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-11" aria-expanded="true" aria-controls="ans-dye-11" data-expandable="false">
											<span class='pull-left'>What are the certifications of true tone dyes?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-11">
									<div class="panel-body">
										The Truetone inc. is certified by GOTS for production.
									</div>
								</div>
							</div>
							<!-- question 12 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-12">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-12" aria-expanded="true" aria-controls="ans-dye-12" data-expandable="false">
											<span class='pull-left'>What patents do you have?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-12">
									<div class="panel-body">
										We have Indian and Us patents for “herbal dyeing “
										<br />Patents Numbers are: USA [US 7,485, 158 B2], INDIA [202012]
									</div>
								</div>
							</div>
							<!-- question 13 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-13">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-13" aria-expanded="true" aria-controls="ans-dye-13" data-expandable="false">
											<span class='pull-left'>How is the dye waste disposed in Truetone?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-13">
									<div class="panel-body">
										Water is recycled as much possible and the solid waste is used as natural manure.
									</div>
								</div>
							</div>
							<!-- question 14 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-14">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-14" aria-expanded="true" aria-controls="ans-dye-14" data-expandable="false">
											<span class='pull-left'>Is there any training model that one has to follow in order to learn the art of herbal dyeing?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-14">
									<div class="panel-body">
										We have training modules which can vary from half a day to a span of three days. Moreover we can even customize our training according to the requirement.
										For more details please visit our workshop segment. You can even put your queries for the training modules available with us.
									</div>
								</div>
							</div>
							<!-- question 15 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-dye-15">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion5" href="#ans-dye-15" aria-expanded="true" aria-controls="ans-dye-15" data-expandable="false">
											<span class='pull-left'>Can you make dyes with shades that are customized especially for me?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-dye-15" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-dye-15">
									<div class="panel-body">
										Yes we can, however we do it with certain extra charges depending on the research required.
									</div>
								</div>
							</div>



						</div> <!-- Accordion with No Space example end -->
					</div>
					<div role="tabpanel" class="tab-pane" id="yarns-faq">
						<!-- Yarn related FAQs -->
						<div class="panel-group pmd-accordion pmd-accordion-nospace" id="accordion-yarn" role="tablist" aria-multiselectable="true" >
							<!-- Question 1 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-1">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-1" aria-expanded="true" aria-controls="ans-yarn-1" data-expandable="false">
											<span class='pull-left'>Is there any particular way that the yarn is classified in Truetone?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-yarn-1">
									<div class="panel-body">The yarns should be of natural base, it could be anything ranging from cotton, silk, wool, jute, hemp to linen.</div>
								</div>
							</div>
							<!-- Question 2 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-2">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-2" aria-expanded="true" aria-controls="#ans-yarn-2" data-expandable="false">
											<span class='pull-left'>What yarn count is generally available with Truetone?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-yarn-2">
									<div class="panel-body">  Usually we have yarn availability till 50’s count and below.</div>
								</div>
							</div>
							<!-- Question 3 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-3">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-3" aria-expanded="true" aria-controls="ans-yarn-3" data-expandable="false">
											<span class='pull-left'>Is there any difference in the yarn used in handlooms and powerlooms?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-yarn-3">
									<div class="panel-body">
										For handlooms yarn can be both mill made as well as hand spun, while powerlooms only us mill made yarns.
									</div>
								</div>
							</div>
							<!-- Question 4 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-4">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-4" aria-expanded="true" aria-controls="ans-yarn-4" data-expandable="false">
											<span class='pull-left'>Is there any multicoloured yarn availability in your stock?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-yarn-4">
									<div class="panel-body">
										We dye yarn on order only. Please contact us for your requirements.
									</div>
								</div>
							</div>
							<!-- Question 5 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-5">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-5" aria-expanded="true" aria-controls="ans-yarn-5" data-expandable="false">
											<span class='pull-left'>What are the colours available with true tone?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-yarn-5">
									<div class="panel-body">
										Refer to the shade card to know more about our shades.
									</div>
								</div>
							</div>
							<!-- Question 6 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-6">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-6" aria-expanded="true" aria-controls="ans-yarn-6" data-expandable="false">
											<span class='pull-left'>What would be the proper wash care for yarn dyed fabrics that are dyed with herbal colours?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-yarn-6">
									<div class="panel-body">
										Same as our standard wash care. It is best to use mild detergents while washing. A gentle cycle on the washing machine works well.
									</div>
								</div>
							</div>
							<!-- question 7 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-7">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-7" aria-expanded="true" aria-controls="ans-yarn-7" data-expandable="false">
											<span class='pull-left'>What is the sweat fastness for herbal dyed yarns?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-yarn-7">
									<div class="panel-body">
										Herbal dyes being natural are sensitive to certain sweat types depending on the PH of the same.<br />
										The best way to take care of your garments is to wash your garment or fabrics 1-2 times before it is been used for heavy sweating conditions.
									</div>
								</div>
							</div>
							<!-- question 8 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-8">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-8" aria-expanded="true" aria-controls="ans-yarn-8" data-expandable="false">
											<span class='pull-left'>Can you make fabric out of the yarn you dyed at your unit?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-yarn-8">
									<div class="panel-body">
										Yes, we can depending on the weave required.
										We can even outsource the same.
									</div>
								</div>
							</div>
							<!-- question 9 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-9">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-9" aria-expanded="true" aria-controls="ans-yarn-9" data-expandable="false">
											<span class='pull-left'>How is the price determined for herbal dyed yarn?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-yarn-9">
									<div class="panel-body">
										It is determined by three things,
										<br />
										- Process required
										<br />
										- Use of dyes
										<br />
										- Quantity of yarns to be dyed
										<br />
									</div>
								</div>
							</div>
							<!-- question 10 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-10">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-10" aria-expanded="true" aria-controls="ans-yarn-10" data-expandable="false">
											<span class='pull-left'>How is the yarn packaged?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-yarn-10">
									<div class="panel-body">
										For 60-150 grams Hanks are available and for 500 grams cones are available.
									</div>
								</div>
							</div>
							<!-- question 11 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-11">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-11" aria-expanded="true" aria-controls="ans-yarn-11" data-expandable="false">
											<span class='pull-left'>What is the minimum quantity of yarn that can be purchased from Truetone?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-yarn-11">
									<div class="panel-body">
										If the yarn is available in stock, there is no minimum quantity requirement. If not, then the minimum quantity would be 25 - 50 kg per colour, depending on the colour of your choice. If you have a special requirement, do get in touch.
									</div>
								</div>
							</div>
							<!-- question 12 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-12">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-12" aria-expanded="true" aria-controls="ans-yarn-12" data-expandable="false">
											<span class='pull-left'>What is the colour variation in yarns that you get from batch to batch?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-yarn-12">
									<div class="panel-body">
										There is always a slight variation in shade from one batch to another, even if you place an order for a colour you have worked with previously. We try to make it as close to the original as possible and we will work diligently on your sampling to make sure you are on the same page as us before you place your final order.
									</div>
								</div>
							</div>
							<!-- question 13 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-13">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-13" aria-expanded="true" aria-controls="ans-yarn-13" data-expandable="false">
											<span class='pull-left'>What is the maximum quantity for the sampling of yarns?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-yarn-13">
									<div class="panel-body">
										We do sampling in hank form which could be anything from 500grams onwards.
									</div>
								</div>
							</div>
							<!-- question 14 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-yarn-14">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-yarn" href="#ans-yarn-14" aria-expanded="true" aria-controls="ans-yarn-14" data-expandable="false">
											<span class='pull-left'>What are the end uses of your yarns?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-yarn-14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-yarn-14">
									<div class="panel-body">
										It can be used for weaving fabrics such as knits, towels as well as denims and other fabric which have a design in their weave.
									</div>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="fabrics-faq">
						<!-- Fabric related FAQs -->
						<div class="panel-group pmd-accordion pmd-accordion-nospace" id="accordion-fabric" role="tablist" aria-multiselectable="true" >
							<!-- Question 1 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-fabric-1">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-fabric" href="#ans-fabric-1" aria-expanded="true" aria-controls="ans-fabric-1" data-expandable="false">
											<span class='pull-left'>What are the fabrics dyed by Truetone?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-fabric-1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-fabric-1">
									<div class="panel-body">We dye many kinds of fabrics. We prefer working with 100% organic cotton weaves, however we have often worked with silk and wool as well. Get in touch with us to know more about the GSM, width, prices and qualities. If you have requirement for a special fabric, do share it with us and we will try our best to source it for you.
									</div>
								</div>
							</div>
							<!-- Question 2 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-fabric-2">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-fabric" href="#ans-fabric-2" aria-expanded="true" aria-controls="#ans-fabric-2" data-expandable="false">
											<span class='pull-left'>How many meters can be dyed at once?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-fabric-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-fabric-2">
									<div class="panel-body">We have a capacity to dye and print large quantities of fabrics everyday. Please contact us to know more.</div>
								</div>
							</div>
							<!-- Question 3 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-fabric-3">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-fabric" href="#ans-fabric-3" aria-expanded="true" aria-controls="ans-fabric-3" data-expandable="false">
											<span class='pull-left'>How is the cost of dyeing determined?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-fabric-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-fabric-3">
									<div class="panel-body">
										It is determined by three things,<br />
										- Process required<br />
										-The raw material in the form of dyes<br />
										-The type and quantity of fabric
									</div>
								</div>
							</div>
							<!-- Question 4 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-fabric-4">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-fabric" href="#ans-fabric-4" aria-expanded="true" aria-controls="ans-fabric-4" data-expandable="false">
											<span class='pull-left'>Can we dye a single piece of fabric with two different colours?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-fabric-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-fabric-4">
									<div class="panel-body">
										This depends on your design. Tie dyed fabric can be dyed in more than one colour. Sometimes we dye the fabric in one colour and print over it with another. We could also use multi-layered screens for colour variation to give the fabric a certain effect. Get in touch with us with your detailed design to know how we can incorporate herbal dyes for you.
									</div>
								</div>
							</div>
							<!-- Question 5 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-fabric-5">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-fabric" href="#ans-fabric-5" aria-expanded="true" aria-controls="ans-fabric-5" data-expandable="false">
											<span class='pull-left'>Do you dye synthetic fabrics also?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-fabric-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-fabric-5">
									<div class="panel-body">
										We do not dye synthetic fabrics but nylon can be dyed with herbal dyes
									</div>
								</div>
							</div>
							<!-- Question 6 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-fabric-6">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-fabric" href="#ans-fabric-6" aria-expanded="true" aria-controls="ans-fabric-6" data-expandable="false">
											<span class='pull-left'>What is the finishing required for herbal dyed fabrics?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-fabric-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-fabric-6">
									<div class="panel-body">
										Zero-Zero and Calendar finishing is generally used in herbal dyed fabrics.
									</div>
								</div>
							</div>
							<!-- question 7 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-fabric-7">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-fabric" href="#ans-fabric-7" aria-expanded="true" aria-controls="ans-fabric-7" data-expandable="false">
											<span class='pull-left'>What are the skills required to dye fabrics with herbal dyes at home?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-fabric-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-fabric-7">
									<div class="panel-body">
										We have training modules which can vary from half a day to a span of three days. Moreover we can even customize our training according to the requirement.
										For more details please visit our workshop segment or contact us your queries for the training modules available with us.
										Or you can purchase one of our Do It Yourself Dye Kits and follow the user manual that we provide with it to dye at home!
									</div>
								</div>
							</div>
							<!-- question 8 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-fabric-8">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-fabric" href="#ans-fabric-8" aria-expanded="true" aria-controls="ans-fabric-8" data-expandable="false">
											<span class='pull-left'>Can you dye fabrics that I have purchased from elsewhere?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-fabric-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-fabric-8">
									<div class="panel-body">
										Yes we can, get in touch with us about your requirement.
									</div>
								</div>
							</div>
							<!-- question 9 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-fabric-9">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-fabric" href="#ans-fabric-9" aria-expanded="true" aria-controls="ans-fabric-9" data-expandable="false">
											<span class='pull-left'>Can I test your dyed fabrics and dyes before placing an order?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-fabric-9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-fabric-9">
									<div class="panel-body">
										Lemon is the most acidic substance in nature, so it tends to bleach the colour made from natural ingredient, indigo being an exception.
										<br />So when you run the lemon test on any herbal dyed fabrics the colour will partially come out of the fabric and will prove that the fabric has been processed with herbs or any natural substance.

									</div>
								</div>
							</div>
							<!-- question 10 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-fabric-10">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-fabric" href="#ans-fabric-10" aria-expanded="true" aria-controls="ans-fabric-10" data-expandable="false">
											<span class='pull-left'>Can Truetone create custom shades for me?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-fabric-10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-fabric-10">
									<div class="panel-body">
										Yes we can, however we do it with certain extra charges depending on the complexity of creating that shade.
									</div>
								</div>
							</div>
							<!-- question 11 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-fabric-11">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-fabric" href="#ans-fabric-11" aria-expanded="true" aria-controls="ans-fabric-11" data-expandable="false">
											<span class='pull-left'>Can herbal dyes be used for printing?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-fabric-11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-fabric-11">
									<div class="panel-body">
										Yes we do have DIY printing kit.
										For further details please get in touch.
									</div>
								</div>
							</div>
							<!-- question 12 -->
							<div class="panel panel-default">
								<div class="panel-heading" role="tab" id="faq-fabric-12">
									<h4 class="panel-title">
										<a data-toggle="collapse"  data-parent="#accordion-fabric" href="#ans-fabric-12" aria-expanded="true" aria-controls="ans-fabric-12" data-expandable="false">
											<span class='pull-left'>Is tie- dyed and other resist dyed fabrics available with you?</span>
											<span class='pull-right'><i class="material-icons">&#xE5C6;</i></span>
											<div class='clearfix'></div>
										</a>
									</h4>
								</div>
								<div id="ans-fabric-12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="faq-fabric-12">
									<div class="panel-body">
										Yes we do have tied dyed and batik fabric available with us.
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>

@endsection
