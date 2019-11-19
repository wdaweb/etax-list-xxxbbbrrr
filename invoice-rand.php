<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

    include_once "base.php";

    
        
    for($i=1;$i<1000;$i++){

        $year = "2019";  
        $month = rand(1,6);
        $english = chr(rand(65,90)).chr(rand(65,90));
        $number = rand(10000000,99999999);
        $cost = rand(0,99999);

        $sql = "INSERT INTO inv (`id`, `year`, `month`, `english`, `number`, `cost`) VALUES ('', '$year', '$month', '$english', '$number', '$cost')";
        $pdo -> exec($sql);

    }
    
    



?>
    
</body>
</html>