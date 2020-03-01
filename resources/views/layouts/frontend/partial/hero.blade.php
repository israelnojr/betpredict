<section id="intro" class="{{ Request::is('strategy') ? 'mini' : null}}">
<br><br>
<div class="intro-text mt-7">
  <h2>MAKE MONEY WITH SPORTS BETTING</h2>
  <p>Sure Soccer Predictions daily !!!</p>
    <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Free Games</a>
        @if(Auth::check())
        <a href="{{ route('admin.subscriptions.create')}}" class="btn-get-started scrollto">Join VIP</a>
       @else
        <a href="{{ route('register')}}" class="btn-get-started scrollto">Join For Free</a>
        @endif
    </div>
</div>

<!-- <div class="product-screens">

  <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
    <img src="{{ asset('frontend/img/product-screen-1.png')}}" alt="">
  </div>

  <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
    <img src="{{ asset('frontend/img/product-screen-2.png')}}" alt="">
  </div>

  <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
    <img src="{{ asset('frontend/img/product-screen-3.png')}}" alt="">
  </div>

</div> -->

</section><!-- #intro -->