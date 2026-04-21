<?php

require_once __DIR__ . '/../../db/DB.php';

class productController
{
    public static function index(): void
    {
        $stmt = DB::query("SELECT * FROM product");
        $product = $stmt->fetchAll();
        foreach ($product as $products) {
            echo "<div style='border:1px solid gray;display: flex;flex-direction: column;width: 220px;background: #ffffff;border-radius: 12px;margin: 10px;'>";
            echo "<img src='" . htmlspecialchars($products['product_image']) . "' style='width: 100%;height: 160px;border-radius: 12px 12px 0 0;'>";
            echo "<div style='padding: 12px;'>";
            echo "<h3 style='margin: 0 0 8px 0; font-size: 18px;'>" . htmlspecialchars($products['product_name']) . "</h3>";
            echo "<p style='margin: 0 0 10px 0; font-size: 13px; color: #555; height: 40px; overflow: hidden;'>" . htmlspecialchars($products['product_desc']) . "</p>";
            echo "<div style='font-size: 16px; color: #2e7d32; margin-bottom: 10px;'>" . htmlspecialchars($products['product_price']) . " €</div>";
            echo "<button style='margin-left:75px;'>details</button>";
            echo "</div>";
            echo "</div>";  
        }

        echo "</table>";
    }
}
