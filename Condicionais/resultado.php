<?php

$n1 = $_POST['v1'];
$n2 = $_POST['v2'];
$op = $_POST['op'];
$result = 0;

switch($op){
    case 1:
        $result = $n1 + $n2;
        break;
    case 2:
        $result = $n1 - $n2;
        break;
    case 3:
        $result = $n1 / $n2;
        break;
    case 4:
        $result = $n1 * $n2;
}

echo "Os valores digitados são $n1 e $n2<br>";
echo $result;

echo "<br><a href='index.html' >Voltar</a>";