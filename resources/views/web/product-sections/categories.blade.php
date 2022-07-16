<!-- Products content -->

@if(!empty($result['commonContent']['categories']))
<section class="categories-content pro-content container">
    <div class="row">
        <div class="col-12 col-lg-6 pro-heading-title">
            <h2> @lang('website.Categories')</h2>
        </div>
    </div>
   <div class="row">
    <?php $counter = 0;?>
    @foreach($result['commonContent']['categories'] as $categories_data)
        @if($counter<=7)

        <div class="col-12 col-md-6 col-lg-3">
            <div class="card text-center categories categories-background shadow-sm p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <a href="{{ URL::to('/shop?category='.$categories_data->slug)}}">
                        <!-- <img class="img-fluid" src="{{asset('').$categories_data->path}}" alt="{{$categories_data->name}}"> -->
                        <img src="{{asset('images/category-images/food-png-19662 1 (1).png')}}"/>
                        <h3 class="card-text pt-5 categories-name">{{$categories_data->name}}</h3>
                    </a>
                </div>
            </div>
        </div>

        @endif
        <?php $counter++;?>
    @endforeach
   </div>
  </section>
  @endif

<style>
    .pro-content .categories-name {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-style: normal !important;
        font-weight: 500 !important;
        font-size: 18px !important;
        line-height: 24px !important;
        letter-spacing: 0.2px !important;
        color: #373737 !important;
    }
    .pro-heading-title {
        padding-bottom: 16px !important;
        margin-top: 0px !important;
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-style: normal !important;
        font-weight: 500 !important;
        font-size: 26px !important;
        line-height: 32px !important;
        letter-spacing: 0.2px !important;
        color: #373737 !important;
    }
    .pro-content {
        padding-top: 30px !important;
    }
    .pro-heading-title h2{
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
    .categories-background {
        background: #F9C0C0 !important;
    }
</style>
