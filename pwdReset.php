<?php
include_once('includes/header.php');
if (isset($_SESSION['u_id'])){
		header("Location:profile.php");
	}
?>

</script>
<div class="container-fluid">
	<div style="height: 100px; visibility:hidden;"></div>
	<div style="text-align: center">
		<h2>Input your new password</h2>
	</div>
	</br></br>
	<div style="text-align: center">
		<H4>Your password has been reset. Please input your new password.</H4>
	</div>
	</br>
			<form class="form-horizontal" action="includes/passwordreset.php" method="POST">
				<div class="form-group">					
			        <label for="uid" class="col-sm-2 col-md-offset-2 control-label">New Password: </label>
			        <div class="col-md-4">
						<input type="text" class="form-control" name="uid" placeholder="New Password">
					</div>
					</br></br></br>
					<label for="pwd" class="col-sm-2 col-md-offset-2 control-label">Confirm Password: </label>
					<div class="col-md-4">
						<input type="password" class="form-control" name="pwd" placeholder="Confirm Password">
					</div> 
					</br></br></br>
					<div class="col-md-4 col-md-offset-4">                    
						<button type="submit" class="btn btn-info btn-lg" name="submit">Submit</button>							
					</div>  					
				</div>
			</form>
			</br>
			
			
			</br></br></br>					

<?php
include_once('includes/footer.php');
?>