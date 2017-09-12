<?php
	include_once 'includes/header.php';	
?>
<script>  
// $(function(){
// $(document).ready(function(){   
// //使用getJSON方法读取json数据,   
// //注意：info.json可以是不同类型文件，只要其中的数据为json类型即可   
// 	$.getJSON('json_search.php',function(data){
// 	var html = '';
// 		$.each(data,function(i,item){      
// 			html = message(item);
// 			$('#title').after(html); 
// 			});    
// 		//after方法:在每个匹配的元素之后插入内容。  
// 		});  
// 	}); 
// });  

// function message(item){
// 	var html='';
// 	switch(item.status){		
// 		case "success":
// 		html += '<div class="row">'+
// 				  	'<div class="col-md-3" style="float: none;margin: 0 auto">'+
// 					    '<div class="thumbnail">'+
// 					    	'<img src="'+item.set_image+'" alt="">'+		        
// 					        '<ul class="list-group">'+
// 						        '<li class="list-group-item list-group-item-success">'+item.spare+' people have this as spare. </li>'+
// 						        '<li class="list-group-item list-group-item-warning">'+item.collecting+' people is also collecting this.</li>'+
// 					        '</ul>'+
// 					    '</div>'+
// 				    '</div>'+
// 				'</div>'
// 		break;
// 		default:
// 		html += '<p>No result.Is your input right? </p>'		
// 		break;
// 	}
// 	return html;
// }
//注:可以是item.address,也可以是item['address'] 
//firefox报 json文件中 “语法错误 [”,单能加载数据 //ie chrome 无法加载数据 
</script> 

<!-- <script type="text/javascript">
function sendSearch(){
	var input = document.getElementById('search').value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open('POST','includes/bestmatch2.php',true);
	xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	xmlhttp.send('search='+input);
};
</script> -->
<?php
include 'includes/dbh.inc.php';
$set_id = @$_GET['set_id'];
$card_id = @$_GET['name'];

//$card_id = mysqli_real_escape_string($conn, $_POST['card_id']);
//$card_id = 'a001';

$num1 = search('cards_status', $card_id,1,$set_id);//card for missing
$num2 = search('cards_status', $card_id,2,$set_id);//card for extra
$num3 = search('charity_card', $card_id,3,$set_id);//card for charity
function search($table,$card_name, $status,$set_id){

    global $conn;
    $sql = "SELECT * FROM $table WHERE card_name = '$card_name' AND set_id = '$set_id' AND card_status = '$status'";
    if (mysqli_query($conn, $sql)){
        $res = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($res);
        return $num;
    } else{
        return $num=0;

    }
}
?>

	<div style="text-align: center">
		<h2>Enter the key word</h2>
	</div><br/>

	<div class="row">
		<div class="col-lg-3" style="float: none;margin: 0 auto">
            <form action="search_inputNum.php">
                <input type="hidden" name="set_id" value="<?php echo $set_id ?>">
                <div class="input-group">
                    <input id="search" type="text" class="form-control" placeholder="Search for..." name="name" />
                    <span class="input-group-btn">
                        <button class="btn btn-info" type="submit">Search</button>
                    </span>
                </div>
            </form>
		</div>
	</div>
	<br/><br/>


<div id="title"></div>
 				  	<div class="col-md-3" style="float: none;margin: 0 auto">
 					    <div class="thumbnail">
 					    	<img src="images/cardImages/card-1.png" alt="">        
 					        <ul class="list-group">
 					        	<li class="list-group-item list-group-item-info"> Card Name: <?php echo $card_id ?> </li>
 						        <li class="list-group-item list-group-item-success"> <?php echo $num1 ?> people have this as spare. </li>
 						        <li class="list-group-item list-group-item-warning"> <?php echo $num2 ?> people is collecting this as well.</li>
 					        </ul>
 					    </div>
 				    </div>

	
	
	<div style="height: 200px; visibility:hidden;"></div>	
			

<?php
	include_once 'includes/footer.php';
?>