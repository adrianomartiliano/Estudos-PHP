<?php

require_once 'mamifero.php';

class cachorro extends mamifero{

    function locomover(){
        echo "<br>Correndo rápidoooo...";
    }

    function fazerSom(){
        echo "<br>au au au au...";
    }
}