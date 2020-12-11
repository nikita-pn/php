<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Оператор цикл с пред условием  -->
    <?php
     $n=10;
     $s=0;
     $i=1;
     do{
        $s=$s+$i;
        $i=$i+1; 
     }
    while($i<=$n)
    echo $s;
?>
</body>
</html>