<?php
	include_once 'includes/header.php';
?>

<section class="main-container">
	<h2 style="text-align: center">Signup</h2>
		<div class="main-wrapper form-group">
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
		<div class="col-md-4 col-md-offset-4">
			<input type="text" class="form-control" name="first" placeholder="Firstname">
		</div>
		</br></br></br>
		<div class="col-md-4 col-md-offset-4">
			<input type="text" class="form-control" name="last" placeholder="Lastname">
		</div>
		</br></br></br>
		<div class="col-md-4 col-md-offset-4">
			<input type="text" class="form-control" name="email" placeholder="E-mail">
		</div>
		</br></br></br>
		<div class="col-md-4 col-md-offset-4">
            <input type="text" class="form-control" name="postcode" placeholder="Postcode">
        </div>
        </br></br></br>
        <div class="col-md-4 col-md-offset-4">
			<input type="text" class="form-control" name="uid" placeholder="Username">
		</div>
		</br></br></br>
		<div class="col-md-4 col-md-offset-4">
			<input type="password" class="form-control" name="pwd" placeholder="Password">
		</div>
		</br></br></br>    
		<div class="col-md-4 col-md-offset-4">                    
		<button type="submit" class="btn btn-info" name="submit">Sign up</button>
		</div>
		</form>
	</div>
</section>

<?php
	include_once 'includes/footer.php';
?>