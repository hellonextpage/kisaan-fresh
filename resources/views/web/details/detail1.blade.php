<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<style type="text/css">
     nav[aria-label=breadcrumb] .breadcrumb .active::before {
        /* content: ">" !important; */
        content: "\f105" !important;
        /* font-family: "Font Awesome 5 Free";
        font-weight: 900;
        margin-top: 2px;
        padding-right: 5px; */
    }
    nav[aria-label=breadcrumb] .breadcrumb .breadcrumb-item a {
        color: #6c757d !important;
        font-weight: normal;
    }
    .breadcrumb-item.active {
        color: #494d50;
    }
    nav[aria-label=breadcrumb] {
        background-color: #ECEFF2 !important;
    }
    .product-page .pro-title {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
      font-style: normal !important;
      font-weight: 500 !important;
      font-size: 26px !important;
      line-height: 32px !important;
      letter-spacing: 0.2px !important;
      color: #373737;
    }
    .speed-delivery {
      font-family: 'Poppins-Medium', 'sans-serif' !important;
      font-style: normal;
      font-weight: normal;
      font-size: 11px;
      line-height: 14px;
      letter-spacing: 0.2px;
      border-radius: 27px;
      padding: 3px 10px;
      color: #86BA7D !important;
      background: #E7FAE7 !important;
      border: 1px solid #F3FFE8;
    }
    .details-old-price {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-style: normal;
        font-weight: normal;
        text-decoration-line: line-through;
        color: #828C9F;
        font-size: 18px !important;
    }
    .details-product-price {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-style: normal !important;
        font-weight: 500 !important;
        font-size: 25px !important;
        line-height: 24px !important;
        letter-spacing: 0.5px !important;
        color: #373737 !important;
        padding-top:13px;
    }
    .product-discount {
        background: #f5a6a6 !important;
        border-radius: 46.3017px !important;
        padding: 5px 10px;
        font-family: 'Poppins', sans-serif !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 11.229px !important;
        line-height: 23px !important;
        letter-spacing: 0.330726px !important;
        color: #373737 !important;
    }
    .product-details-add-button .product_add_button {
        font-size: 16px !important;
        padding: 15px 65px !important;
        border-radius: 25px !important;
    }
    .product-details-page {
        background: #fff !important;
        padding-top: 11px !important;
    }
    .product-details-discription .tab-content .tab-pane{
        border: none !important;
    }
    .product-details-discription .nav-item  .nav-link {
        color: #A2A7B2 !important;
        font-size: 18px !important;
    }
    .product-details-discription .nav-item  .active{
        color: #373737 !important;
        border-bottom: 1px solid gray !important;
    }
    .title {
        color: #373737 !important;
        font-family: 'Poppins-Medium', sans-serif !important;
        font-weight: normal !important;
        font-size: 20px !important;
        line-height: 24px !important;
        letter-spacing: 0.1px !important;
    }
    .product-content-info {
        font-family: 'Poppins-Medium', sans-serif !important;
        font-weight: normal !important;
        font-size: 18px !important;
        letter-spacing: 0.1px !important;
        color: #847c7c !important;
    }
    .slider-for-vertical .slick-list .slick-track .slick-slide img {
        width: 65% !important;
        max-height: 350px;
    }
    /* .slick-track {
        width: 44px !important;
    } */
    .slick-current {
        border-color: gray !important;
    }
    .slider-nav__item {
        width: 77px !important;
    }
    .slider-for-vertical .slick-list {
        height: auto !important;
    }
    .swiper-button-next, .swiper-button-prev {
      color: #2DAE1F !important;
    }
    .swiper-button-next::after, .swiper-button-prev::after {
        font-size: 32px !important;
    }
    .swiper-button-next {
        right: 50px !important;
    }
    .swiper-button-prev {
        left: 50px !important;
    }
    .swiper-slide .card {
        border-radius: 11px;
        max-height: 371px;
        padding-bottom: 23px;
    }
    .pro-heading-title h2 {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        text-transform: capitalize !important;
        text-align: left !important;
        font-style: normal !important;
        font-weight: 500 !important;
        font-size: 26px !important;
        line-height: 32px !important;
        letter-spacing: 0.2px !important;
        color: #373737 !important;
    }
    .swiper-slide .card .card-body .card-text .btn {
        color: #f1ebeb !important;
    }
