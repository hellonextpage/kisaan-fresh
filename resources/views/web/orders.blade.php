<style type="text/css">
    nav[aria-label=breadcrumb] {
        background-color: #ECEFF2 !important;
    }
    nav[aria-label=breadcrumb] .breadcrumb .active::before {
    content: "\f105" !important;
    }
    .my-order-content, .my-order-content p, span {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
    }
    .my-order-content-list-buttons span {
        border-radius: 21.0065px !important;
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 11px !important;
        line-height: 14px !important;
        letter-spacing: 0.2px !important;
        
        text-transform: capitalize !important;
    }
    .active-data-button {
        color: #f1ebeb !important;
        background: #2DAE1F !important;
        padding: 11px 33px;
        cursor:pointer;
    }
    .my-order-content-list-buttons .all, .my-order-content-list-buttons .current{
        color: #373737;
        padding: 11px 47px;
        border: 1px solid #e6e4e4;
        cursor:pointer;
    }
</style>


@extends('web.layout')
@section('content')

<div class="container-fuild">
  <nav aria-label="breadcrumb">
      <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">@lang('website.My Orders')</li>
          </ol>
      </div>
    </nav>
</div> 

     <!--My Order Content -->
    <section style="background:#fff" class="pt-5 pb-5 my-order-content">
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-6 my-order-content-list-buttons text-right" style="margin-right: -20px; padding-right: 43px;">
                        <span class="current active-data-button" onclick="getOrdersData('current')">Current</span>
                </div>

                <div class="col-lg-6 my-order-content-list-buttons" style="padding-left: 0px;">
                        <span class="all" onclick="getOrdersData('all')">All</span>
                </div>
            </div>

            <div class="row mt-5" id="current_orders">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 row">
                    <div class="col-lg-12 mb-3">
                        <div class="card shadow-sm" style="border:none">
                            <div class="card-body">
                                <div class="d-flex card-text">
                                    <div>
                                        <p class="mb-0">
                                            <span style="color:#828C9F">Order Number </span>&nbsp;<span style="font-size:18px"> MK125-330064</span>
                                        </p>
                                        <p>
                                            <span style="color:#828C9F">Payment </span> &nbsp;<span style="font-size:18px"> Gpay (₹ 112.00)</span>
                                        </p>
                                    </div>
                                    <div class="ml-auto" style="color:#828C9F">
                                        02 Oct 2020
                                    </div>
                                </div>
                                
                                <div style="color:#828C9F" class="pb-1">
                                    Status
                                </div>
                                
                                <div class="d-flex card-text" style="letter-spacing: 0.02rem;">
                                    <div style="color:#11A103;cursor:pointer">
                                        Arriving
                                    </div>
                                    <div class="ml-auto" style="color:#A1DC62; cursor:pointer">
                                        View order List  >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="card shadow-sm" style="border:none">
                            <div class="card-body">
                                <div class="d-flex card-text">
                                    <div>
                                        <p class="mb-0">
                                            <span style="color:#828C9F">Order Number </span>&nbsp;<span style="font-size:18px"> MK125-330064</span>
                                        </p>
                                        <p>
                                            <span style="color:#828C9F">Payment </span> &nbsp;<span style="font-size:18px"> Gpay (₹ 112.00)</span>
                                        </p>
                                    </div>
                                    <div class="ml-auto" style="color:#828C9F">
                                        02 Oct 2020
                                    </div>
                                </div>
                                
                                <div style="color:#828C9F" class="pb-1">
                                    Status
                                </div>
                                
                                <div class="d-flex card-text" style="letter-spacing: 0.02rem;">
                                    <div style="color:#11A103;cursor:pointer">
                                        Arriving
                                    </div>
                                    <div class="ml-auto" style="color:#A1DC62; cursor:pointer">
                                        View order List  >
                                        <!-- <i class="fa fa-greater-than" aria-hidden="true"></i> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 row">
                    <div class="col-lg-12 mb-3">
                        <div class="card shadow-sm" style="border:none">
                            <div class="card-body">
                                <div class="d-flex card-text">
                                    <div>
                                        <p class="mb-0">
                                            <span style="color:#828C9F">Order Number </span>&nbsp;<span style="font-size:18px"> MK125-330064</span>
                                        </p>
                                        <p>
                                            <span style="color:#828C9F">Payment </span> &nbsp;<span style="font-size:18px"> Gpay (₹ 112.00)</span>
                                        </p>
                                    </div>
                                    <div class="ml-auto" style="color:#828C9F">
                                        02 Oct 2020
                                    </div>
                                </div>
                                
                                <div style="color:#828C9F" class="pb-1">
                                    Status
                                </div>
                                
                                <div class="d-flex card-text" style="letter-spacing: 0.02rem;">
                                    <div style="color:#36A9D7;cursor:pointer">
                                        Order Received
                                    </div>
                                    <div class="ml-auto" style="color:#A1DC62; cursor:pointer">
                                        View order List  >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <div class="card shadow-sm" style="border:none">
                            <div class="card-body">
                                <div class="d-flex card-text">
                                    <div>
                                        <p class="mb-0">
                                            <span style="color:#828C9F">Order Number </span>&nbsp;<span style="font-size:18px"> MK125-330064</span>
                                        </p>
                                        <p>
                                            <span style="color:#828C9F">Payment </span> &nbsp;<span style="font-size:18px"> Gpay (₹ 112.00)</span>
                                        </p>
                                    </div>
                                    <div class="ml-auto" style="color:#828C9F">
                                        02 Oct 2020
                                    </div>
                                </div>
                                
                                <div style="color:#828C9F" class="pb-1">
                                    Status
                                </div>
                                
                                <div class="d-flex card-text" style="letter-spacing: 0.02rem;">
                                    <div style="color:#36A9D7;cursor:pointer">
                                        Order Received
                                    </div>
                                    <div class="ml-auto" style="color:#A1DC62; cursor:pointer">
                                        View order List  >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>

            <div class="row" id="all_orders" style="display:none;">
                <div class="col-lg-1"></div>
                <div class="col-lg-5 row">
                    <div class="col-lg-12 mb-3">
                        <div class="card shadow-sm" style="border:none">
                            <div class="card-body">
                                <div class="d-flex card-text">
                                    <div>
                                        <p class="mb-0">
                                            <span style="color:#828C9F">Order Number all </span>&nbsp;<span style="font-size:18px"> MK125-330064</span>
                                        </p>
                                        <p>
                                            <span style="color:#828C9F">Payment all</span> &nbsp;<span style="font-size:18px"> Gpay (₹ 112.00)</span>
                                        </p>
                                    </div>
                                    <div class="ml-auto" style="color:#828C9F">
                                        02 Oct 2020
                                    </div>
                                </div>
                                
                                <div style="color:#828C9F" class="pb-1">
                                    Status
                                </div>
                                
                                <div class="d-flex card-text" style="letter-spacing: 0.02rem;">
                                    <div style="color:#36A9D7;cursor:pointer">
                                        Order Received completed
                                    </div> 
                                    <div class="ml-auto" style="color:#A1DC62; cursor:pointer">
                                        View order List  >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <div class="card shadow-sm" style="border:none">
                            <div class="card-body">
                                <div class="d-flex card-text">
                                    <div>
                                        <p class="mb-0">
                                            <span style="color:#828C9F">Order Number </span>&nbsp;<span style="font-size:18px"> MK125-330064</span>
                                        </p>
                                        <p>
                                            <span style="color:#828C9F">Payment </span> &nbsp;<span style="font-size:18px"> Gpay (₹ 112.00)</span>
                                        </p>
                                    </div>
                                    <div class="ml-auto" style="color:#828C9F">
                                        02 Oct 2020
                                    </div>
                                </div>
                                
                                <div style="color:#828C9F" class="pb-1">
                                    Status
                                </div>
                                
                                <div class="d-flex card-text" style="letter-spacing: 0.02rem;">
                                    <div style="color:#36A9D7;cursor:pointer">
                                        Order Received
                                    </div>
                                    <div class="ml-auto" style="color:#A1DC62; cursor:pointer">
                                        View order List  >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 row">
                    <div class="col-lg-12 mb-3">
                        <div class="card shadow-sm" style="border:none">
                            <div class="card-body">
                                <div class="d-flex card-text">
                                    <div>
                                        <p class="mb-0">
                                            <span style="color:#828C9F">Order Number </span>&nbsp;<span style="font-size:18px"> MK125-330064</span>
                                        </p>
                                        <p>
                                            <span style="color:#828C9F">Payment </span> &nbsp;<span style="font-size:18px"> Gpay (₹ 112.00)</span>
                                        </p>
                                    </div>
                                    <div class="ml-auto" style="color:#828C9F">
                                        02 Oct 2020
                                    </div>
                                </div>
                                
                                <div style="color:#828C9F" class="pb-1">
                                    Status
                                </div>
                                
                                <div class="d-flex card-text" style="letter-spacing: 0.02rem;">
                                    <div style="color:#36A9D7;cursor:pointer">
                                        Order Received
                                    </div>
                                    <div class="ml-auto" style="color:#A1DC62; cursor:pointer">
                                        View order List  >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-3">
                        <div class="card shadow-sm" style="border:none">
                            <div class="card-body">
                                <div class="d-flex card-text">
                                    <div>
                                        <p class="mb-0">
                                            <span style="color:#828C9F">Order Number </span>&nbsp;<span style="font-size:18px"> MK125-330064</span>
                                        </p>
                                        <p>
                                            <span style="color:#828C9F">Payment </span> &nbsp;<span style="font-size:18px"> Gpay (₹ 112.00)</span>
                                        </p>
                                    </div>
                                    <div class="ml-auto" style="color:#828C9F">
                                        02 Oct 2020
                                    </div>
                                </div>
                                
                                <div style="color:#828C9F" class="pb-1">
                                    Status
                                </div>
                                
                                <div class="d-flex card-text" style="letter-spacing: 0.02rem;">
                                    <div style="color:#36A9D7;cursor:pointer">
                                        Order Received
                                    </div>
                                    <div class="ml-auto" style="color:#A1DC62; cursor:pointer">
                                        View order List  >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>

        </div>
    </section>


     <!-- <section class="order-one-content pro-content">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-3  d-none d-lg-block d-xl-block">
            <div class="heading">
                <h2>
                    @lang('website.My Account')
                </h2>
                <hr >
              </div>
            @if(Auth::guard('customer')->check())
            <ul class="list-group">
                <li class="list-group-item">
                    <a class="nav-link" href="{{ URL::to('/profile')}}">
                        <i class="fas fa-user"></i>
                      @lang('website.Profile')
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" href="{{ URL::to('/wishlist')}}">
                        <i class="fas fa-heart"></i>
                     @lang('website.Wishlist')
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" href="{{ URL::to('/orders')}}">
                        <i class="fas fa-shopping-cart"></i>
                      @lang('website.Orders')
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" href="{{ URL::to('/shipping-address')}}">
                        <i class="fas fa-map-marker-alt"></i>
                     @lang('website.Shipping Address')
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link" href="{{ URL::to('/logout')}}">
                        <i class="fas fa-power-off"></i>
                      @lang('website.Logout')
                    </a>
                </li>
              </ul>
              @elseif(!empty(session('guest_checkout')) and session('guest_checkout') == 1)
              <ul class="list-group">
                <li class="list-group-item">
                    <a class="nav-link" href="{{ URL::to('/orders')}}">
                        <i class="fas fa-shopping-cart"></i>
                      @lang('website.Orders')
                    </a>
                </li>
              </ul>
              @endif
          </div> -->
          <!-- <div class="col-12 col-lg-9 ">
              <div class="heading">
                  <h2>
                      @lang('website.My Orders')
                  </h2>
                  <hr >
                </div>
                @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         {{ session()->get('message') }}
                    </div>

                @endif

              <table class="table order-table">

                <thead>
                  <tr class="d-flex">
                    <th class="col-12 col-md-2">@lang('website.Order ID')</th>
                    <th class="col-12 col-md-2">@lang('website.Order Date')</th>
                    <th class="col-12 col-md-2">@lang('website.Price')</th>
                    <th class="col-12 col-md-3" >@lang('website.Status')</th>
                    <th class="col-12 col-md-3" > Detail</th>

                  </tr>
                </thead>
                <tbody>
                  @if(count($result['orders']) > 0)
                  @foreach( $result['orders'] as $orders)
                  <tr class="d-flex">
                    <td class="col-12 col-md-2">{{$orders->orders_id}}</td>
                    <td class="col-12 col-md-2">
                      {{ date('d/m/Y', strtotime($orders->date_purchased))}}
                    </td>
                    <td class="col-12 col-md-2">
                      {{Session::get('symbol_left')}}{{$orders->order_price * session('currency_value') }}{{Session::get('symbol_right')}}
                    </td>
                    <td class="col-12 col-md-3">
                        @if($orders->orders_status_id == '2')
                            <span class="badge badge-success">{{$orders->orders_status}}</span>
                          
                        @else
                          @if($orders->orders_status_id == '3')
                            <span class="badge badge-danger">{{$orders->orders_status}} </span>
                          @elseif($orders->orders_status_id == '4')
                            <span class="badge badge-primary">{{$orders->orders_status}}</span>
                            &nbsp;&nbsp;/&nbsp;&nbsp;

                            <form action="{{ URL::to('/updatestatus')}}" method="post" onSubmit="return cancelOrder();" style="display: inline-block">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                            <input type="hidden" name="orders_id" value="{{$orders->orders_id}}">
                            <input type="hidden" name="orders_status_id" value="3">
                            <button type="submit" disabled class="badge badge-danger" style="text-transform:capitalize; cursor:pointer">@lang('website.cancel order') </button>
                            </form>                                               
                          @else
                            <span class="badge badge-primary">{{$orders->orders_status}}</span>
                            &nbsp;&nbsp;/&nbsp;&nbsp;

                            <form action="{{ URL::to('/updatestatus')}}" method="post" onSubmit="return cancelOrder();" style="display: inline-block">
                            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                            <input type="hidden" name="orders_id" value="{{$orders->orders_id}}">
                            <input type="hidden" name="orders_status_id" value="3">
                            <button type="submit" class="badge badge-danger" style="text-transform:capitalize; cursor:pointer">@lang('website.cancel order') </button>
                            </form>

                            @endif
                        @endif
                    </td>
                    <td align="right" class="col-12 col-md-3"><a href="{{ URL::to('/view-order/'.$orders->orders_id)}}">@lang('website.View Order')</a></td>
                  </tr>
                  @endforeach
                  @else
                      <tr>
                          <td colspan="4">@lang('website.No order is placed yet')
                          </td>
                      </tr>
                  @endif
                </tbody>
              </table> -->
            <!-- ............the end..... -->
          <!-- </div>
        </div>
      </div>
    </section> -->

    
<script>
    function getOrdersData(keyword) {
        let all = document.getElementById('all_orders');
        if (keyword == 'all') {
            all.style.display = "flex";
            document.getElementsByClassName('all')[0].classList.add('active-data-button');
            document.getElementsByClassName('current')[0].classList.remove('active-data-button');
        } else {
            all.style.display = "none";
            document.getElementsByClassName('current')[0].classList.add('active-data-button');
            document.getElementsByClassName('all')[0].classList.remove('active-data-button');
        }
    }
</script>
@endsection