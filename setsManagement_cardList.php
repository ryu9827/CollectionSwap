<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>


	<div style="text-align: center">
		<h2>Card List</h2>
	</div><br/>

	<div class="col-xs-12">
		<div class="row">
			<ul class="nav nav-tabs">
				<li role="presentation" class="active"><a href="#">My Collection</a></li>
				<li role="presentation"><a href="setsManagement_messages.php">Messages</a></li> 
				<li role="presentation"><a href="setsManagement_history.php">History</a></li> 
			</ul>
			<br/><br/>
		</div>
	</div>
	<br/>

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
<form id="post_form">
<?php
	include_once 'includes/dbh.inc.php';
	$u_id = $_SESSION['u_id'];
	$set_id=$_GET['set_id'];

	//define status premeters
	$missing = 1;
	$extra = 2;
	$alreadyHave = null;

	$sql = "select * from sets_cards where set_id='$set_id'";
	$result = mysqli_query($conn, $sql);
	$i=0;
//	var_dump($set_id);exit;
	echo '<input type="hidden" value="'.$set_id.'">';
	while ($rows = mysqli_fetch_row($result)){
		$i++;
		$isChecked1=null;
        $isChecked2=null;
        $isChecked3=null;
		$sql_status = "select card_status from cards_status where user_id='$u_id' and card_id='$rows[2]'";
		$result_status = mysqli_query($conn, $sql_status);
		 if (mysqli_query($conn, $sql_status)){
			$status = mysqli_fetch_row($result_status);
			if($status==0){
			    $isChecked1="checked";
			}
			else if($status==1) {
			    $isChecked2="checked";
			}
		} else {
			$isChecked3 = "checked";
		}

		echo '
                <tr>
                    <input type="hidden" value="'.$rows[2].'"> <!-- card id -->
                    <td>'.$rows[4].'</td> <!--card name-->
                    <td>
                        <img src="'.$rows[3].'" alt="'.$rows[4].'"> <!-- card image-->
                    </td>
                    <td><input type="radio" name="'.$rows[2].'" '.$isChecked1.' value="missing">Missing</td>
                    <td><input type="radio" name="'.$rows[2].'" '.$isChecked2.' value="extra">Extra</td>
                    <td><input type="radio" name="'.$rows[2].'" '.$isChecked3.' value="have">Already Have</td>
                </tr>
			';
	}
?>
</table>

<div style="height: 100px; visibility:hidden;"></div>
	<div class="row">
		<div class="col-xs-2 col-xs-offset-4">
			<button class="btn btn-success btn-lg center-block" id="save" >Save</button>
		</div>
		<div class="col-xs-2">
			<button class="btn btn-warning btn-lg center-block" id="match">Start to match</button>
		</div>
	</div>
</form>

    <script type="text/javascript">

        //jquery form序列化转换为json对象
        var set_id="a";
        console.log(set_id);
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

//click save button
        $(document).ready(function(){
            $("#save").click(function(){
                var post_data=$("#post_form").serializeJson();//表单序列化
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open('POST','includes/testReceive.php',true);
                xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                xmlhttp.send('post_json='+JSON.stringify(post_data));
//                $(window).attr('href', 'setManagement.php');
                window.location.href='setsManagement.php';
            })
        })

//click start to match button
        $(document).ready(function(){
            $("#match").click(function(){
                var post_data=$("#post_form").serializeJson();//表单序列化
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.open('POST','includes/testReceive.php',true);
                xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                xmlhttp.send('post_json='+JSON.stringify(post_data));
                $(window).attr('href', 'matchUp_result.php?set_id='+set_id);
            })
        })
    </script>
<div style="height: 300px; visibility:hidden;"></div>
	
<?php
	include_once 'includes/footer.php';
?>
