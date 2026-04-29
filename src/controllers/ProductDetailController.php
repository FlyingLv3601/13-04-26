<?php

require_once __DIR__ . '/../../db/DB.php';

class ProductDetailController {
    public static function index($id): void {
        $stmt = DB::query("SELECT * FROM product WHERE product_id = " . (int)$id);
        $product = $stmt->fetch();
        
        if (!$product) {
            die("Product not found");
        }
        
        require __DIR__ . '/../views/product-detail.php';
    }

        public static function delete($id): void
    {
        $id = (int)$id;
        DB::query("DELETE FROM product WHERE product_id = $id");
        header('Location: /products');
        exit;
    }
}
?>