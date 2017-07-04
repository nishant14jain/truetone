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
</head>
<body>
  <div class='headnav'>
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
        <img src='{{asset('images/logo.svg')}}'>
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
  </div>

  <div class='page-content homepage'>
    <section class='landing'>
      <img src="{{asset('images/homepage/Truetone_Home.png')}}">
    </section>
    <section class='featuring'>
      <div class="strip dye" style='background:url({{asset('images/homepage/dye.png')}})'>
        <div class='overlay'>
          <h1>Dyes</h1>
          <p>Truetone is the leading online shop of herbal dyed organic clothes for men and women. We have a wide range of natural clothing from underwear to fabrics and towels and more. Our men's clothes cover organic cotton tee, boxer, brief, vest and more while womens clothing covers bikini, hipster, camisole, organic t-shirts.</p>
        </div>
      </div>
      <div class="strip yarn" style='background:url({{asset('images/homepage/yarn.png')}})'>
        <div class='overlay'>
          <h1>Yarns</h1>
          <p>Truetone is the leading online shop of herbal dyed organic clothes for men and women. We have a wide range of natural clothing from underwear to fabrics and towels and more. Our men's clothes cover organic cotton tee, boxer, brief, vest and more while womens clothing covers bikini, hipster, camisole, organic t-shirts.</p>
        </div>
      </div>
      <div class="strip fabric" style='background:url({{asset('images/homepage/fabric.png')}})'>
        <div class='overlay'>
          <h1>Fabrics</h1>
          <p>Truetone is the leading online shop of herbal dyed organic clothes for men and women. We have a wide range of natural clothing from underwear to fabrics and towels and more. Our men's clothes cover organic cotton tee, boxer, brief, vest and more while womens clothing covers bikini, hipster, camisole, organic t-shirts.</p>
        </div>
      </div>
      <div class='clearfix'></div>
    </section>
    <section class='whoweare'>
      <div class='container'>
        <h1>Who We Are</h1>
        <hr/>
        <h3>Truetone is the leading online shop of herbal dyed organic clothes for men and women. We have a wide range of natural clothing from underwear to fabrics and towels and more. Our men's clothes cover organic cotton tee, boxer, brief, vest and more while womens clothing covers bikini, hipster, camisole, organic t-shirts.</h3>
      </div>
    </section>
    <section class='ourprocess'>
      <div class='container'>
        <h1>Our Process</h1>
        <hr />
        <h3>Truetone is the leading online shop of herbal dyed organic clothes for men and women. We have a wide range of natural clothing from underwear to fabrics and towels and more. Our men's clothes cover organic cotton tee, boxer, brief, vest and more while womens clothing covers bikini, hipster, camisole, organic t-shirts.</h3>
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
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
              </p>
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
