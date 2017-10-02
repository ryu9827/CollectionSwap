<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>

<!-- 二级导航 -->
	<div style="text-align: center">
		<h2>Messages</h2>
	</div><br/>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<script>
//status = 0, accept or reject;
    function accept() {
        document.status_0.action="includes/message_acceptswap.php";
        document.status_0.submit();
    }

    function reject() {
        document.status_0.action="includes/message_rejectswap.php";
        document.status_0.submit();
    }

</script>
<script>
$(function(){
$(document).ready(function(){   
//使用getJSON方法读取json数据,   
//注意：info.json可以是不同类型文件，只要其中的数据为json类型即可   
	$.getJSON('includes/showmessage.php',function(data){
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
		html += '<form action="" name="status_0" method="POST">'+
                '<input type="hidden" name="message_id" value="'+item.msg_id+'">'+
                '<div class="row">'+
					'<div class="col-xs-6 col-xs-offset-3">'+
				    	'<div class="panel panel-danger">'+
				            '<div class="panel-heading">'+
				                '<h3 class="panel-title">A New Request</h3>'+
				            '</div>'+
				            '<div class="panel-body">'+
                            '<div class="row">'+
                             '<div class="col-xs-8 col-xs-offset-2">'+
                              '<img src="images/newRequest.png" class="img-responsive">'+
                             '</div>'+
                            '</div>'+
					            '<p>Time: '+item.time+'</p>'+
								'<p>'+item.swap_uid+' wants to make a swap with you.</p>'+
								'<p>Collection Name: '+item.set+'</p>'+
								'<p>Giving Away: '+item.offer_id+'</p>'+
								'<p>Receiving: '+item.get_id+'</p>'+
                                '<p>Message ID: '+item.msg_id+'</p>'+
				            '</div>'+
				            '<div class="panel-footer">'+
									'<button type="button" class="btn btn-success" data-dismiss="modal" onclick="accept()">Accept</button>'+
							        '<button type="button" class="btn btn-danger  pull-right" onclick="reject()">Reject</button>'+
							'</div>'+
				        '</div>'+
				    '</div>'+
				'</div>'+
                '</form>'
		break;
		case "1":
		html += '<div class="row">'+
					'<div class="col-xs-6 col-xs-offset-3">'+
				    	'<div class="panel panel-default">'+
				            '<div class="panel-heading">'+
				                '<h3 class="panel-title">Request’s Sent</h3>'+
				            '</div>'+
				            '<div class="panel-body">'+
                            '<div class="row">'+
                             '<div class="col-xs-8 col-xs-offset-2">'+
                              '<img src="images/newRequest.png" class="img-responsive">'+
                             '</div>'+
                            '</div>'+
					            '<p>Time: '+item.time+'</p>'+
								'<p>Your swap request has been sent to '+item.swap_uid+'. Please wait for the response. </p>'+
								'<p>Collection Name: '+item.set_name+'</p>'+
								'<p>Giving Away: '+item.offer_id+'</p>'+
								'<p>Receiving: '+item.get_id+'</p>'+
                                '<p>Message ID: '+item.msg_id+'</p>'+
								'<p>The selected collectables have been temporary held during the swap process!\n' +
            'Please note that these collectables would be automatically released if you don\'t receive any response from the other party after 7 days. </p>'+
//                '<p>123123</p>'+
				            '</div>'+
				        '</div>'+
				    '</div>'+
				'</div>'
		break;
		case "4":
		html += '<form action="includes/message_doneswap.php" name="status_3" method="POST">'+
                '<input type="hidden" name="message_id" value="'+item.msg_id+'">'+
                '<div class="row">'+
					'<div class="col-xs-6 col-xs-offset-3">'+
				    	'<div class="panel panel-primary">'+
				            '<div class="panel-heading">'+
				                '<h3 class="panel-title">Swapping</h3>'+
				            '</div>'+
				            '<div class="panel-body">'+
                            '<div class="row">'+
                             '<div class="col-xs-8 col-xs-offset-2">'+
                              '<img src="images/swapping.png" class="img-responsive">'+
                             '</div>'+
                            '</div>'+
					            '<p>You are swapping collectables with '+item.swap_uid+'.</p>'+
								'<p>Collector\'s Email: '+item.email+'</p>'+
								'<p>Collection Name: '+item.set_name+'</p>'+
								'<p>Giving Away: '+item.offer_id+'</p>'+
								'<p>Receiving: '+item.get_id+'</p>'+
                                '<p>Message ID: '+item.msg_id+'</p>'+
				            '</div>'+
				            '<div class="panel-footer">'+
								'<button type="submit" class="btn btn-success" data-dismiss="modal" >Done</button>'+
							'</div>'+
				        '</div>'+
				    '</div>'+
				'</div>'+
                '</form>'
		break;
		case "5":
		html +=
            '<div class="row">'+
             '<div class="col-xs-6 col-xs-offset-3">'+
              '<div class="panel panel-success">'+
               '<div class="panel-heading">'+
                '<h3 class="panel-title">Swap Completed</h3>'+
               '</div>'+
              '<div class="panel-body">'+
                '<div class="row">'+
                 '<div class="col-xs-8 col-xs-offset-2">'+
                  '<img src="images/rating.png" class="img-responsive">'+
                 '</div>'+
                '</div>'+
               '<p>Congratulation! This swap process has been successfully completed!</p>'+
               '<p>Collector: '+item.swap_uid+'. Email: '+item.email+'</p>'+
               '<p>Collection Name: '+item.set_name+'</p>'+
               '<p>Giving Away: '+item.offer_id+'</p>'+
               '<p>Receiving: '+item.get_id+'</p>'+
               '<p>Message ID: '+item.msg_id+'</p>'+
              '</div>'+
              '<div class="panel-footer">'+
               '<input type="hidden" name="message_id" value="'+item.msg_id+'">'+
               '<form action="includes/message_rating.php" name="status_4" method="POST">'+
                '<div class="btn-group" data-toggle="buttons">'+
                 '<label class="btn btn-green active">'+
                 '<img src="images/icons/happy_face1.gif"><input type="radio" name="options" id="option1" autocomplete="off" value="1" checked> Happy'+
                 '</label>'+
                 '<label class="btn btn-blue">'+
                 '<img src="images/icons/neutral_face1.gif"><input type="radio" name="options" id="option2" autocomplete="off" value="2"> Neutral'+
                 '</label>'+
                 '<label class="btn btn-red">'+
                 '<img src="images/icons/sad_face1.gif"><input type="radio" name="options" id="option3" autocomplete="off" value="3"> Angry'+
                 '</label>'+
                '</div>'+
               '<button type="submit" class="btn btn-success pull-right" data-dismiss="modal">Submit</button>'+
              '</form>'+
            '<h5 class="text-danger">*It cannot be modified after submission* &nbsp&nbsp</h5>'+
            '<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#help">'+
            '<span class="glyphicon glyphicon-question-sign" aria-hidden="true" aria-label="help" ></span>'+
            '&nbsp FAQ</button>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'

		break;
        case "7":
            html += '<form action="" name="status_0" method="POST">'+
                '<input type="hidden" name="message_id" value="'+item.msg_id+'">'+
                '<div class="row">'+
                '<div class="col-xs-6 col-xs-offset-3">'+
                '<div class="panel panel-danger">'+
                '<div class="panel-heading">'+
                '<h3 class="panel-title">A New Charity Request</h3>'+
                '</div>'+
                '<div class="panel-body">'+
                '<div class="row">'+
                '<div class="col-xs-8 col-xs-offset-2">'+
                '<img src="images/newRequest.png" class="img-responsive">'+
                '</div>'+
                '</div>'+
                '<p>Time: '+item.time+'</p>'+
                '<p>'+item.swap_uid+' asks you for a charity.</p>'+
                '<p>Collection Name: '+item.set+'</p>'+
                '<p>Giving Away: '+item.offer_id+'</p>'+
                '<p>Message ID: '+item.msg_id+'</p>'+
                '</div>'+
                '<div class="panel-footer">'+
                '<button type="button" class="btn btn-success" data-dismiss="modal" onclick="accept()">Accept</button>'+
                '<button type="button" class="btn btn-danger  pull-right" onclick="reject()">Reject</button>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</form>'
            break;
        case "8":
            html += '<div class="row">'+
                '<div class="col-xs-6 col-xs-offset-3">'+
                '<div class="panel panel-default">'+
                '<div class="panel-heading">'+
                '<h3 class="panel-title">Charity Request’s Sent</h3>'+
                '</div>'+
                '<div class="panel-body">'+
                '<div class="row">'+
                '<div class="col-xs-8 col-xs-offset-2">'+
                '<img src="images/newRequest.png" class="img-responsive">'+
                '</div>'+
                '</div>'+
                '<p>Time: '+item.time+'</p>'+
                '<p>Your swap request has been sent to '+item.swap_uid+'. Please wait for the response. </p>'+
                '<p>Collection Name: '+item.set_name+'</p>'+
                '<p>Asking: '+item.offer_id+'</p>'+
                '<p>Message ID: '+item.msg_id+'</p>'+
                '<p>The selected collectables have been temporary latched during the swap process! Please note that these collectables would be automatically un-latched if you don\'t receive any response from the other party after 7 days.</p>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'
            break;
        case "11":
            html += '<form action="includes/swapping.php" name="status_3" method="POST">'+
                '<input type="hidden" name="message_id" value="'+item.msg_id+'">'+
                '<div class="row">'+
                '<div class="col-xs-6 col-xs-offset-3">'+
                '<div class="panel panel-primary">'+
                '<div class="panel-heading">'+
                '<h3 class="panel-title">Charity in Progress</h3>'+
                '</div>'+
                '<div class="panel-body">'+
                '<p>You are donating collections to '+item.swap_uid+'.</p>'+
                '<p>Collector\'s Email: '+item.email+'</p>'+
                '<p>Collection Name: '+item.set_name+'</p>'+
                '<p>Donating: '+item.offer_id+'</p>'+
                '<p>Message ID: '+item.msg_id+'</p>'+
                '</div>'+
                '<div class="panel-footer">'+
                '<button type="submit" class="btn btn-success" data-dismiss="modal" >Done</button>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</div>'+
                '</form>'
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
				<li role="presentation" class="active"><a href="#">Messages</a></li> 
				<li role="presentation"><a href="setsManagement_history.php">History</a></li> 
			</ul>
			<br/><br/>
		</div>
	</div>
	<br/>

<!-- Modal -->
<div class="modal fade" border="1px" id="help" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="top:250px;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">FAQ</h4>
            </div>
            <div class="modal-body">
                <p>Please wait the user's response. </p>
                <p>Attention: Your collectables for the request have been temporary latched during the swap process. If your request has not been reposed in next 7 days or rejected, the latched items would be automatically released.</p>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" data-dismiss="modal" aria-label="Close" onclick="location.href='matchUp.php'">Get It</button>
                <a href="setsManagement_messages.php">
                    <button type="button" class="btn btn-blue" onclick="location.href='setsManagement_messages.php'">View In Message</button>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="title"></div>

<!-- 页脚保留一些空白 -->
<div style="height: 300px; visibility:hidden;"></div>	
	
<?php
	include_once 'includes/footer.php';
?>