</style>
<div class="container-fuild">
  <nav aria-label="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>

              @if(!empty($result['category_name']) and !empty($result['sub_category_name']))
                <li class="breadcrumb-item active"><a href="{{ URL::to('/shop?category='.$result['category_slug'])}}">{{$result['category_name']}}</a></li>
                <li class="breadcrumb-item active"><a href="{{ URL::to('/shop?category='.$result['sub_category_slug'])}}">{{$result['sub_category_name']}}</a></li>
              @elseif(!empty($result['category_name']) and empty($result['sub_category_name']))
                <li class="breadcrumb-item active"><a href="{{ URL::to('/shop?category='.$result['category_slug'])}}">{{$result['category_name']}}</a></li>
              @endif
              @if($result['detail']['product_data'])
              <li class="breadcrumb-item active">{{$result['detail']['product_data'][0]->products_name}}</li>
              @endif
          </ol>
      </div>
    </nav>
</div> 

<section class="pro-content product-details-page">
<!-- @if($result['detail']['product_data'])
  <div class="container">
    <div class="page-heading-title">
        <h2> {{$result['detail']['product_data'][0]->products_name}} 
        </h2>         
    </div>
</div> -->

<section class="product-page  pt-4 container">
    <div class="row">
        <div class="col-12 col-lg-7 pl-0">
            <div class="slider-wrapper pd-2">
                  <div class="slider-for-vertical border p-3" style="max-height:350px;">
                      @if(!empty($result['detail']['product_data'][0]->products_video_link))
                      <a class="slider-for__item ex1 fancybox-button iframe">
                      {!! $result['detail']['product_data'][0]->products_video_link !!}                 
                      </a>
                      @endif

                      <a class="slider-for__item ex1 fancybox-button" href="{{asset('').$result['detail']['product_data'][0]->default_images }}" data-fancybox-group="fancybox-button">
                      <img src="{{asset('').$result['detail']['product_data'][0]->default_images }}" alt="Zoom Image" />
                      </a>
                  
                      @foreach( $result['detail']['product_data'][0]->images as $key=>$images )
                      @if($images->image_type == 'LARGE')

                      <a class="slider-for__item ex1 fancybox-button" href="{{asset('').$images->image_path }}" data-fancybox-group="fancybox-button" >
                          <img src="{{asset('').$images->image_path }}" alt="Zoom Image" />
                      </a>
                      
                      @elseif($images->image_type == 'ACTUAL')
                      <a class="slider-for__item ex1 fancybox-button" href="{{asset('').$images->image_path }}" data-fancybox-group="fancybox-button">
                          <img src="{{asset('').$images->image_path }}" alt="Zoom Image" />
                      </a>
                      @endif
                      @endforeach
                  </div>
              
                  <div class="slider-nav-vertical">
                      @if(!empty($result['detail']['product_data'][0]->products_video_link))
                      <div class="slider-nav__item p-2 mb-2 border">
                      <img src="{{asset('web/images/miscellaneous/video-thumbnail.jpg')}}" alt="Zoom Image"/>
                      </div>
                      @endif
                      <div class="slider-nav__item p-2 mb-2 border">
                      <img src="{{asset('').$result['detail']['product_data'][0]->default_thumb }}" alt="Zoom Image"/>
                      </div>
              
                      @foreach( $result['detail']['product_data'][0]->images as $key=>$images )
                      @if($images->image_type == 'THUMBNAIL')
                          <div class="slider-nav__item p-2 mb-2 border">
                          <img src="{{asset('').$images->image_path }}" alt="Zoom Image"/>
                          </div>
                      @elseif($images->image_type == 'MEDIUM')
                      <div class="slider-nav__item p-2 mb-2 border">
                          <img src="{{asset('').$images->image_path }}" alt="Zoom Image"/>
                      </div>
                      @elseif($images->image_type == 'LARGE')
                      <div class="slider-nav__item p-2 mb-2 border">
                          <img src="{{asset('').$images->image_path }}" alt="Zoom Image"/>
                      </div>
                      @elseif($images->image_type == 'ACTUAL')
                      <div class="slider-nav__item p-2 mb-2 border">
                          <img src="{{asset('').$images->image_path }}" alt="Zoom Image"/>
                      </div>
                      @endif
                      @endforeach
                  
                  </div>
              </div>
        </div>
        <div class="col-12 col-lg-5 d-none">
          <div class="general-product" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="container">
                <div class="product-m-carousel-js">
                  <div class="col-12 col-md-12 col-lg-6">
                    <div class="product">
                      <article>
                        <img src="{{asset('').$result['detail']['product_data'][0]->default_images }}" class="img-fluid" alt="blogImage">
                          <div class="over"></div>
                      </article>
                    </div>
                  </div>

                  @foreach( $result['detail']['product_data'][0]->images as $key=>$images )
                    @if($images->image_type == 'LARGE')

                    <div class="col-12 col-md-12 col-lg-6">
                      <div class="product">
                        <article>
                          <img src="{{asset('').$images->image_path }}" class="img-fluid" alt="blogImage">
                            <div class="over"></div>
                        </article>
                      </div>
                    </div>
                    
                    @elseif($images->image_type == 'ACTUAL')
                    <div class="col-12 col-md-12 col-lg-6">
                      <div class="product">
                        <article>
                          <img src="{{asset('').$images->image_path }}" class="img-fluid" alt="blogImage">
                            <div class="over"></div>
                        </article>
                      </div>
                    </div>
                    @endif
                  @endforeach

                  
                  </div>  
            </div>
          </div>  
        </div>
        <div class="col-12 col-lg-5">
            <h5 class="pro-title">{{$result['detail']['product_data'][0]->products_name}}</h5>
                      <!-- add -->
            <span class="badge badge-success speed-delivery"><i class="fa fa-shipping-fast"></i> Speed Delivery Available</span>
            <div class="col-lg-6 pl-0 pt-3">
                <form>
                    <div class="form-group product-varient">
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" style="border-radius:5px">
                        <option value="111 g">111 g</option>
                        <option value="22 g">22 g</option>
                        <option value="30 g">30 g</option>
                        <option value="410 g">410 g</option>
                        <option value="100 g">100 g</option>
                    </select>
                    </div>
                </form>
            </div>
            <div class="pt-2">
                <span class="details-product-price">&#x20B9;180.00</span> <span class="details-old-price">&#x20B9;120.00</span>
            </div>
            <div class="pt-1">
                <span class="product-discount">20% OFF</span>
            </div>

            <div class="product-details-add-button pt-3">
            <button class="btn product_add_button">Add</button>
            </div>
        
        </div>

        </div>
    </div>
