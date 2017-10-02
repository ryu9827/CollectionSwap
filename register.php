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
            <label for="tips" class="col-xs-2 col-xs-offset-2 control-label"> </label>
            <div>
                <p>&nbsp&nbsp&nbsp&nbsp Real information needed are marked (*) for posting collections to you </p>
            </div>

            <label for="email" class="col-xs-2 col-xs-offset-2 control-label">E-mail: </label>
			<div class="col-xs-4">
				<input type="text" class="form-control" name="email" placeholder="E-mail">
			</div>
			</br></br></br>

			<label for="uid" class="col-xs-2 col-xs-offset-2 control-label">User Name: </label>
	        <div class="col-xs-4">
				<input type="text" class="form-control" name="uid" placeholder="User name">
			</div>
			</br></br></br>

            <label for="firstname" class="col-xs-2 col-xs-offset-2 control-label">* First Name: </label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="first" placeholder="First Name">
            </div>
            </br></br></br>

            <label for="lastname" class="col-xs-2 col-xs-offset-2 control-label">* Last Name: </label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="last" placeholder="Last Name">
            </div>
            </br></br></br>

			<label for="address" class="col-xs-2 col-xs-offset-2 control-label">* Post Address: </label>
			<div class="col-xs-4">
	            <input type="text" class="form-control" name="address" placeholder="Post Address">
	        </div>
	        </br></br></br>

            <label for="post code" class="col-xs-2 col-xs-offset-2 control-label">* Post Code: </label>
            <div class="col-xs-4">
                <input type="text" class="form-control" name="postcode" placeholder="Post Code">
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
                <button type="submit" class="btn btn-blue btn-lg" name="submit">Sign up</button>
            </div>
            </br></br>

            <div class="col-md-4 col-md-offset-4 text-right">
                Have an account? &nbsp<a href="login.php " style="text-decoration: underline;">Log in</ a>
        </div>
<!--			</br></br></br>-->
<!--			<div class="col-xs-4 col-xs-offset-4">-->
<!--				<button type="submit" class="btn btn-info btn-lg" name="submit">Sign up</button>-->
<!--				<h4 class="pull-right">Have an account already? &nbsp<a href="login.php" style="text-decoration: underline;">Log in</a></h4>-->
<!--			</div>-->
		</div>
	</form>
					

<?php
include_once('includes/footer.php');
?>