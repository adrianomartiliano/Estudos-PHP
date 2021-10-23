<?php

    abstract class animal{
        private $peso;
        private $tipo;

        abstract function locomover();
        abstract function seAlimentar();
        abstract function fazerSom();

        function getPeso(){
            return $this->peso;
        }
        function setPeso($peso){
            $this->peso = $peso;
        }
        function getTipo(){
            return $this->tipo;
        }
        function setTipo($tipo){
            $this->tipo = $tipo;
        }
    }