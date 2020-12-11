<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $money=100;
    $mouth=12;
    $persent=5;
    $s=$money;

    for ($i=1; $i <=$mouth ; $i++) { 
        $s=$s+($s/100*$persent);    
    }
 echo round($s,2) ;
?>
</body>
</html>