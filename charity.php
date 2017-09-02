<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>

	<div style="text-align: center">
		<h2>What do you want?</h2>
	</div>
  <br/><br/>

  <div class="row">
      <div class="col-xs-2 col-xs-offset-5">      
        <a href="php" class="thumbnail">
          <img src="images/offerCharity.png" class="img-responsive" alt="Offer Charity">
        </a>  
      </div>
  </div>
  <br/><br/>
  <div class="row">
      <div class="col-xs-2 col-xs-offset-5">      
        <a href="php'" class="thumbnail">
          <img src="images/lookForCharity.png" class="img-responsive" alt="Look For Charity">
        </a>  
      </div>
  </div>

<!-- 页脚保留一些空白 -->
<div style="height: 300px; visibility:hidden;"></div>	
	
<?php
	include_once 'includes/footer.php';
?>