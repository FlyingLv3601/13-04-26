<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>

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

        .customer-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
            gap: 20px;
        }

        .customer-card {
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.06);
            padding: 15px;
            transition: 0.25s;
        }

        .customer-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.08);
        }

        .customer-name {
            font-size: 17px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .customer-email {
            color: #555;
            margin-bottom: 10px;
        }

        .customer-phone {
            color: #007bff;
            font-weight: 500;
        }
    </style>
</head>
<body>

<div class="wrapper">

    <header>
        <a href="/">Products</a>
        <a href="#">Customers</a>
        <a href="#">Create Order</a>
    </header>

    <main>
        <span>Customers</span>

        <div class="customer-list">

            <?php foreach($customer as $customers): ?>
            <div class="customer-card">
                <div class="customer-name">
                    <?= htmlspecialchars($customers['first_name']);?>
                </div>
                <div class="customer-email">
                    <?= htmlspecialchars($customers['email']);?>
                </div>
                <div class="customer-phone"><?= htmlspecialchars($customers['points']);?></div>
            </div>
            <?php endforeach; ?>

        </div>
    </main>

</div>

</body>
</html>