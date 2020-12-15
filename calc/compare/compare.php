<?php
$l1 = $_POST["l1"];
$l2 = $_POST["l2"];
   if($l1>$l2){
    echo $l1;
}
    elseif($l1=$l2){
        echo $l1;
    }
    elseif($l1<$l2){
        echo $l2;
    }
   ?>