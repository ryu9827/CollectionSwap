<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Collection Swap</title>
<meta name="generator" content="H@CKED">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut" href="images/timg.ico">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/BlueMonday.css" rel="stylesheet">
<link href="css/wb12_bluemonday.css" rel="stylesheet">
</head>

<body data-spy="scroll">
<header id="PageHeader1" style="position:fixed;text-align:center;left:0;top:0;right:0;height:100px;z-index:7777;">
<div id="PageHeader1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_MaterialIcon15" style="position:absolute;left:2px;top:10px;width:36px;height:36px;text-align:center;z-index:0;">
<a href="#"><!--Icon link to add on the left-->
<div id="MaterialIcon15"><i class="material-icons">&#xe41d;</i></div></a></div>
<div id="wb_Heading2" style="position:absolute;left:74px;top:17px;width:281px;height:36px;text-align:center;z-index:1;">
<h1 id="Heading2"><a href="index.php" style="color: #0AABE1">Collection Swap</a></h1></div>
<div id="wb_Heading3" style="position:absolute;left:113px;top:53px;width:207px;height:22px;z-index:2;">
<h6 id="Heading3">find your last missing</h6></div>
<div id="wb_CssMenu1" style="position:absolute;left:451px;top:26px;width:519px;height:49px;z-index:3;">
	<ul>
	<li id="register"><a href="login.php" target="_self"><?php if(isset($_SESSION['u_id'])) {echo "Profile";} else{echo "Log in";}?></a>
	</li>
	<li id="setsManagement"><a href="setsManagement.php" target="_self">Sets&nbsp;Management</a>
	</li>
	<li id="matchUp"><a href="matchUp.php" target="_self">Match&nbsp;Up</a>
	</li>
	<li id="charity"><a href="charity.php" target="_self">Charity</a>
	</li>
	<li id="search"><a href="search.php" target="_self">Search</a>
	</li>
	</ul>
</div>
</div>
</header>

<div id="home" style="position:relative;text-align:center;width:100%;height:100%;float:left;display:block;z-index:181;">
<div id="home-overlay"></div>
<div id="home_Container" style="width:968px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Heading1" style="position:absolute;left:167px;top:50em;width:618px;height:57px;text-align:center;z-index:4;">
<h1 id="Heading1"><a href="#SetsManagement">Get Start</a></h1>
</div>
<!-- <div id="wb_down-arrow" style="position:absolute;left:459px;top:630px;width:36px;height:36px;text-align:center;z-index:5;"> -->
<!-- <a href="#services"><div id="down-arrow"><i class="fa fa-angle-down">&nbsp;</i></div></a></div> -->
<!-- <div id="NewsFeedTicker1" style="overflow:hidden;position:absolute;left:56px;top:254px;width:825px;height:84px;z-index:6;">
</div> -->
</div>
</div>



<div id="wb_LayoutGrid1" style="display:none">
<div id="wb_MaterialIcon1" style="display:none">
<a href="./wb12_bluemonday.html"><div id="MaterialIcon1"><i class="material-icons">&#xe8dc;</i></div></a>
</div>
<div id="wb_ServicesText1"></div>
<div class="col-2">
<div id="wb_MaterialIcon2" style="display:none">
<a href="./wb12_bluemonday.html"><div id="MaterialIcon2"><i class="material-icons">&#xe6c4;</i></div></a>
</div>
<div id="wb_ServicesText2"></div>
</div>
<div class="col-3">
<div id="wb_MaterialIcon3" style="display:none">
<a href="./wb12_bluemonday.html"><div id="MaterialIcon3"><i class="material-icons">&#xe80c;</i></div></a>
</div>
<div id="wb_ServicesText3"></div>
</div>
</div>
<div id="wb_LayoutGrid3" >
<div id="LayoutGrid3">
<div class="row">
<div id="wb_MaterialIcon4" style="display:none"></div>
<div id="wb_ServicesText4" style="display:none"></div>
</div>
</div>







<!-- this is 
<div id="wb_reviews">
<div id="reviews">
<div class="row">
<div class="col-1">
<div id="wb_Heading13" style="display:inline-block;width:100%;text-align:center;z-index:54;">
<h1 id="Heading13">REVIEWS</h1>
</div>
</div>
</div>
</div>
</div> 
-->

<div id="wb_Carousel1" style="position:absolute;left:0px;top:2299px;width:970px;height:650px;z-index:182;overflow:hidden;position:relative;">
<div id="Carousel1" style="position:absolute">
<div class="frame frame-1">
<div id="wb_Title1" style="position:absolute;left:201px;top:350px;width:569px;height:49px;text-align:center;z-index:55;">
<h1 id="Heading2"><a href="#SetsManagement">Get Start</a></div>
<div id="wb_Review1" style="position:absolute;left:151px;top:400px;width:669px;height:48px;text-align:center;z-index:56;">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><em>Card Set 1 Name.</em></span></div>

