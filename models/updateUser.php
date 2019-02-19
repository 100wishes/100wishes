<?php
include('../../../connect_wishleague.php');
if($_POST['strPassword'] == '') {
	$pass = $_POST['strPastPassword'];
} else {
	$pass = password_hash($_POST['strPassword'], PASSWORD_DEFAULT);
}

$sql = "UPDATE users
		SET 
			strEmail = '".addslashes($_POST['strEmail'])."',
			strFirstName = '".addslashes($_POST['strFirstName'])."',
			strLastName = '".addslashes($_POST['strLastName'])."',
			nPhone = '".addslashes($_POST['nPhone'])."',
			strPassword = '".$pass."',
			nProvinceID = '".$_POST['nProvinceID']."',
			strCity = '".addslashes($_POST['strCity'])."'
		WHERE id = ".$_POST['id'];

Connect::runSql("getData", $sql);
?>