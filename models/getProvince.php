<?php
Class GetProvince {
	static function showProvinces() {
		$sql = "SELECT id, strName FROM states WHERE nCountryID = 38";
		return DBFactory::newData()->runSql("getData", $sql);
	}
}
?>