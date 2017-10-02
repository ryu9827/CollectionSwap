<?php
	include_once 'includes/header.php';

	// if (!isset($_SESSION['u_id'])){
	// 	header("location:login.php");
	// }
?>


	<div style="text-align: center">
		<h1>Contact Us</h1>
	</div><br/>
    <div class="row">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">A New Request</h3>
                </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-8 col-xs-offset-2" >
                        <img src="images/newRequest.png" border="1px" class="img-responsive">
                        </div>
                    </div>
                <p>Time: '+item.time+'</p>
                <p>'+item.swap_uid+' wants to make a swap with you.</p>
                <p>Collection Name: '+item.set+'</p>
                <p>Giving Away: '+item.offer_id+'</p>
                <p>Receiving: '+item.get_id+'</p>
                <p>Message ID: '+item.msg_id+'</p>
                </div>
            <div class="panel-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="accept()">Accept</button>
                <button type="button" class="btn btn-danger  pull-right" onclick="reject()">Reject</button>
                </div>
            </div>
    </div>
    </div>

	
	<div style="height: 200px; visibility:hidden;"></div>	
			

<?php
	include_once 'includes/footer.php';
?>