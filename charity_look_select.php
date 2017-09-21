<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>


	<div style="text-align: center">
		<h2>Look For Charity</h2><br/><br/>
        <h4>Select a Set</h4>
	</div><br/>

<?php
	include_once 'includes/dbh.inc.php';
	$u_id = $_SESSION['u_id'];
	$sql = "select * from user_sets_details where user_id='$u_id'";
	$result = mysqli_query($conn, $sql);
	while ($rows = mysqli_fetch_row($result)){
		// echo $rows[3]."<br/>";
		echo '
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">			
				<a href="charity_look_cardList.php?set_id='.$rows[2].'" class="thumbnail">
					<img src="'.$rows[3].'" class="img-responsive center-block" alt="'.$rows[4].'">
				</a>	
			</div>
		</div>
        
        <div class="row text-center">			
			<h4 class="text-center">'.$rows[4].'</h4>			
		</div>
		<br/><br/>
		';
	}





?>

	<div style="height: 400px; visibility:hidden;"></div>
			

<?php
	include_once 'includes/footer.php';
?>