<?php
ob_start();	
session_start();
?>
<!doctype html>
<html>
<head>
    <script type="text/javascript">
        function logout(){
            location.href="includes/logout.inc.php";
        }
    </script>
<meta charset="utf-8">
<title>Collection Swap</title>
<meta name="generator" content="H@CKED">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut" href="images/timg.ico">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/BlueMonday.css" rel="stylesheet">
<link href="css/wb12_bluemonday.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/slimbox2/slimbox2.css" rel="stylesheet" type="text/css" media="screen" />
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/slimbox2/jquery.easing.1.3.js"></script>
<script src="js/slimbox2/slimbox2.js"></script>
<script src="js/moment.js"></script>
</head>

<body data-spy="scroll">
<header id="PageHeader1" style="position:fixed;text-align:center;left:0;top:0;right:0;height:100px;z-index:7777;">
<div id="PageHeader1_Container" style="width:1400px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_MaterialIcon15" style="position:absolute;left:0px;top:10px;width:72px;height:72px;text-align:center;z-index:0;">
<a href="#"><!--Icon link to add on the left-->
<div id="MaterialIcon15"><i class="material-icons">&#xe41d;</i></div></a></div>
<div id="wb_Heading2" style="position:absolute;left:74px;top:17px;width:281px;height:36px;text-align:center;z-index:1;">
<h1 id="Heading2"><a href="index.php" style="color: #0AABE1">Collection Swap</a></h1></div>
<div id="wb_Heading3" style="position:absolute;left:113px;top:53px;width:207px;height:22px;z-index:2;">
<h6 id="Heading3">find your last missing</h6></div>
<div id="wb_CssMenu1" style="position:absolute;right:10px;top:26px;width:800px;height:49px;z-index:3;">
	<ul>
    <li id="about"><a class="norm" href="about.php" target="_self">About</a>
    </li>
	<li id="setsManagement"><a class="norm" href="setsManagement.php" target="_self">Set&nbsp;Management</a>
	</li>
	<li id="matchUp"><a class="norm" href="matchUp.php" target="_self">Match&nbsp;Up</a>
	</li>
	<li id="charity"><a class="norm" href="charity.php" target="_self">Charity</a>
	</li>
	<li id="search"><a class="norm" href="search.php" target="_self">Search</a>
	</li>
    <li id="contactUs"><a class="norm" href="contactUs.php" target="_self">Contact Us</a>
    </li>
        <?php
        if(isset($_SESSION['u_uid'])) {
            $u_uid = $_SESSION['u_uid'];
            echo '<li id="register"><a class="nidaye" href="profile.php">Hi, '.$u_uid.'</a></li>';
            echo '<li><a class="norm" href="#" name="logout" target="_self" style="text-decoration: underline" onclick="logout()">Log out</a></li>';
        } else{
            echo '<li id="register"><a class="norm" href="login.php" style="text-decoration: underline" target="_self">Log in</a></li>';}
        ?>
	</ul>
</div>
</div>
</header>
<div style="height: 100px; visibility:hidden;"></div>
<div class="container-fluid">