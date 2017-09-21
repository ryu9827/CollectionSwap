<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>

<!-- 二级导航 -->
	<div style="text-align: center">
		<h2>History Messages</h2>
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
		case "2":
			html += '<div class="row">'+
						'<div class="col-xs-6 col-xs-offset-3">'+
					    	'<div class="panel panel-warning">'+
					            '<div class="panel-heading button" data-toggle="collapse" data-target="#'+item.message_id+'" aria-expanded="false" aria-controls="'+item.message_id+'" data-toggle="tooltip" data-placement="left" title="Click to see details">'+
					                '<h3 class="panel-title">Request’s Rejected by '+item.name+' ('+item.time+')</h3>'+
					            '</div>'+
					            '<div class="collapse" id="'+item.message_id+'">'+
					            '<div class="panel-body">'+									
									'<p>Collection Name: '+item.set_name+'</p>'+
//									'<p>What you will offer: '+item.offer+'</p>'+
//									'<p>What you will get: '+item.get+'</p>'+
									'<p>You can exchange your cards with other users.</p>'+
					            '</div>'+
					        '</div>'+
					    '</div>'+
					'</div>'+
				'</div>'
		break;	
		case "5":
		html += '<div class="row">'+
					'<div class="col-xs-6 col-xs-offset-3">'+
						'<div class="panel panel-success">'+
							'<div class="panel-heading button" data-toggle="collapse" data-target="#'+item.message_id+'" aria-expanded="false" aria-controls="'+item.message_id+'" data-toggle="tooltip" data-placement="left" title="Click to see details">'+
								'<h3 class="panel-title">Swap completed with '+item.name+' ('+item.time+')</h3>'+
							'</div>'+
							'<div class="collapse" id="'+item.message_id+'">'+
								'<div class="panel-body">'+
								    '<p>This swap is completed.</p>'+
									'<p>Collector\'s Email: '+item.email+'</p>'+
									'<p>Collection Name: '+item.set_name+'</p>'+
//									'<p>What you offered: '+item.offer+'</p>'+
//									'<p>What you got: '+item.get+'</p>'+
								'</div>'+
							'</div>'+
						'</div>'+
					'</div>'+
				'</div>'
		break;
		default:		
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
				<li role="presentation"><a href="setsManagement.php">My Collection</a></li>
				<li role="presentation"><a href="setsManagement_messages.php">Messages</a></li> 
				<li role="presentation" class="active"><a href="#">History</a></li> 
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