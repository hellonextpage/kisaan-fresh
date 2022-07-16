<!-- Products content -->

<link rel="stylesheet" href="{{asset('web/css/swiper/swiper.css')}}">
<link rel="stylesheet" href="{{asset('web/css/swiper/swiper.min.css')}}">

<script src="{{asset('web/js/swiper/swiper.js')}}"></script>
<script src="{{asset('web/js/swiper/swiper.min.js')}}"></script>

<style>
    .swiper-button-next, .swiper-button-prev {
      color: #2DAE1F !important;
    }
    .swiper-button-next {
        right: 50px !important;
    }
    .swiper-button-prev {
        left: 50px !important;
    }
    .swiper-slide .card {
        border-radius:11px;
        max-height: 438px;
        padding-bottom: 23px;
    }
    .view-all-products {
        color: #2DAE1F !important;
    }
    .swiper-button-next::after, .swiper-button-prev::after {
        font-size: 32px !important;
    }
    .swiper-slide .card .card-body .card-text .btn {
        color: #f1ebeb !important;
    }
    .product-name {
        min-height:60px !important;
    }
    /* .newest-products {
        background:#FFF !important;
    } */
</style>
@if($result['products']['success']==1)
<section class="newest-products pt-5"> 
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 pro-heading-title">
                <h2> @lang('website.New Arrival')</h2>
            </div>
            <div class="col-12 col-lg-6 text-right">
                <a href="#" class="view-all-products">View All</a>
            </div>
        </div>
    </div>
        <!-- Slider main container -->
        <div class="swiper-container">
            <div class="container">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($result['products']['product_data'] as $key=>$products)
                            <div class="swiper-slide">

                                <div class="card text-center">
                                    <div class="card-body">
                                        <a href="{{ URL::to('/product-detail/'.$products->products_slug)}}">
                                            <img src="{{asset('images/raspberry-png-25905 1.png')}}" class="img-fluid" alt="{{$products->products_name}}" />
                                        </a>
                                        
                                        <h5 class="card-title text-left product-name">{{$products->products_name}}</h5>
                                        <div class="card-text text-left pb-3">
                                            <span class="product-price">
                                                @if(!empty($products->discount_price))
                                                    {{Session::get('symbol_left')}}&nbsp;
                                                    {{$products->products_price * session('currency_value') - $products->discount_price * session('currency_value')+0}}&nbsp;
                                                    {{Session::get('symbol_right')}}
                                                    <span class="old-price">
                                                        {{Session::get('symbol_left')}}
                                                        @if($products->products_price * session('currency_value')+0 > 0)
                                                            {{$products->products_price * session('currency_value')+0}}&nbsp;
                                                        @endif
                                                        {{Session::get('symbol_right')}}
                                                    </span>
                                                @else
                                                    {{Session::get('symbol_left')}}&nbsp;
                                                    @if($products->products_price * session('currency_value')+0 > 0)
                                                        {{$products->products_price * session('currency_value')+0}}&nbsp;
                                                    @endif
                                                    {{Session::get('symbol_right')}}
                                                @endif
                                            </span>
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

                                        <div class="card-text text-center" id="add_to_cart" onclick="addToCart()">
                                            <button class="btn product_add_button" products_id="{{$products->products_id}}">Add</button>
                                        </div>
                                        <div class="d-none" id="quantity">
                                            <div class="d-flex justify-content-center bd-highlight mb-3 " >
                                                <div class="p-2 bd-highlight" id="quantity_dicrement" onclick="quantityDicrement()" style="cursor:pointer">
                                                    <i class="fa fa-minus rounded-circle quantity-icons" aria-hidden="true"></i>
                                                </div>
                                                <div class="p-2 pt-3 bd-highlight quantity-count" id="quantity_count">
                                                    0
                                                </div>
                                                <div class="p-2 bd-highlight" id="quantity_increment" onclick="quantityIncrement()" style="cursor:pointer">
                                                    <i class="fa fa-plus rounded-circle quantity-icons" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    <!-- </div> -->
    
</section>
@endif



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

<script>
    let quantity_count = document.getElementById('quantity_count').innerText;
    quantity_count = 0;
    function quantityDicrement() {
        let count = document.getElementById('quantity_count').innerText;
        if (parseInt(count) <= 1) {
            document.getElementById('add_to_cart').style.display = "block";
            document.getElementById('quantity').className = "d-none";
            document.getElementById('quantity_count').innerText = 0;
            return;
        } else {
            document.getElementById('quantity').className = "";
            document.getElementById('quantity_count').innerText = parseInt(count) -  1;
        }
    }
    function quantityIncrement() {
        document.getElementById('add_to_cart').style.display = "none";
        document.getElementById('quantity').className = "";
        let count = document.getElementById('quantity_count').innerText;
        document.getElementById('quantity_count').innerText = parseInt(count) +  1;
    }
    function addToCart() {
        document.getElementById('add_to_cart').style.display = "none";
        document.getElementById('quantity').className = "";
        document.getElementById('quantity_count').innerText =  1;
    }
</script>