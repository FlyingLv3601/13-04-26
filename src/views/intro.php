

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>intro</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #f5f7fa;
            font-family: Arial, sans-serif;
        }

        span {
            font-size: 48px;
            font-weight: bold;
            color: #007bff;
            animation: letterSpacingAnim 2s ease-out forwards;
        }

        @keyframes letterSpacingAnim {
            0% {
                letter-spacing: 100px;
                opacity: 0;
            }
            100% {
                letter-spacing: 1px;
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <span>welcome to lv3601 shop</span>
        <script>
        setTimeout(function() {
            window.location.href = '/products';
        }, 2000);
    </script>
</body>
</html>

