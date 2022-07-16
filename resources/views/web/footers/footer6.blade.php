<!-- //footer style Six -->
    <style>
        .footer-six {
            margin-top: 0px !important;
        }
        .footer-six .footer-one {
            background: rgba(51, 205, 115, 0.2);
            padding-bottom: 40px;
        }
        .footer-six .links-list li a, .footer-six .links-list li span, .mobile_app_icon {
            font-weight: normal !important;
            font-size: 12px !important;
            line-height: 16px !important;
            letter-spacing: 0.2px !important;
            color: #373737 !important;
        }
        .footer-six .footer-two {
            background: #2DAE1F;
            padding-top: 18px !important;
            padding-bottom: 11px !important;
        }
        .footer-six .footer-two .second_footer_text {
            font-weight: normal !important;
            font-size: 12px;
            line-height: 16px;
            letter-spacing: 0.2px;
            color: #373737;
        }
        .footer-six .footer-two .second_footer_regular_text {
            font-weight: normal !important;
            font-size: 11px;
            line-height: 14px;
            letter-spacing: 0.2px;
            color: #373737;
        }
        .footer-six .reach-us li {
            margin-bottom: 0px !important;
        }
    </style>
    <footer id="footerSix"  class="footer-area footer-six footer-desktop d-none d-lg-block d-xl-block">
    
    <!-- <div class="container-fluid p-0 ">
      <div class="search-content">
          <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="newsletter">
                        <h5>An excitig offers and many more features to our customers</h5>                       
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div> -->

    <!-- <div class="container">
      <div class="row">
        <div class="col-12 col-lg-3">
          <div class="single-footer">
            <h5>@lang('website.Popular Categories')</h5>
            <div class="row">
              <div class="col-12 col-lg-8">
                <hr>
              </div>
            </div>
            <ul class="contact-list  pl-0 mb-0">
              <li> <i class="fas fa-map-marker"></i><span>{{$result['commonContent']['setting'][4]->value}} {{$result['commonContent']['setting'][5]->value}} {{$result['commonContent']['setting'][6]->value}}, {{$result['commonContent']['setting'][7]->value}} {{$result['commonContent']['setting'][8]->value}}</span> </li>
              <li> <i class="fas fa-phone"></i><span dir="ltr">({{$result['commonContent']['setting'][11]->value}})</span> </li>
              <li> <i class="fas fa-envelope"></i><span> <a href="mailto:{{$result['commonContent']['setting'][3]->value}}">{{$result['commonContent']['setting'][3]->value}}</a> </span> </li>

            </ul>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="footer-block">
              <div class="single-footer single-footer-left">
                <h5>@lang('website.Our Services')</h5>
                <div class="row">
                    <div class="col-12 col-lg-8">
                      <hr>
                    </div>
                  </div>
                <ul class="links-list pl-0 mb-0">
                <li> <a href="{{ URL::to('/')}}"><i class="fa fa-angle-right"></i>@lang('website.Home')</a> </li>
                <li> <a href="{{ URL::to('/shop')}}"><i class="fa fa-angle-right"></i>@lang('website.Shop')</a> </li>
                <li> <a href="{{ URL::to('/orders')}}"><i class="fa fa-angle-right"></i>@lang('website.Orders')</a> </li>
                <li> <a href="{{ URL::to('/viewcart')}}"><i class="fa fa-angle-right"></i>@lang('website.Shopping Cart')</a> </li>
                <li> <a href="{{ URL::to('/wishlist')}}"><i class="fa fa-angle-right"></i>@lang('website.Wishlist')</a> </li>
                </ul>
              </div>

          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
          <div class="single-footer single-footer-right">
            <h5>@lang('website.Information')</h5>
            <div class="row">
                <div class="col-12 col-lg-8">
                  <hr>
                </div>
              </div>
            <ul class="links-list pl-0 mb-0">
              @if(count($result['commonContent']['pages']))
                  @foreach($result['commonContent']['pages'] as $page)
                      <li> <a href="{{ URL::to('/page?name='.$page->slug)}}"><i class="fa fa-angle-right"></i>{{$page->name}}</a> </li>
                  @endforeach
              @endif
                  <li> <a href="{{ URL::to('/contact')}}"><i class="fa fa-angle-right"></i>@lang('website.Contact Us')</a> </li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-lg-3">
          <div class="single-footer">
            @if(!empty($result['commonContent']['setting'][89]) and $result['commonContent']['setting'][89]->value==1)
              <div class="newsletter">
                  <h5>@lang('website.Subscribe for Newsletter')</h5>
                  <div class="row">
                      <div class="col-12 col-lg-8">
                        <hr>
                      </div>
                    </div>
                  <div class="block">
                      <form class="form-inline">
                          <div class="search">
                            <input type="email" name="email" id="email" placeholder="@lang('website.Your email address here')">
                            <button type="button" id="subscribe" class="btn btn-secondary">@lang('website.Subscribe')</button>
                              @lang('website.Subscribe')
                              </button>
                              <button class="btn-secondary fas fa-location-arrow" type="submit">
                              </button>
                              <div class="alert alert-success alert-dismissible success-subscribte" role="alert" style="opacity: 500; display: none;"></div>

                              <div class="alert alert-danger alert-dismissible error-subscribte" role="alert" style="opacity: 500; display: none;"></div>
                          </div>
                        </form>
                  </div>
              </div>
              @endif
              <div class="socials">
                  <h5>Get App</h5>
                  <div class="row">
                      <div class="col-12 col-lg-8">
                        <hr>
                      </div>
                    </div>
                  <ul class="list hide">
                    <li>
                        @if(!empty($result['commonContent']['setting'][50]->value))
                          <a href="{{$result['commonContent']['setting'][50]->value}}" class="fab fa-facebook-f" target="_blank"></a>
                          @else
                            <a href="#" class="fab fa-facebook-f"></a>
                          @endif
                      </li>
                      <li>
                      @if(!empty($result['commonContent']['setting'][52]->value))
                          <a href="{{$result['commonContent']['setting'][52]->value}}" class="fab fa-twitter" target="_blank"></a>
                      @else
                          <a href="#" class="fab fa-twitter"></a>
                      @endif</li>
                      <li>
                      @if(!empty($result['commonContent']['setting'][51]->value))
                          <a href="{{$result['commonContent']['setting'][51]->value}}"  target="_blank"><i class="fab fa-google"></i></a>
                      @else
                          <a href="#"><i class="fab fa-google"></i></a>
                      @endif
                      </li>
                      <li>
                      @if(!empty($result['commonContent']['setting'][53]->value))
                          <a href="{{$result['commonContent']['setting'][53]->value}}" class="fab fa-linkedin-in" target="_blank"></a>
                      @else
                          <a href="#" class="fab fa-linkedin-in"></a>
                      @endif
                      </li>
                  </ul>
                  <div class="footer-image">
                    <img class="img-fluid" src="{{asset('web/playstore.png')}}">
                  </div>
              </div>

          </div>
        </div>
      </div>
    </div> -->
        <div class="footer-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h6 class="heading_style">
                        @lang('website.Popular Categories')
                        </h6>
                        <div>
                            <ul class="links-list pl-0 ">
                                <li> <a href="{{ URL::to('/')}}">@lang('website.Home')</a> </li>
                                <li> <a href="{{ URL::to('/shop')}}">@lang('website.Shop')</a> </li>
                                <li> <a href="{{ URL::to('/orders')}}">@lang('website.Orders')</a> </li>
                                <li> <a href="{{ URL::to('/viewcart')}}">@lang('website.Shopping Cart')</a> </li>
                                <li> <a href="{{ URL::to('/wishlist')}}">@lang('website.Wishlist')</a> </li>
                            </ul>
                        </div>
                        <div class="pt-3 find_our_stor">
                        <a href="#" type="button" class="btn swipe-to-top btn-light">@lang('website.Find Our Store')</a>
                        </div>
                    </div>
                    <!-- /////// -->
                    <div class="col-lg-4">
                        <div>
                            <h6 class="heading_style"> @lang('website.Customer Services') </h6>
                            <div>
                                <ul class="links-list pl-0 mb-0">
                                    @if(count($result['commonContent']['pages']))
                                        @foreach($result['commonContent']['pages'] as $page)
                                            <li> <a href="{{ URL::to('/page?name='.$page->slug)}}">{{$page->name}}</a> </li>
                                        @endforeach
                                    @endif
                                        <li> <a href="{{ URL::to('/contact')}}">@lang('website.FAQ')</a> </li>
                                </ul>
                            </div>
                            <div class="pt-3">
                                <h6 class="heading_style mb-0">@lang('website.Connect with Us')</h6>
                                <div class="d-flex bd-highlight">
                                    <div class="pr-3 bd-highlight">
                                        <img src="{{asset('images/twitter.svg')}}"/>
                                    </div>
                                    <div class="pr-3 bd-highlight">
                                        <img src="{{asset('images/instagram.svg')}}"/>
                                    </div>
                                    <div class=" bd-highlight">
                                        <img src="{{asset('images/facebook.svg')}}"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ///////////// -->
                    <div class="col-lg-4">
                        <div class="list-right-sideborder pl-5">
                            <h6 class="heading_style">
                            @lang('website.Reach Us @')
                            </h6>
                            <div>
                                <ul class="links-list  pl-0 mb-0 reach-us">
                                    <li><span>WhatsApp us:</span>&nbsp; <span> {{$result['commonContent']['setting'][11]->value}}</span> </li>
                                    <li><span>Call us:</span>&nbsp; <span> {{$result['commonContent']['setting'][11]->value}}</span> </li>
                                    <li><span>8:00 AM to 8:00 PM, 365 days</span></li>
                                    <li class="pt-3"><a href="#">For Queries, please email us on cs@mkfmart.com</a> </li>
                                </ul>
                            </div>
                            <div class="footer-image col-lg-12 row pt-3">
                                <div class="col-lg-12 pl-0 pb-3 mobile_app_icon">
                                    Try our mobile apps
                                </div>
                                <div class="col-lg-6 pl-0">
                                    <img class="img-fluid" src="{{asset('images/google-play-badge 1.png')}}">
                                </div>
                                <div class="col-lg-6 pl-0">
                                    <img class="img-fluid" src="{{asset('images/download-on-the-app-store-apple 1.png')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid footer-two">
            <div class="container">
                <h6 class="second_footer_text mb-0">COPYRIGHT MKFMART 2020</h6>
                <span class="second_footer_regular_text">Terms & Conditions | Disclamier | Privacy Policy | Sales Terms and Conditions</span>
            </div>
        </div>
    </footer>



