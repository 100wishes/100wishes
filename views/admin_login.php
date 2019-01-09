<form method="post" action="" id="login" autocomplete="off">
	<div class="blockfield">
		<label>E-mail:</label>
		<input type="text" class="required" id="cms-email" name="strEmail" placeholder="email">
	</div><!--//blockfield-->
	
	<div class="blockfield">
		<label>Password:</label>
		<input type="password" class="required" id="cms-pass" name="strPassword" placeholder="password">
	</div><!--//blockfield-->
	
	<input id="submitForm" class="btn main" type="submit" value="Login">
</form><!--//login form-->

<?php
	$_GET["error"] = (isset($_GET["error"]))?$_GET["error"]:"";

	if ($_GET["error"])
	{
		echo "<div class='msg errors'>You are not allowed to access this area.</div>";
	}
?>