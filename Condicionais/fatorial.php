<?php

$val = $_POST['val'];
$val1 = $val;
$fat = $val;

do{
    $val1 --;
    $fat *= $val1;
} while($val1 > 1);

echo "O fatorial de $val é <span>$fat</span>";