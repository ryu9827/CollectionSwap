<?php
include_once('includes/header.php');
if (isset($_SESSION['u_id'])){
		header("Location:profile.php");
	}
//$verify=$_GET['verify'];
$verify = @stripslashes(trim($_GET['verify']));
?>
<script type="text/javascript">
    function formval(){
        if (check()){
            alert("Congratulations! Registration is successful. Transfer to the homepage.")
            return true;
        }
        else {
            return false;
        }
    }

    function check() {
        pwd = document.getElementById('pwd').value;
        pwd2 = document.getElementById('pwd2').value;

        patt_pwd = /^[0-9a-zA-Z#&*]{3,16}$/;

        if (pwd == "" || pwd == null || patt_pwd.test(pwd) == false) {
            document.getElementById('pwd').style.background = "yellow";

            $('#pwd_div').removeClass('invisible');
            result = false;
        }else{
            $('#pwd_div').addClass('invisible');
        }

        if (pwd2 == "" || pwd2 !== pwd) {
            document.getElementById('pwd2').style.backgroundColor = "yellow";
            $('#pwd2_div').removeClass('invisible');
            result = false;
        }else{
            $('#pwd2_div').addClass('invisible');
        }

        return result;
    }
</script>
<div class="container-fluid">
	<div style="height: 100px; visibility:hidden;"></div>
	<div style="text-align: center">
		<h2>Reset Your Password</h2>
	</div>
	<br><br><br>
			<form class="form-horizontal" action="includes/passwordreset.php" method="POST" onsubmit="return formval()">
				<div class="form-group">
     <div class="col-md-4 col-md-offset-4">
						<input type="password" class="form-control" name="pwd" id="pwd" placeholder="New Password">
					</div>
      <div class="invisible" id="pwd_div">
        <button type="button" class="btn btn-xs btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-info-sign text-danger" aria-hidden="true"></span>
        </button>Only English letters, numbers and '#' '&' '*' are accepted.
      </div>
					<br><br>
					<div class="col-md-4 col-md-offset-4">
						<input type="password" class="form-control" name="cpwd" id="pwd2" placeholder="Confirm Password">
					</div>
      <div class="invisible" id="pwd2_div">
        <button type="button" class="btn btn-xs btn-default" aria-label="Left Align">
          <span class="glyphicon glyphicon-info-sign text-danger" aria-hidden="true"></span>
        </button>The two passwords don't match.
      </div>
					<br><br>
                        <input type="hidden" name="verify" value="<?php echo $verify?>">
					<div class="col-md-4 col-md-offset-4">                    
						<button type="submit" class="btn btn-info btn-lg" name="submit">Submit</button>							
					</div>  					
				</div>
			</form>
			<br>
			
			
			<br><br><br>

<?php
include_once('includes/footer.php');
?>