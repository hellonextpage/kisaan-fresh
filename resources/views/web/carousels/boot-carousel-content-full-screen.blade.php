<!-- Bootstrap Carousel Content Full Screen -->

<style type="text/css">
  .carousel-control-prev, .carousel-control-next {
    border-radius: 50% !important;
    color: #000;
  }
  .carousel-content .carousel-control-prev, .carousel-content .carousel-control-next {
    width: 25px;
    height: 25px;
  }
  .carousel-content .carousel-control-prev::after,
.carousel-content .carousel-control-next::after {
  background-color: #10A200 !important;
}
  .carousel-indicators li {
    height: 10px !important;
    width: 10px !important;
    border-radius: 50% !important;
    
  }
  .carousel-content .carousel-indicators .active {
    background-color: #10A200 !important;
  }
  .carousel-control-prev:hover, .carousel-control-prev:focus,
  .carousel-control-next:hover, .carousel-control-next:focus {
    color: #fff !important;
  }
</style>

<section class="carousel-content">
  <div class="container-fuild">
    <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">

      @foreach($result['slides'] as $key=>$slides_data)
        <li data-target="#carouselExampleIndicators1" data-slide-to="{{ $key }}" class="@if($key==0) active @endif"></li>
      @endforeach

    </ol>
    <div class="carousel-inner">
      @foreach($result['slides'] as $key=>$slides_data)
          <div class="carousel-item  @if($key==0) active @endif">
          @if($slides_data->type == 'category')
            <a href="{{ URL::to('/shop?category='.$slides_data->url)}}">
          @elseif($slides_data->type == 'product')
            <a href="{{ URL::to('/product-detail/'.$slides_data->url)}}">
          @elseif($slides_data->type == 'mostliked')
            <a href="{{ URL::to('shop?type=mostliked')}}">
          @elseif($slides_data->type == 'topseller')
            <a href="{{ URL::to('shop?type=topseller')}}">
          @elseif($slides_data->type == 'deals')
            <a href="{{ URL::to('shop?type=deals')}}">
          @endif 
            <img class="d-block w-100"  src="{{asset('').$slides_data->path}}" width="100%" alt="First slide">
          </a>
          </div>
        @endforeach     
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
      <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
      <span class="sr-only"></span>
    </a>
  </div>
  </div>
</section>
