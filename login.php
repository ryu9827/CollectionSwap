<?php
include_once('includes/header.php');
if (isset($_SESSION['u_id'])){
    
		header("Location:profile.php");
	}
?>
<div class="container-fluid">
	<div style="height: 100px; visibility:hidden;"></div>
	<div style="text-align: center">
		<h2>Login</h2>
	</div>
	</br>
			<form class="form-horizontal" action="includes/login.inc.php" method="POST">
				<div class="form-group">					
			        <label for="uid" class="col-sm-2 col-md-offset-2 control-label">User Name: </label>
			        <div class="col-md-4">
						<input type="text" class="form-control" name="uid" placeholder="User name/email">
					</div>
					</br></br></br>
					<label for="pwd" class="col-sm-2 col-md-offset-2 control-label">Password: </label>
					<div class="col-md-4">
						<input type="password" class="form-control" name="pwd" placeholder="Password">
					</div> 
					</br></br></br>
					<div class="col-md-4 col-md-offset-4">
						<button type="submit" class="btn btn-info btn-lg" name="submit">Log in</button>	
						<h4 class="pull-right">Don't have an account yet? &nbsp<a href="register.php" style="text-decoration: underline;">Signup</a></h4>				
					</div>  					
				</div>
			</form>
			</br>
			
	<p class="text-center"><a href="forgetPwd">Forget your password?</a></p>
					

<?php
include_once('includes/footer.php');
?>
