<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>統一發票列表</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="item">

<li><a href="?year=2019&month=1">1~2月</a></li>
<li><a href="?year=2019&month=2">3~4月</a></li>
<li><a href="?year=2019&month=3">5~6月</a></li>
<li><a href="?year=2019&month=4">7~8月</a></li>
<li><a href="?year=2019&month=5">9~10月</a></li>
<li><a href="?year=2019&month=6">11~12月</a></li>
<li><a href="./index.html">首頁</a></li>

</div>

<?php
    if (!empty($_GET['month'])){
    include_once "base.php";
    $month=$_GET['month'];
    $sql="select `english`,`number`,`cost` from `inv` where month='$month'";
    $rows=$pdo->query($sql)->fetchAll();

?>


<div class="inv-list">
    <table>
        <tr>
            <td>發票號碼</td>
            <td>發票金額</td>
        </tr>

<?php
    foreach($rows as $inv){
?>

        <tr>
            <td><?=$inv['english'] . "-" . $inv['number'];?></td>
            <td><?=$inv['cost'];?></td>
        </tr>


<?php
    }
?>

    </table>
<?php
    }else{
        echo "";
    }
?>
    
</div>
    
</body>
</html>