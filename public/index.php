<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . "/../src/controllers/CustomerController.php";
require_once __DIR__ . "/../src/controllers/ProductController.php";
require_once __DIR__ . "/../src/controllers/ProductDetailController.php";
require_once __DIR__ . "/../src/controllers/OrderController.php";
require_once __DIR__ . "/../src/Render/IntroRender.php";
require_once __DIR__ . "/../src/controllers/CreateProductController.php";

$query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
$params = [];
if ($query !== null) {
    parse_str($query, $params);
}

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($requestUri) {
    case '/customers':
        CustomerController::index();
        break;
    case '/product-detail':
        ProductDetailController::index($params['id'] ?? 0);
        break;
    case '/orders':
        OrderController::index();
        break;
    case '/products':
        ProductController::index();
        break;
    case '/create':
        CreateProductController::index();
        break;
    case '/save-product':
        CreateProductController::store();
        break;
    case '/delete':
        ProductDetailController::delete($params['id'] ?? 0);
        break;
    default:
        IntroRender::index();
        break;
}
?>