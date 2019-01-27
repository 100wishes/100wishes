<?php
Class PagesController extends MainController {
	public function home() {
		$pID = 1;
		$arrData['nav'] = MainNav::makeNav();
		$arrData['page'] = GetPage::getPageInfo($pID);

		$content = $this->showview('home', $arrData);
		include('templates/pages.php');
	}

	public function about() {
		$pID = 3;
		$arrData['nav'] = MainNav::makeNav();
		$arrData['page'] = GetPage::getPageInfo($pID);

		$content = $this->showview('about', $arrData);
		include('templates/pages.php');
	}

	public function hospitals() {
		$pID = 2;
		$arrData['nav'] = MainNav::makeNav();
		$arrData['page'] = GetPage::getPageInfo($pID);
		$arrData['hospitals'] = GetHospitals::makeList();

		$content = $this->showview('hospitals', $arrData);
		include('templates/pages.php');
	}

	public function hospital() {
		$pID = 5;
		$arrData['nav'] = MainNav::makeNav();
		$arrData['page'] = GetPage::getPageInfo($pID);
		$arrData['hospital'] = GetHospitals::getOneHospital($_GET['hID'])[0];
		$arrData['wishes'] = GetHospitals::getWishes($_GET['hID']);

		$content = $this->showview('hospital', $arrData);
		include('templates/pages.php');
	}

	public function contact() {
		$pID = 4;
		$arrData['nav'] = MainNav::makeNav();
		$arrData['page'] = GetPage::getPageInfo($pID);

		$content = $this->showview('contact', $arrData);
		include('templates/pages.php');
	}

	public function login() {
		$arrData['nav'] = MainNav::makeNav();
		$content = $this->showview('login', $arrData);
		include('templates/pages.php');
	}
	public function profile() {
		$arrData['nav'] = MainNav::makeNav();
		$content = $this->showview('profile', $arrData);
		include('templates/pages.php');
	}
}
?>