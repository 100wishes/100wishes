<?php
class Count {
	static function countUserWish() {
		$sql = "SELECT nUserID, COUNT(*) AS `count` FROM wishes GROUP BY nUserID";

		$arrCount = DBFactory::newData()->runSql("getData", $sql);

		foreach ($arrCount as $count) {
			$sql = "SELECT nUserID, COUNT(*) AS `count` FROM wishes WHERE nStatusID = 1 AND nUserID = ".$count['nUserID'];

			$nWish = DBFactory::newData()->runSql("getData", $sql);

			if($nWish[0]['nUserID'] != 0) {
				$sql = "UPDATE users
						SET 
							nWishes = '".$nWish[0]['count']."'
						WHERE id = ".$nWish[0]['nUserID'];

				DBFactory::newData()->runSql("getData", $sql);
			}

			if($nWish[0]['nUserID'] == null) {
				$sql = "UPDATE users
						SET 
							nWishes = '".$nWish[0]['count']."'
						WHERE id = ".$count['nUserID'];

				DBFactory::newData()->runSql("getData", $sql);
			}
		}
	}
}
?>