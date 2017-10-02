<?php
	include_once 'includes/header.php';

	// if (!isset($_SESSION['u_id'])){
	// 	header("location:login.php");
	// }
?>


	<div style="text-align: center">
		<h2>You want to see what is in this platform? Select a Set to get started.</h2>
	</div><br/>

<?php
	include_once 'includes/dbh.inc.php';	
	$sql = "select * from sets_exist where ishidden='0';";
	$result = mysqli_query($conn, $sql);
	while ($rows = mysqli_fetch_row($result)){
		// echo $rows[3]."<br/>";
		echo '
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">			
				<a href="explore_inputNum.php?set_id='.$rows[0].'" class="thumbnail">
					<img src="'.$rows[2].'" class="img-responsive center-block" alt="'.$rows[1].'">
				</a>	
			</div>
		</div>
		<p class="text-center">'.$rows[1].'</p>
		<p class="text-center">'.$rows[3].' users are collecting "'.$rows[1].'".</p><br/><br/>';
	}
?>
	
	<div style="height: 200px; visibility:hidden;"></div>	
			

<?php
	include_once 'includes/footer.php';
?>