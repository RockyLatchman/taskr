<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
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

    case '/taskr/top-careers':
        include_once '../templates/top-careers.php';
        break;

    case '/taskr/browse':
        include_once '../templates/browse.php';
        break;

    case '/taskr/employers':
        include_once '../templates/employers.php';
        break;

    case '/taskr/register/employer':
        include_once '../templates/employers/register.php';
        if (isset($_POST['next'])) {
            header('Location: /taskr/register/founder');
            exit();
        }
        break;

    case '/taskr/register/founder':
        include_once '../templates/employers/founder.php';
        if (isset($_POST['continue'])) {
            header('Location: /taskr/register/company-details');
            exit();
        }
        break;

    case '/taskr/register/company-details':
        include_once '../templates/employers/company-details.php';
        break;

    case '/taskr/registration/complete':
        include_once '../templates/employers/registered.php';
        if (isset($_POST['save-details'])) {
            header('Location: /taskr/registration/complete');
            exit();
        }
        break;

    default:
        http_response_code(404);
        include_once '../templates/404.php';
        break;

}

include_once '../templates/includes/footer.php';
