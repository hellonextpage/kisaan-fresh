<style>
    
    .w3-sidebar {
        width: 380px !important;
    }
    .pickup-address {
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
    .close-button {
        font-family: 'Poppins-Regular', sans-serif !important;
        font-weight: 100;
        font-size: 32px;
        cursor:pointer;
    }
    .change-address input[type=radio] {
        transform: scale(1.4);
    }
    .change-address p {
        color: #373737 !important;
        font-family: 'Poppins-Regular', 'sans-serif' !important;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 13px;
    }
    /* ///////// */
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
    .add-address-arrow-left::before {
        content: "\2190";
        font-family: "revicons";
        line-height: 36px;
        font-size: 22px;
        padding-right: 10px;
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
</style>

<div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:9999;" id="cartSidbar">
    <div>
        <div class="d-flex pt-3">
            <div class="p-2 pt-3 pl-4">
                <h4 style="font-family: 'Poppins-Medium', 'sans-serif' !important; font-weight: 300;">Change Address</h4>
            </div>
            <div class="ml-auto p-2 pr-4 close-button" onclick="closeToggle()">&times;</div>
        </div>
        <div style="background:#ECEFF2; font-size:10px" class="pl-4 pt-2 pb-2 mb-4">
            2 Shops found
        </div>
        <div class="pl-5 pr-4 change-address">
            <div class="media border-bottom mb-3">
                <input class="form-check-input align-self-center pr-3" type="radio" name="addressRadios" id="addressRadios" value="option1">
                <div class="media-body ml-3">
                    <h5 class="mt-0" style="font-size:14px !important">Shop #01 J.P Nagar</h5>
                    <p>
                        # 34, Apartment sit amet, consectetur
                        adipiscing elit. Pellentesque amet fermentum
                        arcu the Ride PIN - 560089
                    </p>
                </div>
            </div>

            <div class="media mb-3 border-bottom">
                <input class="form-check-input align-self-center mr-3" type="radio" name="addressRadios" id="addressRadios" value="option1">
                <div class="media-body ml-3 ">
                    <h5 class="mt-0" style="font-size:14px !important">Shop #01 J.P Nagar</h5>
                    <p>
                        # 34, Apartment sit amet, consectetur
                        adipiscing elit. Pellentesque amet fermentum
                        arcu the Ride PIN - 560089
                    </p>
                </div>
            </div>
        </div>
        <div class="pl-3 pr-3 mt-5">
            <button type="button" class="btn btn-lg btn-block pickup-address ">Pickup from this Address</button>
        </div>
    </div>

</div>


<!-- add/eddit address -->

<div class="w3-sidebar w3-bar-block w3-animate-left" style="display:none;z-index:9999;" id="addSidbar">
<div>
    <div class="d-flex pt-3">
        <div class="p-2 pt-3 pl-4">
            <h4 style="font-family: 'Poppins-Medium', 'sans-serif' !important; font-weight: 300;" class="add-address-arrow-left">Add/ Edit Address</h4>
        </div>
        <div class="ml-auto p-2 pr-4 close-button" onclick="closeAddToggle()">&times;</div>
    </div>
    <form class="px-5 address-form">
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" id="Name" name="name" aria-describedby="NameHelp">
        </div>

        <div class="form-group">
            <label for="houseNumber">Enter Flat/ House number</label>
            <input type="text" class="form-control" id="houseNumber"  name="houseNumber" aria-describedby="houseNumberHelp">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="Landmarl" name="landmark" aria-describedby="LandmarkHelp" placeholder="Enter Landmark">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="City" name="city" aria-describedby="CityHelp" placeholder="Enter City">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" aria-describedby="phoneNumberHelp" placeholder="Enter Phone Number">
        </div>
        <button type="button" class="btn btn-lg btn-block save-address-button mt-5">Save Address</button>
    </form>
</div>
</div>
    <!-- Page Content -->
<div class="w3-overlay w3-animate-opacity" style="cursor:pointer" id="cartOverlay"></div>