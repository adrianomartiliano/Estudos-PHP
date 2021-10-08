<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Controle Remoto</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Controle.php';
            
            $c = new Controle;
            $c->onOff();
            print_r($c);
            $c->maisVolume();
            $c->maisVolume();
            $c->maisVolume();
            $c->maisVolume();
            $c->maisVolume();
            $c->maisVolume();
            
            print_r($c);
            $c->status();
            $c->onOff();
            $c->status();
        ?>
        </pre>
    </body>
</html>
