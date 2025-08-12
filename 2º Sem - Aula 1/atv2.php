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

class Moto extends Veiculo{
    public function andar(){
        echo "Moto está em movimento.";
    }
}

$moto = new Moto();
$moto->marca = "Yamaha";
$moto->cor = "Preto";
$moto->ano = 2021;
$moto->mostrarDetalhes();
echo "<hr>";
$moto->andar();
echo "<br>";
$moto->parar();
echo "<hr>";



?>