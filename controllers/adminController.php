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
		$this->checkUser();

		$content = $this->showview('admin_dashboard');
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
		$arrData['clients'] = GetUsers::clientsList();
		
		$content = $this->showview('admin_clients', $arrData);
		include('templates/admin.php');
	}
}
?>