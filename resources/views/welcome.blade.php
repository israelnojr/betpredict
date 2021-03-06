@extends('layouts.frontend.app')

@section('content')

<!--==========================
  About Us Section
============================-->
<section id="about" class="section-bg">
  <div class="container-fluid">
    <div class="section-header">
      <h3 class="section-title">FREE FOOTBALL PICKS FOR TODAY</h3>
      <span class="section-divider"></span>
    </div>

    <div class="container">
        <div class="row">
            <table class="table table-dark table-responsive">
                <thead>
                    <tr>
                    <th scope="col">League</th>
                    <th scope="col">Home vs Away</th>
                    <th scope="col">Tip</th>
                    <th scope="col">Start Time</th>
                    </tr>
                </thead>
                @if($prediction)
                  <tbody>
                  @foreach($prediction as $game)
                      <tr class="bg-info">
                          <th scope="row">{{$game->league}}</th>
                          <td>
                          {{$game->home_team}} vs {{$game->away_team}}
                          </td>
                          <td>{{$game->tip}}</td>
                          <td>{{$game->started_at}}</td>
                      </tr>
                  @endforeach
                  </tbody>
                  @else
                  <p class="text-danger" style="text-align: center">No Freebies today</p>
                @endif
            </table>
        </div>
        <div class="pagination-wrapper">{{ $prediction->links() }}</div>
    </div>
  </div>
</section><!-- #about -->

<!--==========================
  Product Featuress Section
============================-->
<section id="features">
  <div class="container">

    <div class="row">

      <div class="col-lg-8 offset-lg-4">
        <div class="section-header wow fadeIn" data-wow-duration="1s">
          <h3 class="section-title">Our Products & Services</h3>
          <span class="section-divider"></span>
        </div>
      </div>

      <div class="col-lg-4 col-md-5 features-img">
        <img src="{{ asset('frontend/img/fixed.png')}}" alt="" class="wow fadeInLeft">
      </div>

      <div class="col-lg-8 col-md-7 ">

        <div class="row">

          <div class="col-lg-6 col-md-6 box wow fadeInRight">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Free Football Tips</a></h4>
            <p class="description">We are curious and adventurous bettors with analysis on various market trends to serve our clients better.   We provide free/premium betting tips on the most reliable betting sports across the globe (Tennis, Volleyball and Basketball).  </p>
          </div>
          <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
            <div class="icon"><i class="ion-ios-flask-outline"></i></div>
            <h4 class="title"><a href="">Premium Football Tips</a></h4>
            <p class="description">Our premiun VIP sections (not fixed) is for paid members on football and other sports. 
Our average accuracy is highly desirable as we benchmark our VIP on 90% success rate, while our free tips speaks volumes.</p>
          </div>
          <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
            <div class="icon"><i class="ion-social-buffer-outline"></i></div>
            <h4 class="title"><a href="">We Value You</a></h4>
            <p class="description">We use relevant statistics and trends to determine our predictions such as Analysis of Variance (ANOVA), 
            Algorithm, Flowcharts, and Time Series Analysis. We are very finicky with our picks, 
            and with the application of our risk management strategy, you are guaranteed more profits than losses.</p>
          </div>
          <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">What we live for</a></h4>
            <p class="description">Our goal is to predict, prescribe, understand and achieve result. Our emblem is “You bet, have fun and win”.  
            We strongly advise that discipline is the watchword to achieving results. We love what we do and we do it better and improve ourselves every day!</p>
          </div>
        </div>

      </div>

    </div>

  </div>

</section><!-- #features -->

<!--==========================
  Product Advanced Featuress Section
============================-->
<section id="pricing" class="section-bg">
  <div class="container">

    <div class="section-header">
      <h3 class="section-title">FREE FOOTBALL PAST  PICKS</h3>
      <span class="section-divider"></span>
    </div>
    <div class="row">
            <table class="table table-dark table-responsive">
                <thead>
                    <tr>
                    <th scope="col">League</th>
                    <th scope="col">Home vs Away</th>
                    <th scope="col">Tip</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date Time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($predictions as $game)

                    <tr  @if($game->isEndded == true) class="{{$game->result == 'won' ? ' bg-success' : ' bg-danger'}}" @else class="bg-warning" @endif>
                        <th scope="row">{{$game->league}}</th>
                        <td>
                            {{$game->home_team}} vs {{$game->away_team}}
                        </td>
                        <td>{{$game->tip}}</td>
                        @if($game->isEndded == true) <td>{{$game->result == 'won' ? 'WON' : 'LOST'}}</td>
                        @else <td>{{ __('Ongoing')}}</td>
                        @endif
                        <td>{{$game->started_at}}</td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination-wrapper">{{ $predictions->links() }}</div>
  </div>
</section><!-- #pricing -->
<!--==========================
  Call To Action Section
============================-->
<section id="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 text-center text-lg-left">
        <h3 class="cta-title">Get on Board with premium</h3>
        <p class="cta-text"> We Provide sure 5 odds daily for our Basic members, and sure 5 & 10 odds daily for our Advanced members with guaranteed 5 wins per week.</p>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        @if(Auth::check())
          <a href="{{ route('admin.subscriptions.create')}}" class="cta-btn align-middle">become a VIP</a>
        @else
        <a href="{{ route('register')}}" class="cta-btn align-middle">Join For Free</a>
        @endif
      </div>
    </div>
   
  </div>
</section><!-- #call-to-action -->

