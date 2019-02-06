<?php
include('../../connect_wishleague.php');
include("libs/DBFactory.php");
include("controllers/mainController.php");
include("controllers/pagesController.php");
include("controllers/adminController.php");
include("models/getNav.php");
include("models/getGlobals.php");
include("models/getPage.php");
include("models/getHospitals.php");
include("models/getWishes.php");
include("models/getUsers.php");
include("models/getProvince.php");
include("models/delete.php");
include("models/save.php");

session_start();

$controller = (isset($_GET["controller"]))?$_GET["controller"]:"pages";
$action = (isset($_GET["action"]))?$_GET["action"]:"home";

$cName = ucfirst($controller)."Controller";
$oController = new $cName();
$oController->$action();

?>