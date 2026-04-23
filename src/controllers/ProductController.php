<?php

require_once __DIR__ . '/../../db/DB.php';

class ProductController
{
    public static function index(): void
    {
        $stmt = DB::query("SELECT * FROM product");
        $products = $stmt->fetchAll();

        require __DIR__ . '/../views/product.php';
    }
}