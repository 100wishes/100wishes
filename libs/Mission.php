<?php
class Mission {
	function addToMission($wID) {
		$arrWish = GetWishes::getWishAdd($wID)[0];
		$arrMission = (is_array($_SESSION["arrMission"]))?$_SESSION["arrMission"]:array();

		if(!in_array($arrWish["id"], $arrWish) || empty($arrMission)){
			array_push($arrMission, array("wID"=>$arrWish["id"], "hID"=>$arrWish["hID"], "strWish"=>$arrWish["strWish"], "hospName"=>$arrWish["strName"]));

			$_SESSION["arrMission"] = $arrMission;
		}
	}
}
?>