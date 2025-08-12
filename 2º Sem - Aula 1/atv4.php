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
class Moto extends Veiculo{
    public function andar(){
        echo "A moto está andando.";
    }
    public function parar(){
        echo "A moto parou.";
    }
}

$carro1 = new Carro();
$carro1->marca = "Fusca";
$carro1->cor = "Amarelo";
$carro1->ano = 1976;
$carro1->mostrarDetalhes();
echo "<hr>";
$carro1->andar();
echo "<br>";
$carro1->parar();
echo "<hr>";

$carro2 = new Carro();
$carro2->marca = "Civic";
$carro2->cor = "Preto";
$carro2->ano = 2020;
$carro2->mostrarDetalhes();
echo "<hr>";
$carro2->andar();
echo "<br>";
$carro2->parar();
echo "<hr>";

$moto1 = new Moto();
$moto1->marca = "Yamaha";
$moto1->cor = "Preto";
$moto1->ano = 2021;
$moto1->mostrarDetalhes();
echo "<hr>";
$moto1->andar();
echo "<br>";
$moto1->parar();
echo "<hr>";

$moto2 = new Moto();
$moto2->marca = "Honda";
$moto2->cor = "Vermelho";
$moto2->ano = 2019;
$moto2->mostrarDetalhes();
echo "<hr>";
$moto2->andar();
echo "<br>";
$moto2->parar();
?>