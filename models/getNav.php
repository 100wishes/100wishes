<?php
Class MainNav {
	static function makeNav() {
		$sql = "SELECT strNav FROM pages WHERE bMainPage=1";
		return DBFactory::newData()->runSql("getData", $sql);
	}
}
?>