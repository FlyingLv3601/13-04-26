<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/../../db/DB.php';

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    $id = 0;
}

if ($id > 0) {
    $stmt = DB::query("SELECT * FROM product WHERE product_id = $id");
    $product = $stmt->fetch();
    
    if ($product) {
        echo "<h1>" . htmlspecialchars($product['product_name']) . "</h1>";
        echo "<img src='" . htmlspecialchars($product['product_image']) . "' style='width: 300px;'>";
        echo "<p>" . htmlspecialchars($product['product_desc']) . "</p>";
        echo "<p>Цена: " . $product['product_price'] . " €</p>";
        echo "<p>ID товара: " . $product['product_id'] . "</p>";
        echo "<br><a href='index.php'>Назад</a>";
    } else {
        echo "Товар не найден";
    }
} else {
    echo "Неверный ID товара";
}
?>