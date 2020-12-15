<?php
$l1 = $_POST["l1"];
$l2 = $_POST["l2"];
$l3 = $_POST["l3"];
if($l1>$l2 && $l1>$l3)
    echo $l1;

elseif($l2>$l1 && $l2>$l3)
echo $l2;

elseif($l3>$l1 && $l3>$l1)
echo $l3;

?>