<?php

class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirInformacoes() {
        echo"Nome: " . $this->nome . ", Preço: " . $this->preco . ", Quantidade: " . $this->quantidade . ".<br>";
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

$Produto1->exibirInformacoes();
$Produto2->exibirInformacoes();
?>