<?php
#ini_set('display_errors', '1');
#error_reporting(E_ALL);
$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($request, PHP_URL_PATH);
include_once '../templates/includes/header.php';

switch ($path) {
    case '/taskr/':
        include_once '../templates/home.php';
        break;

    case '/taskr/about':
        include_once '../templates/about.php';
        break;

    default:
        http_response_code(404);
        include_once '../templates/404.php';
        break;

}

include_once '../templates/includes/footer.php';
