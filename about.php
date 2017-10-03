<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>


	<div style="text-align: center">
		<h2>About Is Not Completed Yet...</h2>
	</div><br/>






	<div style="height: 300px; visibility:hidden;"></div>
			

<?php
	include_once 'includes/footer.php';
?>