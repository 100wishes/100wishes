<?php
include('../../connect_wishleague.php');
include("libs/DBFactory.php");
include("controllers/mainController.php");
include("controllers/pagesController.php");
include("controllers/adminController.php");
include("models/getNav.php");
include("models/getPage.php");
include("models/getHospitals.php");

session_start();

$controller = (isset($_GET["controller"]))?$_GET["controller"]:"pages";
$action = (isset($_GET["action"]))?$_GET["action"]:"home";

$cName = ucfirst($controller)."Controller";
$oController = new $cName();
$oController->$action();

?>