<!-- <section id="clients">
  <div class="container">

    <div class="row wow fadeInUp">

      <div class="col-md-2">
        <img src="{{ asset('frontend/img/clients/client-1.png')}}" alt="">
      </div>

      <div class="col-md-2">
        <img src="{{ asset('frontend/img/clients/client-2.png')}}" alt="">
      </div>

      <div class="col-md-2">
        <img src="{{ asset('frontend/img/clients/client-3.png')}}" alt="">
      </div>

      <div class="col-md-2">
        <img src="{{ asset('frontend/img/clients/client-4.png')}}" alt="">
      </div>

      <div class="col-md-2">
        <img src="{{ asset('frontend/img/clients/client-5.png')}}" alt="">
      </div>

      <div class="col-md-2">
        <img src="{{ asset('frontend/img/clients/client-6.png')}}" alt="">
      </div>

    </div>
  </div>
</section> -->
<!-- #more-features -->

<!--==========================
  Pricing Section
============================-->
<section id="pricing" class="section-bg">
  <div class="container">

    <div class="section-header">
      <h3 class="section-title">Pricing</h3>
      <span class="section-divider"></span>
      <p class="section-description">Select from our range of packages what best suite your budget</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6">
        <div class="box featured wow fadeInRight">
          <h3>First Class</h3>
          <h4><sup>$</sup>100<span> month</span></h4>
          <ul>
            <li><i class="ion-android-checkmark-circle"></i>Daily 5 odds</li>
            <!-- <li><i class="ion-android-checkmark-circle"></i> Nec feugiat nisl pretium</li>
            <li><i class="ion-android-checkmark-circle"></i> Nulla at volutpat diam uteera</li>
            <li><i class="ion-android-checkmark-circle"></i> Pharetra massa massa ultricies</li>
            <li><i class="ion-android-checkmark-circle"></i> Massa ultricies mi quis hendrerit</li> -->
          </ul>
          <a href="{{ route('admin.subscriptions.create')}}" class="get-started-btn">Get Started</a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
          <div class="box  wow fadeInLeft">
            <h3>Economic Class</h3>
            <h4><sup>$</sup>50<span> month</span></h4>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Daily 2 odds</li>
              <!-- <li><i class="ion-android-checkmark-circle"></i> Nec feugiat nisl pretium</li>
              <li><i class="ion-android-checkmark-circle"></i> Nulla at volutpat diam uteera</li>
              <li><i class="ion-android-checkmark-circle"></i> Pharetra massa massa ultricies</li>
              <li><i class="ion-android-checkmark-circle"></i> Massa ultricies mi quis hendrerit</li> -->
            </ul>
            <a href="{{ route('admin.subscriptions.create')}}" class="get-started-btn">Get Started</a>
          </div>
      </div>
  </div>
</section><!-- #pricing -->


<!--==========================
  Frequently Asked Questions Section
============================-->
<!-- <section id="faq">
  <div class="container">

    <div class="section-header">
      <h3 class="section-title">Frequently Asked Questions</h3>
      <span class="section-divider"></span>
      <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
    </div>

    <ul id="faq-list" class="wow fadeInUp">
      <li>
        <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="ion-android-remove"></i></a>
        <div id="faq1" class="collapse" data-parent="#faq-list">
          <p>
            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="ion-android-remove"></i></a>
        <div id="faq2" class="collapse" data-parent="#faq-list">
          <p>
            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="ion-android-remove"></i></a>
        <div id="faq3" class="collapse" data-parent="#faq-list">
          <p>
            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="ion-android-remove"></i></a>
        <div id="faq4" class="collapse" data-parent="#faq-list">
          <p>
            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="ion-android-remove"></i></a>
        <div id="faq5" class="collapse" data-parent="#faq-list">
          <p>
            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
          </p>
        </div>
      </li>

      <li>
        <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
        <div id="faq6" class="collapse" data-parent="#faq-list">
          <p>
            Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
          </p>
        </div>
      </li>

    </ul>

  </div>
</section> -->
<!-- #faq -->

<!--==========================
  Contact Section
============================-->
<section id="contact">
  <div class="container">
    <div class="row wow fadeInUp">

      <div class="col-lg-4 col-md-4">
        <div class="contact-about">
          <h3>{{ config('app.name') }}</h3>
          <p class="description"> We evaluate , stategize, truncate, calculate the probabilities, weigh the odds,
             sum the odds and deliver you safe haven, we are professionals who understands risk management. </p>
            <p>we help you make money in football betting by predicting football matches correctly, it's business 
            not gamble. think positive and you'll make millions</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-4">
        <div class="info">
          <!-- <div>
            <i class="ion-ios-location-outline"></i>
            <p>A108 Adam Street<br>Lagos Nigeria</p>
          </div> -->

          <div>
            <i class="ion-ios-email-outline"></i>
            <p>Betpredictwin@gmail.com</p>
          </div>
        </div>
      </div>

      <div class="col-lg-5 col-md-8">
        <div class="form">
        <a href="https://t.me/betpredictclub" target="_blank"><img src="{{ asset('frontend/img/telegram.png')}}" alt="join telegram" style="width: 100%;" ></a>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="#"  role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-lg-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-lg-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
          </form>
        </div>
      </div>

    </div>

  </div>
</section><!-- #contact -->

<style>
  .pagination-wrapper{
      display: flex;
      justify-content: center;
   
}
</style>
@endsection
