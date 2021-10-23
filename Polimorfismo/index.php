<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once 'mamifero.php';
        require_once 'peixe.php';
        require_once 'cachorro.php';

        $c = new mamifero();
        $c -> locomover();

        $p = new peixe();
        $p -> locomover();

        $c1 = new cachorro();
        $c1 -> fazerSom();
        $c1 -> locomover(); 
 
    
    ?>
</body>
</html>