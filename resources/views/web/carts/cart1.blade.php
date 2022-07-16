
<link rel="stylesheet" href="{{asset('web/css/sidebar/sidebar.css')}}"/>
<style type="text/css">
    nav[aria-label=breadcrumb] {
        background-color: #ECEFF2;
    }
    nav[aria-label=breadcrumb] .breadcrumb .active::before {
        content:"\f105" !important;
    }
    .breadcrumb-item.active {
        color: #494d50;
    }
    .multisteps-form__progress {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(0, 1fr));
    }

    .multisteps-form__progress-btn {
    transition-property: all;
    transition-duration: 0.15s;
    transition-timing-function: linear;
    transition-delay: 0s;
    position: relative;
    padding-top: 20px;
    color: rgba(108, 117, 125, 0.7);
    text-indent: -9999px;
    border: none;
    background-color: transparent;
    outline: none !important;
    cursor: pointer;
    }

    @media (min-width: 500px) {
    .multisteps-form__progress-btn {
        text-indent: 0;
    }
    }

    .multisteps-form__progress-btn:before {
    position: absolute;
    top: 0;
    left: 50%;
    display: block;
    width: 20px;
    height: 20px;
    content: '';
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
    transition: all 0.15s linear 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
    transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
    transition: all 0.15s linear 0s, transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s, -webkit-transform 0.15s cubic-bezier(0.05, 1.09, 0.16, 1.4) 0s;
    border: 2px solid currentColor;
    border-radius: 50%;
    background-color: #fff;
    box-sizing: border-box;
    z-index: 3;
    }

    .multisteps-form__progress-btn:after {
    position: absolute;
    top: 8px;
    left: calc(-50% - 13px / 2);
    transition-property: all;
    transition-duration: 0.15s;
    transition-timing-function: linear;
    transition-delay: 0s;
    display: block;
    width: 100%;
    height: 2px;
    content: '';
    background-color: currentColor;
    z-index: 1;
    }

    .multisteps-form__progress-btn:first-child:after {
    display: none;
    }

    .multisteps-form__progress-btn.js-active {
    color: #10A200;
    }

    .multisteps-form__progress-btn.js-active:before {
    -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
    background-color: #10A200;
    }

    .multisteps-form__form {
        position: relative;
        margin-bottom: 5rem !important;
    }

    .multisteps-form__panel {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 0;
    opacity: 0;
    visibility: hidden;
    }

    .multisteps-form__panel.js-active {
    height: auto;
    opacity: 1;
    visibility: visible;
    }
    .multisteps-form__panel .card {
        border-radius: 9% !important;
        
    }
    .multisteps-form__panel .card .card-body {
        padding: 23px 14px !important;
    }
    .multisteps-form__panel .product-details h5, .multisteps-form__panel .total-amount h5, h5{
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
    .multisteps-form__panel .product-details .price {
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
    .total-amount-prices {
        color:#828C9F !important
    }
    .next-process-button {
        background: #2DAE1F !important;
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
        padding: 16px 0px
    }
    .my-cart-title{
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-weight: 500;
    }
    /* conform delivery css start*/
    .home-deliver, .store-pickup {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 11px !important;
        line-height: 14px !important;
        letter-spacing: 0.2px !important;
        text-transform: capitalize !important;
        padding: 11px 17px;
        border-radius: 4px;
        color:#828C9F !important;
        border-color: #828C9F !important;
    }
    .active-delivery-address {
        color: #2DAE1F !important;
        border-color: #2DAE1F !important;
        background: #c2e8bd !important;
    }
    .add-note {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 11px !important;
        line-height: 14px !important;
        letter-spacing: 0.2px !important;
        text-transform: capitalize !important;
        padding: 7px 14px;
        border-radius: 4px;
        background-color:#b7b3bb !important;
        color: #373737;
        border: none !important;
    }
    .conform-delivery span {
        color: #828C9F;
        font-family: 'Poppins-Regular', sans-serif !important;
        font-size: 13px;
    }
    .conform-delivery p {
        color: #373737 !important;
        font-family: 'Poppins-Regular', 'sans-serif' !important;
        font-style: normal !important;
        font-weight: normal !important;
    }
    .conform-delivery .custom-select, .conform-delivery select option {
        color: #373737 !important;
        font-size: 0.7rem !important;
    }
    /* conform delivery css end*/

    /* make payment css start*/
    .payment-methods {
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 95px;
        height:50px;
    }
    .payment-methods input[type=radio]{
        transform:scale(1.5);
    }
    .payment-methods .form-check-input {
        margin-top: 0.6rem;
    }
    .apply-coupon-field .form-control{
        border: none !important;
        border-bottom: 1px solid #cac6c6 !important;
        color: #2d2c2c !important;
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-size:16px;
        letter-spacing: 0.05rem;
    }
    .apply-coupon-field .btn {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 11px !important;
        line-height: 14px !important;
        letter-spacing: 0.2px !important;
        text-transform: capitalize !important;
        padding: 11px 17px;
        border-radius: 4px;
        color: #2DAE1F !important;
        border-color: #2DAE1F !important;
        background: #c2e8bd;
    }
    .wallet-options span, .other-options span{
        color: #373737;
    }
    /* input[type="radio" i] {
        background: red !important;
    }
    input[type=checkbox]:checked + label:after {
        background: #000 !important;
        color:green !important;
    } */
    /* make payment css end*/
    
    /* toggle */
    .w3-sidebar {
        position:absolute !important;
        padding-bottom:98.3%;
        overflow:hidden;
    }

</style>


<div class="container-fuild">
  <nav aria-label="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('website.MyCart')</li>
          </ol>
      </div>
      <div class="container pb-2">
        <h4 class="my-cart-title">My Cart (05)</h4>
      </div>
    </nav>
</div>
<!-- start1-->
<!-- start-->
<!-- start-->

<section style="background:#fff" class="container-fluid pt-4">
    <div class="multisteps-form container">
        <!--progress bar-->
        <div class="row">
            <div class="col-12 col-lg-8 ml-auto mr-auto mb-4">
                <div class="multisteps-form__progress">
                <button class="multisteps-form__progress-btn js-active" type="button" title="User Info">Place Order</button>
                <button class="multisteps-form__progress-btn" type="button" title="Address">Confirm Delivery </button>
                <button class="multisteps-form__progress-btn" type="button" title="Order Info">Make Payment</button>
                </div>
            </div>
        </div>
        
        <!--form panels-->
        <div class="row">
          <div class="col-12 col-lg-12 m-auto">
            <form class="multisteps-form__form">
              <!--single form panel place order-->
                <div class="multisteps-form__panel p-4 rounded bg-white js-active" >
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
                        <div class="col-lg-6" style="max-height:350px">
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
                            <div class="button-row d-flex mt-4">
                                <span class="ml-auto js-btn-next next-process-button" type="button" title="Next">Place Order</span>
                            </div>
                        </div>
                    </div>
                </div>
              <!--single form panel conform delivery-->
                <div class="multisteps-form__panel p-4 rounded bg-white" >
                    <div class="row">
                        <div class="col-lg-6 pb-3 conform-delivery" style="height:auto">
                            <span>Select Delivery Type</span>
                            <div class="pt-3">
                                <button type="button" class="btn home-deliver active-delivery-address" onclick="fun1('home-deliver')">Home Delivery</button>
                                <button type="button" class="btn store-pickup" onclick="fun1('store-pickup')">Store Pickup</button>
                            </div>
                            <hr style="border-top: 1px solid rgba(0, 0, 0, 0.15);">
                            <div class="delivery-type">
                                <span>Select Delivery Type</span>
                                <div class="d-flex">
                                    <div class="pl-0 pt-2 pb-2 pr-2 mr-auto">Home <span style="color:#000">(Default)</span></div>
                                    <div class="p-2">
                                        <span style="color:#2DAE1F; text-decoration:underline; cursor:pointer" onclick="openAddToggle('add')" class="pr-3">add/eddit</span>
                                        <span style="color:#2DAE1F; text-decoration:underline; cursor:pointer" onclick="openToggle('change')">change</span>
                                    </div>
                                </div>
                                <p>
                                    # 34, Apartment sit amet, consectetur adipiscing elit. Pellentesque ametermentum arcu the Ride PIN - 560089
                                </p>
                                <p>Phone number : +91- 98765 67898</p>
                            </div>
                            <hr style="border-top: 1px solid rgba(0, 0, 0, 0.15);" class="mb-0">
                            <small style="color: #828C9F;" id="store_deliver_note"></small>
                            <div class="delivery-time mt-4">
                                <span>Select Delivery Time</span>
                                <div class="form-group pt-3 mb-2">
                                    <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                        <option value="1">Sun, 04 Oct, 10:00 AM - 12:00 PM - Standard</option>
                                        <option value="2">Mon, 05 Oct, 11:00 AM - 02:00 PM - Standard</option>
                                        <option value="3">Tues, 06 Oct, 08:00 AM - 10:00 AM - Standard</option>
                                    </select>
                                </div>
                                <button type="button" class="btn add-note mb-2">+ Add Note</button></button>

                                <input class="form-control" style="border:none !important;" type="text" placeholder="Type here..">
                                <br>
                            </div>
                            <hr style="border-top: 1px solid rgba(0, 0, 0, 0.15);">
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
                            <div class="button-row d-flex mt-4">
                                <span class="ml-auto js-btn-next next-process-button" type="button" title="Next">Make Payment</span>
                            </div>
                        </div>
                    </div>
                </div>
              <!--single form panel make payment-->
                <div class="multisteps-form__panel p-4 rounded bg-white">
                    <div class="row">
                        <div class="col-lg-6 shadow-sm pb-3 conform-delivery" style="height:478px">
                            <div class="wallet-options pb-4">
                                <span>Wallet Options</span>
                                <div class="d-flex payment-methods mb-2 mt-1">
                                    <div class="p-2 pl-4 mr-auto" style="padding-top: 0.8rem !important;">
                                        <img src="{{asset('images/google-pay_22.png')}}" width="30%"/>
                                    </div>
                                    <div class="p-2 pr-4" style="color:#2DAE1F; text-decoration:underline; cursor:pointer" >
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    </div>
                                </div>

                                <div class="d-flex payment-methods mb-2">
                                    <div class="p-2 pl-4 mr-auto" style="padding-top: 0.8rem !important;">
                                        <img src="{{asset('images/paytm-1.png')}}" width="14%"/>
                                    </div>
                                    <div class="p-2 pr-4" style="color:#2DAE1F; text-decoration:underline; cursor:pointer" >
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    </div>
                                </div>

                                <div class="d-flex payment-methods mb-2">
                                    <div class="p-2 pl-4 mr-auto">
                                        <img src="{{asset('images/phonepe.png')}}" width="25%"/>
                                    </div>
                                    <div class="p-2 pr-4" style="color:#2DAE1F; text-decoration:underline; cursor:pointer" >
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    </div>
                                </div>
                            </div>
                            <div class="other-options">
                                <span>Other Options</span>
                                <div class="d-flex payment-methods mb-2 mt-3">
                                    <div class="p-2 pl-4 mr-auto" style="padding-top: 0.8rem !important;">
                                        By Cash
                                    </div>
                                    <div class="p-2 pr-4" style="color:#2DAE1F; text-decoration:underline; cursor:pointer" >
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    </div>
                                </div>

                                <div class="d-flex payment-methods mb-2">
                                    <div class="p-2 pl-4 mr-auto" style="padding-top: 0.8rem !important;">
                                        Net Banking
                                    </div>
                                    <div class="p-2 pr-4" style="color:#2DAE1F; text-decoration:underline; cursor:pointer" >
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    </div>
                                </div>

                                <div class="d-flex payment-methods mb-2">
                                    <div class="p-2 pl-4 mr-auto" style="padding-top: 0.8rem !important;">
                                        Credit/Debit Card
                                    </div>
                                    <div class="p-2 pr-4" style="color:#2DAE1F; text-decoration:underline; cursor:pointer" >
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class=" mb-3 shadow-sm pb-4">

                                <div class="d-flex">
                                    <div class="p-2 pl-5 mr-auto" style="font-family: 'Poppins-Medium', 'sans-serif' !important; font-weight: 500;">
                                        <h6 style="font-size:20px">Apply Coupon Code</h6>
                                    </div>
                                    <div class="p-2 pr-5" style="color:#2DAE1F;cursor:pointer" >
                                        view all
                                    </div>
                                </div>

                                <div class="d-flex apply-coupon-field">
                                    <div class="p-2 pl-5 mr-auto">
                                        <input type="text" class="form-control" placeholder="Enter coupon">
                                    </div>
                                    <div class="p-2 pr-5">
                                        <button class="btn">Apply now</button>
                                    </div>
                                </div>

                            </div>

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
                            <div class="button-row d-flex mt-4">
                                <span class="ml-auto js-btn-next next-process-button" type="button" title="Next">Pay Now</span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
           </div>
        </div>
    </div>
</section>


<script>

    //DOM elements
    const DOMstrings = {
    stepsBtnClass: 'multisteps-form__progress-btn',
    stepsBtns: document.querySelectorAll(`.multisteps-form__progress-btn`),
    stepsBar: document.querySelector('.multisteps-form__progress'),
    stepsForm: document.querySelector('.multisteps-form__form'),
    stepsFormTextareas: document.querySelectorAll('.multisteps-form__textarea'),
    stepFormPanelClass: 'multisteps-form__panel',
    stepFormPanels: document.querySelectorAll('.multisteps-form__panel'),
    stepPrevBtnClass: 'js-btn-prev',
    stepNextBtnClass: 'js-btn-next' };


    //remove class from a set of items
    const removeClasses = (elemSet, className) => {

    elemSet.forEach(elem => {

        elem.classList.remove(className);

    });

    };

    //return exect parent node of the element
    const findParent = (elem, parentClass) => {

    let currentNode = elem;

    while (!currentNode.classList.contains(parentClass)) {
        currentNode = currentNode.parentNode;
    }

    return currentNode;

    };

    //get active button step number
    const getActiveStep = elem => {
    return Array.from(DOMstrings.stepsBtns).indexOf(elem);
    };

    //set all steps before clicked (and clicked too) to active
    const setActiveStep = activeStepNum => {

    //remove active state from all the state
    removeClasses(DOMstrings.stepsBtns, 'js-active');

    //set picked items to active
    DOMstrings.stepsBtns.forEach((elem, index) => {

        if (index <= activeStepNum) {
        elem.classList.add('js-active');
        }

    });
    };

    //get active panel
    const getActivePanel = () => {

    let activePanel;

    DOMstrings.stepFormPanels.forEach(elem => {

        if (elem.classList.contains('js-active')) {

        activePanel = elem;

        }

    });

    return activePanel;

    };

    //open active panel (and close unactive panels)
    const setActivePanel = activePanelNum => {

    //remove active class from all the panels
    removeClasses(DOMstrings.stepFormPanels, 'js-active');

    //show active panel
    DOMstrings.stepFormPanels.forEach((elem, index) => {
        if (index === activePanelNum) {

        elem.classList.add('js-active');

        setFormHeight(elem);

        }
    });

    };

    //set form height equal to current panel height
    const formHeight = activePanel => {

    const activePanelHeight = activePanel.offsetHeight;

    DOMstrings.stepsForm.style.height = `${activePanelHeight}px`;

    };

    const setFormHeight = () => {
    const activePanel = getActivePanel();

    formHeight(activePanel);
    };

    //STEPS BAR CLICK FUNCTION
    DOMstrings.stepsBar.addEventListener('click', e => {

    //check if click target is a step button
    const eventTarget = e.target;

    if (!eventTarget.classList.contains(`${DOMstrings.stepsBtnClass}`)) {
        return;
    }

    //get active button step number
    const activeStep = getActiveStep(eventTarget);

    //set all steps before clicked (and clicked too) to active
    setActiveStep(activeStep);

    //open active panel
    setActivePanel(activeStep);
    });

    //PREV/NEXT BTNS CLICK
    DOMstrings.stepsForm.addEventListener('click', e => {

    const eventTarget = e.target;

    //check if we clicked on `PREV` or NEXT` buttons
    if (!(eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`) || eventTarget.classList.contains(`${DOMstrings.stepNextBtnClass}`)))
    {
        return;
    }

    //find active panel
    const activePanel = findParent(eventTarget, `${DOMstrings.stepFormPanelClass}`);

    let activePanelNum = Array.from(DOMstrings.stepFormPanels).indexOf(activePanel);

    //set active step and active panel onclick
    if (eventTarget.classList.contains(`${DOMstrings.stepPrevBtnClass}`)) {
        activePanelNum--;

    } else {

        activePanelNum++;

    }

    setActiveStep(activePanelNum);
    setActivePanel(activePanelNum);

    });

    //SETTING PROPER FORM HEIGHT ONLOAD
    window.addEventListener('load', setFormHeight, false);

    //SETTING PROPER FORM HEIGHT ONRESIZE
    window.addEventListener('resize', setFormHeight, false);


</script>

<script>
    let quantity_count = document.getElementById('product_quantity_count').innerText;
    quantity_count = 1;
    function quantityDec() {
        let count = document.getElementById('product_quantity_count').innerText;
        if (parseInt(count) <= 1) {
            // document.getElementById('product_quantity').className = "d-none";
            document.getElementById('product_quantity_count').innerText = 1;
            return;
        } else {
            // document.getElementById('quantity').className = "";
            document.getElementById('product_quantity_count').innerText = parseInt(count) -  1;
        }
    }
    function quantityInc() {
        let count = document.getElementById('product_quantity_count').innerText;
        document.getElementById('product_quantity_count').innerText = parseInt(count) +  1;
    }
</script>

<script>
     function openToggle(value) {
         console.log(value);
        document.getElementById("cartSidbar").style.display = "block";
        document.getElementById("cartOverlay").style.display = "block";
    }

    function openAddToggle(value) {
        document.getElementById("addSidbar").style.display = "block";
        document.getElementById("cartOverlay").style.display = "block";
    }

    function closeAddToggle() {
        document.getElementById("addSidbar").style.display = "none";
        document.getElementById("cartOverlay").style.display = "none";
    }

    function closeToggle() {
        document.getElementById("cartSidbar").style.display = "none";
        document.getElementById("cartOverlay").style.display = "none";
    }
    function fun1(class_name) {
        let homeDeliver = document.getElementsByClassName('home-deliver')[0];
        let storePickUp = document.getElementsByClassName('store-pickup')[0];
        if (class_name == 'home-deliver') {
            homeDeliver.classList.add('active-delivery-address');
            storePickUp.classList.remove('active-delivery-address');
            document.getElementById('store_deliver_note').innerHTML = "";
        } else if (class_name == 'store-pickup') {
            document.getElementById('store_deliver_note').innerHTML = "Note : If you come late , you need to wait sometime to pack your products.";
            storePickUp.classList.add('active-delivery-address');
            homeDeliver.classList.remove('active-delivery-address');
        }
    }
</script>
