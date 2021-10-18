<?php

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$inter = $_POST['inter'];
$cont = 0;

if ($n2 > $n1) 
{
    $cont = $n1;
    while($cont <= $n2){
    echo "$cont ";
    $cont += $inter;
    }
}else {
    $cont = $n1;
    while ($cont >= $n2){
        echo "$cont ";
        $cont -= $inter;
    }
}