<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa {
    
    private $setor, $trabalhando;
    
    function mudarTrabalho(){
        $this->trabalhando = false;
    }
    
    function __construct($setor) {
        $this->trabalhando = true;
        $this->setor = $setor;
    }
    
    public function getSetor() {
        return $this->setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setSetor($setor): void {
        $this->setor = $setor;
    }

    public function setTrabalhando($trabalhando): void {
        $this->trabalhando = $trabalhando;
    }


    
}
