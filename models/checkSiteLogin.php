<?php 
include('../../../connect_wishleague.php');

$sql = "SELECT * FROM users WHERE strEmail='".$_POST["strEmail"]."'";
$arrUsers = Connect::runSql("getData", $sql);

$passHash = $arrUsers[0]["strPassword"];

if(password_verify($_POST["strPassword"], $passHash))
{
	session_start();
	$_SESSION["arrClient"] = $arrUsers[0]["id"];
	echo true;
}
?>