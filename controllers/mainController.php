<?php
Class MainController {
	public function showview($view, $arrData='') {
		ob_start();
		include_once('views/'.$view.'.php');
		$content = ob_get_contents();
		ob_clean();

		return $content;
	}
}
?>