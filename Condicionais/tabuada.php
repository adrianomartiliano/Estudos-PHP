<?php


//foreach($_POST["op"] as $op);
$op = $_POST['op'];
$x=1;

while($x <= 10){
    echo "$op x $x = ". ($op * $x). "<br>";
    $x++;
}