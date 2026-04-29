<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
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
            max-width: 800px;
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

        .form-container {
            background: #fff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 6px 15px rgba(0,0,0,0.06);
        }

        h1 {
            margin-bottom: 25px;
            font-size: 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #555;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            transition: 0.25s;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 0 3px rgba(0,123,255,0.1);
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            background: #007bff;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.25s;
        }

        button:hover {
            background: #0056d2;
        }

        .error-messages {
            background: #f8d7da;
            color: #721c24;
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 20px;
        }

        .error-messages ul {
            margin-left: 20px;
        }

        .success-message {
            background: #d4edda;
            color: #155724;
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="wrapper">
    <?php require __DIR__ . "/comp/header.php"; ?>

    <div class="form-container">
        <h1>Create New Product</h1>

        <?php if (isset($_SESSION['errors'])): ?>
            <div class="error-messages">
                <ul>
                    <?php foreach ($_SESSION['errors'] as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php unset($_SESSION['errors']); ?>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="success-message">
                <?= htmlspecialchars($_SESSION['success']) ?>
            </div>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>

        <form method="POST" action="/save-product">
            <div class="form-group">
                <label for="product_name">Product Name *</label>
                <input type="text" id="product_name" name="product_name" 
                       value="<?= htmlspecialchars($_SESSION['old']['product_name'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="product_desc">Description *</label>
                <textarea id="product_desc" name="product_desc" required><?= htmlspecialchars($_SESSION['old']['product_desc'] ?? '') ?></textarea>
            </div>

            <div class="form-group">
                <label for="product_price">Price (€) *</label>
                <input type="number" step="0.01" id="product_price" name="product_price" 
                       value="<?= htmlspecialchars($_SESSION['old']['product_price'] ?? '') ?>" required>
            </div>

            <div class="form-group">
                <label for="product_image">Image URL *</label>
                <input type="text" id="product_image" name="product_image" 
                       value="<?= htmlspecialchars($_SESSION['old']['product_image'] ?? '') ?>" 
                       placeholder="https://example.com/image.jpg">
            </div>

            <button type="submit">Create Product</button>
        </form>
    </div>
</div>

</body>
</html>