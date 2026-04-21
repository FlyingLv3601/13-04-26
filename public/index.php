<?php
require_once __DIR__ . "/../src/controllers/CustomerController.php";
require_once __DIR__ . "/../src/controllers/ProductController.php";

#require_once __DIR__ . '/../../db/DB.php';
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($requestUri) {
    case '/customers':
        CustomerController::index();
        break;


    default:
        productController::index();
        break;
}

