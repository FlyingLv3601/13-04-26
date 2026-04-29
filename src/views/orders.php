<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders</title>

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

        .order-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
            gap: 20px;
        }

        .order-card {
            background: #fff;
            border-radius: 14px;
            margin: 10px 0 0 0;
            box-shadow: 0 6px 15px rgba(0,0,0,0.06);
            padding: 15px;
            transition: 0.25s;
        }

        .order-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
        }

        .order-id {
            font-size: 17px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .order-date {
            color: #555;
            margin-bottom: 10px;
        }

        .order-status {
            color: #007bff;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .order-commnet {
            color: #555;
            margin-bottom: 10px;
        }

        .order-dev-date {
            color: #007bff;
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="wrapper">


        <?php require __DIR__ . "/comp/header.php";?>

    <main>
        <span>orders</span>

        <div class="order-list">

            <?php foreach($order as $orders): ?>
            <div class="order-card">
                <div class="order-id">id: <?= htmlspecialchars($orders['order_id']);?></div>
                <div class="order-date">date: <?= htmlspecialchars($orders['order_date']);?></div>
                <div class="order-status">status: <?= htmlspecialchars($orders['order_status']);?></div>
                <div class="order-commnet">commnet: <?= htmlspecialchars($orders['order_commnet']);?></div>
                <div class="order-dev0-date">delivery date: <?= htmlspecialchars($orders['order_div_date']);?></div>
                <div class="order-dev0-date">Customer id: <?= htmlspecialchars($orders['customer_id']);?></div>
            </div>
            <?php endforeach; ?>

        </div>
    </main>

</div>

</body>
</html>