</section>

<section class="mt-5">
    <div class="pb-5 product-details-discription container">
        <ul class="nav justify-content-center border-bottom" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">More Info</a>
            </li>
        </ul>
        <div class="tab-content pt-3" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p class="product-content-info">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque amet fermentum arcu the Ride Lorem ipsum dolor sit
                amet, consectetur adipiscing elit. Pellentesque amet fermentum arcu the Ride entesque amet fermentum arcu the Ride
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque amet fermentum arcu the Ride 
                </p>
                
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="border-bottom">
                    <p class="title pt-2">Nutrition Content</p>
                    <p class="product-content-info">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque amet fermentum arcu the Ride Lorem ipsum dolor sit
                    amet, consectetur adipiscing elit. Pellentesque amet fermentum arcu the Ride entesque amet fermentum arcu the Ride
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque amet fermentum arcu the Ride 

                    </p>
                </div>
                <div class="border-bottom">
                    <p class="title pt-2">Product Shelf Life</p>
                    <p class="product-content-info">
                    Lorem ipsum dolor sit amet, consectetur 
                    </p>
                </div>
                <div class="border-bottom">
                    <p class="title pt-2">Uniqueness</p>
                    <p class="product-content-info">-</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 pro-heading-title">
                <h2> @lang('website.Products you may like')</h2>
            </div>
        </div>
    </div>
    <div class="swiper-container">
        <div class=" container">
        <!-- Additional required wrapper -->
        
        
            <div class="swiper-container">

                <div class="swiper-wrapper">
                <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="{{asset('images/raspberry-png-25905 1.png')}}" width="100%"/>
                                <h5 class="card-title text-left product-name">boppai</h5>
                                <div class="card-text text-left pb-3">
                                    <span class="product-price">&#x20B9;80.00</span> <span class="old-price">&#x20B9;20.00</span>
                                </div>
                                <div class="card-text pb-2">
                                    <form>
                                        <div class="form-group product-varient">
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option value="111 g">111 g</option>
                                            <option value="22 g">22 g</option>
                                            <option value="30 g">30 g</option>
                                            <option value="410 g">410 g</option>
                                            <option value="100 g">100 g</option>
                                        </select>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-text text-center" id="recommended_add_to_cart" onclick="recommandedAddToCart()">
                                    <button class="btn product_add_button">Add</button>
                                </div>
                                <div class="d-none" id="recommended_quantity">
                                    <div class="d-flex justify-content-center bd-highlight mb-3 " >
                                        <div class="p-2 bd-highlight" id="quantity_dicrement" onclick="recommandedQuantityDicrement()" style="cursor:pointer">
                                            <i class="fa fa-minus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                        <div class="p-2 pt-3 bd-highlight quantity-count" id="recommended_quantity_count">
                                            0
                                        </div>
                                        <div class="p-2 bd-highlight" id="quantity_increment" onclick="recommandedQuantityIncrement()" style="cursor:pointer">
                                            <i class="fa fa-plus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="{{asset('images/raspberry-png-25905 1.png')}}"/>
                                <h5 class="card-title text-left product-name">boppai</h5>
                                <div class="card-text text-left pb-3">
                                    <span class="product-price">&#x20B9;80.00</span> <span class="old-price">&#x20B9;20.00</span>
                                </div>
                                <div class="card-text pb-2">
                                    <form>
                                        <div class="form-group product-varient">
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option value="111 g">111 g</option>
                                            <option value="22 g">22 g</option>
                                            <option value="30 g">30 g</option>
                                            <option value="410 g">410 g</option>
                                            <option value="100 g">100 g</option>
                                        </select>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-text text-center" id="recommended_add_to_cart" onclick="recommandedAddToCart()">
                                    <button class="btn product_add_button">Add</button>
                                </div>
                                <div class="d-none" id="recommended_quantity">
                                    <div class="d-flex justify-content-center bd-highlight mb-3 " >
                                        <div class="p-2 bd-highlight" id="quantity_dicrement" onclick="recommandedQuantityDicrement()" style="cursor:pointer">
                                            <i class="fa fa-minus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                        <div class="p-2 pt-3 bd-highlight quantity-count" id="recommended_quantity_count">
                                            0
                                        </div>
                                        <div class="p-2 bd-highlight" id="quantity_increment" onclick="recommandedQuantityIncrement()" style="cursor:pointer">
                                            <i class="fa fa-plus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="{{asset('images/raspberry-png-25905 1.png')}}"/>
                                <h5 class="card-title text-left product-name">boppai</h5>
                                <div class="card-text text-left pb-3">
                                    <span class="product-price">&#x20B9;80.00</span> <span class="old-price">&#x20B9;20.00</span>
                                </div>
                                <div class="card-text pb-2">
                                    <form>
                                        <div class="form-group product-varient">
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option value="111 g">111 g</option>
                                            <option value="22 g">22 g</option>
                                            <option value="30 g">30 g</option>
                                            <option value="410 g">410 g</option>
                                            <option value="100 g">100 g</option>
                                        </select>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-text text-center" id="recommended_add_to_cart" onclick="recommandedAddToCart()">
                                    <button class="btn product_add_button">Add</button>
                                </div>
                                <div class="d-none" id="recommended_quantity">
                                    <div class="d-flex justify-content-center bd-highlight mb-3 " >
                                        <div class="p-2 bd-highlight" id="quantity_dicrement" onclick="recommandedQuantityDicrement()" style="cursor:pointer">
                                            <i class="fa fa-minus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                        <div class="p-2 pt-3 bd-highlight quantity-count" id="recommended_quantity_count">
                                            0
                                        </div>
                                        <div class="p-2 bd-highlight" id="quantity_increment" onclick="recommandedQuantityIncrement()" style="cursor:pointer">
                                            <i class="fa fa-plus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="{{asset('images/raspberry-png-25905 1.png')}}"/>
                                <h5 class="card-title text-left product-name">boppai</h5>
                                <div class="card-text text-left pb-3">
                                    <span class="product-price">&#x20B9;80.00</span> <span class="old-price">&#x20B9;20.00</span>
                                </div>
                                <div class="card-text pb-2">
                                    <form>
                                        <div class="form-group product-varient">
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option value="111 g">111 g</option>
                                            <option value="22 g">22 g</option>
                                            <option value="30 g">30 g</option>
                                            <option value="410 g">410 g</option>
                                            <option value="100 g">100 g</option>
                                        </select>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-text text-center" id="recommended_add_to_cart" onclick="recommandedAddToCart()">
                                    <button class="btn product_add_button">Add</button>
                                </div>
                                <div class="d-none" id="recommended_quantity">
                                    <div class="d-flex justify-content-center bd-highlight mb-3 " >
                                        <div class="p-2 bd-highlight" id="quantity_dicrement" onclick="recommandedQuantityDicrement()" style="cursor:pointer">
                                            <i class="fa fa-minus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                        <div class="p-2 pt-3 bd-highlight quantity-count" id="recommended_quantity_count">
                                            0
                                        </div>
                                        <div class="p-2 bd-highlight" id="quantity_increment" onclick="recommandedQuantityIncrement()" style="cursor:pointer">
                                            <i class="fa fa-plus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="{{asset('images/raspberry-png-25905 1.png')}}"/>
                                <h5 class="card-title text-left product-name">boppai</h5>
                                <div class="card-text text-left pb-3">
                                    <span class="product-price">&#x20B9;80.00</span> <span class="old-price">&#x20B9;20.00</span>
                                </div>
                                <div class="card-text pb-2">
                                    <form>
                                        <div class="form-group product-varient">
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option value="111 g">111 g</option>
                                            <option value="22 g">22 g</option>
                                            <option value="30 g">30 g</option>
                                            <option value="410 g">410 g</option>
                                            <option value="100 g">100 g</option>
                                        </select>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-text text-center" id="recommended_add_to_cart" onclick="recommandedAddToCart()">
                                    <button class="btn product_add_button">Add</button>
                                </div>
                                <div class="d-none" id="recommended_quantity">
                                    <div class="d-flex justify-content-center bd-highlight mb-3 " >
                                        <div class="p-2 bd-highlight" id="quantity_dicrement" onclick="recommandedQuantityDicrement()" style="cursor:pointer">
                                            <i class="fa fa-minus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                        <div class="p-2 pt-3 bd-highlight quantity-count" id="recommended_quantity_count">
                                            0
                                        </div>
                                        <div class="p-2 bd-highlight" id="quantity_increment" onclick="recommandedQuantityIncrement()" style="cursor:pointer">
                                            <i class="fa fa-plus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="{{asset('images/raspberry-png-25905 1.png')}}"/>
                                <h5 class="card-title text-left product-name">boppai</h5>
                                <div class="card-text text-left pb-3">
                                    <span class="product-price">&#x20B9;80.00</span> <span class="old-price">&#x20B9;20.00</span>
                                </div>
                                <div class="card-text pb-2">
                                    <form>
                                        <div class="form-group product-varient">
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option value="111 g">111 g</option>
                                            <option value="22 g">22 g</option>
                                            <option value="30 g">30 g</option>
                                            <option value="410 g">410 g</option>
                                            <option value="100 g">100 g</option>
                                        </select>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-text text-center" id="recommended_add_to_cart" onclick="recommandedAddToCart()">
                                    <button class="btn product_add_button">Add</button>
                                </div>
                                <div class="d-none" id="recommended_quantity">
                                    <div class="d-flex justify-content-center bd-highlight mb-3 " >
                                        <div class="p-2 bd-highlight" id="quantity_dicrement" onclick="recommandedQuantityDicrement()" style="cursor:pointer">
                                            <i class="fa fa-minus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                        <div class="p-2 pt-3 bd-highlight quantity-count" id="recommended_quantity_count">
                                            0
                                        </div>
                                        <div class="p-2 bd-highlight" id="quantity_increment" onclick="recommandedQuantityIncrement()" style="cursor:pointer">
                                            <i class="fa fa-plus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card text-center">
                            <div class="card-body">
                                <img src="{{asset('images/raspberry-png-25905 1.png')}}"/>
                                <h5 class="card-title text-left product-name">boppai</h5>
                                <div class="card-text text-left pb-3">
                                    <span class="product-price">&#x20B9;80.00</span> <span class="old-price">&#x20B9;20.00</span>
                                </div>
                                <div class="card-text pb-2">
                                    <form>
                                        <div class="form-group product-varient">
                                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                            <option value="111 g">111 g</option>
                                            <option value="22 g">22 g</option>
                                            <option value="30 g">30 g</option>
                                            <option value="410 g">410 g</option>
                                            <option value="100 g">100 g</option>
                                        </select>
                                        </div>
                                    </form>
                                </div>

                                <div class="card-text text-center" id="recommended_add_to_cart" onclick="recommandedAddToCart()">
                                    <button class="btn product_add_button">Add</button>
                                </div>
                                <div class="d-none" id="recommended_quantity">
                                    <div class="d-flex justify-content-center bd-highlight mb-3 " >
                                        <div class="p-2 bd-highlight" id="quantity_dicrement" onclick="recommandedQuantityDicrement()" style="cursor:pointer">
                                            <i class="fa fa-minus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                        <div class="p-2 pt-3 bd-highlight quantity-count" id="recommended_quantity_count">
                                            0
                                        </div>
                                        <div class="p-2 bd-highlight" id="quantity_increment" onclick="recommandedQuantityIncrement()" style="cursor:pointer">
                                            <i class="fa fa-plus rounded-circle quantity-icons" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>

        
        <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

        </div>
    </div>
