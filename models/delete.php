<?php
Class Delete {
	static function deleteClient($cID) {
		$sql = "DELETE FROM users WHERE id='".$cID."'";
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function deleteUser($uID) {
		$sql = "DELETE FROM users_cms WHERE id='".$uID."'";
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function deleteHospital($hID) {
		$sql = "DELETE FROM hospitals WHERE id='".$hID."'";
		return DBFactory::newData()->runSql("getData", $sql);
	}
}
?>