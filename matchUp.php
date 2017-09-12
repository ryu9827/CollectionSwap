<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>

<!-- 二级导航 -->
	<div style="text-align: center">
		<h2>Choose your favourite collection!</h2>
	</div><br/>

<?php
  include_once 'includes/dbh.inc.php';
  $u_id = $_SESSION['u_id'];
  $sql = "select * from user_sets where user_id='$u_id'";
  $result = mysqli_query($conn, $sql);
  while ($rows = mysqli_fetch_row($result)){
    // echo $rows[3]."<br/>";
    echo '
    <div class="row">
      <div class="col-xs-4 col-xs-offset-4">      
        <a href="matchUp_result?set_id='.$rows[2].'" class="thumbnail">
          <img src="'.$rows[3].'" class="img-responsive center-block" alt="'.$rows[4].'">
        </a>  
      </div>
    </div>
    <p class="text-center">'.$rows[4].'</p><br/><br/>';   
  }
?>

<!-- 页脚保留一些空白 -->
<div style="height: 300px; visibility:hidden;"></div>	
	
<?php
	include_once 'includes/footer.php';
?>