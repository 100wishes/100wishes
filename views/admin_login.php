<?php
	$_GET["error"] = (isset($_GET["error"]))?$_GET["error"]:"";

	if ($_GET["error"])
	{
		echo "<div class='errormsg'>You are not allowed to access this area.</div>";
	}
?>
<form method="post" action="" id="login" autocomplete="off">
	<img src="images/logo.svg" alt="Wish League Admin Area"/>
	<h1>Log In</h1>
	<div class="blockfield">
		<label>E-mail:</label>
		<input type="text" class="required" id="cms-email" name="strEmail" placeholder="email">
	</div><!--//blockfield-->
	
	<div class="blockfield">
		<label>Password:</label>
		<input type="password" class="required" id="cms-pass" name="strPassword" placeholder="password">
	</div><!--//blockfield-->
	
	<input id="submitForm" class="btn-primary" type="submit" value="Log In">
</form><!--//login form-->