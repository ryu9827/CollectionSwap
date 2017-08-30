<?php

// if (isset($_POST['u_id'])) {
	session_start();
	// session_unset();
	session_destroy();
	header("Location:../index.php");
	// exit();
// }
?>