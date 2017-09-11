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
<form>
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
	while ($rows = mysqli_fetch_row($result)){
		$i++;
		$sql_status = "select card_status from cards_status where user_id='$u_id' and card_id='$rows[2]'";
		$result_status = mysqli_query($conn, $sql_status);
		 if (mysqli_query($conn, $sql_status)){
			$status = mysqli_fetch_row($result_status);
		} else {
			$status = null;
		}

		echo '
				<tr>
					<input type="hidden" value="'.$rows[2].'">
					<td>'.$rows[4].'</td>
					<td>
						<img src="'.$rows[3].'" alt="'.$rows[4].'">
					</td>
					<td><input type="radio" radiogroup="'.$rows[2].'+'.$i.'" checked="">Missing</td>
					<td><input type="radio" radiogroup="'.$rows[2].'+'.$i.'" checked="">Extra</td>
					<td><input type="radio" radiogroup="'.$rows[2].'+'.$i.'" checked="">Already Have</td>
				</tr>
			';
	}
?>
</table>

<div style="height: 100px; visibility:hidden;"></div>	
	<div class="row">
		<div class="col-xs-2 col-xs-offset-4">
			<button type="submit" class="btn btn-success btn-lg center-block" >Save</button>
		</div>
		<div class="col-xs-2">
			<button type="submit" class="btn btn-warning btn-lg center-block" >Start to match</button>
		</div>
	</div>
</form>

	<div style="height: 300px; visibility:hidden;"></div>	
	
<?php
	include_once 'includes/footer.php';
?>
