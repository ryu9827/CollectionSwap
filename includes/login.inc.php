<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';
        date_default_timezone_set('NZ');

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
       // echo $uid;

	//Error handlers
	
		$sql = "SELECT * FROM users WHERE user_email='$uid' OR user_uid = '$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		

		if ($resultCheck < 1) {
			
			echo 'user does not exist';
			exit();
		} else {
		//	if ($row = mysqli_fetch_assoc($result)) {
                    $row = mysqli_fetch_assoc($result);
                            if($row['user_uid'] == 'admin'){
                                $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false) {
                                        echo 'wrong password';
					// header("Location: ../index.php?login=error");
					exit();
                                }
                                        else {
                                           header("Location: ../AdminAddCardSet.php"); 
                                        }
                                            
                                        }
                                
                     //       }
				//De-hashing the password
                                else{
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck == false) {
                                        echo 'wrong password';
					// header("Location: ../index.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					//$_SESSION['u_first'] = $row['user_first'];
					//$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
                                        $uid = $row['user_uid'];
                                        
                                        $lastlogin = date("d/m/Y");
                                        $sql = "UPDATE users SET lastlogin_time = '$lastlogin' WHERE user_uid = '$uid'";
                                        mysqli_query($conn,$sql);
					header("Location: ../index.php?login=success");
					exit();
				}
                                }
			}
		}
	
else {
	//header("Location: ../index.php?login=error");
	exit();
}