<?php
include('../../../connect_wishleague.php');
$sql = "INSERT INTO contacts (
			strName,
			strEmail,
			nPhone,
			strMessage)
		VALUES (
			'".$_POST['strName']."',
			'".$_POST['strEmail']."',
			'".$_POST['nPhone']."',
			'".$_POST['strMessage']."'
		)";

Connect::runSql("getData", $sql);
?>