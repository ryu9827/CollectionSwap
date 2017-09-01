<?php
include_once('includes/header.php');
if (isset($_SESSION['u_id'])){
		header("Location:profile.php");
	}
?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#submit').click(function(){
			$('#submit').hide();
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
			<form class="form-horizontal" method="POST">
				<div class="form-group">
					<div class="row">					
				        <label for="uid" class="col-xs-2 col-md-offset-2 control-label">E-mail: </label>
				        <div class="col-xs-4">
							<input type="text" class="form-control" name="uid" placeholder="Valid E-mail address">						
						</div>
						<button id="submit" class="btn btn-info" name="submit">Sent E-mail</button>	
					</div>					 					
				</div>
			</form>
			</br>
			
			</br></br></br>
			<div style="text-align: center"> 						
				<p>Remember your password? &nbsp<a href="login.php" style="text-decoration: underline;">Login</a></p>			
			</div> 			
			
			<!--the popup modal shows if the e-mail been send successfully-->
			<div class="modal fade bs-example-modal-sm" tabindex="-1" id="tips" role="dialog" aria-labelledby="mySmallModalLabel" style="top:250px">
			  <div class="modal-dialog modal-sm" role="document">
			    <div class="alert alert-success" role="alert">E-mail has been send successfully.</div>
			  </div>
			</div>
					
<?php
include_once('includes/footer.php');
?>