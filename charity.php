<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>

	<div style="text-align: center">
		<h2>Charity Session</h2>
	</div>
  <br/><br/>

  <div class="row">
      <div class="col-xs-3" style="float:none;margin: 0 auto;">      
        <a href="charity_offer_select.php" class="thumbnail">
          <img src="images/donate.jpeg" class="img-responsive" alt="Offer Charity">
        </a>  
      </div>
  </div>
<div style="text-align: center">
    <p>Donation Box</p>
</div>
  <br/><br/>
  <div class="row">
      <div class="col-xs-3"  style="float:none;margin: 0 auto;">      
        <a href="charity_look_select.php" class="thumbnail">
          <img src="images/makeWish.jpeg" class="img-responsive" alt="Look For Charity">
        </a>  
      </div>
  </div>
<div style="text-align: center">
    <p>Apply for Charity Eligibility & Participation</p>
</div>

<!-- 页脚保留一些空白 -->
<div style="height: 300px; visibility:hidden;"></div>	
	
<?php
	include_once 'includes/footer.php';
?>