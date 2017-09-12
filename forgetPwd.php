<?php
include_once('includes/header.php');
if (isset($_SESSION['u_id'])){
		header("Location:profile.php");
	}
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#submit').click(event(){

		})

	});
</script>
<div class="container-fluid">
	<div style="height: 100px; visibility:hidden;"></div>
	<div style="text-align: center">
		<h2>Forgot your password?</h2>
	</div>
	</br></br>
	<div style="text-align: center">
		<H4>Please enter your registered Email address below, we will email instructions on how to reset your password.</H4>
	</div>
	</br>
			<form class="form-horizontal" action="includes/sendPWEmail.php" method="POST">
				<div class="form-group">
					<div class="row">					
				        <label for="uid" class="col-xs-2 col-md-offset-2 control-label">E-mail: </label>
				        <div class="col-xs-4">
							<input type="text" class="form-control" name="uid" placeholder="Valid E-mail address">						
						</div>
						<button id="submit" type="submit" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-sm" name="submit">Send E-mail</button>	
					</div>					 					
				</div>
			</form>
			</br>
			
			
			</br></br></br>
			<div style="text-align: center"> 						
				<p>Need help? Learn more about how to retrieve an existing account &nbsp<a href="login.php" style="text-decoration: underline;">Login</a></p>
			</div> 			
			
			
					

<?php
include_once('includes/footer.php');
?>