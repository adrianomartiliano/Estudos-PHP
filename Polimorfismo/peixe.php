<?php

    require_once 'animal.php';

    class peixe extends animal{

        function locomover(){
            echo "<br>Nadando...";
        }
        function seAlimentar(){
            echo "<br>Comendo...";
        }
        function fazerSom(){
            echo "<br>Vixi, não sei qual é o som do peixe...";
        }

    }