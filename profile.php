<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>

<script type="text/javascript">
	function logout(){
		location.href="includes/logout.inc.php";
	}
</script>

	<div style="text-align: center">
		<h2>User Profile</h2>
	</div><br/>

<div class="row">
	<div class="col-lg-6 col-xs-offset-3">
		<div class="well">
            <form class="form-horizontal" action="#" method="POST">
                <div class="form-group">
                    <div class="row">
                        <label for="First" class="col-xs-3 control-label">First Name: </label>
                        <label for="First" class="col-xs-1 control-label"><?php echo $_SESSION['u_uid']; ?></label>
<!--                        <button type="submit" class="btn btn-info" name="submit">Save</button>-->
                    </div>
                </div>
            </form>

            <form class="form-horizontal" action="#" method="POST">
                <div class="form-group">
                    <div class="row">
                        <label for="Last" class="col-xs-3 control-label">Last Name: </label>
                        <label for="Last" class="col-xs-1 control-label"><?php echo $_SESSION['u_uid']; ?></label>
<!--                        <button type="submit" class="btn btn-info" name="submit">Save</button>-->
                    </div>
                </div>
            </form>

            <form class="form-horizontal" action="userProfile" method="POST">
                <div class="form-group">
                    <div class="row">
                        <label for="email" class="col-xs-3 control-label">E-mail: </label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" name="email" placeholder="E-mail" value="<?php echo $_SESSION['u_email']; ?>">
                        </div>
                        <button type="submit" class="btn btn-info" name="submit">Verify</button>
                    </div>
                </div>
            </form>



            <form class="form-horizontal" action="updateAddress" method="POST">
				<div class="form-group">
					<div class="row">
						<label for="uid" class="col-xs-3 control-label">Post Address: </label>
				        <div class="col-xs-6">
							<input type="text" class="form-control" name="address" placeholder="Post Address" value="<?php echo $_SESSION['u_uid']; ?>">
						</div>
						<button type="submit" class="btn btn-info" name="submit">Save</button>
  					</div>
  				</div>
			</form>

            <form class="form-horizontal" action="updatePostcode" method="POST">
                <div class="form-group">
                    <div class="row">
                        <label for="uid" class="col-xs-3 control-label">Post Code: </label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" name="postCode" placeholder="Post Code" value="<?php echo $_SESSION['u_uid']; ?>">
                        </div>
                        <button type="submit" class="btn btn-info" name="submit">Save</button>
                    </div>
                </div>
            </form>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-6 col-xs-offset-3">
		<div class="well">
			<form class="form-horizontal" action="includes/passwordreset2.php" method="POST">
				<div class="form-group">
					<div class="row">
						<label for="pwd" class="col-xs-3 control-label">Old Password: </label>
						<div class="col-xs-6">
							<input type="password" class="form-control" name="pwd" placeholder="Old Password">
						</div>
					</div>
					</br>
					<div class="row">
						<label for="pwd" class="col-xs-3 control-label">New Password: </label>
						<div class="col-xs-6">
							<input type="password" class="form-control" name="newpwd" placeholder="New Password">
						</div>
					</div>
					</br> 
					<div class="row">
						<label for="pwd2" class="col-xs-3 control-label">Confirm Password: </label>
						<div class="col-xs-6">
							<input type="password" class="form-control" name="pwd2" placeholder="Comfirm Password">
						</div>
					</div>
					</br> 
					<div class="col-xs-6 col-xs-offset-3">                    
						<button type="submit" class="btn btn-info" name="submit">Change Password</button>
					</div>  					
				</div>
			</form>
		</div>
	</div>
</div>

			
					<button type="submit" class="btn btn-danger btn-lg center-block" name="logout" onclick="logout()">Log out</button>
			
			

<?php
	include_once 'includes/footer.php';
?>
