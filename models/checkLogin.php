<?php 
include('../../../connect_wishleague.php');

$sql = "SELECT * FROM users_cms WHERE strEmail='".$_POST["strEmail"]."'";
$arrUsers = Connect::runSql("getData", $sql);

$passHash = $arrUsers[0]["strPassword"];

if(password_verify($_POST["strPassword"], $passHash))
{
	session_start();
	$_SESSION["userID"] = $arrUsers[0]["id"];
	$_SESSION["hospitalID"] = $arrUsers[0]["nHospitalID"];
	$_SESSION["bAdmin"] = $arrUsers[0]["bAdmin"];
	echo true;
}
?>