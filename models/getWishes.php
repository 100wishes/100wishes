<?php
Class GetWishes {
	static function getHospitalWishes($hID) {
		$sql = "SELECT wishes.*, users.strFirstName, users.nPhone, users.strEmail, hospitals.strName, status.strName AS status FROM wishes LEFT JOIN status ON wishes.nStatusID = status.id LEFT JOIN hospitals ON wishes.nHospitalID = hospitals.id LEFT JOIN users ON users.id = wishes.nUserID WHERE wishes.nHospitalID = ".$hID;
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function getHospitalAvailableWishes($hID) {
		$sql = "SELECT * FROM wishes WHERE nStatusID = 3 AND nHospitalID = ".$hID;
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function getAllWishes() {
		$sql = "SELECT wishes.*, users.strFirstName, users.nPhone, users.strEmail, hospitals.strName, status.strName AS status FROM wishes LEFT JOIN status ON wishes.nStatusID = status.id LEFT JOIN hospitals ON wishes.nHospitalID = hospitals.id LEFT JOIN users ON users.id = wishes.nUserID";
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function getOneWish($wID) {
		$sql = "SELECT wishes.*, users.strFirstName, users.nPhone, users.strEmail, hospitals.strName, status.strName AS status FROM wishes LEFT JOIN status ON wishes.nStatusID = status.id LEFT JOIN hospitals ON wishes.nHospitalID = hospitals.id LEFT JOIN users ON users.id = wishes.nUserID WHERE wishes.id = ".$wID;
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function getStatus() {
		$sql = "SELECT * FROM status";
		return DBFactory::newData()->runSql("getData", $sql);
	}
}
?>