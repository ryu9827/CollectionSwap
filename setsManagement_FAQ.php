<?php
	include_once 'includes/header.php';

	if (!isset($_SESSION['u_id'])){
		header("location:login.php");
	}
?>


	<div style="text-align: center">
		<h2>Frequently Asked Questions</h2>
	</div><br/>

	<div class="col-xs-12">
		<div class="row">
			<ul class="nav nav-tabs">
				<li role="presentation"><a href="setsManagement">My Collection</a></li>
				<li role="presentation"><a href="setsManagement_messages">Messages</a></li> 
				<li role="presentation"><a href="setsManagement_history">History</a></li>
    <li role="presentation" class="active"><a href="setsManagement_FAQ">FAQ</a></li>
			</ul>
			<br/><br/>
		</div>
	</div>
	<br/>

  <div class="col-xs-8 col-xs-offset-2 jumbotron">
    <h3><strong>1.	How can I start using this site?</strong></h3>
    <p>To begin using all aspects of this site you first need to register. Click the ‘Sign in” button, and the registration link.</p>
    <h3><strong>2.	I haven’t received my password confirmation after registration.</strong></h3>
    <p>Often, the reason for this is that you typed in your e-mail address incorrectly during registration.</p>
    <h3><strong>3.	I can’t login with the password I received after registration.</strong></h3>
    <p>You are probably entering an incorrect password – watch for similar characters: 1li o0 S5 etc. and use the same username that you entered during registration.</p>
    <h3><strong>4.	How do I swap collectibles with others?</strong></h3>
    <p>This site provides you with information about what collectibles other users are offering or need. With this information, you can arrange an exchange of collectables with other swappers.</p>
    <h3><strong>5.	My collection is not on this site.</strong></h3>
    <p>Use the “Contact” e-mail address on this site to let us know which collection you are looking for. We can then add the collection onto the site. If possible, please send a scanned image of the album cover, or a link to such an image.</p>
    <h3><strong>6.	How do I delete my user account?</strong></h3>
    <p>If you no longer wish to use Collection Swap, you may contact us to remove your account in our system with one month written notice.</p>
    <h3><strong>7.	Can I send more than one swap request at the same time?</strong></h3>
    <p>No, only one request can be sent for swap. After sending a swap request your items are “latched”, therefore you don’t have to worry about that you have offered an item in several swap requests simultaneously. You will be able to request new swap immediately once your request has been rejected or the swap process has been completed.</p>
    <h3><strong>8.	I collect several collections at the same time. Can I exchange across all collections with Collection Swap?</strong></h3>
    <p>No, Collection Swap automatically finds the best swap partners through the best match system within the same collection category.</p>
    <h3><strong>9.	Can I buy or sell items on Collection Swap?</strong></h3>
    <p>No, Collection Swap is a swap exchange only.</p>
    <h3><strong> 10.	How do I send my items safely and correctly?</strong></h3>
    <p>It is easiest to choose an envelope with a window. The address of the exchange partner is pre-printed in the correct place. Or go to NZ post website to find out the suitable packaging products for the various sizes of collectables.</p>
    <h3><strong>11.	What should I do if the swap partner does not send the items?</strong></h3>
    <p>If the swap partner does not send the items, you can give the swap partner a negative rating. We monitor our users and in the case of recurrence, users are banned from Collection Swap. Checking the user-rating each time before you send your items.</p>

  </div>


	<div style="height: 300px; visibility:hidden;"></div>
			

<?php
	include_once 'includes/footer.php';
?>