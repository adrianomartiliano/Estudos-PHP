<?php

    require_once 'animal.php';

    class mamifero extends animal{

        private $peso;

        function locomover(){
            echo "<br>Andando...";
        }
        function seAlimentar(){
            echo "<br>Mamando...";
        }
        function fazerSom(){
            echo "<br>Som de mamifero...";
        }

    }