<?php

//if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';
        include_once 'sendemail.inc.php';
        global $conn;

        ob_start(); 
        session_start();
        date_default_timezone_set('NZ');
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);
    $postcode =  mysqli_real_escape_string($conn, $_POST['postcode']);
    $ads = mysqli_real_escape_string($conn, $_POST['address']);
	

	//Error handlers
	//Check for empty fields
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
		header("Location: ../register.php?register=empty");
	        exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../register.php?register=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../register.php?signup=email");
				exit();
			} else {
				$sql = "SELECT * FROM users WHERE user_uid='$uid' OR user_email = '$email'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../register.php?signup=usertaken");
					exit();
				} else {
					if($pwd != $pwd2){
                                           // header("Location: ../signup.php?signup=wrongpwd");
					     exit();
                                        }
					else{
					//Hashing the password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                                        
                                        //create token
                                        $regtime = time(); 
 
                                        $token = md5($uid.$pwd.$regtime); 
                                        $token_exptime = time()+60*60*24;//set expire time
                                        $lastlogin = date("d/m/Y");
                                        
                                        $firstname = ucwords($first);
                                        $lastname = ucwords($last);
                                        
                                        
					//Insert the user into the database
					$sql = "INSERT INTO users ( user_email, user_uid, user_pwd, user_postcode,token,token_time,regtime,lastlogin_time,address,user_first,user_last) VALUES ('$email', '$uid', '$hashedPwd', '$postcode', '$token', '$token_exptime','$regtime','$lastlogin','$ads','$firstname','$lastname');";
					

                                       mysqli_query($conn, $sql);
                               

                                    
				      // header("Location: ../signup.php?signup=success");
                                       $mail = new sendemail();
                                       $subject = "test";
                                       $body = "Dear ".$uid."：<br/>Thanks for registering in collection-swap。<br/>please click below link to active your account。<br/> 
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

//} else {
//	header("Location: ../signup.php");
//	exit();
//}
