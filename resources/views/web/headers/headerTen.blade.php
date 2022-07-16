<!-- header style Ten -->
  
    <style type="text/css">
      body, a {
        font-family: 'Poppins-Medium', sans-serif !important;
        font-weight: normal;
      }
      .header-ten .bg-top-bar {
        background: #10A200;
        font-size: 14px;
        line-height: 18px;
        letter-spacing: 0.1px;
        color: #FFFFFF !important;
        padding:7px;
      }
      .header-ten .header-mini .navbar .navbar-collapse .nav-item .nav-link, 
      .header-ten .header-mini .navbar .navbar-collapse .nav-item .nav-avatar span {
        font-size: 14px !important;
        line-height: 18px !important;
        letter-spacing: 0.1px !important;
        color: #FFFFFF !important;
        opacity: 1;
      }
      .carousel-content .carousel-control-prev::before, .carousel-content .carousel-control-next::before {
        font-size:18px;
      }
      .header-ten .header-maxi .search-field-module .search-field-wrap input, .header-ten .header-maxi .search-field-module {
        border-radius: 30px !important;
        border: 1px solid #C4CDDD;
      }
      .header-ten .header-maxi .search-field-module .search-field-wrap input {
        font-size: 12px;
        line-height: 16px;
        letter-spacing: 0.2px;
        color: #828C9F;
        padding:0px 31px 0px 31px;
        height: 35px;
      }
      .header-ten .header-maxi .search-field-module .search-field-wrap .search-button {
          position: absolute;
          right: 0;
          top: 0;
          bottom: 0;
          height: 100%;
          width: 45px;
          padding: 2px;
          left:0;
          color: #828C9F;
      }
      .header-ten .header-maxi .search-field-module .search-field-wrap {
        height: 35px;
        width: 100%;
      }
      .header-ten .header-navbar nav .navbar-collapse ul .nav-item .nav-link {
        font-size: 14px;
        line-height: 18px;
        letter-spacing: 0.1px;
        color: #373737;
        text-transform: capitalize;
        font-weight: normal;
      }
      .fixed-logo-height {
          height: 85px !important;
        }
        .header-ten .header-maxi .pro-header-right-options {
          padding-right: 30px !important;
        }
        .header-ten .header-navbar nav .navbar-collapse ul .nav-item .nav-link:hover,
        .header-area .dropdown-item:hover {
          color: #10A200 !important;
        }
        /* login */
        .signup-or-signin .nav-item  .active{
            color: #212529 !important;
            border-bottom: 2px solid #000 !important;
        }
        .signup-or-signin .nav .nav-item{
            margin-bottom: 19px;
            margin-right: 19px;
        }
        .signup-or-signin span{
            font-family: 'Poppins-Regular', 'sans-serif' !important;
            font-style: normal;
            font-weight: 500;
            font-size: 23px;
            line-height: 29px !important;
        }
        .signup-or-signin h4{
            font-family: 'Poppins-Medium', 'sans-serif' !important;
            font-style: normal;
            font-weight: 600;
            font-size: 34px;
            line-height: 29px !important;
            letter-spacing: 0.1rem;
        }
        .signup-or-signin .nav-item  a {
            padding: 0px !important;
            padding-bottom: 5px !important;
            font-size: 18px !important;
            color: #828C9F;
        }
        .signup-signin-modal .modal-header {
            padding-top:9px;
            padding-bottom:0px;
            border: none;
        }
        .signup-or-signin .signin-tab .form-control, .signup-or-signin .signup-tab .form-control,
        .go-to-login .form-control, .go-to-signup .form-control{
            border: none !important;
            border-bottom: 1px solid #ced4da !important;
            font-family: 'Poppins-Medium', 'sans-serif' !important;
            font-style: normal !important;
            font-weight: normal !important;
            letter-spacing: 0.2px !important;
            font-size: 17px !important;
            
        }
        .go-to-login,.go-to-signup .form-control {
            border-color: #000 !important;
        }
        .signup-signin-modal .close:focus{
            outline: none !important;
        }
        .signup-or-signin .signin-tab input::placeholder, .signup-or-signin .signup-tab input::placeholder{
           font-family: 'Poppins-Medium', 'sans-serif' !important;
            font-style: normal !important;
            font-weight: normal !important;
            letter-spacing: 0.2px !important;
           font-size: 17px !important;
        }
        .get-otp-button, .login-button {
            padding: 13px 45px;
            border: none;
            border-radius: 3px;
            text-transform: none;
            background-color: #818C9E;
            color: #eae9e9;
            font-family: 'Poppins-Medium', 'sans-serif' !important;
            font-style: normal !important;
            font-weight: normal !important;
            font-size: 14px !important;
            line-height: 14px !important;
            letter-spacing: 0.2px !important;
            cursor:pointer;
        }
        .login-button {
            padding: 13px 54px !important;
        }
        .signup-signin-modal .close {
            font-family: 'Poppins-Regular', sans-serif !important;
            font-weight: 100;
            font-size: 30px
        }
        .signup-or-signin .nav-item a:hover {
            color:#212529 !important;
        }
        .otp-fields input[type="text"] {
            font-size:24px !important;
            color: #000 !important;
        }
        .arrow-left::before {
            content: "\2190";
            font-family: "revicons";
            line-height: 36px;
            font-size: 22px;
            font-weight: 100;
        }
        .arrow-left {
          cursor:pointer;
        }
        .user-data img{
            width: 27px;
            border-radius: 50%;
            padding: 5px;
            border:1px solid #fff;
            background:#fff !important;
        }
        
    </style>

