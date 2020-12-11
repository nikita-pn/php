<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=10;
    $y=$x*2.54;
    echo $y;
?>
    <?php
    $x=100;
    if($x<100){
        $y=$x*2.553;
    }
    else{
        if($x>=100 and $x<10000){
            $y=$x*2.50;
        }
    else{
        $y=$x*2.49;
    }
    echo $y;
    ?>
</body>

</html>