<html>
    <head>
        <meta charset="utf-8">  
        <title>Conceito de Herança</title>
    </head>
    <body>
        <pre>
        <?php
        
            require_once 'Pessoa.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Funcionario.php';
            
            $p1 = new Pessoa("Adriano", 28, "M");
            $p2 = new Aluno("Ingles");
            
            print_r($p2);
        
        
        
        ?>
        </pre>
    </body>
</html>