@include('web.headers.fixedHeader') 
<header id="headerTen" class="header-area header-ten  header-desktop d-none d-lg-block d-xl-block">
  <div class="header-mini bg-top-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12">
          
          <nav id="navbar_0_6" class="navbar navbar-expand-md navbar-dark navbar-0">
            <div class="navbar-lang">
              @if(count($languages) > 1)

              <div class="country-flag">
                <h4>
                  <span>
                    <ul>
                      @foreach($languages as $language)
                      <li><a onclick="myFunction1({{$language->languages_id}})" href="#"><img class="img-fluid" src="{{asset('').$language->image_path}}"></a></li>
                      @endforeach 
                      
                    </ul>
                  </span>
                </h4>  
              </div> 

              @include('web.common.scripts.changeLanguage')
              @endif
              @if(count($currencies) > 1)
                <div class="dropdown">
                  <button class="btn dropdown-toggle" type="button" >
                    {{session('currency_code')}}
                  </button>
                  <div class="dropdown-menu">
                    @foreach($currencies as $currency)
                    <a onclick="myFunction2({{$currency->id}})" class="dropdown-item" href="#">
                      <span>{{$currency->code}}</span>   
                    </a>
                    @endforeach
                  </div>
                </div>
                @include('web.common.scripts.changeCurrency')
              @endif
            </div>                   
            
            <div class="navbar-collapse">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item"> 
                    <a href="#" class="nav-link">
                        <img src="{{asset('images/map-pin.svg')}}">&nbsp; Jayanagar 4th Block Bengaluru</a> </li>
                </ul>
              <ul class="navbar-nav">
                <?php if(auth()->guard('customer')->check()){ ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle user-data" href="#" id="navbarUserDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('images/login-user.svg')}}" class="user-image"></img>
                        Hey {{auth()->guard('customer')->user()->first_name}}&nbsp;!
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarUserDropdown">
                            <a href="{{url('profile')}}" class="dropdown-item">@lang('website.Profile')</a>
                            <a href="{{url('orders')}}" class="dropdown-item">@lang('website.Orders')</a>
                            <a href="#" class="dropdown-item">@lang('website.Invite and earn')</a>
                            <a href="#" class="dropdown-item">@lang('website.FAQ')</a>
                            <a href="#" class="dropdown-item">@lang('website.Help & Support')</a>
                            <a href="{{url('terms&conditions')}}" class="dropdown-item">@lang('website.Terms & Conditions')</a>
                            <a href="#" class="dropdown-item">@lang('website.About Us')</a>
                        </div>
                    </li>
                  <li class="nav-item"> <a href="{{url('logout')}}" class="nav-link">@lang('website.Logout')</a> </li>
                  <?php }else{ ?>
                    <li class="nav-item pr-4"> <a href="{{ URL::to('/login')}}" class="nav-link -before"><img src="{{asset('images/user1.svg')}}"></img>&nbsp; @lang('website.Login/Signup')</a> </li>
                    <li class="nav-item pr-4"> <a href="#" data-toggle="modal" data-target="#login_signup_modal" class="nav-link -before"><img src="{{asset('images/user1.svg')}}"></img>&nbsp; @lang('website.Login/Signup')</a> </li>
                    
                  <?php } ?>
              </ul> 
            </div>   
          </nav>
        </div>
      </div>
    </div> 
  </div>
  <div class="header-maxi bg-header-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-12 col-lg-2">
          <a href="{{ URL::to('/')}}" class="logo" data-toggle="tooltip" data-placement="bottom" title="@lang('website.logo')">
            @if($result['commonContent']['settings']['sitename_logo']=='name')
            <?=stripslashes($result['commonContent']['settings']['website_name'])?>
            @endif
        
            @if($result['commonContent']['settings']['sitename_logo']=='logo')
            <img class="img-fluid fixed-logo-height" src="{{asset('').$result['commonContent']['settings']['website_logo']}}" alt="<?=stripslashes($result['commonContent']['settings']['website_name'])?>">
            @endif
            </a>
        </div>
        
        <div class="col-6 col-sm-6 col-md-3 col-lg-3">
              <form class="form-inline" action="{{ URL::to('/shop')}}" method="get">   
                <div class="search-field-module">   
                    <input type="hidden" name="category" class="category-value" value="">                 
                  <div class="search-field-wrap">
                  <button class="btn search-button swipe-to-top" data-toggle="tooltip" 
                      data-placement="bottom" title="@lang('website.Search Products')">
                      <i class="fa fa-search pl-2"></i></button>
                      <input  class="pl-5" type="search" name="search" placeholder="@lang('website.Search for products')" data-toggle="tooltip" data-placement="bottom" title="@lang('website.Search Products')" value="{{ app('request')->input('search') }}">
                  </div>
                </div>
              </form>
            </div>

            <div class="col-12 col-sm-6 pr-0">
              <div class="header-navbar bg-menu-bar white-bg" >
                <div class="container p-0">
                  <nav id="navbar_header_9" class="navbar navbar-expand-lg white-bg  bg-nav-bar">
              
                    <div class="navbar-collapse d-flex justify-content-end" >
                      <ul class="navbar-nav">
                        {!! $result['commonContent']["menusRecursive"] !!}
                        <li class="nav-item ">
                          <a class="nav-link">
                          </a>
                        </li>     
                      </ul>
                    </div>
                  </nav>
                </div>
              </div>
              
            </div>
          <div class="col-6 col-sm-6 col-md-4 col-lg-1 d-flex-justify-content-start">
           <ul class="pro-header-right-options">
            <li class="hide">
              <a href="{{ URL::to('/wishlist')}}" class="btn" data-toggle="tooltip" data-placement="bottom" title="@lang('website.Wishlist')">
                <i class="far fa-heart"></i>
                <span class="badge badge-secondary total_wishlist">{{$result['commonContent']['total_wishlist']}}</span>
              </a>
            </li>
            <li class="dropdown head-cart-content">
              @include('web.headers.cartButtons.cartButton10')
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div> 
      <div class="header-navbar bg-menu-bar" style="display:none">
          <div class="container">
            <nav id="navbar_header_9" class="navbar navbar-expand-lg  bg-nav-bar">
        
              <div class="navbar-collapse" >
                <ul class="navbar-nav">
                  {!! $result['commonContent']["menusRecursive"] !!}
                  <li class="nav-item ">
                    <a class="nav-link">
                        <span>@lang('website.Call Us Now')</span>
                        <phone dir="ltr">{{$result['commonContent']['setting'][11]->value}}</phone>
                    </a>
                  </li>     
                </ul>
              </div>
            </nav>
          </div>
      </div>
