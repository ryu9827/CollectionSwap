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
		<h2>Reset Your Password</h2>
	</div>
	</br></br>
	<div style="text-align: center">
		<H4>Please input your register E-mail address, we will sent you an E-mail with a password reset link.</H4>
	</div>
	</br>
			<form class="form-horizontal" action="includes/sendPWEmail.php" method="POST">
				<div class="form-group">
					<div class="row">					
				        <label for="uid" class="col-xs-2 col-md-offset-2 control-label">E-mail: </label>
				        <div class="col-xs-4">
							<input type="text" class="form-control" name="uid" placeholder="Valid E-mail address">						
						</div>
						<button id="submit" type="submit" class="btn btn-info" data-toggle="modal" data-target=".bs-example-modal-sm" name="submit">Sent E-mail</button>	
					</div>					 					
				</div>
			</form>
			</br>
			
			
			</br></br></br>
			<div style="text-align: center"> 						
				<p>Remember your password? &nbsp<a href="login.php" style="text-decoration: underline;">Login</a></p>			
			</div> 			
			
			
					

<?php
include_once('includes/footer.php');
?>