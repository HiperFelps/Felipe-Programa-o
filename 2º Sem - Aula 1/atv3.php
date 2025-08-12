<?php

class Veiculo{
    public $marca;
    public $cor;
    public $ano;

    public function andar(){
        echo "O veículo está andando.";
    }
    public function parar(){
        echo "O veículo parou.";
    }
    public function mostrarDetalhes(){
        echo "Marca: $this->marca, Cor: $this->cor, Ano: $this->ano";
    }
}

class Carro extends Veiculo{
    public $tipoCombustivel;
    public function mostrarCombustivel(){
        echo $this->tipoCombustivel ? "O carro é movido a $this->tipoCombustivel." : "Tipo de combustível não especificado.";
    }
}

$carro = new Carro();
$carro->marca = "Fusca";
$carro->cor = "Amarelo";
$carro->ano = 1976;
$carro->mostrarDetalhes();
echo "<hr>";
$carro->tipoCombustivel = "Gasolina";
$carro->andar();
echo "<br>";
$carro->parar();
echo "<hr>";
$carro->mostrarCombustivel();

?>