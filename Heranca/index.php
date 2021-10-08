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
            $p3 = new Professor("Matematica");
            $p3->setNome("Cicero");
            
            $p2->setNome("Jose");
            
            print_r($p1);
            print_r($p2);
            print_r($p3);
            $p3->receberAum(400);
            print_r($p3);
        
        
        ?>
        </pre>
    </body>
</html>
