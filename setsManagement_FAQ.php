<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>


	<div style="text-align: center">
		<h2>Frequently Asked Questions</h2>
	</div><br/>

	<div class="col-xs-12">
		<div class="row">
			<ul class="nav nav-tabs">
				<li role="presentation"><a href="setsManagement">My Collection</a></li>
				<li role="presentation"><a href="setsManagement_messages">Messages</a></li> 
				<li role="presentation"><a href="setsManagement_history">History</a></li>
                <li role="presentation" class="active"><a href="setsManagement_FAQ">FAQ</a></li>
			</ul>
			<br/><br/>
		</div>
	</div>
	<br/>




	<div style="height: 300px; visibility:hidden;"></div>
			

<?php
	include_once 'includes/footer.php';
?>