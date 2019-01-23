<?php
Class GetUsers {
	static function usersHopsList($hID) {
		$sql = "SELECT users_cms.id, users_cms.nHospitalID, users_cms.strLastName, users_cms.strFirstName, hospitals.strName AS hospitalName FROM users_cms LEFT JOIN hospitals ON users_cms.nHospitalID = hospitals.id WHERE users_cms.bAdmin = 0 AND users_cms.nHospitalID = ".$hID;
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function allUsersAdminList() {
		$sql = "SELECT users_cms.id, users_cms.nHospitalID, users_cms.strLastName, users_cms.strFirstName, hospitals.strName AS hospitalName FROM users_cms LEFT JOIN hospitals ON users_cms.nHospitalID = hospitals.id WHERE users_cms.bAdmin = 0";
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function getOneUser($userID) {
		$sql = "SELECT users_cms.*, hospitals.id, hospitals.strName AS hospitalName FROM users_cms LEFT JOIN hospitals ON users_cms.nHospitalID = hospitals.id where users_cms.id = ".$userID;
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function clientsList() {
		$sql = "SELECT users.id, users.strEmail, users.strFirstName, users.strLastName FROM users";
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function getOneClient($cID) {
		$sql = "SELECT users.*, states.id AS strProvince FROM users LEFT JOIN states ON users.nProvinceID = states.id where users.id = ".$cID;
		return DBFactory::newData()->runSql("getData", $sql);
	}
}
?>