@extends('web.layout')
@section('content')

<!-- Track Order Details -->

<style type="text/css">
    ul.timeline {
        list-style-type: none;
        position: relative;
    }
    ul.timeline:before {
        content: ' ';
        background: #eaeff1;
        display: inline-block;
        position: absolute;
        left: 27px;
        /* width: 2px; */
        border: 1px dashed #eaeff1;
        height: 76%;
    }
    ul.timeline > li {
        margin: 20px 0;
        padding-left: 20px;
    }
    ul.timeline > li:before {
        content: ' ';
        background: #eaeff1;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #eaeff1;
        left: 20px;
        width: 17px;
        height: 17px;
    }
    .timeline li.active:before,
    .timeline li.active:after {
        background: #2DAE1F !important;
    }
    .track-order {
        font-family: 'Poppins-Medium', sans-serif !important;
    }
    .track-order .fa{
        font-size: 25px;
        color: #828C9F;
    }
    .track-order span{
        color: #828C9F;
        letter-spacing: 0.04rem;
        font-size: 14px;
    }
    .track-order .address p{
        letter-spacing: 0.03rem;
        font-size: 13px;
    }
    .address-name {
        font-size: 16px !important;
        line-height: 13px !important;
        color: #828C9F !important;
    }
    nav[aria-label=breadcrumb] {
        background-color: #ECEFF2 !important;
    }
    .my-track-order-title {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-weight: 500;
    }
    .track-order {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
    }
    .track-order h1,h2,h3,h4,h5,h6 {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-weight:500 !important;
    }
    .track-order span, p {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
    }

</style>

<div class="container-fuild">
	<nav aria-label="breadcrumb">
		<div class="container">
			<ol class="breadcrumb">
			  <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
			  <li class="breadcrumb-item active" aria-current="page">Track Order</li>
			</ol>
        </div>
        <div class="container">
        <h4 class="my-track-order-title mb-0 pb-2">Track order</h4>
        </div>
	  </nav>
  </div>
  
  <section style="background:#fff" class="track-order pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4 style="font-size:19px">Order ID : AD2326225</h4>
                    <div class="d-flex border-bottom pb-3"  style="color: #828C9F !important;font-size: 15px;">
                        <div>Wed, 07 Oct</div>
                        <div class="ml-auto">Amount : ₹ 260.00</div>
                    </div>
                    <h6 style="letter-spacing: 0.05rem;" class="pt-3">
                        ETA : Fri, 09 Oct , 12:00PM - 02:00 PM
                    </h6>
                    <ul class="timeline border-bottom ">
                        <li class="active">
                            <div class="d-flex">
                                <div class="pr-2">
                                    <img src="{{asset('images/shopping-cart@1x.png')}}" alt="cart-image">
                                </div>
                                <div>
                                    <p style="font-size: 15px;letter-spacing: 0.02rem;" class="mb-1">Order Received</p>
                                    <span>Order #112 received</span>
                                </div>
                                <div class="ml-auto">
                                    <span>07 Oct , 12:30 PM</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="pr-2">
                                    <img src="{{asset('images/package@1x.png')}}"alt="cart-image">
                                </div>
                                <div>
                                    <p style="font-size: 15px;letter-spacing: 0.02rem;" class="mb-1">Item Package</p>
                                    <span>Items has been packed</span>
                                </div>
                                <div class="ml-auto">
                                    <span>-</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="pr-2">
                                    <img src="{{asset('images/delivery-truck (1) 1@1x.png')}}" alt="cart-image">
                                </div>
                                <div>
                                    <p style="font-size: 15px;letter-spacing: 0.02rem;" class="mb-1">Shipping</p>
                                    <span>Items has been Shipped from Store</span>
                                </div>
                                <div class="ml-auto">
                                    <span>-</span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="d-flex">
                                <div class="pr-2">
                                    <img src="{{asset('images/home@1x.png')}}" alt="cart-image">
                                </div>
                                <div>
                                    <p style="font-size: 15px;letter-spacing: 0.02rem;" class="mb-1">Delivered</p>
                                    <span>Items has been Delivered</span>
                                </div>
                                <div class="ml-auto">
                                    <span>-</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="d-flex ml-2 mr-2 px-4 py-3 shadow-sm address">
                        <div class="pr-2">
                            <i class="fa fa-map-marker" style="color:#2DAE1F"></i>
                        </div>
                        <div>
                            <h5 style="letter-spacing: 0.03rem;">Delivery Address</h5>
                            <h6 class="address-name">Home</h6>
                            <p>
                                # 34, Apartment sit amet, consectetur adipiscing elit.
                                Pellentesq onsectetur adipiscing elit. Pellentesq
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection