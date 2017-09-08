<?php
	include_once 'includes/header.php';	
?>
<script>  
$(function(){
$(document).ready(function(){   
//使用getJSON方法读取json数据,   
//注意：info.json可以是不同类型文件，只要其中的数据为json类型即可   
	$.getJSON('json_search.php',function(data){
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
		case "success":
		html += '<div class="row">'+
				  	'<div class="col-md-3" style="float: none;margin: 0 auto">'+
					    '<div class="thumbnail">'+
					    	'<img src="'+item.set_image+'" alt="">'+		        
					        '<ul class="list-group">'+
						        '<li class="list-group-item list-group-item-success">'+item.spare+' people have this as spare. </li>'+
						        '<li class="list-group-item list-group-item-warning">'+item.collecting+' people is also collecting this.</li>'+
					        '</ul>'+
					    '</div>'+
				    '</div>'+
				'</div>'
		break;
		default:
		html += '<p>No result.Is your input right? </p>'		
		break;
	}
	return html;
}
//注:可以是item.address,也可以是item['address'] 
//firefox报 json文件中 “语法错误 [”,单能加载数据 //ie chrome 无法加载数据 
</script> 

<script type="text/javascript">
function sendSearch(name){
	// alert(set_id);
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open('POST','includes/bestmatch2.php',true);
	xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	xmlhttp.send('name='+name);
};
</script>

	<div style="text-align: center">
		<h2>Input a Name</h2>
	</div><br/>

	<div class="row">
		<div class="col-lg-3" style="float: none;margin: 0 auto">
		    <div class="input-group">
			    <input type="text" class="form-control" placeholder="Search for...">
			    <span class="input-group-btn">
			    	<button class="btn btn-info" type="submit" onclick="sendSearch()">Search</button>
			    </span>
		    </div>
		</div>
	</div>
	<br/><br/>

<div id="title"></div>



	
	
	<div style="height: 200px; visibility:hidden;"></div>	
			

<?php
	include_once 'includes/footer.php';
?>