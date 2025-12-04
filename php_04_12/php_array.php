<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Array (เรียนวันที่ 4/12/2568)</title>
</head>
<body> 
    <h1> ทดสอบ = arry แบบ Index Arrays</h1>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " .$cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>

    <h1> ทดสอบ Array แบบ Associative Arrays</h1>
    <?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43",
                "Mon"=>"19");
    echo "Peter is ". $age['Peter'] . " years old."."<br>";
    echo "Ben is ". $age['Peter'] . " years old."."<br>";
    echo "Joe is ". $age['Peter'] . " years old."."<br>";
    echo "Mon is ". $age['Peter'] . " years old."."<br>";
    ?>

    <h1>การใช้ for กับ Index Arrays </h1>
    <?php
    $fruits = array("แอปเปิ้ล", "มะละกอ", "กล้วย"
    , "ส้ม", "องุ่น", "มังคุด", "ทุเรียน");
    $arrlen = count($fruits);
    for($x = 0; $x < $arrlen; $x++){
        echo $fruits[$x];
        echo"<br>\n";
    }
    ?>

    <h1>การใช้ Foreach กับ Index Arrays </h1>
    <?php
    $fruits = array("แอปเปิ้ล", "มะละกอ", "กล้วย"
    , "ส้ม", "องุ่น", "มังคุด", "ทุเรียน");
    foreach ($fruits as $value){
        echo $value;
        echo "<br>\n";
    }
    ?>

    <h1>การใช้ Foreach กับ Array แบบ Associative Arrays</h1>
    <?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43",
                "Mon"=>"19");
    foreach($age as $x => $x_value){
        echo $x . " มีอายุ " . $x_value. " ปี";
        echo "<br>\n";
    }
    ?>

    <h1>การใช้ Array 2 มิติ (Two-Dimension Array)</h1>
    <?php
    $cars = array(
        array("Volvo", 22, 18), 
        array("BMW", 15, 13,75), 
        array("Saab", 5, 2), 
        array("Land Rover", 17,15,100)
    );
    $rows = count($cars); //นับจำนวนแถว
    for ($row = 0; $row < $rows; $row++){
        echo "<p><br>Row number $row</br></p>";
        echo "<ul>";
        $cols = count($cars[$row]); //นับจำนวนคอลัมน์ (บางกรณีข้อมูลไม่เท่ากัน)
        for ($col = 0; $col < $cols; $col++){
            echo "<li>" .$cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }

    ?>
</body>
</html>