<!-- <div id="wb_User1" style="position:absolute;left:438px;top:83px;width:58px;height:58px;text-align:center;z-index:57;">
<a href="#top" title="Top"><div id="User1"><i class="fa fa-user-o">&nbsp;</i></div></a></div> -->

</div>
<div class="frame frame-2">
<div id="wb_Title2" style="position:absolute;left:1190px;top:350px;width:531px;height:36px;text-align:center;z-index:58;">
<h1 id="Heading2"><a href="#SetsManagement">Get Start</a></div>
<div id="wb_Review2" style="position:absolute;left:1121px;top:400px;width:669px;height:48px;text-align:center;z-index:59;">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><em>Card Set 2 Name</em></span></div>

<!-- <div id="wb_User2" style="position:absolute;left:1408px;top:83px;width:58px;height:58px;text-align:center;z-index:60;">
<a href="#top" title="Top">
	<div id="User2">
		<i class="fa fa-user-secret">&nbsp;</i>
	</div>
</a>
</div> -->

</div>
<div class="frame frame-3">
<div id="wb_Title3" style="position:absolute;left:2165px;top:350px;width:520px;height:36px;text-align:center;z-index:61;">
<h1 id="Heading2"><a href="#SetsManagement">Get Start</a></div>
<div id="wb_Review3" style="position:absolute;left:2091px;top:400px;width:669px;height:48px;text-align:center;z-index:62;">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><em>Card Set 3 Name</em></span></div>

<!-- <div id="wb_User3" style="position:absolute;left:2378px;top:83px;width:58px;height:58px;text-align:center;z-index:63;">
<a href="#top" title="Top"><div id="User3"><i class="fa fa-user">&nbsp;</i></div></a></div> -->

</div>
</div>
<div id="Carousel1_back" style="position:absolute;left:10px;top:46%;width:20px;height:30px;z-index:999"><a style="cursor:pointer"><img alt="Back" style="border-width:0" src="images/arrow-prev-white.png"></a></div>
<div id="Carousel1_next" style="position:absolute;right:10px;top:46%;width:20px;height:30px;z-index:999"><a style="cursor:pointer"><img alt="Next" style="border-width:0" src="images/arrow-next-white.png"></a></div>
</div>
<div id="StickyLayer" style="position:fixed;text-align:left;left:auto;right:25px;top:auto;bottom:25px;width:46px;height:46px;z-index:184;">
<div id="wb_up-arrow" style="position:absolute;left:7px;top:6px;width:24px;height:24px;text-align:center;z-index:180;">
<a href="#home"><div id="up-arrow"><i class="fa fa-angle-up">&nbsp;</i></div></a></div>
</div>




<!-- footer start -->
<div id="wb_LayoutGrid8">
<div id="LayoutGrid8">
<div class="row">
<div class="col-1">
<div id="wb_FontAwesomeIcon3" style="display:inline-block;width:30px;height:30px;text-align:center;z-index:94;">
<a href="./wb12_bluemonday.html"><div id="FontAwesomeIcon3"><i class="fa fa-facebook">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon8" style="display:inline-block;width:30px;height:30px;text-align:center;z-index:95;">
<a href="./wb12_bluemonday.html"><div id="FontAwesomeIcon8"><i class="fa fa-twitter">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon10" style="display:inline-block;width:30px;height:30px;text-align:center;z-index:96;">
<a href="./wb12_bluemonday.html"><div id="FontAwesomeIcon10"><i class="fa fa-instagram">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon11" style="display:inline-block;width:30px;height:30px;text-align:center;z-index:97;">
<a href="./wb12_bluemonday.html"><div id="FontAwesomeIcon11"><i class="fa fa-youtube">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon26" style="display:inline-block;width:30px;height:30px;text-align:center;z-index:98;">
<a href="./wb12_bluemonday.html"><div id="FontAwesomeIcon26"><i class="fa fa-pinterest">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon27" style="display:inline-block;width:30px;height:30px;text-align:center;z-index:99;">
<a href="./wb12_bluemonday.html"><div id="FontAwesomeIcon27"><i class="fa fa-rss">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon28" style="display:inline-block;width:30px;height:30px;text-align:center;z-index:100;">
<a href="./wb12_bluemonday.html"><div id="FontAwesomeIcon28"><i class="fa fa-linkedin">&nbsp;</i></div></a>
</div>
<div id="wb_Text17">
<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">Copyright 2017 WYSIWYG Web Builder <br>All Rights Reserved <br>Powered by HTML, CSS &amp; jQuery</span>
</div>
</div>
</div>
</div>
</div>
<!--footer end-->

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/wb.carousel.min.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/scrollspy.min.js"></script>
<script src="js/wb.newsviewer.min.js"></script>
<script src="js/wwb12.min.js"></script>
<script src="js/wb12_bluemonday.js"></script>
<!-- <script src="js/bootstrap.min.js"></script> -->
</body>
</html>