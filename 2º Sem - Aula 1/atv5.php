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
    public function andar(){
        echo "O carro está andando.";
    }
    public function parar(){
        echo "O carro parou.";
    }
}
class CarroEletronico extends Carro{
    public function carregarBateria(){
        echo "Bateria carregada.";
    }
}

$carroEletronico = new CarroEletronico();
$carroEletronico->marca = "Tesla";
$carroEletronico->cor = "Prata";
$carroEletronico->ano = 2022;
$carroEletronico->mostrarDetalhes();
echo "<hr>";
$carroEletronico->andar();
echo "<br>";
$carroEletronico->parar();
echo "<hr>";
$carroEletronico->carregarBateria();
?>