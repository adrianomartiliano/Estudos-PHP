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
            $this->ligado = $ligado;
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
    
}
