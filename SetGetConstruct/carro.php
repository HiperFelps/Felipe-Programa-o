<?php
class Carro{
    private $cor;
    private $modelo;
    private $ano;

    public function __construct($cor, $modelo, $ano){
        $this->cor = $cor;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function setCor($cor){
        $this->cor = $cor;
    }
    public function getCor(){
        return $this->cor;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setAno($ano){
        $this->ano = $ano;
    }
    public function getAno(){
        return $this->ano;
    }
}

$carro1 = new Carro("preto", "Cruize", 2021);
print_r($carro1);




?>