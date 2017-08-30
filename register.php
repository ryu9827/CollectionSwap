<?php
include_once('includes/header.php');
	if (isset($_SESSION['u_id'])){
		header("Location:profile.php");
	}
?>

	<div style="text-align: center">
		<h2>Signup</h2>
	</div>
	</br>
			<form class="form-horizontal" action="includes/signup.inc.php" method="POST">
				<div class="form-group">
					<label for="Firstname" class="col-xs-2 col-xs-offset-2 control-label">First Name: </label>
					<div class="col-xs-4">
						<input type="text" class="form-control" name="first" placeholder="First name">
					</div>
					</br></br></br>
					<label for="Lastname" class="col-xs-2 col-xs-offset-2 control-label">Last Name: </label>
					<div class="col-xs-4">
						<input type="text" class="form-control" name="last" placeholder="Last name">
					</div>
					</br></br></br>
					<label for="email" class="col-xs-2 col-xs-offset-2 control-label">E-mail: </label>
					<div class="col-xs-4">
						<input type="text" class="form-control" name="email" placeholder="E-mail">
					</div>
					</br></br></br>
					<label for="Postcode" class="col-xs-2 col-xs-offset-2 control-label">Postcode: </label>
					<div class="col-xs-4">
			            <input type="text" class="form-control" name="postcode" placeholder="Postcode">
			        </div>
			        </br></br></br>
			        <label for="uid" class="col-xs-2 col-xs-offset-2 control-label">User Name: </label>
			        <div class="col-xs-4">
						<input type="text" class="form-control" name="uid" placeholder="User name">
					</div>
					</br></br></br>
					<label for="pwd" class="col-xs-2 col-xs-offset-2 control-label">Password: </label>
					<div class="col-xs-4">
						<input type="password" class="form-control" name="pwd" placeholder="Password">
					</div>
					</br></br></br>  
					<label for="pwd2" class="col-xs-2 col-xs-offset-2 control-label">Confirm Password: </label>
					<div class="col-xs-4">
						<input type="password" class="form-control" name="pwd2" placeholder="Comfirm Password">
					</div>
					</br></br></br>  
					<div class="col-xs-4 col-xs-offset-4">                    
						<button type="submit" class="btn btn-info btn-lg" name="submit">Sign up</button>	
						<h4 class="pull-right">Have an account already? &nbsp<a href="login.php" style="text-decoration: underline;">Log in</a></h4>				
					</div>  					
				</div>
			</form>
					

<?php
include_once('includes/footer.php');
?>