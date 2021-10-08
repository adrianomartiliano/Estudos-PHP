<?php

class Controle {
    
    public $ligado, $volume;
    
    function __construct() {
        $this->ligado = false;
        $this->volume = 50;
    }
    
    function onOff(){
        if($this->ligado){
            $this->ligado = false;
        }else{
            $this->ligado = true;
        }
    }
    function maisVolume(){
        if ($this->ligado){
            $this->volume ++;
        }
    }
    function menosVolume(){
        if (($this->ligado) && $this->volume > 0){
            $this->ligado --;
        }
    }
    function mudo(){
        if (($this->ligado) && $this->volume > 0){
            $this->volume = 0;
        }
    }
    function status(){
        if ($this->ligado){
            echo "A TV está ligada<br>";
            echo "O volume está no ". $this->volume;
        }else {
            echo "A TV está desligada";
        }
    }
    }
    
    public function getLigado() {
        return $this->ligado;
    }

    public function getVolume() {
        return $this->volume;
    }

    public function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    public function setVolume($volume): void {
        $this->volume = $volume;
    }


    
}
