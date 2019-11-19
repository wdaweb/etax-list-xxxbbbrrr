<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>開奬號碼列表</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="item">  
    <li><a href="?year=2019&month=1">1~2月</a></li>
    <li><a href="?year=2019$month=2">3~4月</a></li>
    <li><a href="?year=2019$month=3">5~6月</a></li>
    <li><a href="?year=2019$month=4">7~8月</a></li>
    <li><a href="?year=2019$month=5">9~10月</a></li>
    <li><a href="?year=2019$month=6">11~12月</a></li>
    <li><a href="./index.html">首頁</a></li>
</div>

<?php

if (!empty($_GET['month'])){
    include_once "base.php";
    $month=$_GET['month'];
    $sql="select * from `number` where month='$month'";
    $rows=$pdo->query($sql)->fetchAll();
    


foreach($rows as $nums){
    $year = $nums['year'];
    $month = $nums['month'];
    $number1 = $nums['number1'];
    $number2 = $nums['number2'];
    $number3 = $nums['number3'];
    $number4 = $nums['number4'];
    $number5 = $nums['number5'];
    $number6 = $nums['number6'];
    $number7 = $nums['number7'];
    $number8 = $nums['number8'];
}

if($_GET['month']==1){
    $month = "1~2月";
}elseif($_GET['month']==2){
    $month = "3~4月";
}elseif($_GET['month']==3){
    $month = "5~6月";
}elseif($_GET['month']==4){
    $month = "7~8月";
}elseif($_GET['month']==5){
    $month = "9~10月";
}elseif($_GET['month']==6){
    $month = "11~12月";
}

?>

    <table border="1">
        <tr>
            <td colspan="2"><?=$year?></td>         
        </tr>
        <tr>
            <td colspan="2"><?=$month?></td>         
        </tr>
        <tr>
            <td rowspan="2">特別奬</td>
            <td><?=$number1?></td>
        </tr>
        <tr>
            <td>8位數號碼與上列號碼相同者奬金1,000萬元</td>
        </tr>
        <tr>
            <td rowspan="2">特奬</td>
            <td><?=$number2?></td>
        </tr>
        <tr>
            <td>8位數號碼與上列號碼相同者奬金200萬元</td>
        </tr>
        <tr>
            <td rowspan="4">頭奬</td>
            <td><?=$number3?></td>
        </tr>
        <tr>
            <td><?=$number4?></td>
        </tr>
        <tr>
            <td><?=$number5?></td>
        </tr>
        <tr>
            <td>8位數號碼與上列號碼相同者奬金20萬元</td>
        </tr>
        <tr>
            <td>二奬</td>
            <td><font color="red">末7碼</font>與頭奬相同者各得奬金4萬元</td>
        </tr>
        <tr>
            <td>三奬</td>
            <td><font color="red">末6碼</font>與頭奬相同者各得奬金1萬元</td>
        </tr>
        <tr>
            <td>四奬</td>
            <td><font color="red">末5碼</font>與頭奬相同者各得奬金4千元</td>
        </tr>
        <tr>
            <td>五奬</td>
            <td><font color="red">末4碼</font>與頭奬相同者各得奬金1千元</td>
        </tr>
        <tr>
            <td>六奬</td>
            <td><font color="red">末3碼</font>與頭奬相同者各得奬金2百元</td>
        </tr>
        <tr>
            <td rowspan="4">增開六奬</td>
            <td><?=$number6?></td>
        </tr>
        <tr>
            <td><?=$number7?></td>
        </tr>
        <tr>
            <td><?=$number8?></td>
        </tr>
        <tr>
            <td><font color="red">末3碼</font>與頭奬相同者各得奬金2百元</td>
        </tr>



    </table>

<?php
}
?>
</body>
</html>