</section>

</section>


<!-- <section class="product-content pro-content">
  <div class="container">
  
</div>


  </section> -->
@else
<div class="col-12">
<div class="container">
<h3>@lang('website.No Record Found!')</h3>
</div>
</div>
@endif

</section>

<script>
    let recommended_quantity_count = document.getElementById('recommended_quantity_count').innerText;
    recommended_quantity_count = 0;

    function recommandedQuantityDicrement() {
        let count = document.getElementById('recommended_quantity_count').innerText;
        if (parseInt(count) <= 1) {
            document.getElementById('recommended_add_to_cart').style.display = "block";
            document.getElementById('recommended_quantity').className = "d-none";
            document.getElementById('recommended_quantity_count').innerText = 0;
            return;
        } else {
            document.getElementById('recommended_quantity').className = "";
            document.getElementById('recommended_quantity_count').innerText = parseInt(count) -  1;
        }
    }

    function recommandedQuantityIncrement() {
        document.getElementById('recommended_add_to_cart').style.display = "none";
        document.getElementById('recommended_quantity').className = "";
        let count = document.getElementById('recommended_quantity_count').innerText;
        document.getElementById('recommended_quantity_count').innerText = parseInt(count) +  1;
    }

    function recommandedAddToCart() {
        document.getElementById('recommended_add_to_cart').style.display = "none";
        document.getElementById('recommended_quantity').className = "";
        document.getElementById('recommended_quantity_count').innerText =  1;
    }
