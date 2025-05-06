<?php

class Produto {
    public $nome;
    public $preco;
    public $quantidade;

    public function exibirInformacoes() {
        echo"Nome: " . $this->nome . " Preço: " . $this->preco . ", Quantidade: " . $this->quantidade . ".<br>";

    }
}

$Produto1 = new Produto();

$Produto1->nome = "Bolacha";
$Produto1->preco = 2.50;
$Produto1->quantidade = 10;

$Produto1->exibirInformacoes();

?>