<?php

class Caneta{
    private $ponta;
    private $cor;

    public function __construct($ponta, $cor){
        $this->ponta = $ponta;
        $this->cor = $cor;
    }


    public function setPonta($ponta){
        $this->ponta = $ponta;
    }
    public function getPonta(){
        return $this->ponta;
    }


    public function setCor($cor){
        $this->cor = $cor;
    }
    public function getCor(){
        return $this->cor;
    }

    public function MostraCaneta(){
        echo "A caneta é da cor: " . $this->cor . "<br>";
        echo "A ponta da caneta é: " . $this->ponta . "<br>";
    }

}

$c1 = new Caneta(0, "");
//$c1->ponta = 0.5; -> quando $ponta é public
$c1->setPonta(0.5);
$c1->setCor("roxo");
echo "A ponta da caneta é: " . $c1->getPonta() . "<br><br>";
print_r($c1);

$c2 = new Caneta(0.5, "azul");
echo "<br><br>";
print_r ($c2);

$c2->setPonta(1.0);
$c2->setCor("preto");
echo "<br><br>";
print_r($c2);

echo "<br><br>";
$c1->MostraCaneta();
echo "<br><br>";
$c2->MostraCaneta();
?>