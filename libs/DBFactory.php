<?php
Class DBFactory {
	static function newData() {
		$oDB = new Connect();
		return $oDB;
	}
}
?>