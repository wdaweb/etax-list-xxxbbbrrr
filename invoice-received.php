<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>發票存入資料庫</title>
</head>
<body>
    <?php

    include_once "base.php";

    

    $year = $_POST['year'];
    $month = $_POST['month'];
    $english = $_POST['english'];
    $number = $_POST['number'];
    $cost = $_POST['cost'];
        
    $sql = "INSERT INTO inv (`id`, `year`, `month`, `english`, `number`, `cost`) VALUES ('', '$year', '$month', '$english', '$number', '$cost')";
    $pdo -> exec($sql);

    echo "發票年份：" . $year;
    echo "<br>";
    echo "發票月份：" . $month;
    echo "<br>";
    echo "發票號碼：" . $english . "-" . $number;
    echo "<br>";
    echo "發票金額：" . $cost;
    echo "<br>";


    ?>
    <a href="./index.html">繼續輸入發票</a>
    
</body>
</html>