
  @extends('web.layout')
@section('content')
    <style type="text/css">
        .terms-and-conditions li ul li {
            font-size: 18px;
            color:#828C9F;
        }
        .terms-and-conditions li ul li::marker {
            content: " "
        }
        nav[aria-label=breadcrumb] {
            background-color: #ECEFF2 !important;
        }
        .terms-conditions-title {
            font-family: 'Poppins-Medium', 'sans-serif' !important;
            font-weight: 500;
        }
        /* my orders start */
        .total-orders .card{
            border-radius:9%;
        }
        .total-orders .card .card-body{
            padding: 23px 14px !important;
        }
        .total-orders .product-details h5, .total-orders .total-amount h5, h5{
            font-family: 'Poppins-Medium', 'sans-serif' !important;
            text-transform: capitalize !important;
            text-align: left !important;
            font-style: normal !important;
            font-weight: 500 !important;
            font-size: 18px !important;
            line-height: 21px !important;
            letter-spacing: 0.2px !important;
            color: #373737 !important;
        }
        .total-orders .product-details .price {
            font-family: 'Poppins-Medium', 'sans-serif' !important;
            text-transform: capitalize !important;
            text-align: left !important;
            font-style: normal !important;
            font-weight: 500 !important;
            font-size: 22px !important;
            line-height: 21px !important;
            letter-spacing: 0.2px !important;
            color: #373737 !important;
        }
        .total-orders .total-amount-prices {
            color: #828C9F !important;
        }
        .cancel-order-button {
            border-radius: 7px;
            font-family: 'Poppins-Medium', 'sans-serif' !important;
            font-style: normal !important;
            font-weight: normal !important;
            font-size: 11px !important;
            line-height: 14px !important;
            letter-spacing: 0.2px !important;
            color: #f1ebeb;
            text-transform: capitalize !important;
            width: 26%;
            text-align: center;
            padding: 16px 0px;
        }
        /* my orders  end*/
    </style>

    <div class="container-fuild">
        <nav aria-label="breadcrumb">
            <div class="container">
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
                <li class="breadcrumb-item active" aria-current="page">Terms and Conditions</li>
                </ol>
            </div>
            <div class="container">
            <h4 class="terms-conditions-title mb-0 pb-2">Terms and Conditions</h4>
            </div>
        </nav>
    </div>
    <section style="background:#fff" class="pt-5 pb-5">
        <div class="container">
            <ul style="font-size: 20px;" class="mb-0 terms-and-conditions">
                <li>User Terms</li>
                <li>Partner Terms</li>
                <li>Pick & Drop off Terms
                    <ul class="sub-text">
                        <li>
                        <i class="fa fa-minus" aria-hidden="true"></i>
                            Cancellations</li>
                    </ul>
                </li>
                <li>Merchant Terms
                    <ul>
                        <li>
                        <i class="fa fa-minus" aria-hidden="true"></i>
                            Lorem Ipsum Lorem Ipsum</li>
                        <li>
                        <i class="fa fa-minus" aria-hidden="true"></i>
                            Lorem Ipsum</li>
                        <li>
                        <i class="fa fa-minus" aria-hidden="true"></i>
                            Lorem Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque amet fermentum arcu the Ride
                        </li>
                    </ul>
                </li>
                <li>About Us
                    <ul>
                        <li>
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        Lorem Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque amet fermentum arcu the Ride
                        Lorem Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque amet fermentum arcu the Ride
                        </li>
                    </ul>
                </li>
                <li>Contact
                    <ul>
                        <li>
                        <i class="fa fa-minus" aria-hidden="true"></i>
                        Lorem Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque amet fermentum arcu the Ride Lorem 
                        Lorem Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque amet fermentum arcu the Ride Lorem 
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>

    <!-- ///my orders start/// -->

    <section style="background:#fff" class="total-orders pb-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pb-3" style="height:auto">
                    <div class="row col-lg-12 pb-3">
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{asset('images/category-images/raspberry-png-25905 1 (1).png')}}" class="img-fluid"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 align-self-center product-details">
                            <h5>Blackberry</h5>
                            <h5 style="color:#828C9F !important">Quantity : 500g</h5>
                            <h4 class="pt-2 price">₹ 260.00</h4>
                            
                        </div>
                        <div class="ml-auto col-lg-3 align-self-end">
                            <div class="" id="quantity">
                                <div class="d-flex justify-content-center bd-highlight mb-3 ">
                                    <div class="p-2 bd-highlight" id="quantity_dicrement"  style="cursor:pointer">
                                        <i class="fa fa-minus rounded-circle quantity-icons" aria-hidden="true"></i>
                                    </div>
                                    <div class="p-2 pt-3 bd-highlight quantity-count" id="quantity_count">1</div>
                                    <div class="p-2 bd-highlight" id="quantity_increment" style="cursor:pointer">
                                        <i class="fa fa-plus rounded-circle quantity-icons" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="border-top: 2px solid rgba(0, 0, 0, 0.15);">
                    <!-- ////// -->
                    <div class="row col-lg-12 pb-3">
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{asset('images/category-images/food-png-19662 1.png')}}" class="img-fluid"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 align-self-center product-details">
                            <h5>Orange</h5>
                            <h5 style="color:#828C9F !important">Quantity : 300g</h5>
                            <h4 class="pt-2 price">₹ 100.00</h4>
                        </div>
                        <div class="ml-auto col-lg-3 align-self-end">
                            <div class="" id="product_quantity">
                                <div class="d-flex justify-content-center bd-highlight mb-3 ">
                                    <div class="p-2 bd-highlight" id="product_quantity_dicrement" onclick="quantityDec()" style="cursor:pointer">
                                        <i class="fa fa-minus rounded-circle quantity-icons" aria-hidden="true"></i>
                                    </div>
                                    <div class="p-2 pt-3 bd-highlight quantity-count" id="product_quantity_count">1</div>
                                    <div class="p-2 bd-highlight" id="product_quantity_increment" onclick="quantityInc()" style="cursor:pointer">
                                        <i class="fa fa-plus rounded-circle quantity-icons" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="border-top: 2px solid rgba(0, 0, 0, 0.15);">
                    <!-- ////// -->
                    <div class="row col-lg-12 pb-3">
                        <div class="col-lg-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <img src="{{asset('images/category-images/raspberry-png-25905 1 (3).png')}}" class="img-fluid"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 align-self-center product-details">
                            <h5>Cabbage</h5>
                            <h5 style="color:#828C9F !important">Quantity : 2 kg</h5>
                            <h4 class="pt-2 price">₹ 60.00</h4>
                        </div>
                        <div class="ml-auto col-lg-3 align-self-end">
                            <div class="" id="quantity">
                                <div class="d-flex justify-content-center bd-highlight mb-3 ">
                                    <div class="p-2 bd-highlight" id="quantity_dicrement"  style="cursor:pointer">
                                        <i class="fa fa-minus rounded-circle quantity-icons" aria-hidden="true"></i>
                                    </div>
                                    <div class="p-2 pt-3 bd-highlight quantity-count" id="quantity_count">1</div>
                                    <div class="p-2 bd-highlight" id="quantity_increment"  style="cursor:pointer">
                                        <i class="fa fa-plus rounded-circle quantity-icons" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr style="border-top: 2px solid rgba(0, 0, 0, 0.15);">

                </div>
                <div class="col-lg-6 "style="max-height:350px">
                    <div class="shadow-sm pt-4 pb-3 total-amount col-lg-12" >
                        <h5 class="pl-1">Total Amount</h5>
                        <div class="d-flex justify-content-between total-amount-prices" >
                            <div class="p-2">Order Cost </div>
                            <div class="p-2">₹ 370.00</div>
                        </div>
                        <div class="d-flex justify-content-between total-amount-prices">
                            <div class="p-2">GST</div>
                            <div class="p-2">₹ 20.00</div>
                        </div>
                        <div class="d-flex justify-content-between total-amount-prices">
                            <div class="p-2">Promotion </div>
                            <div class="p-2">-₹ 10.00</div>
                        </div>
                        <div class="d-flex justify-content-between total-amount-prices">
                            <div class="p-2">Delivery Charges </div>
                            <div class="p-2">₹ 00.00</div>
                        </div>
                        <div class="d-flex justify-content-between" style="color: #2DAE1F">
                            <div class="p-2">Total Savings</div>
                            <div class="p-2">₹ 40.00</div>
                        </div>
                        <hr style="border-top: 2px solid rgba(0, 0, 0, 0.15);" class="mb-2">
                        <div class="d-flex justify-content-between pb-0" style="font-size:20px">
                            <div class="pl-2 pr-2">Total </div>
                            <div class="pl-2 pr-2">₹ 380.00</div>
                        </div>
                        <hr style="border-top: 2px solid rgba(0, 0, 0, 0.15);" class="mt-2">
                    </div>
                    <div class=" pt-3" style="cursor:pointer" onclick="location.href='{{ url('track-order') }}'">
                        <div class="d-flex justify-content-between border p-2" style="color:#504e4e;">
                            <div class="pl-2 pr-2">
                                <i class="fa fa-shipping-fast" style="font-size:14px"></i> <span style="font-size:11px">Track your order</span>
                            </div>
                            <div class="pl-2 pr-2 pt-1" style="font-size:11px"><i class="fa fa-greater-than"></i></div>
                        </div>
                    </div>
                    <div class="button-row d-flex mt-4">
                        <a href="/checkout"></a> <button class="btn btn-danger ml-auto cancel-order-button" type="button" title="Next">Cancel Order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- ///my orders end /// -->


  @endsection