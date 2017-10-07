<?php
include_once('includes/header.php');
	if (isset($_SESSION['u_id'])){
		header("Location:profile.php");
	}
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

    function check(){

        email = document.getElementById('email').value;
        uid = document.getElementById('uid').value;
        first = document.getElementById('first').value;
        last = document.getElementById('last').value;
        address = document.getElementById('address').value;
        postcode = document.getElementById('postcode').value;
        pwd = document.getElementById('pwd').value;
        pwd2 = document.getElementById('pwd2').value;

        //regular expression
//        patt_email = /^[0-9a-zA-Z]+@[0-9a-zA-Z]+[\.]{1}(com)|(net)|(my)|(org){1}$/;
        patt_email = /^[0-9a-zA-Z]+@[0-9a-zA-Z]+[\.]{1}[0-9a-zA-Z]+$/;
        patt_uid = /^[0-9a-zA-Z_]+$/;
        patt_first = /^[a-zA-Z_]+$/;
        patt_last = /^[a-zA-Z_]+$/;
//        patt_address = /^[0-9a-zA-Z]+[ ]{0,1}[a-zA-Z]+[ ]{0,1}[a-zA-Z]+$/;
        patt_address = /^[0-9a-zA-Z_]+$/;
        patt_postcode = /^[0-9]{4}$/;
        patt_pwd = /^[0-9a-zA-Z#&*]{3,16}$/;

        result = true;
        if( email == ""|| email == null||  patt_email.test(email)==false)
        {
            document.getElementById('email').style.background="yellow";
            $('#email_div').removeClass('invisible');
            result = false;
        }else{
            $('#email_div').addClass('invisible');
            document.getElementById('email').style.background="white";
//            result = true;
        }

        if( uid == ""|| uid == null || patt_uid.test(uid)==false )
        {
            document.getElementById('uid').style.background="yellow";
            $('#uid_div').removeClass('invisible');
            result = false;
        }else{
            $('#uid_div').addClass('invisible');
            document.getElementById('uid').style.background="white";
//            result = true;
        }

        if( first == ""|| first == null || patt_first.test(first)==false)
        {
            document.getElementById('first').style.background="yellow";
            $('#first_div').removeClass('invisible');
            result = false;
        }else{
            $('#first_div').addClass('invisible');
            document.getElementById('first').style.background="white";
//            result = true;
        }

        if( last == ""|| last == null || patt_last.test(last)==false)
        {
            document.getElementById('last').style.background="yellow";
            $('#last_div').removeClass('invisible');
            result = false;
        }else{
            $('#last_div').addClass('invisible');
            document.getElementById('last').style.background="white";
//            result = true;
        }


        if( address == ""|| address == null || patt_address.test(address)==false)
        {
            document.getElementById('address').style.background="yellow";
            $('#address_div').removeClass('invisible');
            result = false;
        }else{
            $('#address_div').addClass('invisible');
            document.getElementById('address').style.background="white";
//            result = true;
        }

        if( postcode == ""|| postcode == null|| patt_postcode.test(postcode)==false)
        {
            document.getElementById('postcode').style.background="yellow";
            $('#postcode_div').removeClass('invisible');
            result = false;
        }else{
            $('#postcode_div').addClass('invisible');
            document.getElementById('postcode').style.background="white";
//            result = true;
        }


        if( pwd == ""|| pwd == null || patt_pwd.test(pwd)==false )
        {
            document.getElementById('pwd').style.background="yellow";
            $('#pwd_div').removeClass('invisible');
            result = false;
        }else{
            $('#pwd_div').addClass('invisible');
            document.getElementById('pwd').style.background="white";
//            result = true;
        }

        if (pwd2 =="" || pwd2 !== pwd){
            document.getElementById('pwd2').style.backgroundColor="yellow";
            $('#pwd2_div').removeClass('invisible');
            result = false;
        }else{
            $('#pwd2_div').addClass('invisible');
            document.getElementById('pwd2').style.background="white";
//            result = true;
        }

        return result;
    }
</script>

	<div style="text-align: center">
		<h2>Signup</h2>
	</div>
	</br>
	<form class="form-horizontal" action="includes/signup.inc.php" method="POST" onsubmit="return formval()">
		<br class="form-group">
   <label for="tips" class="col-xs-2 col-xs-offset-2 control-label"> </label>
   <div>
     <p>&nbsp&nbsp&nbsp&nbsp Real information needed are marked (*) for posting collections to you </p>
   </div>

   <label for="email" class="col-xs-2 col-xs-offset-2 control-label">E-mail: </label>
			<div class="col-xs-4">
				<input type="text" class="form-control" name="email" id="email" placeholder="E-mail">
			</div>
   <div class="invisible" id="email_div">
   <button type="button" class="btn btn-xs btn-default" aria-label="Left Align">
     <span class="glyphicon glyphicon-info-sign text-danger" aria-hidden="true"></span>
       </button>Email address must contain '@'.
   </div>
			</br></br>

			<label for="uid" class="col-xs-2 col-xs-offset-2 control-label">User Name: </label>
	  <div class="col-xs-4">
				<input type="text" class="form-control" name="uid" id="uid" placeholder="User name">
   </div>
   <div class="invisible" id="uid_div">
      <button type="button" class="btn btn-xs btn-default" aria-label="Left Align">
        <span class="glyphicon glyphicon-info-sign text-danger" aria-hidden="true"></span>
      </button>User name is invalid. Only English letters, numbers and '_' are accepted.
    </div>

			</br></br>

   <label for="firstname" class="col-xs-2 col-xs-offset-2 control-label">* First Name: </label>
   <div class="col-xs-4">
       <input type="text" class="form-control" name="first" id="first" placeholder="First Name">
   </div>
   <div class="invisible" id="first_div">
     <button type="button" class="btn btn-xs btn-default" aria-label="Left Align">
       <span class="glyphicon glyphicon-info-sign text-danger" aria-hidden="true"></span>
     </button>First name is invalid. Only English letters are accepted.
   </div>
   </br></br>

   <label for="lastname" class="col-xs-2 col-xs-offset-2 control-label">* Last Name: </label>
   <div class="col-xs-4">
       <input type="text" class="form-control" name="last" id="last" placeholder="Last Name">
   </div>
   <div class="invisible" id="last_div">
     <button type="button" class="btn btn-xs btn-default" aria-label="Left Align">
       <span class="glyphicon glyphicon-info-sign text-danger" aria-hidden="true"></span>
     </button>Last name is invalid. Only English letters are accepted.
   </div>
   </br></br>

			<label for="address" class="col-xs-2 col-xs-offset-2 control-label">* Post Address: </label>
			<div class="col-xs-4">
	      <input type="text" class="form-control" name="address" id="address" placeholder="Post Address">
	  </div>
   <div class="invisible" id="address_div">
     <button type="button" class="btn btn-xs btn-default" aria-label="Left Align">
       <span class="glyphicon glyphicon-info-sign text-danger" aria-hidden="true"></span>
     </button>Address is invalid.
   </div>
	  </br></br>

   <label for="post code" class="col-xs-2 col-xs-offset-2 control-label">* Post Code: </label>
   <div class="col-xs-4">
        <input type="text" class="form-control" name="postcode"id="postcode" placeholder="Post Code">
   </div>
   <div class="invisible" id="postcode_div">
     <button type="button" class="btn btn-xs btn-default" aria-label="Left Align">
       <span class="glyphicon glyphicon-info-sign text-danger" aria-hidden="true"></span>
     </button>Postcode is invalid.\n The length must between 4 letters.
   </div>
   </br></br>

			<label for="pwd" class="col-xs-2 col-xs-offset-2 control-label">Password: </label>
			<div class="col-xs-4">
				    <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password">
			</div>
   <div class="invisible" id="pwd_div">
     <button type="button" class="btn btn-xs btn-default" aria-label="Left Align">
       <span class="glyphicon glyphicon-info-sign text-danger" aria-hidden="true"></span>
     </button>Only English letters, numbers and '#' '&' '*' are accepted.
   </div>
			</br></br>

			<label for="pwd2" class="col-xs-2 col-xs-offset-2 control-label">Confirm Password: </label>
			<div class="col-xs-4">
        <input type="password" class="form-control" name="pwd2" id="pwd2" placeholder="Comfirm Password">
			</div>
   <div class="invisible" id="pwd2_div">
     <button type="button" class="btn btn-xs btn-default" aria-label="Left Align">
       <span class="glyphicon glyphicon-info-sign text-danger" aria-hidden="true"></span>
     </button>The two passwords don't match.
   </div>
   </br></br>

   <div class="col-xs-4 col-xs-offset-4">
       <button type="submit" class="btn btn-info btn-lg" name="submit">Sign up</button>
   </div>
   </br></br>

   <div class="row">
     <div class="col-xs-2 col-xs-offset-4">
       <a href="privacy.php" style="text-decoration: underline;">Privacy Policy</a>
     </div>
     <div class="col-xs-2">
       <span class="pull-right">Have an account? &nbsp<a href="login.php " style="text-decoration: underline;">Log in</a></span>
     </div>
   </div>
		</div>
	</form>
					

<?php
include_once('includes/footer.php');
?>