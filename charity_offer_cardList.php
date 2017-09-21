<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_uid'])){
		header("location:login.php");
	}
?>


	<div style="text-align: center">
		<h2>Card List</h2>
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
<form id="post_form" action="testReceive.php">
<?php
	include_once 'includes/dbh.inc.php';
	$u_uid = $_SESSION['u_uid'];
	$set_id=$_GET['set_id'];
      
	//define status parameter
	$charitable = 4;

	$sql = "select * from sets_cards where set_id='$set_id'";
	$result = mysqli_query($conn, $sql);
//	$i=0;
//	var_dump($result);exit;
	echo '<input type="hidden" value="'.$set_id.'">';
	while ($rows = mysqli_fetch_row($result)){
//		$i++;
		$isChecked = null;
		$sql_status = "select card_status from charity_card where card_id='$rows[2]'";
		$result_status = mysqli_query($conn, $sql_status);
        $num = mysqli_num_rows($result_status);
		 if ( $num > 0 ){
			$row = mysqli_fetch_array($result_status);
			$status = $row['card_status'];
			if($status==4){
			    $isChecked="checked";
			}
		}

		echo '
                <tr>
                    <!-- <input type="hidden" value="'.$rows[2].'"> --> <!-- card id -->
                    <td>'.$rows[4].'</td> <!--card name-->
                    <td>
                        <img src="'.$rows[3].'" class="img-responsive center-block thumbnail" alt="'.$rows[4].'"> <!-- card image-->                        
                    </td>
                    <td><input type="checkbox" style="width: 18px;height: 18px;padding: 2px 2px 2px 2px;" name="'.$rows[2].'" '.$isChecked.' value="4">Offer This</td>                    
                </tr>
			';
	}
?>
</table>

<div style="height: 100px; visibility:hidden;"></div>

</form>
<button class="btn btn-success btn-lg center-block" id="save" >Save</button>

    <script type="text/javascript">

        //jquery form序列化转换为json对象
//        var set_id="a";
//        console.log(set_id);
        (function($){
            $.fn.serializeJson=function(){
                var serializeObj={};
                var array=this.serializeArray();
                var str=this.serialize();
                $(array).each(function(){
                    if(serializeObj[this.name]){
                        if($.isArray(serializeObj[this.name])){
                            serializeObj[this.name].push(this.value);
                        }else{
                            serializeObj[this.name]=[serializeObj[this.name],this.value];
                        }
                    }else{
                        serializeObj[this.name]=this.value;
                    }
                });
                return serializeObj;
            };
        })(jQuery);

//        var set_id=GetQueryString("set_id");
//click save button
        $(document).ready(function(){
            $("#save").click(function() {
                var post_data = $("#post_form").serializeJson();//表单序列化
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open('POST', 'includes/offerCharity.php', true);
                xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xmlhttp.send('post_json=' + JSON.stringify(post_data));
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                        alert('Save success. Thank you for your generosity!');
                        window.location.href = 'charity.php';
                    }
                }
            });
        })
    </script>
<div style="height: 300px; visibility:hidden;"></div>
	
<?php
	include_once 'includes/footer.php';
?>
