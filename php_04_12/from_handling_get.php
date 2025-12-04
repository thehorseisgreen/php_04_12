<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การส่งค่าแบบ Method GET</title>

    <style>
        body {
            font-family: "Prompt", sans-serif;
            background: #e9f0ff;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            width: 350px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.12);
        }

        h1 {
            text-align: center;
            color: #34495e;
            margin-bottom: 20px;
        }

        label {
            margin-top: 12px;
            display: block;
            font-weight: bold;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin-top: 22px;
            background: #4a6cff;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: 0.2s;
        }

        input[type="submit"]:hover {
            background: #394fdb;
        }
    </style>

</head>
<body>

    <div class="container">
        <h1>การส่งค่าแบบ GET</h1>

        <form method="get" action="welcome_get.php">
            <label>ชื่อ :</label>
            <input type="text" name="name">

            <label>อีเมล :</label>
            <input type="text" name="email">

            <input type="submit" value="ส่งข้อมูล">
        </form>
    </div>

</body>
</html>
