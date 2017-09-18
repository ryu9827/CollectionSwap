<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>


	<div style="text-align: center">
		<h2>Sets Management</h2>
	</div><br/>

	<div class="col-xs-12">
		<div class="row">
			<ul class="nav nav-tabs">
				<li role="presentation" class="active"><a href="#">My Collection</a></li>
				<li role="presentation"><a href="setsManagement_messages">Messages</a></li> 
				<li role="presentation"><a href="setsManagement_history">History</a></li> 
			</ul>
			<br/><br/>
		</div>
	</div>
	<br/>

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
				<a href="setsManagement_cardList?set_id='.$rows[2].'" class="thumbnail">
					<img src="'.$rows[3].'" class="img-responsive center-block" alt="'.$rows[4].'">
				</a>	
			</div>
			<div class="col-xs-2">
			    <a href="setsManagement_cardList?set_id='.$rows[2].'" class="btn btn-info">Edit</a>
			    <a href="includes/removeSet?set_id='.$rows[2].'"  class="btn btn-danger">Remove it</a>			       
			</div>
		</div>
		<p class="text-center">'.$rows[4].'</p><br/><br/>';
	}





?>
    <button type="submit" class="btn btn-success btn-lg center-block" onclick="location.href='setsManagement_addSet.php'" >+ Add New Collection +</button>
	<div style="height: 500px; visibility:hidden;"></div>	
			

<?php
	include_once 'includes/footer.php';
?>