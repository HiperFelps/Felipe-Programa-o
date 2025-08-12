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
}

class Carro extends Veiculo{
    public function ligarLimpador(){
        echo "Limpador ligado.";
    }
}
class Moto extends Veiculo{
    public function darGrau(){
        echo "Dando grau!";
    }
}
// Exemplo de uso
$carro = new Carro();
$carro->marca = "Gol";
$carro->cor = "Vermelho";
$carro->ano = 2018;
$carro->andar();
echo "<br>";
$carro->ligarLimpador();

echo "<hr>";

$moto = new Moto();
$moto->marca = "Honda Biz";
$moto->cor = "Azul";
$moto->ano = 2017;
$moto->parar();
echo "<br>";
$moto->darGrau();





?>