</header>

<!-- modal1 -->
<div class="modal signup-signin-modal" id="login_signup_modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body signup-or-signin">
                <div class="row">
                    <div class="col-lg-2"></div>
                        <div class="col-lg-10">
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="signup_tab" href="#">Signup</a>
                                </li>
                            </ul>
                            <div class="tab-content my-signup-signintab-content" id="mySignupSigninTabContent">
                                <div class="tab-pane show signin-tab active" id="login" role="tabpanel" aria-labelledby="login-tab">
                                    <br>
                                    <span>Hey,</span>
                                    <h4 class="mt-3">Welcome back !</h4>
                                    <br>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-3" style="padding-right: 3px;max-width:20%;">
                                                <input type="text" class="form-control" value="+9l" name="code">
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" placeholder="Enter your Phone Number" name="mobile">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-lg-12 pt-3 pb-4 pl-0">
                                        <br>
                                        <span class="get-otp-button" id="signin_otp_modal">Get OTP</span>
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                </div>
            </div>
        
        </div>
    </div>
</div>

<!-- modal1 otp login -->
<div class="modal signup-signin-modal" id="signInModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body signup-or-signin">
                <div class="row">
                    <div class="col-lg-2 text-right arrow-left" id="login_back">
                    </div>
                    <div class="col-lg-10">
                        <ul class="nav" id="loginTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active login-active" id="go-to-login-tab" data-toggle="tab" href="#go_to_login" role="tab" aria-controls="go_to_login" aria-selected="true">
                                Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="go_to_signup_tab" href="#" aria-selected="false">Signup</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="loginTabContent">
                            <div class="tab-pane fade show active go-to-login" id="go_to_login" role="tabpanel" aria-labelledby="go-to-login-tab">
                                <br>
                                <span>Please enter</span>
                                <h4 class="mt-3">OTP</h4>
                                <br>
                                <form>
                                    <div class="row otp-fields">
                                        <div class="col-lg-2" style="margin-right:-21px">
                                            <input type="text" class="form-control" name="otpNumber1">
                                        </div>
                                        <div class="col-lg-2" style="margin-right:-21px">
                                            <input type="text" class="form-control" name="otpNumber2">
                                        </div>
                                        <div class="col-lg-2" style="margin-right:-21px">
                                            <input type="text" class="form-control" name="otpNumber3">
                                        </div>
                                        <div class="col-lg-2" style="margin-right:-21px">
                                            <input type="text" class="form-control" name="otpNumber4">
                                        </div>
                                        <div class="col-lg-12">
                                            <small id="emailHelp" class="form-text text-muted mt-0">Didn’t receive OTP ?
                                                &nbsp;<span style="color:#000;cursor:pointer;font-size:13px;"> Resend OTP</span>
                                            </small>
                                        </div>
                                        
                                        <div class="col-lg-12 pt-3 pb-4">
                                        <br>
                                            <span class="login-button" style="background-color:#2DAE1F">login</span>
                                        </div>
                                    </div>
                                </form>
                                <br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Modal signUpModal -->
    <div class="modal signup-signin-modal" id="signUpModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            <!-- Modal body -->
                <div class="modal-body signup-or-signin">
                    <div class="row">
                        <div class="col-lg-2 text-right arrow-left" id="signup_back"></div>
                            <div class="col-lg-10">
                                <ul class="nav" id="loginTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link login-active" id="go_to_login_tab" href="#" aria-selected="true">
                                        Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" id="go-to-signup-tab2" data-toggle="tab" href="#go_to_signup" role="tab" aria-controls="go_to_signup" aria-selected="false">Signup</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="loginTabContent2">
                                    <div class="tab-pane fade show active go-to-signup" id="go_to_signup" role="tabpanel" aria-labelledby="go-to-signup-tab2">
                                        <br>
                                        <span>Please enter</span>
                                        <h4 class="mt-3">OTP</h4>
                                        <br>
                                        <form>
                                            <div class="row otp-fields">
                                                <div class="col-lg-2" style="margin-right:-21px">
                                                    <input type="text" class="form-control" name="otpNumber1">
                                                </div>
                                                <div class="col-lg-2" style="margin-right:-21px">
                                                    <input type="text" class="form-control" name="otpNumber2">
                                                </div>
                                                <div class="col-lg-2" style="margin-right:-21px">
                                                    <input type="text" class="form-control" name="otpNumber3">
                                                </div>
                                                <div class="col-lg-2" style="margin-right:-21px">
                                                    <input type="text" class="form-control" name="otpNumber4">
                                                </div>
                                                <div class="col-lg-12">
                                                    <small id="emailHelp" class="form-text text-muted mt-0">Didn’t receive OTP ?
                                                        &nbsp;<span style="color:#000;cursor:pointer;font-size:13px;"> Resend OTP</span>
                                                    </small>
                                                </div>
                                                
                                                <div class="col-lg-12 pt-3 pb-4">
                                                <br>
                                                    <span class="login-button" style="background-color:#2DAE1F">login</span>
                                                </div>
                                            </div>
                                        </form>
                                        <br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- The Modal otp -->
  <div class="modal signup-signin-modal" id="signup_modal">
    <div class="modal-dialog">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body signup-or-signin">
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-10">
                        <ul class="nav " role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" href="#" id="login_tab_shift">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#home">Signup</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div id="home" class="container tab-pane signup-tab active"><br>
                                <span>Hey User! Welcome to</span>
                                <h4 class="mt-3">MKF Mart</h4>
                                <br>
                                <form class="mt-3">
                                    <div class="row">
                                        <div class="col-lg-9 pb-3">
                                            <input type="text" class="form-control" name="email" placeholder="Enter your email address">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3" style="padding-right:3px; max-width:20%; ">
                                            <input type="text" class="form-control" value="+9l" name="code">
                                        </div>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" placeholder="Enter your Phone Number" name="mobile">
                                        </div>
                                    </div>
                                </form>
                                <div class="col-lg-12 pt-3 pb-4 pl-0">
                                    <br>
                                    <span class="get-otp-button" id="signup_otp_button">Get OTP</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

