<?php
//session_start();
include_once 'includes/header_admin.php';
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost', 'root', '123', 'collectionswap');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

		$setname = $mysqli->real_escape_string($_POST['setname']);
		$cardsAmount = $mysqli->real_escape_string($_POST['cardsAmount']);
		$setimage = $mysqli->real_escape_string('images/setimages/'.$_FILES['setimage']['name']);
		
		//make sure File type is image
		if (preg_match("!image!", $_FILES['setimage']['type'])) {
			
			//copy image to images/ folder
			if (copy($_FILES['setimage']['tmp_name'], $setimage)) {
				
				$_SESSION['setname'] = $setname;
				$_SESSION['setimage'] = $setimage;

				$sql = "INSERT INTO sets_exist (set_name,set_cover_image,set_cards_amount,ishidden)"
						. "VALUES ('$setname','$setimage','$cardsAmount',0)";
						
						//if the query is successful, redirect to CardSetAddSuccesfully.php page, done！
						if($mysqli->query($sql) === true) {
							$_SESSION['message'] = "<p>A new collection set has been created successfully!</p> <p>System has added \"$setname\" into the database!</p><p> Check the displayed image below!</p><p> Please upload the selected image!</p>";
							header("location: AdminAddCards.php");
						}
						else {
							$_SESSION['message'] = "Collection set could not be added to the database!";
						}
			}
			else {
				$_SESSION['message'] = "File upload failed!";
			}
		}
		else {
			$_SESSION['message'] = "Please only upload GIF, JPG, or PNG images!";
		}
}


?>





<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/AdminAddCardSet.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Administration Authority Only</h1><br>
    <h1>Create New Collection Set</h1><br>
    <form class="form" action="AdminAddCardSet.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
	  <td align="left">
      New Collection Name：
      </td>
      <input type="text" placeholder="Set Name" name="setname" required />
	  <td align="left">
     Collectable number：
      </td>
      <input type="number" placeholder="Cards Amount" name="cardsAmount" required />
      <div class="setimage"><label>Select Set cover image: </label><input type="file" name="setimage" accept="image/*" required /></div>
      <br /><br /><br />
	  <input type="submit" value="Submit" name="submit" class="btn btn-block btn-primary" />
    </form>



  </div>
</div>