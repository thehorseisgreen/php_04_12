<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การส่งค่าแบบ Method POST</title>

    <style>
        body {
            font-family: "Prompt", sans-serif;
            background: #f0f4ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: #ffffff;
            padding: 30px;
            width: 350px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-top: 20px;
            background: #fa4de9ff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
        }

        input[type="submit"]:hover {
            background: #3a58d9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>การส่งค่าแบบ POST</h1>

        <form method="post" action="welcome.php">
            <label>ชื่อ:</label>
            <input type="text" name="name">

            <label>อีเมล:</label>
            <input type="text" name="email">

            <input type="submit" value="ส่งข้อมูล">
        </form>
    </div>

</body>
</html>
