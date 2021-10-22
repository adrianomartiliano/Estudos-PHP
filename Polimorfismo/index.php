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
        require_once 'cachorro.php';
        require_once 'peixe.php';

        $c = new cachorro();
        $c -> locomover();

        $p = new peixe();
        $p -> locomover();
 
    
    ?>
</body>
</html>