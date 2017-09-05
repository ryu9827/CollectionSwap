<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>

<!-- 二级导航 -->
	<div style="text-align: center">
		<h2>Match Up Result</h2>
	</div><br/>

<script>  
$(function(){  
$(document).ready(function(){   
//使用getJSON方法读取json数据,   
//注意：info.json可以是不同类型文件，只要其中的数据为json类型即可   
  $.getJSON('includes/bestmatch.php',function(data){
  var html = '';
    $.each(data,function(i,item){      
      html = match(i,item);
      $('#carousel-inner').after(html); 
      });    
    //after方法:在每个匹配的元素之后插入内容。  
    });  
  }); 
});  
function match(i,item){
  // this.status = status;
  // alert();
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
                  '<p>User Name: Adam</p>'+
                  '<p>Possible Swap</p>'+
                  '<p>Offer：1, 2, 3</p>'+
                  '<p>Need：4, 5, 6</p>'+
                  '<p>Last Login: 5th, August, 2017</p>'+
                  '<p>Rating：</p>'+
                  '<img src="images/icons/happy_face1.gif">&nbsp&nbsp10<br/><br/>'+
                  '<img src="images/icons/neutral_face1.gif">&nbsp&nbsp0<br/><br/>'+
                  '<img src="images/icons/sad_face1.gif">&nbsp&nbsp0<br/>'+
                '</div>'+
                '<div class="panel-footer">'+                
                // Button trigger modal
                  '<button type="button" class="btn btn-success btn-lg center-block" data-toggle="modal" data-target="#sentRequest" onclick="sendIDtoModal('+item.name+')">Send Request</button>'+                
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
                  '<p>User Name: Ben</p>'+
                  '<p>Possible Swap</p>'+
                  '<p>Offer：1, 2, 3</p>'+
                  '<p>Need：4, 5</p>'+
                  '<p>Last Login: 5th, August, 2017</p>'+
                  '<p>Rating：</p>'+
                  '<img src="images/icons/happy_face1.gif">&nbsp&nbsp3<br/><br/>'+
                  '<img src="images/icons/neutral_face1.gif">&nbsp&nbsp0<br/><br/>'+
                  '<img src="images/icons/sad_face1.gif">&nbsp&nbsp0<br/>'+
                '</div>'+
                '<div class="panel-footer">'+
                  '<button type="submit" class="btn btn-success btn-lg center-block" data-toggle="modal" data-target="#sentRequest" onclick="sendIDtoModal('+item.name+')">Send Request</button>'+
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

<script type="text/javascript">
  function sendIDtoModal(name){
    this.name=name; 
    var input = '<input type="hidden" value="'+name+'">';
    $('#form').after(input);
  }
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
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
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
        <h4 class="modal-title" id="myModalLabel">Request Has Been Sent</h4>
      </div>
      <div class="modal-body">
        <p>Your swap request has been sent. Please wait the user's response. </p> 
        <p>Your cards have been locked temporarily until receive user's response. Or they will be unlocked if the user does not response in 7 days</p>
      </div>
      <div class="modal-footer">
      <form action="php" method="POST">
      <div id="form"></div>
        <!-- <input type="hidden" value=""> -->
        <button type="submit" class="btn btn-success pull-left">Send</button>
        <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Cancel</button>
        <!-- <a href="setsManagement_message.php">
          <button type="button" class="btn btn-info">View In Message</button>
        </a> -->
      </form>
      </div>
    </div>
  </div>
</div>



<!-- 页脚保留一些空白 -->
<!-- <div style="height: 100px; visibility:hidden;"></div>	  -->
	
<?php
	include_once 'includes/footer.php';
?>