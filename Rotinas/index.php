<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas</title>
</head>
<body>
    <?php
        require_once 'funcoes.php';
        /*function soma(){
            $v = func_get_args(); //adiciona os parametros em um vator v
            $t = func_num_args(); //retorna o valor total de parametros passados.
            $res = 0;

            for ($i = 0; $i < $t; $i++){
                $res += $v[$i];
            }
            return $res;
        }
        $r = soma(1, 2, 3, 4, 5);
        echo "$r";*/
        ola();
        soma(4, 5);
    
    ?> 
    
</body>
</html>