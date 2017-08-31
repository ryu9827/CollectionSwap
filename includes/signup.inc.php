<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';
        include_once 'sendemail.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$cpwd = mysqli_real_escape_string($conn, $_POST['cpwd']);
        $postcode =  mysqli_real_escape_string($conn, $_POST['postcode']);
	

	//Error handlers
	//Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
		header("Location: ../signup.php?signup=empty");
	        exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../signup.php?signup=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=email");
				exit();
			} else {
				$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email = '$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../signup.php?signup=usertaken");
					exit();
				} else {
					if($pwd != $cpwd){
                                            header("Location: ../signup.php?signup=wrongpwd");
					     exit();
                                        }
					else{
					//Hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                                        
                                        //create token
                                        $regtime = time(); 
 
                                        $token = md5($uid.$pwd.$regtime); 
                                        $token_exptime = time()+60*60*24;//set expire time
 
                                        
                                        
					//Insert the user into the database
					$sql = "INSERT INTO users ( user_first, user_last, user_email, user_uid, user_pwd, user_postcode,token,token_time,regtime) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd', '$postcode', '$token', '$token_exptime','$regtime');";
					

                                       mysqli_query($conn, $sql);
                               

                                    
				      // header("Location: ../signup.php?signup=success");
                                       $mail = new sendemail();
                                       $subject = "test";
                                       $body = "Dear".$first."：<br/>Thanks for registering in collection-swap。<br/>please click below link to active your account。<br/> 
                                                                     <a href='http://mysites/netbeans/login/includes/active.php?verify=".$token."' target= 
                                                                     '_blank'>http://mysites/netbeans/login/includes/active.php?verify=".$token."</a><br/> 
                                                                     if the link is not work, please cpqy and paste to your broswer, it will be expired after 24h"; ;
                                       $mail->sendEmail($email,$subject,$body);
                                       //echo $email;
                                       
                                      //  echo mysqli_connect_errno();
					exit();
					}	
				}
			}
		}
	}

} else {
//	header("Location: ../signup.php");
	exit();
}
