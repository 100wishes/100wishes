<?php
Class GetPage {
	static function getPageInfo($pID) {
		$sql = "SELECT * FROM pages WHERE id = ".$pID;
		return DBFactory::newData()->runSql("getData", $sql)[0];
	}
}
?>