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
					strEmail = '".addslashes($_POST['strEmail'])."',
					strFirstName = '".addslashes($_POST['strFirstName'])."',
					strLastName = '".addslashes($_POST['strLastName'])."',
					nPhone = '".addslashes($_POST['nPhone'])."',
					nProvinceID = ".$_POST['nProvinceID'].",
					strCity = '".addslashes($_POST['strCity'])."',
					strPassword = '".$pass."'
				WHERE id = ".$cID;
		DBFactory::newData()->runSql("getData", $sql);
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
					    '".addslashes($_POST['strEmail'])."',
					    '".$pass."',
					    '".addslashes($_POST['strFirstName'])."',
					    '".addslashes($_POST['strLastName'])."',
					    '".addslashes($_POST['nPhone'])."',
					    ".$_POST['nHospitalID'].")";

			DBFactory::newData()->runSql("saveData", $sql);
		} else {
			$sql = "UPDATE users_cms
					SET 
						strEmail = '".addslashes($_POST['strEmail'])."',
						strFirstName = '".addslashes($_POST['strFirstName'])."',
						strLastName = '".addslashes($_POST['strLastName'])."',
						nPhone = '".addslashes($_POST['nPhone'])."',
						strPassword = '".$pass."'
					WHERE id = ".$uID;

			DBFactory::newData()->runSql("getData", $sql);
		}
	}

	static function saveHospital($hID) {
		if(isset($_FILES['strPhoto'])) {
			$fileUpload = DBFactory::newData()->uploadImg('strPhoto');
		} else {
			$fileUpload = $_POST['photo'];
		}

		if($hID == 0) {
			$sql = "INSERT INTO hospitals (
					    strPhoto,
					    strName,
					    strEmail,
					    nPhone,
					    nKids,
					    strBio,
					    strAddress,
					    strCity,
					    nProvinceID,
					    strPostalCode)
					VALUES(
						'".$fileUpload."',
					    '".addslashes($_POST['strName'])."',
					    '".addslashes($_POST['strEmail'])."',
					    '".addslashes($_POST['nPhone'])."',
					    '".$_POST['nKids']."',
					    '".addslashes($_POST['strBio'])."',
					    '".addslashes($_POST['strAddress'])."',
					    '".addslashes($_POST['strCity'])."',
					    '".$_POST['nProvinceID']."',
					    '".addslashes($_POST['strPostalCode'])."')";

			DBFactory::newData()->runSql("saveData", $sql);
		} else {
			$sql = "UPDATE hospitals
					SET 
						strPhoto = '".$fileUpload."',
						strName = '".addslashes($_POST['strName'])."',
						strEmail = '".addslashes($_POST['strEmail'])."',
						nPhone = '".addslashes($_POST['nPhone'])."',
						nKids = '".$_POST['nKids']."',
						strBio = '".addslashes($_POST['strBio'])."',
						strAddress = '".addslashes($_POST['strAddress'])."',
						strCity = '".addslashes($_POST['strCity'])."',
						nProvinceID = '".$_POST['nProvinceID']."',
						strPostalCode = '".addslashes($_POST['strPostalCode'])."'
					WHERE id = ".$hID;

			DBFactory::newData()->runSql("getData", $sql);
		}
	}

	static function saveWish($wID) {
		if($wID == 0) {
			$sql = "INSERT INTO wishes (
					    strWish,
					    nStatusID,
					    nHospitalID,
					    nUserID)
					VALUES(
						'".addslashes($_POST['strWish'])."',
						'3',
						'".$_SESSION["hospitalID"]."',
						'0')";

			DBFactory::newData()->runSql("saveData", $sql);
		} else {
			$sql = "UPDATE wishes
					SET 
						nStatusID = '".$_POST['nStatusID']."'
					WHERE id = ".$wID;

			DBFactory::newData()->runSql("getData", $sql);
		}
	}
}
?>