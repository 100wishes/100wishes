<?php
include('../../../connect_wishleague.php');
$sql = "UPDATE wishes 
		SET 
			nStatusID = 2,
			nUserID = ".$_POST['nUserID']."
		WHERE id = ".$_POST['strWish'];

Connect::runSql("getData", $sql);
?>