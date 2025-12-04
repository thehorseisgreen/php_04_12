<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php post</title>
</head>
<body>
    <h1>การใช้ PHP POST</h1>
    <form method="post" action="php_post.php">
        Name: <input type="text" name="fname"><br>
        Last Name: <input type="text" name="Iname"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fname'];
        $Iname = $_POST['Iname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name . " ".$Iname;
        }
    }
    ?>
</body>
</html>