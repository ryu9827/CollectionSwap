<?php
include_once('includes/header.php');
if (isset($_SESSION['u_id'])){
		header("Location:profile.php");
	}
//$verify=$_GET['verify'];
$verify = @stripslashes(trim($_GET['verify']));
?>

</script>
<div class="container-fluid">
	<div style="height: 100px; visibility:hidden;"></div>
	<div style="text-align: center">
		<h2>Reset Your Password</h2>
	</div>
	</br></br></br>
			<form class="form-horizontal" action="includes/passwordreset.php" method="POST">
				<div class="form-group">
			        <div class="col-md-4 col-md-offset-4">
						<input type="password" class="form-control" name="pwd" placeholder="New Password">
					</div>
					</br></br></br>
					<div class="col-md-4 col-md-offset-4">
						<input type="password" class="form-control" name="cpwd" placeholder="Confirm Password">
					</div> 					
					</br></br></br>
                        <input type="hidden" name="verify" value="<?php echo $verify?>">
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