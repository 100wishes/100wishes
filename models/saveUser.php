<?php
include('../../../connect_wishleague.php');
$pass = password_hash($_POST['strPassword'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (
			strEmail,
			strPassword,
			strFirstName,
			strLastName,
			nPhone,
			nProvinceID,
			strCity)
		VALUES (
			'".addslashes($_POST['strEmail'])."',
			'".$pass."',
			'".addslashes($_POST['strFirstName'])."',
			'".addslashes($_POST['strLastName'])."',
			'".addslashes($_POST['nPhone'])."',
			'".addslashes($_POST['nProvinceID'])."',
			'".addslashes($_POST['strCity'])."'
		)";

Connect::runSql("saveData", $sql);
?>