<?php

require_once 'Pessoa.php';

class Professor extends Pessoa {
    private $especialidade, $salario;
    
    function receberAum($aum){
        $this->salario += $aum;
    }
    
    function __construct($especialidade) {
        $this->salario = 2500;
        $this->especialidade = $especialidade;
    }
    
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade): void {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario): void {
        $this->salario = $salario;
    }


}
