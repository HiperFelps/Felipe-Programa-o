<?php

class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirPreco() {
        echo"Preço: " . $this->preco . ";<br>";
    }
    public function mostrarMediaPrecos($Produto1, $Produto2) {
        $media = ($Produto1->preco + $Produto2->preco) / 2;
        echo "A média de preços dos produtos é: " . $media . "<br>";
    }
}

$Produto1 = new Produto();

$Produto1->nome = "Batata";
$Produto1->preco = 3.50;
$Produto1->quantidade = 5;

$Produto2 = new Produto();
$Produto2->nome = "Refrigerante";
$Produto2->preco = 5.00;
$Produto2->quantidade = 2;

$Produto1->exibirPreco();
$Produto2->exibirPreco();
$Produto1->mostrarMediaPrecos($Produto1, $Produto2);
?>