<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'config/Connection.php';

$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? 'index';

switch($page) {
    case 'home':
        require 'controller/HomeController.php';
        $controller = new HomeController();
        break;
    case 'student':
        require 'controller/StudentController.php';
        $controller = new StudentController();
        break;
    case 'suku':
        require 'controller/SukuController.php';
        $controller = new SukuController();
        break;
    default:
        die('Page not found');
}

if(method_exists($controller, $action)) {
    $controller->$action();
} else {
    die('Action not found');
}