<?php
Class MainController {
	public function showview($view, $arrData='') {
		ob_start();
		include_once('views/'.$view.'.php');
		$content = ob_get_contents();
		ob_clean();

		return $content;
	}

	public function checkUser() {
		if (!isset($_SESSION["userID"])) 
		{
			header("location: index.php?controller=admin&action=login&error=true");
			die;
		}
	}

	public function logout() {
		session_start();
		session_destroy();
	}
}
?>