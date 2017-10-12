<?php
	include_once 'includes/header.php';
?>
    <div class="container">
<style>
    #map {
        height: 400px;
        width: 100%;
    }
</style>
<!--    <h3>My Google Maps</h3>-->
<script>
    function initMap() {
        var uluru = {lat: -41.224055, lng: 174.884026};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAroByxAS-D3s7vk4ytfR_X7nzEH2aF2fc&callback=initMap">
</script>

<div style="text-align: center">
	<h2>Contact Us</h2><br/><br/>
    <h3>Need to get in touch?</h3>
</div><br/>

<div style="text-align: center">
    <h3 style="text-align: center">Want to send us something in the mail?</h3><br/><br/>
    <h3 style="text-align: center">Drop an email to <a href="mailto:hello@collectionswap.co.nz">collectionswap@gmail.com</a> and we will get back to you ASAP!</h3><br/><br/>
</div>

<div class="row">
    <div class="col-xs-6">
        <div id="map"></div>
    </div>
    <div class="col-xs-6">
        <div class="thumbnail" >
            <img src="images/about&contactUs/contact.png">
        </div>
    </div>
</div>
<p>Collection Swap, 21 Kensington Av, Petone, Wellington 5012, New Zealand</p><br/><br/>
<div style="height: 50px; visibility:hidden;"></div>

</div>
<?php
	include_once 'includes/footer_contact&about.php';
?>