
<link rel="stylesheet" href="{{asset('web/css/sidebar/sidebar.css')}}"/>
<style>
    nav[aria-label=breadcrumb] {
        background-color: #ECEFF2 !important;
    }
    .profile-titles {
        color:#828C9F;
    }
    p{
        font-family: 'Poppins-Regular', 'sans-serif' !important;
    }
    .prodile-information .fa {
        font-size: 18px;
        color:#828C9F;
    }
    .prodile-information, .saved-address {
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-size: 13px;
    }
    .saved-address .fa-pencil, .saved-address .fa-trash-alt {
        font-size: 15px;
        color: #828C9F;
    }
    
</style>

@include('web.shipping')

@extends('web.layout')
@section('content')



<div class="container-fuild">
  <nav aria-label="breadcrumb">
    <div class="container">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ URL::to('/')}}">@lang('website.Home')</a></li>
        <li class="breadcrumb-item active" aria-current="page">@lang('website.myProfile')</li>

      </ol>
    </div>
  </nav>
</div> 

   <!-- profile content -->
    <section style="background:#fff" class="pt-5 pb-5">
    

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card shadow-sm prodile-information" style="border:none">
                        <div class="card-body">
                            <p class="profile-titles">Profile Information</p>
                            <div class="media border-bottom pb-2">
                                <i class="fa fa-user mr-3 align-self-center" aria-hidden="true"></i>
                                <div class="media-body">
                                    <p class="mb-0 profile-titles">Name</p>
                                    <p class="mb-0">Dilip Saga</p>
                                </div>
                            </div>

                            <div class="media pb-2 pt-2">
                                <i class="fa fa-envelope-o mr-3 align-self-center" aria-hidden="true"></i>
                                <div class="media-body">
                                    <p class="mb-0 profile-titles">Email Address</p>
                                    <p class="mb-0">dilip_saga@gmail.com</p>
                                </div>
                            </div>

                            <div class="media border-bottom pb-2 pt-2">
                                <i class="fa fa-phone mr-3 align-self-center" aria-hidden="true"></i>
                                <div class="media-body">
                                    <p class="mb-0 profile-titles">Phone Number</p>
                                    <p class="mb-0">+91 - 987456213</p>
                                </div>
                            </div>

                            <div class="media border-bottom pb-2 pt-2">
                                <i class="fa fa-user-o mr-3 align-self-center" aria-hidden="true"></i>
                                <div class="media-body">
                                    <p class="mb-0 profile-titles">Gender</p>
                                    <p class="mb-0">Male</p>
                                </div>
                            </div>

                            <div class="media border-bottom pb-2 pt-2">
                                <i class="fa fa-calendar-o mr-3 align-self-center" aria-hidden="true"></i>
                                <div class="media-body">
                                    <p class="mb-0 profile-titles">DOB</p>
                                    <p class="mb-0">13 - 12 -1994</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-lg-6">
                    <div class="card saved-address shadow-sm" style="border:none">
                        <div class="card-body">
                            <div class="d-flex mb-2">
                                <div class="profile-titles">Saved Addresses</div>
                                <div class="ml-auto">
                                    <span onclick="w3_open()" style="color: #2DAE1F;cursor:pointer">+Add new Address</span>
                                </div>
                            </div>
                            <div class="border-bottom pt-3 pb-2">
                                
                                <div class="d-flex pb-3">
                                    <div>Home <span style="color:#5f5b5b">(Default)</span></div>
                                    <div class="ml-auto">
                                        <span class="mr-2"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-trash-alt" aria-hidden="true"></i></span>
                                    </div>
                                </div>

                                <div style="color:#373737;padding-right: 9.5rem;font-size: 12px;">
                                    # 34, Apartment sit amet, consectetur adipiscing elit.
                                    Pellentesque amet fermentum arcu the Ride PIN - 560089

                                    Phone number : +91- 98765 67898
                                </div>
                            </div>

                            <div class="border-bottom pt-3 pb-2">
                                
                                <div class="d-flex pb-3">
                                    <div>Office</div>
                                    <div class="ml-auto">
                                        <span class="mr-2"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                                        <span><i class="fa fa-trash-alt" aria-hidden="true"></i></span>
                                    </div>
                                </div>

                                <div style="color:#373737;padding-right: 9.5rem;font-size: 12px;">
                                    # 34, Apartment sit amet, consectetur adipiscing elit.
                                    Pellentesque amet fermentum arcu the Ride PIN - 560089

                                    Phone number : +91- 98765 67898
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>

 @endsection

 <script>
     function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }
</script>
