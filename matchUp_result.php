<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	$set_id=$_GET['set_id'];
	}
?>

<!-- 二级导航 -->
	<div style="text-align: center">
		<h2>Search Results</h2>
	</div><br/>

<script type="text/javascript">

//to get premeters from url
function GetQueryString(name){
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     if(r!=null)return  unescape(r[2]); return null;
};

var set_id = GetQueryString("set_id");

function sendRequest(name,offer,miss,set_id,missname,offername){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open('POST','includes/sendMatchRequest.php',true);
	xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	xmlhttp.send('name='+name+'&offer='+offer+'&miss='+miss+'&set_id='+set_id+'&missname='+missname+'&offername='+offername);
};
</script>

<script>
$(function() {
    $(document).ready(function () {
        var set_id = GetQueryString("set_id");
        var url = "includes/bestmatch.php";
        var dataSend = {
            "act": "getJSON",
            "set_id": set_id
        };
//使用getJSON方法读取json数据, 发送的数据dataSend只能通过GET获取  
//注意：info.json可以是不同类型文件，只要其中的数据为json类型即可
$.getJSON(url, dataSend, function (data) {
    if (jQuery.isEmptyObject(data)) { //if no matching user
        html = '<div style="text-align: center">' +
            '<h3 class="center-block">Sorry, no results were found!</h3><br/>' +
            '<h3 style="text-align: center">Would you happy to donate your collectables into our charity functionality?</h3><br/>' +
            '</div>' +
            '<button class="btn btn-info btn-lg center-block" onclick="location.href=\'charity.php\'">Charity</button><br/>' +
            '<div style="text-align: center">' +
            '<h3> Or you can go back to the previous page and try again</h3><br/><br/>' +
            '</div>' +
            '<button class="btn btn-default btn-lg center-block" onclick="location.href=\'matchUp.php\'">Previous Page</button>'
        $('#noData').after(html);
    }
    else {
        $.each(data, function (i, datareceive) {
            if (datareceive == "locked") {//if user is locked
                html = '<div style="text-align: center">' +
                    '<h3 class="center-block">You have a swap in progress!</h3><br/>' +
                    '<h3 style="text-align: center">You can swap with others after complete current swaping.</h3><br/>' +
                    '</div><br/>' +
                    '<button class="btn btn-default btn-lg center-block" onclick="location.href=\'matchUp.php\'">Previous Page</button>'
                $('#noData').after(html);
            }
            else {
                html = match(i, datareceive);
                $('#carousel-inner').after(html);//after方法:在每个匹配的元素之后插入内容。
            }
        });
    }
});
    });
});

function match(i,item){
  this.item = item; 
  var html='';
  switch(i){
    case 0:
    html += '<div class="item active">'+
            '<div class="col-xs-6 col-xs-offset-3">'+
              '<div class="panel panel-primary">'+
                '<div class="panel-heading">'+
                  '<h3 class="panel-title">Best Match</h3>'+
                '</div>'+
                '<div class="panel-body">'+
                  '<p>User Name: '+item.name+'</p>'+
                  '<p>Collection Name: '+item.setname+'</p>'+
                  '<p>Offer：'+item.offername+'</p>'+
                  '<p>Request：'+item.missname+'</p>'+
                  '<p>Last Login: '+item.lastlogin+'</p>'+
                  '<p>Rating：</p>'+
                  '<img src="images/icons/happy_face1.gif">&nbsp&nbsp'+item.good+'<br/><br/>'+
                  '<img src="images/icons/neutral_face1.gif">&nbsp&nbsp'+item.normal+'<br/><br/>'+
                  '<img src="images/icons/sad_face1.gif">&nbsp&nbsp'+item.bad+'<br/>'+
                '</div>'+
                '<div class="panel-footer">'+
                // Button trigger modal                
                  '<button type="submit" class="btn btn-success btn-lg center-block" data-toggle="modal" data-target="#sentRequest" onclick="sendRequest(\''+item.name+'\',\''+item.offer+'\',\''+item.miss+'\',\''+set_id+'\',\''+item.missname+'\',\''+item.offername+'\')">Send Request</button>'+
                '</div>'+
              '</div>'+
            '</div>'+
          '</div>'
    break;
    default:
      html += '<div class="item">'+
              '<div class="col-xs-6 col-xs-offset-3">'+
              '<div class="panel panel-info">'+
                '<div class="panel-heading">'+
                  '<h3 class="panel-title">&nbsp</h3>'+
                '</div>'+
                '<div class="panel-body">'+
                  '<p>User Name: '+item.name+'</p>'+
                  '<p>Collection Name: '+item.setname+'</p>'+
                  '<p>Offer：'+item.offername+'</p>'+
                  '<p>Request：'+item.missname+'</p>'+
                  '<p>Last Login: '+item.lastlogin+'</p>'+
                  '<p>Rating：</p>'+
                  '<img src="images/icons/happy_face1.gif">&nbsp&nbsp'+item.good+'<br/><br/>'+
                  '<img src="images/icons/neutral_face1.gif">&nbsp&nbsp'+item.normal+'<br/><br/>'+
                  '<img src="images/icons/sad_face1.gif">&nbsp&nbsp'+item.bad+'<br/>'+
                '</div>'+
                '<div class="panel-footer">'+
                  '<button type="submit" class="btn btn-success btn-lg center-block" data-toggle="modal" data-target="#sentRequest" onclick="sendRequest(\''+item.name+'\',\''+item.offer+'\',\''+item.miss+'\',\''+set_id+'\',\''+item.missname+'\',\''+item.offername+'\')">Send Request</button>'+
                '</div>'+
              '</div>'+
            '</div>'+
          '</div>'
    break;    
  }
  return html;
}
//注:可以是item.address,也可以是item['address'] 
//firefox报 json文件中 “语法错误 [”,单能加载数据 //ie chrome 无法加载数据 
</script> 

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
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"><p>Return</p></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"><p>Next</p></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </div>
</div>
</div>
</div>

<div style="height: 50px; visibility:hidden;"></div> 
<div id="noData"></div>

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
        <button type="submit" class="btn btn-success" data-dismiss="modal" aria-label="Close" onclick="location.href='matchUp.php'">Get It</button>
        <a href="setsManagement_messages.php">
          <button type="button" class="btn btn-info" onclick="location.href='setsManagement_messages.php'">View In Message</button>
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
