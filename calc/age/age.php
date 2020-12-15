<?php 
$age=$_POST["age"];
if($age<12){
    echo "Ребенок";
}
elseif( $age>12 && $age<18){
    echo "Подросток";
}
elseif( $age>18 && $age<27){
    echo "юноша";
}
    elseif( $age>27 && $age<60){
        echo "Взрослый";
}
        elseif( $age>60 && $age<100){
            echo "Пожилой";
}
