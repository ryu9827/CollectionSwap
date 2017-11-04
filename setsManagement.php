<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>


	<div style="text-align: center">
		<h2>Set Management</h2>
	</div><br/>

	<div class="col-xs-12">
		<div class="row">
			<ul class="nav nav-tabs">
				<li role="presentation" class="active"><a href="#">My Collection</a></li>
				<li role="presentation"><a href="setsManagement_messages">Messages</a></li> 
				<li role="presentation"><a href="setsManagement_history">History</a></li>
                <li role="presentation"><a href="setsManagement_FAQ">FAQ</a></li>
            </ul>
			<br/><br/>
		</div>
	</div>
	<br/>
<script type="text/javascript">
    function remove(id) {
//        if (confirm("Are you sure to remove this collection from your list?")){
//           debugger;
//            location.href="includes/removeSet?set_id="+id;
//        }
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: ["No, cancel","I am sure"],
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                location.href="includes/removeSet?set_id="+id;
//                swal("Poof! Your imaginary file has been deleted!", {
//                    icon: "success",
//                });
            } else {
                swal("Your imaginary file is safe!");
              }
        });
    }
</script>

<?php
	include_once 'includes/dbh.inc.php';
	$u_id = $_SESSION['u_id'];
	$u_uid = $_SESSION['u_uid'];
	$sql = "select * from user_sets_details where user_id='$u_id'";
	$result = mysqli_query($conn, $sql);
	while ($rows = mysqli_fetch_row($result)){
	    $set_id = $rows[2];
		echo '
		<div class="row">
			<div class="col-xs-4 col-xs-offset-4">			
				<a href="setsManagement_cardList?set_id='.$rows[2].'" class="thumbnail">
					<img src="'.$rows[3].'" class="img-responsive center-block" alt="'.$rows[4].'"">
				</a>	
			</div>
		</div>
        
        <div class="row">
			<div class="col-xs-4 col-xs-offset-4">
			<h4 class="text-center">'.$rows[4].'</h4>		  
			   <button id="'.$rows[2].'" class="btn btn-danger pull-right" onclick="remove(id)">Remove</button>
			</div>
		</div>
		
		<div class="row">
            <div class="col-xs-6 col-xs-offset-4">
                <label>Collecting: </label>
        ';
        $sql_miss = "select card_id, card_name from user_cards_status where set_id='$set_id' and user_uid='$u_uid' and card_status=2 ORDER by card_name";
        $result_miss = mysqli_query($conn, $sql_miss);

        //      store missing cards in $ar_miss
        $ar_miss=array();
        while ($rows2=mysqli_fetch_row($result_miss)){
            $ar_miss[$rows2[0]]=$rows2[1];
        }
        $num_miss = sizeof($ar_miss);
        if ($num_miss>0){
		foreach ($ar_miss as $id =>$name){echo '<a href="setsManagement_cardList.php?set_id='.$rows[2].'#'.$id.'">'.$name.'</a>&nbsp&nbsp;&nbsp;';}}
		else {echo 'No missing card';}

		//////////////////////////offering////////////////////////////
        ///
        echo '        
            </div>
		</div>
		<div class="row">
            <div class="col-xs-6 col-xs-offset-4">
                <label> Offering:&nbsp;&nbsp;&nbsp;</label>
        ';
        $sql_extra = "select card_id, card_name from user_cards_status where set_id='$set_id' and user_uid='$u_uid' and card_status=1 ORDER by card_name";
        $result_extra = mysqli_query($conn, $sql_extra);

        //      store missing cards in $ar_miss
        $ar_extra=array();
        while ($rows3=mysqli_fetch_row($result_extra)){
            $ar_extra[$rows3[0]]=$rows3[1];
        }
        $num_extra = sizeof($ar_extra);
        if ($num_extra>0){
        foreach ($ar_extra as $id =>$name){echo '<a href="setsManagement_cardList.php?set_id='.$rows[2].'#'.$id.'">'.$name.'</a>&nbsp&nbsp;&nbsp;';}}
        else {echo 'No extra card';}

        echo '                
            </div>
		</div>
		<br/><br/>
		';
	}
?>
    <button type="submit" class="btn btn-success btn-lg center-block" onclick="location.href='setsManagement_addSet.php'" >+ Add New Collection +</button>

	<div style="height: 500px; visibility:hidden;"></div>	
			

<?php
	include_once 'includes/footer.php';
?>