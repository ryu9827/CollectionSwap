<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>

<!-- 二级导航 -->
	<div style="text-align: center">
		<h2>Messenger</h2>
	</div><br/>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script>  
$(function(){
$(document).ready(function(){   
//使用getJSON方法读取json数据,   
//注意：info.json可以是不同类型文件，只要其中的数据为json类型即可   
	$.getJSON('json.php',function(data){
	var html = '';
		$.each(data,function(i,item){      
			html = message(item);
			$('#title').after(html); 
			});    
		//after方法:在每个匹配的元素之后插入内容。  
		});  
	}); 
});  
function message(item){
	var html='';
	switch(item.status){
		case "0":
		html += '<div class="row">'+
					'<div class="col-xs-6 col-xs-offset-3">'+
				    	'<div class="panel panel-warning">'+
				            '<div class="panel-heading">'+              
				                '<h3 class="panel-title">Received a Request</h3>'+             
				            '</div>'+
				            '<div class="panel-body">'+
					            '<p>Time: '+item.time+'</p>'+
								'<p>'+item.name+' wants to make a swap with you.</p>'+ 
								'<p>Collection Name: '+item.set+'</p>'+
								'<p>What you will offer: '+item.offer+'</p>'+	
								'<p>What you will get: '+item.get+'</p>'+		
								'<button type="button" class="btn btn-success" data-dismiss="modal">Accept</button>'+
						        '<button type="button" class="btn btn-danger  pull-right">Reject</button>'+	       		
				            '</div>'+
				        '</div>'+
				    '</div>'+
				'</div>'
		break;
		case "1":
		html += '<div class="row">'+
					'<div class="col-xs-6 col-xs-offset-3">'+
				    	'<div class="panel panel-default">'+
				            '<div class="panel-heading">'+              
				                '<h3 class="panel-title">You Sent a Request</h3>'+                
				            '</div>'+
				            '<div class="panel-body">'+
					            '<p>Time: '+item.time+'</p>'+
								'<p>Your swap request has been sent to '+item.name+'. Please wait for the response. </p>'+ 
								'<p>Collection Name: '+item.set_name+'</p>'+
								'<p>What you will offer: '+item.offer+'</p>'+	
								'<p>What you will get: '+item.get+'</p>'+	
								'<p>Your cards have been locked temporarily until receive user\'s response. Or they will be unlocked if the user does not response in 6 days 23 hours 58 mins 32 seconds.</p>'+	
				            '</div>'+
				        '</div>'+
				    '</div>'+
				'</div>'
		break;
		case "2":
		html += '<div class="row">'+
					'<div class="col-xs-6 col-xs-offset-3">'+
				    	'<div class="panel panel-warning">'+
				            '<div class="panel-heading">'+              
				                '<h3 class="panel-title">Your Request Has Been Rejected</h3>'+                
				            '</div>'+
				            '<div class="panel-body">'+
					            '<p>Time: '+item.time+'</p>'+
								'<p>Sorry, your swap request has been rejected by '+item.name+'. </p>'+ 
								'<p>Collection Name: '+item.set_name+'</p>'+
								'<p>What you will offer: '+item.offer+'</p>'+	
								'<p>What you will get: '+item.get+'</p>'+
								'<p>Your cards have been unlocked.</p>'+			
				            '</div>'+
				        '</div>'+
				    '</div>'+
				'</div>'
		break;
		case "3":
		html += '<div class="row">'+
					'<div class="col-xs-6 col-xs-offset-3">'+
				    	'<div class="panel panel-success">'+
				            '<div class="panel-heading">'+             
				                '<h3 class="panel-title">Done</h3>'+
				            '</div>'+
				            '<div class="panel-body">'+
					            '<p>You have confirm that this swap is done.</p>'+
								'<p>Collector: '+item.name+'. Email: '+item.emali+'</p>'+ 
								'<p>Collection Name: '+item.set_name+'</p>'+
								'<p>What you offered: '+item.offer+'</p>'+
								'<p>What you got: '+item.get+'</p>'+
				            '</div>'+
				        '</div>'+
				    '</div>'+
				'</div>'
		break;
		case "4":
		html += '<div class="row">'+
					'<div class="col-xs-6 col-xs-offset-3">'+
				    	'<div class="panel panel-success">'+
				            '<div class="panel-heading">'+
				                '<h3 class="panel-title">Done</h3>'+
				            '</div>'+
				            '<div class="panel-body">'+
					            '<p>You have confirm that this swap is done.</p>'+
								'<p>Collector: '+item.name+'. Email: '+item.emali+'</p>'+
								'<p>Collection Name: '+item.set_name+'</p>'+
								'<p>What you offered: '+item.offer+'</p>'+
								'<p>What you got: '+item.get+'</p>'+
				            '</div>'+
				            '<div class="panel-footer">'+
				            	'<div class="btn-group" data-toggle="buttons">'+
								  '<label class="btn btn-success active">'+
								    '<img src="images/icons/happy_face1.gif"><input type="radio" name="options" id="option1" autocomplete="off" checked> Happy'+
								  '</label>'+
								  '<label class="btn btn-info">'+
								    '<img src="images/icons/neutral_face1.gif"><input type="radio" name="options" id="option2" autocomplete="off"> Neutral'+
								  '</label>'+
								  '<label class="btn btn-danger">'+
								    '<img src="images/icons/sad_face1.gif"><input type="radio" name="options" id="option3" autocomplete="off"> Angry'+
								  '</label>'+
								'</div>'+
								'<button type="button" class="btn btn-success pull-right" data-dismiss="modal">Submit</button>'+
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


	<div class="col-xs-12">
		<div class="row">
			<ul class="nav nav-tabs">
				<li role="presentation"><a href="setsManagement.php">My Sets</a></li>
				<li role="presentation" class="active"><a href="#">Messenger</a></li> 
			</ul>
			<br/><br/>
		</div>
	</div>
	<br/>

<div id="title"></div>

<!-- 页脚保留一些空白 -->
<div style="height: 300px; visibility:hidden;"></div>	
	
<?php
	include_once 'includes/footer.php';
?>