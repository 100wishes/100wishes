<?php
Class AdminController extends MainController {
	public function login() {
		$content = $this->showview('admin_login');
		include('templates/admin.php');
	}

	public function cmsLogout() {
		$this->logout();
		header("location: index.php?controller=admin&action=login");
	}

	public function dashboard() {
		// $this->checkUser();

		$content = $this->showview('admin_dashboard');
		include('templates/admin.php');
	}

	public function wishes() {
		$this->checkUser();
		if($_SESSION["bAdmin"] == 1) {
			$arrData['wishes'] = GetWishes::getAllWishes();
		} else if($_SESSION["bAdmin"] == 0) {
			$arrData['wishes'] = GetWishes::getHospitalWishes($_SESSION["hospitalID"]);
		}
		
		$content = $this->showview('admin_wishes', $arrData);
		include('templates/admin.php');
	}

	public function hospital() {
		$this->checkUser();
		$hID = $_SESSION["hospitalID"];
		$arrData['hospitals'] = GetHospitals::getOneHospital($hID);

		$content = $this->showview('admin_hospitals', $arrData);
		include('templates/admin.php');
	}

	public function hospitals() {
		$this->checkUser();
		$hID = $_SESSION["hospitalID"];
		$arrData['hospitals'] = GetHospitals::makeList();

		$content = $this->showview('admin_hospitals', $arrData);
		include('templates/admin.php');
	}

	public function users() {
		$this->checkUser();
		$hID = $_SESSION["hospitalID"];
		$adm = $_SESSION["bAdmin"];

		if($adm == 0) {
			$arrData['users'] = GetUsers::usersHopsList($hID);
		} else {
			$arrData['users'] = GetUsers::allUsersAdminList();
		}
		

		$content = $this->showview('admin_users', $arrData);
		include('templates/admin.php');
	}

	public function clients() {
		$this->checkUser();
		$arrData['clients'] = GetUsers::clientsList();

		$content = $this->showview('admin_clients', $arrData);
		include('templates/admin.php');
	}

	public function add() {
		$this->checkUser();
		$arrData['provinces'] = GetProvince::showProvinces();
		$arrData['hospitalsList'] = GetHospitals::showHospitalList();

		if(isset($_GET['cID'])) {
			$arrData['client'] = GetUsers::getOneClient($_GET['cID']);
		}

		if(isset($_GET['uID'])) {
			$arrData['user'] = GetUsers::getOneUser($_GET['uID']);
		}

		if(isset($_GET['hID'])) {
			$arrData['hospitalInfo'] = GetHospitals::getOneHospital($_GET['hID']);
		}

		if(isset($_GET['wID'])) {
			$arrData['status'] = GetWishes::getStatus();
			$arrData['wishInfo'] = GetWishes::getOneWish($_GET['wID']);
		}
		
		$content = $this->showview('admin_add', $arrData);
		include('templates/admin.php');
	}

	public function delete() {
		$this->checkUser();
		if(isset($_GET['cID'])) {
			Delete::deleteClient($_GET['cID']);
			header("location: index.php?controller=admin&action=clients&delete=true");
		}

		if(isset($_GET['uID'])) {
			Delete::deleteUser($_GET['uID']);
			header("location: index.php?controller=admin&action=users&delete=true");
		}

		if(isset($_GET['hID'])) {
			Delete::deleteHospital($_GET['hID']);
			header("location: index.php?controller=admin&action=hospitals&delete=true");
		}

		if(isset($_GET['wID'])) {
			Delete::deleteWish($_GET['wID']);
			header("location: index.php?controller=admin&action=wishes&delete=true");
		}
	}

	public function save() {
		$this->checkUser();
		if(isset($_GET['cID'])) {
			Save::saveClient($_GET['cID']);
			header("location: index.php?controller=admin&action=clients&save=true");
		}

		if(isset($_GET['uID'])) {
			Save::saveUser($_GET['uID']);
			header("location: index.php?controller=admin&action=users&save=true");
		}

		if(isset($_GET['hID'])) {
			Save::saveHospital($_GET['hID']);
			if($_SESSION["bAdmin"] == 1) {
				header("location: index.php?controller=admin&action=hospitals&save=true");
			} else if($_SESSION["bAdmin"] == 0) {
				header("location: index.php?controller=admin&action=hospital&save=true");
			}
		}

		if(isset($_GET['wID'])) {
			Save::saveWish($_GET['wID']);
			header("location: index.php?controller=admin&action=wishes&save=true");
		}
	}
}
?>