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

	public function policies() {
		$pID = 5;
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
		$pID = 2;
		$arrData['nav'] = MainNav::makeNav();
		$arrData['page'] = GetPage::getPageInfo($pID);
		$arrData['hospital'] = GetHospitals::getOneHospital($_GET['hID'])[0];
		$arrData['wishes'] = GetWishes::getHospitalAvailableWishes($_GET['hID']);

		$content = $this->showview('hospital', $arrData);
		include('templates/pages.php');
	}

	public function contact() {
		$pID = 4;
		$arrData['nav'] = MainNav::makeNav();
		$arrData['globals'] = Globals::makeArrGlobals();
		$arrData['page'] = GetPage::getPageInfo($pID);

		$content = $this->showview('contact', $arrData);
		include('templates/pages.php');
	}

	public function login() {
		$pID = 9;
		$arrData['nav'] = MainNav::makeNav();
		$arrData['page'] = GetPage::getPageInfo($pID);

		$content = $this->showview('login', $arrData);
		include('templates/pages.php');
	}

	public function mission() {
		$pID = 7;
		$arrData['nav'] = MainNav::makeNav();
		$arrData['page'] = GetPage::getPageInfo($pID);

		$content = $this->showview('missions', $arrData);
		include('templates/pages.php');
	}

	public function addMission() {
		$oMission = new Mission();
		$oMission-> addToMission($_GET['wID']);

		header("location: index.php?controller=pages&action=mission");
	}

	public function deleteMission() {
		array_splice($_SESSION['arrMission'], $_GET["wish"], 1);

		if(isset($_SERVER['HTTP_REFERER'])) {
		    $previous = $_SERVER['HTTP_REFERER'];

		    header("location: ".$previous);
		} else {
			header("location: index.php?controller=pages&action=mission");
		}
	}

	public function signup() {
		$pID = 9;
		$arrData['nav'] = MainNav::makeNav();
		$arrData['page'] = GetPage::getPageInfo($pID);
		$arrData['provinces'] = GetProvince::showProvinces();

		$content = $this->showview('signup', $arrData);
		include('templates/pages.php');
	}

	public function profile() {
		$pID = 8;
		$this->checkClient();
		$arrData['nav'] = MainNav::makeNav();
		$arrData['page'] = GetPage::getPageInfo($pID);

		$content = $this->showview('profile', $arrData);
		include('templates/pages.php');
	}
	
	public function editprofile() {
		$pID = 8;
		$this->checkClient();
		$arrData['nav'] = MainNav::makeNav();
		$arrData['page'] = GetPage::getPageInfo($pID);

		$content = $this->showview('editprofile', $arrData);
		include('templates/pages.php');
	}
}
?> 