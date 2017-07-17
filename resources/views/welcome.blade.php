<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Truetone Web</title>

  <!-- Fonts -->

  <!-- Styles -->
  <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<script src='https://unpkg.com/headroom.js'></script>
<script src='{{asset('js/app.js')}}'></script>
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

  <div class='page-content homepage'>
    <section class='landing'>
      <div class="fullscreen-bg">
        <!-- <img class='svg' src='{{asset('images/logo.svg')}}'> -->
        <h1>We live and dye naturally</h1>
        <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
          <source src="{{asset('images/truetone2.mp4')}}" type="video/mp4">
          </video>
        </div>
      </section>
      <section class='featuring'>
        <div class="strip dye">
          <div class='overlay'>
            <h1>Dyes</h1>
            <p>Herbal Dyes are made with the love of nature and goodness of Auyrvedic herbs. Truetone Inc.
brings you the technology of industrial level dyes with the ancient art of natural dyeing at its core. Save
our Seas with these dyes that have only nutrient rich effluent.</p>
            <a href="#!" class='true-btn'>
              <span class='pull-left'>Explore</span>
              <span class='pull-right'><i class="material-icons">&#xE5C8;</i></span>
              <div class='clearfix'></div>
            </a>
          </div>
        </div>
        <div class="strip yarn">
          <div class='overlay'>
            <h1>Yarns</h1>
            <p>Yarn is the essence of all fabrics. We dye our yarns in the hues of nature to give you the possibility
of weaving nature itself into your fabrics. Bring something new to the table with herbal dyed yarns and
create a yarn dyed fabric that is completely chemical-free.</p>
            <a href="#!" class='true-btn'>
              <span class='pull-left'>Explore</span>
              <span class='pull-right'><i class="material-icons">&#xE5C8;</i></span>
              <div class='clearfix'></div>
            </a>
          </div>
        </div>
        <div class="strip fabric">
          <div class='overlay'>
            <h1>Fabrics</h1>
            <p>Made with certified organic cotton and dyed with herbs, our fabrics are everything that an
environmentally conscious human in the fashion industry can want. Explore our wide range of fabrics
and techniques to see how far we have come with the technique of Herbal Dyeing.</p>
            <a href="#!" class='true-btn'>
              <span class='pull-left'>Explore</span>
              <span class='pull-right'><i class="material-icons">&#xE5C8;</i></span>
              <div class='clearfix'></div>
            </a>
          </div>
        </div>
        <div class='clearfix'></div>
      </section>
      <section class='whoweare'>
        <div class='container'>
          <h1>Who We Are</h1>
          <hr/>
          <h3>Truetone Inc is the industrial expert on Herbal Dyes, a technology that we revived from the
