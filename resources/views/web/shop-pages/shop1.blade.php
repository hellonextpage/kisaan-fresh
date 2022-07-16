  <!-- Shop Page One content -->
    <style type="text/css">
        .breadcrumb-section nav[aria-label=breadcrumb] {
            background-color: #ECEFF2 !important;
        }
        .breadcrumb-item + .breadcrumb-item::before {
            content: ">" !important;
        }
        nav[aria-label=breadcrumb] .breadcrumb .active::before {
            content: "\f105" !important;
        }
        nav[aria-label=breadcrumb] .breadcrumb .breadcrumb-item a {
            color: #6c757d !important;
            font-weight: normal;
            font-size: 12px;
        }
        .breadcrumb-item.active {
            color: #494d50;
        }
        .breadcrumb-section h2, h3, h4, h5, h6 {
            font-family: 'Poppins-Medium', 'sans-serif' !important;
            font-weight: 500;
        }
        .shop-product-name {
            font-style: normal !important;
            line-height: 24px !important;
            letter-spacing: 0.5px !important;
            color: #373737 !important;
            font-size: 18px;
        }
        .product-name {
            min-height: 60px;
        }
        .shop-cards .card {
            border: 1px solid rgba(0, 0, 0, 0.05) !important;
        }
        .product-filters {
            background-color: #fff;
        }
        p {
            font-family: 'Poppins-Medium', 'sans-serif' !important;
            font-style: normal;
            font-weight: normal;
        }
        .sort-by-on-buttons .btn {
            padding: 5px 17px;
            border-radius: 22px;
            text-transform: capitalize !important;
            font-family: 'Poppins-Medium', 'sans-serif' !important;
            font-style: normal;
            font-weight: normal;
            font-size: 11px;
            line-height: 14px;
            letter-spacing: 0.2px;
            margin-left: 5px;
        }
        .shop-cards .card .card-body .btn:hover {
            color: #f1ebeb;
        }
        .search-field-product {
            border-radius: 30px !important;
            border: 1px solid #C4CDDD;
        }
        .search-field-product input[type="search"] {
            width: 86%;
            border: none;
            padding-bottom: 5px;
            padding-top: 5px;
        }
        .search-field-product input:focus{
            outline: none;
        }
        .product-filters .card {
            border-radius: 11px;
        }
        .sort-by-on-buttons .active {
            background: none !important;
            border-color: green !important;
            color: green !important;
        }
        .product-filters .form-check-label {
            color: #4e4d4d;
        }
        .search-field-product .fa-search, .search-field-product input::placeholder {
            color: #bdc1ca;
        }
        .force-overflow {
            max-height: 300px;
        }
        .filter_searching_field {
            max-height: 400px;
            overflow: hidden;
            overflow-y: auto;
        }
        
        .filter_searching_field::-webkit-scrollbar{
            width: 3px;
        }

        .filter_searching_field::-webkit-scrollbar-thumb{
            background-color: #dee2e6;
        }
    </style>


    <div class="container-fuild breadcrumb-section">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                @if(!empty($result['category_name']) and !empty($result['sub_category_name']))
                <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
                <li  class="breadcrumb-item"><a href="{{ URL::to('/shop')}}">@lang('website.Shop')</a></li>
                <li  class="breadcrumb-item"><a href="{{ URL::to('/shop?category='.$result['category_slug'])}}">{{$result['category_name']}}</a></li>
                <li  class="breadcrumb-item active">{{$result['sub_category_name']}}</li>
                @elseif(!empty($result['category_name']) and empty($result['sub_category_name']))
                <li class="breadcrumb-item active">{{$result['category_name']}}</li>
                @else
                <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
                <li class="breadcrumb-item active">@lang('website.Shop')</li>
                @endif
                </ol>
            </div>
            <div class="container">
                @if($result['sub_category_name'])
                    <h4>
                        {{$result['sub_category_name']}}
                    </h4>
                    @else 
                    <h4>
                        {{$result['category_name']}}
                    </h4>
                @endif
            </div>
        </nav>
    </div>

    
    <section class="product-filters pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 border-right pr-1">
                    <h6 class="shop-product-name">@lang('website.Filters')</h6>
                    <div class="border-bottom mr-2">
                        <p>Availability</p>
                        <div class="form-group form-check pb-3">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Instock products</label>
                        </div>
                    </div>

                    <div class="pt-3">
                        <p>Product</p>
                        <div class="search-field-product mr-3">
                            <i class="fa fa-search pl-2"></i>
                            <input  class="pl-2" type="search" name="search" id="myInput" placeholder="@lang('website.Search for products')" data-toggle="tooltip" data-placement="bottom" title="@lang('website.Search Products')">
                        </div>
                        <div id="myList" class="pl-2 mt-3 filter_searching_field">
                            <div class="force-overflow">
                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Default checkbox
                                    </label>
                                </div>
                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Default 2
                                    </label>
                                </div>
                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Default 2
                                    </label>
                                </div>
                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Default 2
                                    </label>
                                </div>
                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Default 2
                                    </label>
                                </div>
                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Default 2
                                    </label>
                                </div>
                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Default 2
                                    </label>
                                </div>
                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Default 2
                                    </label>
                                </div>
                                <div class="form-check pb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                    <label class="form-check-label" for="defaultCheck1">
                                        Default 2
                                    </label>
                                </div>
                            </div>
                        </div>
                        <hr class="mr-2">
                    </div>

                    <div class="border-bottom pt-3 mr-2">
                        <p>Price Range</p>
                        <div class="form-check pb-3">
                            <input class="form-check-input" type="checkbox" value="" name="priceRange" id="priceRange">
                            <label class="form-check-label" for="defaultCheck1">
                            Below 100
                            </label>
                        </div>

                        <div class="form-check pb-3">
                            <input class="form-check-input" type="checkbox" value="" name="priceRange" id="priceRange">
                            <label class="form-check-label" for="defaultCheck1">
                            101-250
                            </label>
                        </div>

                        <div class="form-check pb-3">
                            <input class="form-check-input" type="checkbox" value="" name="priceRange" id="priceRange">
                            <label class="form-check-label" for="defaultCheck1">
                            251-500
                            </label>
                        </div>

                        <div class="form-check pb-3">
                            <input class="form-check-input" type="checkbox" value="" name="priceRange" id="priceRange">
                            <label class="form-check-label" for="defaultCheck1">
                            501-1000
                            </label>
                        </div>

                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row mb-4">
                        <div class="col-lg-3">
                        Showing 20 of 20 Items
                        </div>
                        <div class="col-lg-9 sort-by-on-buttons text-right">
                            <span>sort by</span> 
                            <button type="button" class="btn btn-light active">Popularity</button>
                            <button type="button" class="btn btn-light">Hight to Low</button>
                            <button type="button" class="btn btn-light">Low to High</button>
                            <button type="button" class="btn btn-light">Discount</button>
                            <button type="button" class="btn btn-light">All Products</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 mb-3 shop-cards">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{asset('images/raspberry-png-25905 1.png')}}" width='100%'/>
                                    <h5 class="card-title text-left product-name">treatment</h5>
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

                                    <!-- <div class="card-text text-center" id="add_to_cart" onclick="addToCart()">
                                        <button class="btn product_add_button">Add</button>
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
                                    </div> -->
                                    <div class="card-text text-center" style="color:red">
                                        Out of Stock
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ////// -->
                        <div class="col-lg-3 mb-3 shop-cards">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{asset('images/raspberry-png-25905 1.png')}}" width='100%'/>
                                    <h5 class="card-title text-left product-name">treatment</h5>
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

                                    <div class="card-text text-center" id="add_to_cart" onclick="addToCart()">
                                        <button class="btn product_add_button">Add</button>
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
                        <!-- ////// -->
                        <div class="col-lg-3 mb-3 shop-cards">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{asset('images/raspberry-png-25905 1.png')}}" width='100%'/>
                                    <h5 class="card-title text-left product-name">treatment</h5>
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

                                    <div class="card-text text-center" id="add_to_cart" onclick="addToCart()">
                                        <button class="btn product_add_button">Add</button>
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
                        <!-- /////////// -->
                        <div class="col-lg-3 mb-3 shop-cards">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{asset('images/raspberry-png-25905 1.png')}}" width='100%'/>
                                    <h5 class="card-title text-left product-name">treatment</h5>
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

                                    <div class="card-text text-center" id="add_to_cart" onclick="addToCart()">
                                        <button class="btn product_add_button">Add</button>
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
                        <!-- //// -->
                        <div class="col-lg-3 mb-3 shop-cards">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{asset('images/raspberry-png-25905 1.png')}}" width='100%'/>
                                    <h5 class="card-title text-left product-name">treatment</h5>
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

                                    <div class="card-text text-center" id="add_to_cart" onclick="addToCart()">
                                        <button class="btn product_add_button">Add</button>
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

                    </div>
                </div>
            </div>
        </div>
    </section>
      

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

</script>