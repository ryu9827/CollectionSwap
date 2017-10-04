<?php
	include_once 'includes/header.php';
    include_once 'includes/dbh.inc.php';
    include_once 'includes/charity.php';
	if (!isset($_SESSION['u_id'])){
		header("location:login.php");

	};
$set_id = $_POST['set_id'];
global $conn;
$sql = "SELECT set_name from sets_exist";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_row($result);
$set_name = $row[0];

$obj = $_POST['card_id'];
//call method to search matching users
$finallist = askForCharity($obj,$set_id);
//var_dump($finallist);
?>

<!-- 二级导航 -->
	<div style="text-align: center">
		<h2>Charity Match Results</h2>
	</div><br/>

<script type="text/javascript">
//to get premeters from url
function GetQueryString(name){
     var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)");
     var r = window.location.search.substr(1).match(reg);
     if(r!=null)return  unescape(r[2]); return null;
};

var set_id = GetQueryString("set_id");

function sendRequest(name,cardname,set_id){
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.open('POST','includes/sendMatchRequest.php',true);
	xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	xmlhttp.send('name='+name+'&cardname='+cardname+'&set_id='+set_id);
};
</script>

<?php
if(empty($finallist)){
    echo '
    <div style="text-align: center">
            <h3 class="center-block">Sorry, no results were found!</h3><br/>
            <h3 style="text-align: center">You can go back to the previous page and try other collections.</h3><br/>
            </div>
            <br/><br/>
            <button class="btn btn-default btn-lg center-block" onclick="window.history.go(-1)">Previous Page</button><br/>
            
    ';
}
else{
    echo '
    <div class="row">
    <div class="col-xs-8 col-xs-offset-2">
        <!-- no need for auto turning, so give a huge number for stopping auto turning -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="9999999999">
            <!-- carousel indicators, round white buttons. there is no need, so hidden.
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol> -->
            <div class="carousel-inner" role="listbox">
<!--                <div id="carousel-inner">   -->

    ';
$i =0;
foreach ($finallist as $key => $value){
$name = $value['name'];
//$setname = $value['setname'];
//var_dump($setname);
$cardname = $value['cardname'];
$good = $value['good'];
$normal = $value['normal'];
$bad = $value['bad'];
$lastlogin = $value['lastlogin'];
if($i==0){//First match is the best match
echo'<div class="item active">
    <div class="col-xs-6 col-xs-offset-3">
    <div class="panel panel-primary">
    <div class="panel-heading">
    <h3 class="panel-title">Best Match</h3>
    </div>
    <div class="panel-body">
    <p>User Name: <strong>'.$name.'</strong></p>
    <p>Collection Name: '.$set_name.'</p>
    <p>Demand：'.$cardname.'</p>
    <p>Last Login: '.$lastlogin.'</p>
    <p>'.$name.'\'s Feedback：</p>
    <div class="row">
    <div class="col-xs-3 col-xs-offset-2">
        <img src="images/icons/happy_face1.gif">&nbsp&nbsp'.$good.'<br/><br/>
    </div>
    <div class="col-xs-3">
        <img src="images/icons/neutral_face1.gif">&nbsp&nbsp'.$normal.'<br/><br/>
    </div>
    <div class="col-xs-3">
        <img src="images/icons/sad_face1.gif">&nbsp&nbsp'.$bad.'<br/>
    </div>
    </div>
    </div>
    <div class="panel-footer">
    <button type="submit" class="btn btn-success btn-lg center-block" data-toggle="modal" data-target="#sentRequest" onclick="sendRequest(\''.$name.'\',\''.$cardname.'\',\''.$set_id.'\')">Ask For Charity</button>
    </div>
    </div>
    </div>
    </div>
    ';
}
else{// after first are normal matches
    echo'
    <div class="item">
    <div class="col-xs-6 col-xs-offset-3">
    <div class="panel panel-info">
    <div class="panel-heading">
    <h3 class="panel-title">&nbsp</h3>
    </div>
    <div class="panel-body">
    <p>User Name: <strong>'.$name.'</strong></p>
    <p>Collection Name: '.$set_name.'</p>
    <p>Demand：'.$cardname.'</p>
    <p>Last Login: '.$lastlogin.'</p>
    <p>'.$name.'\'s Feedback：</p>
    <div class="row">
    <div class="col-xs-3 col-xs-offset-2">
        <img src="images/icons/happy_face1.gif">&nbsp&nbsp'.$good.'<br/><br/>
    </div>
    <div class="col-xs-3">
        <img src="images/icons/neutral_face1.gif">&nbsp&nbsp'.$normal.'<br/><br/>
    </div>
    <div class="col-xs-3">
        <img src="images/icons/sad_face1.gif">&nbsp&nbsp'.$bad.'<br/>
    </div>
    </div>
    </div>
    <div class="panel-footer">
    <button class="btn btn-success btn-lg center-block" data-toggle="modal" data-target="#sentRequest" onclick="sendRequest(\''.$name.'\',\''.$cardname.'\',\''.$set_id.'\')">Ask For Charity</button>
    </div>
    </div>
    </div>
    </div>
    
    ';
};
$i++;
}
echo '
            </div>
      <!-- left and right page turning buttons -->       
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"><p>Return</p></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"><p>Next</p></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </div>
</div>
';
}
?>


<div style="height: 50px; visibility:hidden;"></div> 

<!-- Modal -->
<div class="modal fade" border="1px" id="sentRequest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="top:250px;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Your request has been sent</h4>
      </div>
      <div class="modal-body">
        <p>Please wait the user's response. </p>
        <p>Attention: Your collectables for the request have been temporary latched during the swap process. If your request has not been reposed in next 7 days or rejected, the latched items would be automatically released.</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" data-dismiss="modal" aria-label="Close">Get It</button>        
        <a href="setsManagement_messages.php">
          <button type="button" class="btn btn-info">View In Message</button>
        </a>      
      </div>
    </div>
  </div>
</div>

<!-- keep some white space as footer -->
<!-- <div style="height: 100px; visibility:hidden;"></div>	  -->
	
<?php
	include_once 'includes/footer.php';
?>