depth of ancient history and from the roots of our soil, to bring you dyes that are beautiful and natural
in every way. Our dyes are the answer to the damage done to our Earth and our health by petroleum
based dyes.</h3>
        </div>
      </section>
      <section class='ourprocess'>
        <div class='container'>
          <h1>Our Process</h1>
          <hr />
          <h3>Truetone is the leading online shop of herbal dyed organic clothes for men and women.
             We have a wide range of natural clothing from underwear to fabrics and towels and more.
             Our men's clothes cover organic cotton tee, boxer, brief, vest and more while womens clothing covers bikini, hipster, camisole, organic t-shirts.</h3>
          <a href='#!' class='true-btn'>
            <span class='pull-left'>Learn more</span>
            <span class='pull-right'><i class="material-icons">&#xE5C8;</i></span>
            <div class='clearfix'></div>
          </a>
        </div>
      </section>
      <section class='certified'>
        <div class='container'>
          <h1>Be Truetone Certified</h1>
          <hr />
          <div class='row'>
            <div class='col-md-6 col-lg-6 col-sm-6 col-xs-12'>
              <div class='creative-wrapper'>
                <img src='{{asset('images/homepage/certified.svg')}}' />
              </div>
            </div>
            <div class='col-md-6 col-lg-6 col-sm-6 col-xs-12'>
              <div class='desc-wrapper text-left'>
                <h2>Apply for Certificate</h2>
                <p>
                  Join us in our endeavor to change the face of industrial dyes. Let your consumers
  know that you subscribe to the natural way of dyeing. Using our dyes, yarns or fabrics in your design will
  make you eligible to tag your product with the Truetone Stamp. Be proud of you make!
                </p>
                <a href='#!' class='true-btn'>
                  <span class='pull-left'>Apply now</span>
                  <span class='pull-right'><i class="material-icons">&#xE5C8;</i></span>
                  <div class='clearfix'></div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class='infographic'>
        <div class='container'>
          <h1>Infographic</h1>
        </div>
      </section>
      <section class='blogNews'>
        <div class='container'>
          <h1>Blog & News</h1>
        </div>
      </section>
      <section class='testimonials'>
        <div class='container'>
          <h1>Testimonials</h1>
        </div>
      </section>
      <section class='faq'>
        <div class='container'>
          <h1>Frequently Asked Questions</h1>
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
                <li role="presentation" class="">
                  <a data-toggle="tab" role="tab" aria-controls="messages" href="#partners-faq" aria-expanded="false">Partners</a>
                </li>
              </ul>
            </div>
            <div class="pmd-card-body">
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="dyes-faq">
                  <div class="panel-group pmd-accordion pmd-accordion-nospace" id="accordion5" role="tablist" aria-multiselectable="true" >
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                          <a data-toggle="collapse"  data-parent="#accordion5" href="#collapseOne5" aria-expanded="true" aria-controls="collapseOne5" data-expandable="false">
                            <span class='pull-left'>What are Herbal Dyes?</span>
                            <span class='pull-right'><i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></span>
                            <div class='clearfix'></div>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne5" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body"> The word "accordion" typically conjures a mental image of your favorite polka band. However that’s not what we are talking about when referring to accordion menu. Although polka music can offer a rip-snorting good time, the term is associated with something different in the realm of web design. User interface accordions might refer to menus, widgets, or content areas which expand like the musical instrument. These interfaces have grown a lot more popular in recent years with the expansion of JavaScript.</div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                          <a data-toggle="collapse"  data-parent="#accordion5" href="#collapseTwo5" aria-expanded="true" aria-controls="collapseTwo5" data-expandable="false">
                            <span class='pull-left'>How are Herbal Dyes made?</span>
                            <span class='pull-right'><i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></span>
                            <div class='clearfix'></div>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">Accordions are popular because they allow developers to force large amounts of content into tiny spaces on the page. Granted these content displays also require dynamic effects for switching between page elements – so there are pros and cons to accordions.</div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                          <a data-toggle="collapse"  data-parent="#accordion5" href="#collapseThree5" aria-expanded="true" aria-controls="collapseThree5" data-expandable="false">
                            <span class='pull-left'>question 3?</span>
                            <span class='pull-right'><i class="material-icons md-dark pmd-sm pmd-accordion-arrow">keyboard_arrow_down</i></span>
                            <div class='clearfix'></div>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">Not every website needs an accordion menu and you certainly won’t find them all the time. But that’s no reason to ignore the concept entirely. The purpose of an accordion menu is to manage an overabundance of content through dynamic switching. Each interface works differently based on the circumstances of the layout.</div>
                      </div>
                    </div>
                  </div> <!-- Accordion with No Space example end -->
                </div>
                <div role="tabpanel" class="tab-pane" id="yarns-faq">

                </div>
                <div role="tabpanel" class="tab-pane" id="fabrics-faq">

                </div>
                <div role="tabpanel" class="tab-pane" id="partners-faq">

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class='footer'>
      <div class='social-wrapper'>
        <div class="social-btns">
          <a class="btn facebook" href="#"><i class="fa fa-facebook"></i></a>
          <a class="btn twitter" href="#"><i class="fa fa-twitter"></i></a>
          <a class="btn google" href="#"><i class="fa fa-google"></i></a>
          <a class="btn dribbble" href="#"><i class="fa fa-dribbble"></i></a>
          <a class="btn skype" href="#"><i class="fa fa-skype"></i></a>
        </div>
      </div>
    </div>
  </body>
  </html>
