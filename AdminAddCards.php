<link rel="stylesheet" href="css/AdminAddCards.css" type="text/css">

<?php
//session_start();
include_once 'includes/header_admin.php';
//$db = mysqli_connect("localhost", "root", "123", "collectionswap");
$mysqli = new mysqli('localhost', 'root', '123', 'collectionswap');

$setname = $_SESSION['setname'];
$sqlid = "select * from sets_exist where set_name = '$setname';";
$result1 = mysqli_query($mysqli, $sqlid);	
foreach($result1 as $key)
{
$setid = $key['set_id'];
}
	
$msg = "";
	if (isset($_POST['upload'])) {
		$target = "images/cardImages/".basename($_FILES['image']['name']);

			$image = $_FILES['image']['name'];
			$image_name = mysqli_real_escape_string($mysqli, $_POST['image_name']);
			$sql = "INSERT INTO sets_cards (card_images, card_name, set_id) VALUES ('$target', '$image_name', '$setid' )";
			mysqli_query($mysqli, $sql);

		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image Uploaded Successfully";
		} else {
			$msg = "There Was A problem uploading image";
		}
	}
	
?>
<!DOCTYPT html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
		#content{
			width: 50%;
			margin: 20px auto;
			border: 1px solid #cbcbcb;
		}
		form{
			width: 50%;
			margin: 20px auto;
		}
		form div{
			margin-top: 5px;
		}
		#img_div{
			width: 80%;
			padding: 5px;
			margin: 15px auto;
			border: 1px solid #cbcbcb;
		}
		#img_div:after{
			content: "";
			display: block;
			clear: both;
		}
		img{
			float: left;
			margin: 5px;
			width: 300px;
			height: 140px;
		}
	</style>
</head>
<body>
<?php
echo '
<div id="content">
<form method="post" action="AdminAddCards.php" enctype="multipart/form-data">
<div class="alert alert-success"><font size="+1">'. $_SESSION['message'].' </font></div><br />  
<span class="setname"><img src="'.$_SESSION['setimage'].'" alt="Lights" style="max-width: 500px !important; max-height: 500px !important"></span><br><br><br><br><br><br>

<div>
<input type="file" name="image" required>
</div>
<div>
<textarea name="image_name" cols="30" rows="4" placeholder="Please enter a card name !" required></textarea>
</div>
<div>
<input type="submit" name="upload" value="Upload" class="btn btn-block btn-primary">
</form>
</div>
';

$db = mysqli_connect("localhost", "root", "123", "collectionswap");
$sql = "SELECT card_images, card_name FROM sets_cards where set_id = $setid";
$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result)) {
echo "<div id='img_div'>";
echo "<img src='".$row['card_images']."'>";
echo "<font size=\"+4\" color=\"#000000\">"	.$row['card_name'].	"</font>";
echo "</div>";
}
?>
</div>
</body>
</html>

