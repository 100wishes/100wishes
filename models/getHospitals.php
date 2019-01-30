<?php
Class GetHospitals {
	static function makeList() {
		$sql = "SELECT hospitals.id, hospitals.strName, hospitals.strPhoto, hospitals.strCity, states.strName AS province FROM hospitals LEFT JOIN states ON hospitals.nProvinceID = states.id WHERE hospitals.id <> 3";
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function getOneHospital($hID) {
		$sql = "SELECT hospitals.*, states.strName AS province FROM hospitals LEFT JOIN states ON hospitals.nProvinceID = states.id WHERE hospitals.id = ".$hID;
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function showHospitalList() {
		$sql = "SELECT id, strName FROM hospitals WHERE hospitals.id <> 3";
		return DBFactory::newData()->runSql("getData", $sql);
	}
}
?>