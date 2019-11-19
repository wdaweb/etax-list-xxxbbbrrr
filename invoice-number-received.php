<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>開奬號碼存入資料庫</title>
</head>
<body>
<?php

include_once "base.php";



$year = $_POST['year'];
$month = $_POST['month'];
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$number3 = $_POST['number3'];
$number4 = $_POST['number4'];
$number5 = $_POST['number5'];
$number6 = $_POST['number6'];
$number7 = $_POST['number7'];
$number8 = $_POST['number8'];

    
$sql = "INSERT INTO number (`id`, `year`, `month`, `number1`, `number2`, `number3`, `number4`, `number5`, `number6`, `number7`, `number8`) VALUES ('', '$year', '$month', '$number1', '$number2', '$number3', '$number4', '$number5', '$number6', '$number7', '$number8')";
$pdo -> exec($sql);

echo "發票年份：" . $year;
echo "<br>";
echo "發票月份：" . $month;
echo "<br>";
echo "特別奬：" . $number1;
echo "<br>";
echo "特奬：" . $number2;
echo "<br>";
echo "頭奬一：" . $number3;
echo "<br>";
echo "頭奬二" . $number4;
echo "<br>";
echo "頭奬三：" . $number5;
echo "<br>";
echo "增開六奬一：" . $number6;
echo "<br>";
echo "增開六奬二：" . $number7;
echo "<br>";
echo "增開六奬三：" . $number8;
echo "<br>";


?>
<a href="./invoice-number.php">繼續輸入開奬號碼</a>
</body>
</html>