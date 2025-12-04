<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PHP</title>

    <style>
        body {
            font-family: "Prompt", sans-serif;
            background: #eef2ff;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: #ffffff;
            padding: 30px;
            width: 350px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.12);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            color: #34495e;
        }

        .item {
            background: #f7f9ff;
            padding: 12px;
            border-radius: 10px;
            margin: 10px 0;
            text-align: left;
            border: 1px solid #d8e0ff;
        }

        strong {
            color: #2c3e50;
        }
    </style>

</head>
<body>

    <div class="box">
        <h2>Welcome</h2>

        <div class="item">
            <strong>ชื่อ:</strong> 
            <?php echo $_POST["name"]; ?>
        </div>

        <div class="item">
            <strong>อีเมล:</strong> 
            <?php echo $_POST["email"]; ?>
        </div>
    </div>

</body>
</html>
