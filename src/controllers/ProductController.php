<?php

require_once __DIR__ . '/../../db/DB.php';

class productController
{
    public static function index(): void
    {
        $stmt = DB::query("SELECT * FROM product");
        $product = $stmt->fetchAll();

        echo "<h1>Klienti</h1>";
        echo "<table border='1' cellpadding='8' cellspacing='0'>";
        echo "<tr><th>ID</th><th>Vārds</th><th>E-pasts</th><th>Punkti</th></tr>";

        foreach ($product as $products) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($products['product_id']) . "</td>";
            echo "<td>" . htmlspecialchars($products['product_name']) . "</td>";
            echo "<td>" . htmlspecialchars($products['product_price']) . "</td>";
            echo "<td>" . htmlspecialchars($products['product_desc']) . "</td>";
echo "<td><img alt='Product Image' src='" . htmlspecialchars($products['product_image']) . "' width='100'></td>";

            echo "</tr>";
        }

        echo "</table>";
    }
}
