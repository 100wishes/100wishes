<?php
Class Save {
	static function saveClient($cID) {
		if($_POST['strPassword'] == '') {
			$pass = $_POST['strPastPassword'];
		} else {
			$pass = password_hash($_POST['strPassword'], PASSWORD_DEFAULT);
		}

		$sql = "UPDATE users
				SET 
					strEmail = '".$_POST['strEmail']."',
					strFirstName = '".$_POST['strFirstName']."',
					strLastName = '".$_POST['strLastName']."',
					nPhone = '".$_POST['nPhone']."',
					nProvinceID = ".$_POST['nProvinceID'].",
					strCity = '".$_POST['strCity']."',
					strPassword = '".$pass."'
				WHERE id = ".$cID;
		return DBFactory::newData()->runSql("getData", $sql);
	}

	static function saveUser($uID) {
		if($_POST['strPassword'] == '') {
			$pass = $_POST['strPastPassword'];
		} else {
			$pass = password_hash($_POST['strPassword'], PASSWORD_DEFAULT);
		}

		if($uID == 0) {
			$sql = "INSERT INTO users_cms (
					    strEmail,
					    strPassword,
					    strFirstName,
					    strLastName,
					    nPhone,
					    nHospitalID)
					VALUES(
					    '".$_POST['strEmail']."',
					    '".$pass."',
					    '".$_POST['strFirstName']."',
					    '".$_POST['strLastName']."',
					    '".$_POST['nPhone']."',
					    ".$_POST['nHospitalID'].")";

			return DBFactory::newData()->runSql("saveData", $sql);
		} else {
			$sql = "UPDATE users_cms
					SET 
						strEmail = '".$_POST['strEmail']."',
						strFirstName = '".$_POST['strFirstName']."',
						strLastName = '".$_POST['strLastName']."',
						nPhone = '".$_POST['nPhone']."',
						strPassword = '".$pass."'
					WHERE id = ".$uID;

			return DBFactory::newData()->runSql("getData", $sql);
		}
	}
}
?>