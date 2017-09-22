<?php
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
</head>

<div data-spy="scroll">
<header id="PageHeader1" style="position:fixed;text-align:center;left: 0;top:0;right:0;height:100px;z-index:7777;">
<div id="PageHeader1_Container" style="width:1200px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_MaterialIcon15" style="position:absolute;left:0px;top:10px;width:72px;height:72px;text-align:center;z-index:0;">
<a href="#"><!--Icon link to add on the left-->
<div id="MaterialIcon15"><i class="material-icons">&#xe41d;</i></div></a></div>
<div id="wb_Heading2" style="position:absolute;left:74px;top:17px;width:281px;height:36px;text-align:center;z-index:1;">
<h1 id="Heading2"><a href="index.php" style="color: #0AABE1">Collection Swap</a></h1></div>
<div id="wb_Heading3" style="position:absolute;left:113px;top:53px;width:207px;height:22px;z-index:2;">
<h6 id="Heading3">find your last missing</h6></div>
<div id="wb_CssMenu1" style="position:absolute;right:10px;top:26px;width:600px;height:49px;z-index:3;">
	<ul>

	<li id="setsManagement"><a class="norm" href="setsManagement.php" target="_self">Sets&nbsp;Management</a>
	</li>
	<li id="matchUp"><a class="norm" href="matchUp.php" target="_self">Match&nbsp;Up</a>
	</li>
	<li id="charity"><a class="norm" href="charity.php" target="_self">Charity</a>
	</li>
	<li id="search"><a class="norm" href="search.php" target="_self">Search</a>
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

<!--<div id="home" style="position:relative;text-align:center;width:100%;height:100%;float:left;display:block;z-index:181;">-->
<!--<div id="home-overlay"></div>-->
<!--<div id="home_Container" style="width:968px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">-->
<div id="wb_Heading1" style="position:absolute;left:167px;top:50em;width:618px;height:57px;text-align:center;z-index:4;">
<!--<h1 id="Heading1"><a href="setsManagement.php">Get Start</a></h1>-->
</div>
<!--</div>-->
<!--</div>-->

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
<!--<div id="wb_LayoutGrid3" >-->
<div id="LayoutGrid3">
<div class="row">
<div id="wb_MaterialIcon4" style="display:none"></div>
<div id="wb_ServicesText4" style="display:none"></div>
</div>
</div>


<div style="height: 100px; visibility:hidden;"></div>

<div id="wb_Carousel1" style="position:absolute;left:0px;top:2299px;width:970px;height:650px;z-index:182;overflow:hidden;position:relative;">
<div id="Carousel1" style="position:absolute">
<div class="frame frame-1">
<div id="wb_Title1" style="position:absolute;left:201px;top:350px;width:569px;height:49px;text-align:center;z-index:55;">
<h1 id="Heading2"><a href="setsManagement.php"></a></div>
<div id="wb_Review1" style="position:absolute;left:151px;top:400px;width:669px;height:48px;text-align:center;z-index:56;">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><em></em></span></div>

<!-- <div id="wb_User1" style="position:absolute;left:438px;top:83px;width:58px;height:58px;text-align:center;z-index:57;">
<a href="#top" title="Top"><div id="User1"><i class="fa fa-user-o">&nbsp;</i></div></a></div> -->

</div>
<div class="frame frame-2">
<div id="wb_Title2" style="position:absolute;left:1190px;top:350px;width:531px;height:36px;text-align:center;z-index:58;">
<h1 id="Heading2"><a href="setsManagement.php"></a></div>
<div id="wb_Review2" style="position:absolute;left:1121px;top:400px;width:669px;height:48px;text-align:center;z-index:59;">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><em></em></span></div>

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
<h1 id="Heading2"><a href="setsManagement.php"></a></div>
<div id="wb_Review3" style="position:absolute;left:2091px;top:400px;width:669px;height:48px;text-align:center;z-index:62;">
<span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><em></em></span></div>

<!-- <div id="wb_User3" style="position:absolute;left:2378px;top:83px;width:58px;height:58px;text-align:center;z-index:63;">
<a href="#top" title="Top"><div id="User3"><i class="fa fa-user">&nbsp;</i></div></a></div> -->

</div>
</div>
<div id="Carousel1_back" style="position:absolute;left:10px;top:46%;width:20px;height:30px;z-index:999"><a style="cursor:pointer"><img alt="Back" style="border-width:0" src="images/arrow-prev-white.png"></a></div>
<div id="Carousel1_next" style="position:absolute;right:10px;top:46%;width:20px;height:30px;z-index:999"><a style="cursor:pointer"><img alt="Next" style="border-width:0" src="images/arrow-next-white.png"></a></div>
</div>
<!--<div id="StickyLayer" style="position:fixed;text-align:left;left:auto;right:25px;top:auto;bottom:25px;width:46px;height:46px;z-index:184;">-->
<!--<div id="wb_up-arrow" style="position:absolute;left:7px;top:6px;width:24px;height:24px;text-align:center;z-index:180;">-->
<!--<a href="#home"><div id="up-arrow"><i class="fa fa-angle-up">&nbsp;</i></div></a></div>-->
<!--</div>-->
<br/>
    <div class="container-fluid">
        <div style="height: 650px; visibility:hidden;"></div>
    <div class="row">
        <div class="col-xs-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2>1.Get Signed Up</h2>
                </div>
                <div class="panel-body">
                    <h3>Choose you favourite collection.</h3><br/>
                    <h3>Select what you have and extras then look for what you are missing.</h3>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2>2.Get Excited</h2>
                </div>
                <div class="panel-body">
                    <h3>We will select and source awesome collectiions from around New Zealand.</h3><br/>
                    <h3> &nbsp</h3>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h2>3.Get Swapping</h2>
                </div>
                <div class="panel-body">
                    <h3>Receive your delivery of superise, quality collectables  to enjoy!</h3><br/>
                    <h3> &nbsp</h3>
                </div>
            </div>
        </div>
    </div>

    <img src="images/kids-trading-cards.jpg" class="col-xs-8 thumbnail">

        <div class="col-xs-4">
            <h2>NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter NewsLetter </h2>
        </div>
    </div>
<!-- footer start -->
<div id="wb_LayoutGrid8">
<div id="LayoutGrid8">
<div class="row">
<div class="col-1">
<div id="wb_FontAwesomeIcon3" style="display:inline-block;width:72px;height:72px;text-align:center;z-index:94;">
<a href="https://www.facebook.com/"><div id="FontAwesomeIcon3"><i class="fa fa-facebook">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon8" style="display:inline-block;width:72px;height:72px;text-align:center;z-index:95;">
<a href="https://twitter.com/"><div id="FontAwesomeIcon8"><i class="fa fa-twitter">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon10" style="display:inline-block;width:72px;height:72px;text-align:center;z-index:96;">
<a href="https://www.instagram.com/"><div id="FontAwesomeIcon10"><i class="fa fa-instagram">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon11" style="display:inline-block;width:72px;height:72px;text-align:center;z-index:97;">
<a href="https://www.youtube.com/"><div id="FontAwesomeIcon11"><i class="fa fa-youtube">&nbsp;</i></div></a>
</div>
<div id="wb_FontAwesomeIcon26" style="display:inline-block;width:72px;height:72px;text-align:center;z-index:98;">
<a href="https://nz.pinterest.com/"><div id="FontAwesomeIcon26"><i class="fa fa-pinterest">&nbsp;</i></div></a>
</div>
<div id="wb_Text17">
<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">Copyright 2017, Delight <br>Powered by WebWox <br>Partner with Wellington Institution of Technology</span>
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
