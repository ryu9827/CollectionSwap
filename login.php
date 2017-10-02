<?php
include_once('includes/header.php');
if (isset($_SESSION['u_id'])){
    
		header("Location:profile.php");
	}
?>
<div class="container-fluid">
	<div style="height: 100px; visibility:hidden;"></div>
	<div style="text-align: center">
		<h2>Account Login</h2>
        <p>Manage your collections & other information regarding your account</p>
	</div>
	</br></br>
            <form class="form-horizontal" action="includes/login.inc.php" method="POST">
                <div class="form-group">
                    <label for="uEmail" class="col-sm-2 col-md-offset-2 control-label">User Name: </label>
                    <div class="col-md-4">
                        <input type="text" class="form-control" name="uid" placeholder="Email" required>
                    </div>
                    </br></br></br>
                    <label for="pwd" class="col-sm-2 col-md-offset-2 control-label">Password: </label>
                    <div class="col-md-4">
                        <input type="password" class="form-control" name="pwd" placeholder="Password" required>
                        </br>
                        <div class="body-text"><a href="forgetPwd">Forgotten your password?</a></div>
                    </div>
                    </br></br></br></br></br>
                    <div class="col-md-4 col-md-offset-4 text-left">
                        <button type="submit" class="btn btn-blue btn-lg" name="submit">Log in</button>
                    </div>
                    </br></br>
                    <div class="col-md-4 col-md-offset-4 text-right">
                        Don't have an account? &nbsp<a href="register.php" style="text-decoration: underline;">Sign up now</a>
                    </div>
                </div>
            </form>
    <div class="col-sm-2 col-md-offset-4">
        <label>Demo Account:</label> amy
        <label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Password: </label>123
    </div>
<!--	<p class="text-center"><a href="forgetPwd">Forget your password?</a></p>-->


<?php
include_once('includes/footer.php');
?>
