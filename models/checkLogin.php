<?php 
include('../../../connect_wishleague.php');

$sql = "SELECT * FROM users_cms WHERE strEmail='".$_POST["strEmail"]."'";
$arrUsers = Connect::runSql("getData", $sql);

// $passHash = $arrUsers[0]["strPassword"];

// if(password_verify($_POST["password"], $passHash))
// {
// 	session_start();
// 	$_SESSION["userID"] = $arrUsers[0]["id"];
// 	header("location: ../dashboard.php");
// } 
// else {
// 	header("location: ../index.php?error=true");
// 	die;
// }

if($arrUsers)
{
	session_start();
	$_SESSION["userID"] = $arrUsers[0]["id"];
	$_SESSION["bAdmin"] = $arrUsers[0]["bAdmin"];
	echo true;
}
?>