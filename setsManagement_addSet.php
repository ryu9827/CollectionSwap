<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>


	<div style="text-align: center">
		<h2>Add New Collection</h2>
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
	$sql = "select * from sets_exist where ishidden !=1;";
	$result = mysqli_query($conn, $sql);
	while ($rows = mysqli_fetch_row($result)){
		echo '
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4 thumbnail">				
                    <img src="'.$rows[2].'" class="img-responsive center-block" alt="'.$rows[1].'" >				
                </div>
            </div>
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h4 class="text-center">'.$rows[1].'</h4>
                    <a href="includes/addSet.php?set_id='.$rows[0]. '">
                        <button class="btn btn-blue pull-right">Add to My Collection</button>
                    </a>		    
                </div>
            </div>
            <br/><br/>
		    ';
	}





?>

	<div style="height: 300px; visibility:hidden;"></div>
			

<?php
	include_once 'includes/footer.php';
?>