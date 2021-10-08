<?php

require_once 'Pessoa.php';

class Aluno extends Pessoa{
    private $matri, $curso;
    
    function __construct($curso){
        $this->matri = true;
        $this->curso = $curso;
    }
    
    function cancelarMat(){
        $this->matri = false;
    }
    
    public function getMatri() {
        return $this->matri;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatri($matri): void {
        $this->matri = $matri;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }


}
