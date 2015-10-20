<?php
error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);

require('controllers/main_controller.php');

$controller = !isset($_REQUEST['controller']) ? null : $_REQUEST['controller'];
$action = !isset($_REQUEST['action']) ? null : $_REQUEST['action'];

$objMain = new MainController($controller, $action);

unset($objMain);

?>
