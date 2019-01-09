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

	public function hospitals() {
		$this->checkUser();
		$arrData['hospitals'] = GetHospitals::makeList();

		$content = $this->showview('admin_hospitals', $arrData);
		include('templates/admin.php');
	}
}
?>