<?php
	include_once 'includes/header.php';

	// if (!isset($_SESSION['u_id'])){
	// 	header("location:login.php");
	// }
?>
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


<div class="row">
    <div class="col-xs-6">
        <div id="map"></div>
    </div>
    <div class="col-xs-6">
        <div class="thumbnail" >
            <img src="images/contactUs.jpg">
        </div>
    </div>
</div>
<div style="height: 200px; visibility:hidden;"></div>


<?php
	include_once 'includes/footer.php';
?>