<script>
    //set button id on click to hide first modal
    $("#signup_tab").on( "click", function() {
        $('#login_signup_modal').modal('hide');  
    });
    //trigger next modal
    $("#signup_tab").on( "click", function() {
        $('#signup_modal').modal('show');
    });

    //set button id on click to hide first modal
    $("#login_back").on( "click", function() {
        $('#signInModal').modal('hide');  
    });
    //trigger next modal
    $("#login_back").on( "click", function() {
        $('#login_signup_modal').modal('show');
    });


     //set button id on click to hide first modal
    $("#login_tab_shift").on( "click", function() {
        $('#signup_modal').modal('hide');  
    });
    //trigger next modal
    $("#login_tab_shift").on( "click", function() {
        $('#login_signup_modal').modal('show');
    });

     //set button id on click to hide first modal
    $("#signup_otp_button").on( "click", function() {
        $('#signup_modal').modal('hide');  
    });
    //trigger next modal
    $("#signup_otp_button").on( "click", function() {
        $('#signUpModal').modal('show');
    });

     //set button id on click to hide first modal
     $("#signin_otp_modal").on( "click", function() {
        $('#login_signup_modal').modal('hide');  
    });
    //trigger next modal
    $("#signin_otp_modal").on( "click", function() {
        $('#signInModal').modal('show');
    });

     //set button id on click to hide first modal
     $("#signup_back").on( "click", function() {
        $('#signUpModal').modal('hide');  
    });
    $("#signup_back").on( "click", function() {
        $('#signup_modal').modal('show');
    });

    //set button id on click to hide first modal
    $("#go_to_login_tab").on( "click", function() {
        $('#signUpModal').modal('hide');  
    });
    $("#go_to_login_tab").on( "click", function() {
        $('#signInModal').modal('show');
    });

    //set button id on click to hide first modal
    $("#go_to_signup_tab").on( "click", function() {
        $('#signInModal').modal('hide');  
    });
    $("#go_to_signup_tab").on( "click", function() {
        $('#signUpModal').modal('show');
    });


</script>