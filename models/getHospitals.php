<?php
Class GetHospitals {
	static function makeList() {
		$sql = "SELECT hospitals.id, hospitals.strName, hospitals.strPhoto, hospitals.strCity, states.strName AS province FROM hospitals LEFT JOIN states ON hospitals.nProvinceID = states.id";
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function getOneHospital($hID) {
		$sql = "SELECT hospitals.*, states.strName AS province FROM hospitals LEFT JOIN states ON hospitals.nProvinceID = states.id WHERE hospitals.id = ".$hID;
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function getWishes($hID) {
		$sql = "SELECT wishes.*, status.strName AS status FROM wishes LEFT JOIN status ON wishes.nStatusID = status.id WHERE nHospitalID = ".$hID;
		return DBFactory::newData()->runSql("getData", $sql);
	}
}
?>