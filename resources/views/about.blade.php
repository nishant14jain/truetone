@extends('layout')
@section ('content')

<div class='page-content aboutPage'>
  <section class='page-hero pos-rel'>
    <div class='vCenter pos-abs centerXY'>
      <h1 class='quote'>About Us</h1>
    </div>
  </section>
  <section class='aboutus'>
    <div class='container'>
      <h1>Our Mission</h1>
      <p>
        Truetone reflects our love for the environment and defines our passion to work for it. Through
        our innovative process of producing herbal textiles and dyes, we want our business to help
        reducing pollution and harm caused by regularly dyed textiles.
      </p>
      <p>
        At Truetone we see a world where every user may enthusiastically choose herbal dyed fabric
        without compromising on design, quantity or quality.
      </p>
      <p>
        Thus we want to accomplish this dream through our Global Organic Textile Standard certified
        processes. Our variety is not only reflected through our diverse range of fabrics but also
        portrays our interest in superior quality. This paired with our beautiful range in colours and
        prints allows us to be at par with the enormous industry.
        To add on we take pride in our practice of recycling the solid as well as liquid waste. This not
        only allow us to be the producers of fabric that is completely eco-friendly, but also makes our
        process a reflection of our belief: We live and dye naturally.
      </p>
    </div>
  </section>
  <section class='gallery'>
    <div class='container'>
      <div class='image-wrapper'>
        <img src='{{asset('images/about/1.jpg')}}' />
      </div>
      <div class='image-wrapper'>
        <img src='{{asset('images/about/2.jpg')}}' />
      </div>
      <div class='image-wrapper'>
        <img src='{{asset('images/about/3.jpg')}}' />
      </div>
      <div class='image-wrapper'>
        <img src='{{asset('images/about/4.jpg')}}' />
      </div>
    </div>
  </section>
  <section class='process'>
    <div class='container'>
      <h1>Our Process</h1>
      <p>
        The process of herbal dyeing is much simpler than it seems. All it requires is a connection with nature. It starts
        with the planting of a small seed. Herbal dyes are almost solely plant based, using components such as flowers,
        roots, leaves, seeds, peels, etc.
      </p>
      <p>
        We try our best to use only that part of the plant which is considered a waste or is growing wild and organic in
        nature and has medicinal properties, such as the peels of pomegranate, onions and myraballam. This material is
        rich in dyeing properties and ensures that the plant is productively used in its entirety. We make our process
        completely non- violent by not using any ingredients that might harm the environment or any animal.
      </p>
      <p>
        Once the correct part of the plant is collected for the purposes of dyeing, it is dried in the sun for days before it is
        made into a powder form.
      </p>
      <p>
        After the various powders are created we bring them to our laboratory and create a proportionate blend of herbs
        and natural mordants in measured quantities that can derive specific shades. This can be in liquid or powder
        forms.
      </p>
      <p>
        They are now ready to be used in the textile industry as it is. We dye yarn and fabrics and carry out screen printing
        and block printing processes using our own herbal dyes.
      </p>
      <p>
        With the herbal dye technology innovated by Truetone Inc, dyeing fabrics naturally does not need to be a
        complicated process any more.
      </p>
      <p>
        For you to see the magic of herbal dyeing, we have created small do-it- yourself kits with elaborate and easy to
        read procedures. Now you can try to dye your own fabrics at home with our ready-to- use herbal dye kits.
      </p>
      <p>
        We want to change the world’s relationship with colours. We will take you back to the roots. Because We Live And
        Dye Naturally.
      </p>
    </div>
  </section>
  <section class='gallery'>
    <div class='container'>
      <div class='image-wrapper'>
        <img src='{{asset('images/about/5.jpg')}}' />
      </div>
      <div class='image-wrapper'>
        <img src='{{asset('images/about/6.jpg')}}' />
      </div>
    </div>
  </section>

</div>

@endsection
