<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($request, PHP_URL_PATH);
require '../templates/includes/header.php';

switch ($path) {
    case '/taskr/':
        require '../templates/home.php';
        break;

    case '/taskr/about':
        require '../templates/about.php';
        break;

    case '/taskr/top-careers':
        require '../templates/top-careers.php';
        break;

    case '/taskr/browse':
        require '../templates/browse.php';
        break;

    case '/taskr/employers':
        require '../templates/employers.php';
        break;

    case '/taskr/register/employer':
        require '../templates/employers/register.php';
        if (isset($_POST['next'])) {
            header('Location: /taskr/register/founder');
            exit();
        }
        break;

    case '/taskr/register/founder':
        require '../templates/employers/founder.php';
        if (isset($_POST['continue'])) {
            header('Location: /taskr/register/company-details');
            exit();
        }
        break;

    case '/taskr/register/company-details':
        require '../templates/employers/company-details.php';
        break;

    case '/taskr/registration/complete':
        require '../templates/employers/registered.php';
        if (isset($_POST['save-details'])) {
            header('Location: /taskr/registration/complete');
            exit();
        }
        break;

    case '/taskr/employer/dashboard':
        require '../templates/employers/dashboard.php';
        break;

    case '/taskr/employer/add/listing':
        require '../templates/employers/add-listing.php';
        break;

    case '/taskr/employer/browse':
        require '../templates/employers/candidates.php';
        break;

    case '/taskr/employer/messages':
        require '../templates/employers/messages.php';
        break;

    default:
        http_response_code(404);
        require '../templates/404.php';
        break;

}

require '../templates/includes/footer.php';
