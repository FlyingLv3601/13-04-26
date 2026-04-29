<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product['product_name']) ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f5f7fa;
            color: #333;
        }

        .wrapper {
            max-width: 1100px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            display: flex;
            gap: 20px;
            padding: 15px 20px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }

        header a {
            text-decoration: none;
            color: #555;
            font-weight: 500;
        }

        header a:hover {
            color: #007bff;
        }

        .product-detail {
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.06);
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
        }

        .product-image {
            flex: 1;
            min-width: 300px;
            background: #f0f0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        .product-image img {
            max-width: 100%;
            max-height: 400px;
            object-fit: contain;
        }

        .product-info {
            flex: 1;
            padding: 40px;
        }

        .product-title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .product-desc {
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .product-price {
            font-size: 28px;
            color: #007bff;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .product-id {
            color: #888;
            font-size: 14px;
            margin-bottom: 30px;
        }

        .back-btn {
            display: inline-block;
            padding: 12px 24px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: background 0.25s;
        }

        .back-btn:hover {
            background: #0056d2;
        }

        .empty {
            color: #888;
            font-style: italic;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <header>
        <a href="/">Products</a>
        <a href="/customers">Customers</a>
        <a href="#">Create Order</a>
    </header>

    <main>
        <div class="product-detail">
            <div class="product-image">
                <img src="<?= htmlspecialchars($product['product_image']) ?>" alt="<?= htmlspecialchars($product['product_name']) ?>">
            </div>
            <div class="product-info">
                <div class="product-title"><?= htmlspecialchars($product['product_name']) ?></div>
                <div class="product-desc"><?= htmlspecialchars($product['product_desc']) ?></div>
                <div class="product-price"><?= $product['product_price'] ?> €</div>
                <div class="product-id">Product ID: <?= $product['product_id'] ?></div>
                <a href="/" class="back-btn">← Back to products</a>
            </div>
        </div>
    </main>
</div>

</body>
</html>