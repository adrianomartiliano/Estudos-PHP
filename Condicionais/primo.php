<?php

    $cont = 0;
    $n = $_POST['num'];

    echo "Multiplos: ";
    for ($i=1; $i <= $n; $i++){
        
        if ($n % $i == 0){
            echo "$i ";
            $cont++;
        }
    }
    echo "<br>Total de multiplos: $cont";
    if ($cont == 2){
        echo "<br>O número $n é PRIMO";
    }else {
        echo "<br>O número $n NÃO É PRIMO";
    }
?>