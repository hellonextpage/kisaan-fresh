<style>
    /* add address */
    .search-field-address {
        border-radius: 30px !important;
        border: 1px solid #C4CDDD;
    }
    .search-field-address input[type="search"] {
        width: 86%;
        border: none;
        padding-bottom: 5px;
        padding-top: 5px;
    }
    .search-field-address input:focus{
        outline: none;
    }
    .search-field-address .fa, .search-field-address ::placeholder {
        color: #828C9F;
        font-size:11px;
    }
    .w3-sidebar {
        width: 380px !important;
        min-height: 1020px;
        position: absolute !important;
    }
    .address-form .form-control {
        border:none;
        border-bottom: 1px solid gray !important;
        padding: 0px;
    }
    .address-form .form-control:focus {
        z-index: 0 !important;
        box-shadow: none;
        border: none;
        border-bottom: 1px solid gray !important;
    }
    .address-form label, .gps-location {
        color: #828C9F;
        font-family: 'Poppins-Regular', 'sans-serif' !important;
        font-size: 13px;
        margin-bottom: 0px;
    }
    .save-address-button {
        background: #2DAE1F !important;
        border-radius: 7px !important;
        font-family: 'Poppins-Medium', 'sans-serif' !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 11px !important;
        line-height: 14px !important;
        letter-spacing: 0.2px !important;
        color: #f1ebeb !important;
        text-transform: capitalize !important;
        text-align: center;
    }
    .gps-location{
        border-radius: 30px;
        padding: 10px 15px;
        cursor: pointer;
    }
    .close-button {
        font-family: 'Poppins-Regular', sans-serif !important;
        font-weight: 100;
        font-size: 32px;
        cursor:pointer;
    }
</style>

<div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:9999" id="mySidebar">
    <div class="d-flex pt-3">
        <div class="p-2 pt-3 pl-4">
            <h4 style="font-family: 'Poppins-Medium', 'sans-serif' !important; font-weight: 300;">Add Address</h4>
        </div>
        <div class="ml-auto p-2 pr-4 close-button" onclick="w3_close()">&times;</div>
    </div>
    <div>
        <div class="search-field-address ml-3 mr-5">
            <i class="fa fa-search pl-2"></i>
            <input  class="pl-2" type="search" name="search" placeholder="Search for area, landmark or apartment">
        </div>
        <p class="text-center">or</p>
        <div class="gps-location ml-3 mr-5 text-center shadow-sm">
            <i class="fa fa-map-marker mr-2" aria-hidden="true"></i>
            <span>Choose GPS Location</span>
        </div>
        <hr class="ml-2 mr-2">
    </div>
    <form class="px-5 address-form">
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" name="name" aria-describedby="NameHelp">
        </div>

        <div class="form-group">
            <label for="houseNumber">Enter Flat/ House number</label>
            <input type="text" class="form-control" id="houseNumber" name="houseNumber" aria-describedby="houseNumberHelp">
        </div>

        <div class="form-group mr-4">
            <label for="Landmar">Landmark</label>
            <input type="text" class="form-control" id="Landmark" name="landmark" aria-describedby="LandmarkHelp">
        </div>

        <div class="form-group mr-4">
            <label for="City">City</label>
            <input type="text" class="form-control" id="City" name="city" aria-describedby="CityHelp">
        </div>

        <div class="form-group mr-4">
            <label for="phoneNumber">phone Number</label>
            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" aria-describedby="phoneNumberHelp">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="default_address" name="defaultAddress">
            <label class="form-check-label" for="default_address" style="color:#333;">Set as Default Address</label>
        </div>
        <button type="button" class="btn btn-lg btn-block save-address-button mt-5">Save Address</button>
    </form>
</div>
    <!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" style="cursor:pointer" id="myOverlay"></div>