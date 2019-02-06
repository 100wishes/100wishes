<?php
Class Globals {
	static function makeArrGlobals() {
		$arrGlobals['logo'] = DBFactory::newData()->getGlobals('logo');

		$arrGlobals['phone'] = DBFactory::newData()->getGlobals('phone');

		$arrGlobals['address'] = DBFactory::newData()->getGlobals('address');

		$arrGlobals['facebook'] = DBFactory::newData()->getGlobals('facebook');

		$arrGlobals['instagram'] = DBFactory::newData()->getGlobals('instagram');

		$arrGlobals['twitter'] = DBFactory::newData()->getGlobals('twitter');

		return $arrGlobals;
	}
}
?>