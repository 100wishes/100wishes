<?php
Class GetUsers {
	static function usersAdminList() {
		$sql = "SELECT users_cms.id, users_cms.nHospitalID, users_cms.strLastName, users_cms.strFirstName, hospitals.strName AS hospitalName FROM users_cms LEFT JOIN hospitals ON users_cms.nHospitalID = hospitals.id WHERE users_cms.bAdmin = 0";
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function usersHospitalList($hID) {
		$sql = "SELECT users_cms.id, users_cms.strEmail, users_cms.strFirstName, users_cms.strLastName FROM users_cms WHERE users_cms.bAdmin = 0 AND users_cms.nHospitalID = ".$hID;
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function getOneUser($userID) {
		$sql = "SELECT users_cms.*, hospitals.id, hospitals.strName FROM users_cms LEFT JOIN hospitals ON users_cms.nHospitalID = hospitals.id where users_cms.id = ".$userID;
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function clientsList() {
		$sql = "SELECT users.id, users.strEmail, users.strFirstName, users.strLastName FROM users";
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function getOneClient($cID) {
		$sql = "SELECT users.*, states.strName FROM users_cms LEFT JOIN hospitals ON users_cms.nHospitalID = hospitals.id where users_cms.id = ".$cID;
		return DBFactory::newData()->runSql("getData", $sql);
	}
}
?>