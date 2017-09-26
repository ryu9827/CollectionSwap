<?php
	include_once 'includes/header.php';
    include_once 'includes/dbh.inc.php';
    include_once 'includes/charity.php';
	if (!isset($_SESSION['u_id'])){
		header("location:login.php");

	};
$set_id = $_POST['set_id'];
$obj = $_POST['card_id'];
//call method to search matching users
$finallist = askForCharity($obj,$set_id);
if(is_null($finallist)){
    echo "Sorry.No matching user.";
}else{
    var_dump($finallist);
}
?>

<!-- 二级导航 -->
	<div style="text-align: center">
		<h2>Charity Match Results</h2>
	</div><br/>

<script type="text/javascript">
//to get premeters from url
function GetQueryString(name){
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     if(r!=null)return  unescape(r[2]); return null;
};

var set_id = GetQueryString("set_id");

function sendRequest(name,offer,miss,set_id){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open('POST','includes/sendMatchRequest.php',true);
	xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	xmlhttp.send('name='+name+'&offer='+offer+'&miss='+miss+'&set_id='+set_id);
};
</script>
<?php

echo'<div class="item active">
    <div class="col-xs-6 col-xs-offset-3">
    <div class="panel panel-primary">
    <div class="panel-heading">
    <h3 class="panel-title">Best Match</h3>
    </div>
    <div class="panel-body">
    <p>User Name: '+item.name+'</p>
    <p>Set Name: '+item.setname+'</p>
    <p>Offer：'+item.offername+'</p>
    <p>Demand：'+item.missname+'</p>
    <p>Last Login: '.item.lastlogin.'</p>
    <p>Rating：</p>
    <img src="images/icons/happy_face1.gif">&nbsp&nbsp'+item.good+'<br/><br/>
    <img src="images/icons/neutral_face1.gif">&nbsp&nbsp'+item.normal+'<br/><br/>
    <img src="images/icons/sad_face1.gif">&nbsp&nbsp'+item.bad+'<br/>
    </div>
    <div class="panel-footer">
    // Button trigger modal                
    '<button type="submit" class="btn btn-success btn-lg center-block" data-toggle="modal" data-target="#sentRequest" onclick="sendRequest(\''+name+'\',\''+offer+'\',\''+miss+'\',\''+set_id+'\',\''+missname+'\',\''+offername+'\')">Send Request</button>'+
    '</div>'+
    '</div>'+
    '</div>'+
    '</div>'
?>

<div class="row">
<div class="col-xs-8 col-xs-offset-2">
<!-- 轮播图无法停止自动轮播，所以将时间间隔设置为很大的数，这样等于是不再轮播了 -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="9999999999"> 
        <!-- 轮播图的圆点。这里不需要，所以隐藏了
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol> -->
        <div class="carousel-inner" role="listbox">
          <div id="carousel-inner">
      <!-- 左，右翻页图标    -->       
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"><p>Prev User</p></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"><p>Next User</p></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </div>
</div>

<div style="height: 50px; visibility:hidden;"></div> 


<!-- Modal -->
<div class="modal fade" border="1px" id="sentRequest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="top:250px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Your request has been sent</h4>
      </div>
      <div class="modal-body">
        <p>Please wait the user's response. </p>
        <p>Attention: Your collectables for the request have been temporary latched during the swap process. If your request has not been reposed in next 7 days or rejected, the latched items would be automatically released.</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" data-dismiss="modal" aria-label="Close">Get It</button>        
        <a href="setsManagement_messages.php">
          <button type="button" class="btn btn-info">View In Message</button>
        </a>      
      </div>
    </div>
  </div>
</div>



<!-- 页脚保留一些空白 -->
<!-- <div style="height: 100px; visibility:hidden;"></div>	  -->
	
<?php
	include_once 'includes/footer.php';
?>
