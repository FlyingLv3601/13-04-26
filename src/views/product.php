<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

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

        main span {
            font-size: 26px;
            font-weight: bold;
            display: block;
            margin-bottom: 20px;
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
            gap: 20px;
        }

        .product-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.06);
            overflow: hidden;
            transition: 0.25s;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
        }

        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            background: #f0f0f0;
        }

        .product-content {
            padding: 15px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .product-title {
            font-size: 17px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .product-price {
            color: #007bff;
            font-weight: bold;
            margin-bottom: 15px;
        }

        .product-card button {
            margin-top: auto;
            padding: 10px;
            border: none;
            border-radius: 8px;
            background: #007bff;
            color: white;
            font-weight: 500;
            cursor: pointer;
        }

        .product-card button:hover {
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
        <span>Products</span>

        <div class="product-list">

        <?php if (empty($products)): ?>
            <div class="empty">No products</div>
        <?php else: ?>

            <?php foreach ($products as $product): ?>
                <div class="product-card">

                    <img src="<?= htmlspecialchars($product['product_image']) ?>" width="150">
                    <div class="product-content">
                        <div class="product-title">
                            <?= htmlspecialchars($product['product_name']) ?>
                        </div>

                        <div class="product-price">
                            <?= htmlspecialchars($product['product_price']) ?> $
                        </div>

                        <a href="/product-detail?id=<?= $product['product_id'] ?>">
                            <button>Details</button>
                        </a>
                        </a>
                    </div>

                </div>
            <?php endforeach; ?>

        <?php endif; ?>

        </div>
    </main>

</div>

</body>
</html>