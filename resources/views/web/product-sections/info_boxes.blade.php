<link rel="stylesheet" href="{{asset('web/css/swiper/swiper.css')}}">
<link rel="stylesheet" href="{{asset('web/css/swiper/swiper.min.css')}}">

<script src="{{asset('web/js/swiper/swiper.js')}}"></script>
<script src="{{asset('web/js/swiper/swiper.min.js')}}"></script>

<style>
    /* ///// INFO BOX  STYLE START /////  */
    .info_box .info_box_content {
        font-family: 'Poppins-Medium', sans-serif !important;
        font-style: normal !important;
        font-weight: 500 !important;
    }
    .info_box .info_box_content h6{
        font-size: 16px;
        line-height: 24px;
        letter-spacing: 0.1px;
        color: #000000;
        font-family: 'Poppins-Medium' !important;
    }
    .info_box .info_box_content p {
        font-size: 12px;
        line-height: 16px;
        letter-spacing: 0.2px;
        color: #828C9F;
        font-family: 'Poppins-Medium', sans-serif !important;
    }
     /* ///// INFO BOX STYLE  END /////  */

    /* ///// POPULAR  START /////  */
    .popular-product-image {
        border-radius: 16px;
        background: #fff !important;
        position: relative;
    }
    .popular-product-image-text {
        position: absolute;
        top: 25%;
        left: 10%;
    }
    .popular-product-image-text h1{
        font-family: 'Montserrat', 'sans-serif' !important;
        font-style: normal !important;
        font-weight: bold !important;
        font-size: 33.0726px !important;
        line-height: 40px !important;
        letter-spacing: 0.330726px !important;
        color: #373737 !important;
    }
    .popular-product-discount {
        background: #CCF6C8 !important;
        border-radius: 46.3017px !important;
        padding: 3px 10px;
        font-family: 'Poppins', sans-serif !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 13.229px !important;
        line-height: 23px !important;
        letter-spacing: 0.330726px !important;
        color: #373737 !important;
    }
    .popular-product-price {
        color: #373737 !important;
        line-height: 23px !important;
        font-family: 'Poppins', sans-serif !important;
        font-size: 18px !important;
    }
    /* ///// POPULAR  END /////  */
    .recommanded-products {
        background:#FFF !important;
    }
</style>

<!-- BANNER START -->
<section style="margin-top:50px;">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/seasonalbanner.png')}}" class="d-block w-100" alt="seasonalbanner">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/seasonalbanner.png')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/seasonalbanner.png')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<!-- BANNER END -->

<!-- RECOMMENDED FOR YOU START -->

<section class="recommanded-products pt-5 pb-5"> 
    <div class=" container">
        <div class="pro-heading-title ">
            <h2> @lang('website.Recommended for you')</h2>
        </div>
    </div>
    <!-- Slider main container -->
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

<!-- RECOMMENDED FOR YOU END -->


<!-- ///// POPULAR  START ///// -->

<section class="popular-product">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-12 col-lg-6 pro-heading-title">
                <h2>@lang('website.Popular')</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="d-flex bd-highlight">
                    <div class="popular-product-image bd-highlight">
                        <div class="popular-product-image-text">
                            <span class="popular-product-discount">@lang('website.20% OFF')</span>
                            <h1 class="mb-0 pt-2">@lang('website.Veggie')</h1>
                            <h1>@lang('website.Basket')</h1>
                            <p class="popular-product-price">@lang('website.200.00')</p>
                        </div>
                        <img src="{{asset('images/Mask Group.png')}}"/>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex bd-highlight">
                    <div class="popular-product-image bd-highlight">
                        <div class="popular-product-image-text">
                            <span class="popular-product-discount">@lang('website.30% OFF')</span>
                            <h1 class="mb-0 pt-2">@lang('website.Fruit')</h1>
                            <h1>@lang('website.Bunch')</h1>
                            <p class="popular-product-price"> @lang('website.350.00')</p>
                        </div>
                        <img src="{{asset('images/Mask Group (1).png')}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ///// POPULAR  END ///// -->

<!-- ///// INFO BOX  START ///// -->
<section class="info_box">
    <div class="container pt-5 pb-5">
        <div class="row">

            <div class="col-lg-4">
                <div class="d-flex bd-highlight">
                    <div class=" bd-highlight">
                        <img src="{{asset('images/OrderFromCategories.svg')}}"/>
                    </div>
                    <div class="pl-3 pt-3 bd-highlight info_box_content">
                        <h6>@lang('website.infoBoxTitle1')</h6>
                        <p>@lang('website.infoBoxText1')</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="d-flex bd-highlight">
                    <div class=" bd-highlight">
                        <img src="{{asset('images/shippingicon.svg')}}"/>
                    </div>
                    <div class="pl-3 pt-3 bd-highlight info_box_content">
                        <h6>@lang('website.infoBoxTitle2')</h6>
                        <p>@lang('website.infoBoxText2')</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="d-flex bd-highlight">
                    <div class=" bd-highlight">
                        <img src="{{asset('images/getitdeliveredfresh.svg')}}"/>
                    </div>
                    <div class="pl-3 pt-3 bd-highlight info_box_content">
                        <h6>@lang('website.infoBoxTitle3')</h6>
                        <p>@lang('website.infoBoxText3')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ///// INFO BOX  END ///// -->

<!-- RECOMMENDED FOR YOU START -->

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

<!-- RECOMMENDED FOR YOU END -->