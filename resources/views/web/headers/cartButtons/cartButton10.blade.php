
<style type="text/css">
    .header-maxi .pro-header-right-options li button .badge {
        font-family: 'Poppins' sans-serif !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 11px !important;
        line-height: 14px !important;
        letter-spacing: 0.2px !important;
        color: #10A200 !important;
        background: #c2e8bd !important;
        right:0px !important;
        min-height: 19px !important;
        min-width: 19px !important;
        top:0px !important;
        border-radius: 50% !important;
    }
</style>


<?php $qunatity=0; ?>
@foreach($result['commonContent']['cart'] as $cart_data)
    <?php $qunatity += $cart_data->customers_basket_quantity; ?>
@endforeach

<button id="dropdownCartButton" class="btn dropdown-toggle" type="button" id="headerOneCartButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" > 
    <div class="cart-left">
     <img src="{{asset('images/carticon.svg')}}">
     <span class="badge badge-success">{{ $qunatity }}</span>
    </div>
   </button> 
   @if(count($result['commonContent']['cart'])>0)

<div class="shopping-cart shopping-cart-empty dropdown-menu dropdown-menu-right" aria-labelledby="dropdownCartButton_1">
    <ul class="shopping-cart-items">
        <?php
            $total_amount=0;
            $qunatity=0;
        ?>
        @foreach($result['commonContent']['cart'] as $cart_data)

        <?php
                     $total_amount += $cart_data->final_price*$cart_data->customers_basket_quantity;
                    $qunatity 	  += $cart_data->customers_basket_quantity; ?>
        <li>
            <div class="item-thumb">
               <div class="image">
                    <img class="img-fluid" src="{{asset('').$cart_data->image}}" alt="{{$cart_data->products_name}}"/>
                </div>
            </div>
            <div class="item-detail">
                <h3 class="item-name">{{$cart_data->products_name}}</h3>
                <div class="item-s">{{$cart_data->customers_basket_quantity}} x {{Session::get('symbol_left')}}{{$cart_data->final_price*session('currency_value')}}{{Session::get('symbol_right')}}
                <a href="{{ URL::to('/deleteCart?id='.$cart_data->customers_basket_id)}}"><i class="fas fa-trash"></i></a></div>
           </div>
        </li>
        @endforeach
        <li>
            <span class="item-summary">@lang('website.SubTotal')&nbsp;:&nbsp;<span>{{Session::get('symbol_left')}}{{ $total_amount*session('currency_value') }}{{Session::get('symbol_right')}}</span>
            </span>
        </li>
    
        <li>
              <a class="btn btn-link btn-block" href="{{ URL::to('/viewcart')}}">@lang('website.View Cart')</a>
              <a class="btn btn-secondary btn-block swipe-to-top" href="{{ URL::to('/checkout')}}">@lang('website.Checkout')</a>     
       </li>
 </ul>

</div>

@else

<div class="shopping-cart shopping-cart-empty dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
    <ul class="shopping-cart-items">
        <li>@lang('website.You have no items in your shopping cart')</li>
    </ul>
</div>
@endif

<!--
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
-->