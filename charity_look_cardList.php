<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_uid'])){
		header("location:login.php");
	}
    $set_id=$_GET['set_id'];
?>


	<div style="text-align: center">
		<h2>Which cards are you searching for charity?</h2>
	</div><br/>

<!-- 定义一下table的尺寸，不然显示得不太好 -->
<style type="text/css">
	img{
		width:12em;
		
	}
	td{
		width:20%;
		
	}
	table{
		width: 100%
	}
</style>



<!-- Start to output the form -->
<table class="text-center vertical-center">
<form id="post_form" action="charity_look_result.php" method="POST">
    <input type="hidden" name="set_id" value="<?php echo $set_id; ?>">
<?php
	include_once 'includes/dbh.inc.php';
	$u_uid = $_SESSION['u_uid'];

	//define status parameter
	$charitable = 4;

	$sql = "select * from sets_cards where set_id='$set_id'";
	$result = mysqli_query($conn, $sql);
//	$i=0;
//	var_dump($result);exit;
	echo '<input type="hidden" value="'.$set_id.'">';
	while ($rows = mysqli_fetch_row($result)){
//		$isChecked = null;
//		$sql_status = "select card_status from charity_card where card_id='$rows[2]'";
//		$result_status = mysqli_query($conn, $sql_status);
//        $num = mysqli_num_rows($result_status);
//		 if ( $num > 0 ){
//			$row = mysqli_fetch_array($result_status);
//			$status = $row['card_status'];
//			if($status==4){
//			    $isChecked="checked";
//			}
//		}

		echo '
                <tr>
                    <td>'.$rows[4].'</td> <!--card name-->
                    <td>
                        <img src="'.$rows[3].'" class="img-responsive center-block thumbnail" alt="'.$rows[4].'"> <!-- card image-->                        
                    </td>
                    <td><input type="checkbox" style="width: 18px;height: 18px;padding: 2px 2px 2px 2px;" name="card_id['.$rows[2].']" value="4">Wanted</td>                    
                </tr>
			';
	}
?>
</table>

<div style="height: 100px; visibility:hidden;"></div>
<button class="btn btn-warning btn-lg center-block" type="submit" id="match">Start to match</button>
</form>




    <script type="text/javascript">
//        function GetQueryString(name){
//            var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
//            var r = window.location.search.substr(1).match(reg);
//            if(r!=null)return  unescape(r[2]); return null;
//        };
//        //jquery form序列化转换为json对象
//        (function($){
//            $.fn.serializeJson=function(){
//                var serializeObj={};
//                var array=this.serializeArray();
//                var str=this.serialize();
//                $(array).each(function(){
//                    if(serializeObj[this.name]){
//                        if($.isArray(serializeObj[this.name])){
//                            serializeObj[this.name].push(this.value);
//                        }else{
//                            serializeObj[this.name]=[serializeObj[this.name],this.value];
//                        }
//                    }else{
//                        serializeObj[this.name]=this.value;
//                    }
//                });
//                return serializeObj;
//            };
//        })(jQuery);
//
//        var set_id=GetQueryString("set_id");
//click save button
//        $(document).ready(function(){
//            $("#save").click(function(){
//                var post_data=$("#post_form").serializeJson();//表单序列化
//                var xmlhttp = new XMLHttpRequest();
//                xmlhttp.open('POST','includes/askforCharity.php?set_id='+set_id,true);
//                xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
//                xmlhttp.send('post_json='+JSON.stringify(post_data));
//                xmlhttp.onreadystatechange = function () {
//                    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
//                        alert('Success');
////                        window.location.href = 'charity_look_result.php';
//                    }
//                }
//            });
//
//            $("#match").click(function(){
//                var post_data=$("#post_form").serializeJson();//表单序列化
//                var xmlhttp = new XMLHttpRequest();
//                xmlhttp.open('POST','charity_look_result.php?set_id='+set_id,true);
//                xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
//                xmlhttp.send('post_json='+JSON.stringify(post_data));
//                window.location.href = 'charity_look_result.php?set_id='+set_id;
////                xmlhttp.onreadystatechange = function () {
////                    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
////                        alert('Successfully saved. Let\'s see who is offering!');
////                        window.location.href = 'charity_look_result.php?set_id='+set_id;
////                    }
////                }
//            });
//        })



    </script>
<div style="height: 300px; visibility:hidden;"></div>
	
<?php
	include_once 'includes/footer.php';
?>
