<?php include('header.php'); ?>


<!-- google map --> 
<div id="map"></div>


<!-- contact form and contact details-->
<div class="container info_text contacts_style">
    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="margin_top">
                <h2>Contact us</h2>
                <p>If you have any suggestions or questions you can find us via our contact details in the grey box below. Furthermore,  you can also simply fill out the following form to contact us right now.</p>
                <p>Thank you!</p>
                
            </div>
            <div class="margin_top">
                <div class="bs-callout bs-callout-warning hidden">
                    <h4>Oh snap!</h4>
                    <p>This form seems to be invalid  :(</p>
                </div>
            </div>
            <div class="margin_top">
                <div class="bs-callout bs-callout-info hidden">
                    <h4>Yay!</h4>
                    <p>Everything seems to be ok :) We will contact you as soon as possible!</p>
                </div>
            </div>
            <form id="demo-form" data-parsley-validate="">
                <div class="margin_top">
                    <label for="fullname" title="This field is required">Full Name * :</label>
                    <input class="form-control" 
                           type="text"
                           name="fullname" 
                           data-parsley-required="true"  
                           data-parsley-required-message="Please, type your name"  
                           data-parsley-minlength="2" 
                           data-parsley-maxlength="100" >
                </div>
                <div class="margin_top">
                    <label for="email" title="This field is required">Email * :</label>
                    <input class="form-control" 
                           name="email" 
                           data-parsley-trigger="change" 
                           data-parsley-required="true" 
                           data-parsley-required-message="Please, enter your e-mail" 
                           data-parsley-type="email"
                           data-parsley-type-message="Please, type valid e-mail">
                </div>
                <div class="margin_top">
                    <label for="fullname" title="This field is required">Subject * :</label>
                    <input class="form-control"  
                           type="text"
                           name="fullname" 
                           data-parsley-required="true"
                           data-parsley-minlength="2" 
                           data-parsley-maxlength="100">
                </div>
                <div class="margin_top">
                    <label for="message" title="This field is required">Message *:</label>
                    <textarea 
                        id="message" 
                        class="form-control" 
                        name="message" 
                        data-parsley-trigger="keyup" 
                        data-parsley-required="true" 
                        data-parsley-minlength="20" 
                        data-parsley-maxlength="500" 
                        data-parsley-minlength-message="Come on! You need to enter at least a 20 character comment.." 
                        data-parsley-validation-threshold="10"
                        ></textarea>
                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="row">
                        <input class="btn btn-default send_btn " value="Send message" type="submit">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-6 col-xs-12">
            <img id="contact_img" src="img/1.jpg" alt="The Rhodopes" />
        </div>
    </div>
</div> 


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script type="text/javascript">

    function initialize() {
        var myLatlng = new google.maps.LatLng(51.5005765,-0.1354143);
        var mapOptions = {
            scrollwheel: false,
            scaleControl: false,
            draggable: false,
            zoom: 14,
            center: myLatlng

                    //mapTypeId: google.maps.MapTypeId.SATELLITE
        }
        var map = new google.maps.Map(document.getElementById('map'), mapOptions);

        var infowindow = new google.maps.InfoWindow({
            content: 'The Rhodopes Mountain, Bulgaria '
        });

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Dream Land'
        });

        google.maps.event.addListener(marker, 'click', function () {
            infowindow.open(map, marker);
        });

    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>



<?php include('footer.php'); ?>