</script>



<script>

    jQuery(document).ready(function(e) {
    
      @if(!empty($result['detail']['product_data'][0]->flash_start_date))
         @if( date("Y-m-d",$result['detail']['product_data'][0]->server_time) >= date("Y-m-d",$result['detail']['product_data'][0]->flash_start_date))
          var product_div_{{$result['detail']['product_data'][0]->products_id}} = 'product_div_{{$result['detail']['product_data'][0]->products_id}}';
        var  counter_id_{{$result['detail']['product_data'][0]->products_id}} = 'counter_{{$result['detail']['product_data'][0]->products_id}}';
        var inputTime_{{$result['detail']['product_data'][0]->products_id}} = "{{date('M d, Y H:i:s' ,$result['detail']['product_data'][0]->flash_expires_date)}}";
    
        // Set the date we're counting down to
        var countDownDate_{{$result['detail']['product_data'][0]->products_id}} = new Date(inputTime_{{$result['detail']['product_data'][0]->products_id}}).getTime();
    
        // Update the count down every 1 second
        var x_{{$result['detail']['product_data'][0]->products_id}} = setInterval(function() {
    
          // Get todays date and time
          var now = new Date().getTime();
    
          // Find the distance between now and the count down date
          var distance_{{$result['detail']['product_data'][0]->products_id}} = countDownDate_{{$result['detail']['product_data'][0]->products_id}} - now;
    
          // Time calculations for days, hours, minutes and seconds
          var days_{{$result['detail']['product_data'][0]->products_id}} = Math.floor(distance_{{$result['detail']['product_data'][0]->products_id}} / (1000 * 60 * 60 * 24));
          var hours_{{$result['detail']['product_data'][0]->products_id}} = Math.floor((distance_{{$result['detail']['product_data'][0]->products_id}} % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes_{{$result['detail']['product_data'][0]->products_id}} = Math.floor((distance_{{$result['detail']['product_data'][0]->products_id}} % (1000 * 60 * 60)) / (1000 * 60));
          var seconds_{{$result['detail']['product_data'][0]->products_id}} = Math.floor((distance_{{$result['detail']['product_data'][0]->products_id}} % (1000 * 60)) / 1000);
          var days_text = "@lang('website.Days')";
          // Display the result in the element with id="demo"
          document.getElementById(counter_id_{{$result['detail']['product_data'][0]->products_id}}).innerHTML = "<span class='days'>"+days_{{$result['detail']['product_data'][0]->products_id}} + "<small>@lang('website.Days')</small></span> <span class='hours'>" + hours_{{$result['detail']['product_data'][0]->products_id}} + "<small>@lang('website.Hours')</small></span> <span class='mintues'> "
          + minutes_{{$result['detail']['product_data'][0]->products_id}} + "<small>@lang('website.Minutes')</small></span> <span class='seconds'>" + seconds_{{$result['detail']['product_data'][0]->products_id}} + "<small>@lang('website.Seconds')</small></span> ";
    
          // If the count down is finished, write some text
          if (distance_{{$result['detail']['product_data'][0]->products_id}} < 0) {
          clearInterval(x_{{$result['detail']['product_data'][0]->products_id}});
          //document.getElementById(counter_id_{{$result['detail']['product_data'][0]->products_id}}).innerHTML = "EXPIRED";
          document.getElementById('product_div_{{$result['detail']['product_data'][0]->products_id}}').remove();
          }
        }, 1000);
           @endif
       @endif
    
  
    });
</script>

<script>
     var swiper = new Swiper('.swiper-container', {
      slidesPerView: 5,
      spaceBetween: 10,
      direction: getDirection(),
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });

    function getDirection() {
      var windowWidth = window.innerWidth;
      var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

      return direction;
    }
</script>