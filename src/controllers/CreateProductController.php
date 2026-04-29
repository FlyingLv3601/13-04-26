<?php
require_once __DIR__ . '/../../db/DB.php';

class CreateProductController
{
    public static function index(): void
    {
        require __DIR__ . '/../views/create-product.php';
    }

    public static function store(): void
    {
        $product_name = $_POST['product_name'] ?? '';
        $product_desc = $_POST['product_desc'] ?? '';
        $product_price = $_POST['product_price'] ?? 0;
        $product_image = $_POST['product_image'] ?? '';

        DB::query("
            INSERT INTO product (product_name, product_desc, product_price, product_image) 
            VALUES ('$product_name', '$product_desc', $product_price, '$product_image')
        ");

        header('Location: /products');
        exit;
    }
}
?>