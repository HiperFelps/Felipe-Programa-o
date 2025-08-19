<?php

class Imovel{
    private $endereco;
    protected $preco;

    function __construct($endereco, $preco){
        $this->endereco = $endereco;
        $this->preco = $preco;
    }

    function setImovel($endereco, $preco){
        $this->endereco = $endereco;
        $this->preco = $preco;
    }

    function getImovel(){
        return "Endereço: " . $this->endereco . ", Preço: R$ " . number_format($this->preco, 2, ',', '.');
    }

    function exibeDados(){
        echo "Endereço: " . $this->endereco . "<br>";
        echo "Preço: R$ " . number_format($this->preco, 2, ',', '.') . "<br>";
    }
}

class Novo extends Imovel{
    private $valorAdicional;

    function __construct($endereco, $preco, $valorAdicional){
        parent::__construct($endereco, $preco);
        $this->valorAdicional = $valorAdicional;
    }

    function setValorAdicional($valorAdicional){
        $this->valorAdicional = $valorAdicional;
    }

    function getValorAdicional(){
        return $this->valorAdicional;
    }

    function exibeDados(){
        parent::exibeDados();
        echo "Valor Adicional: R$ " . number_format($this->valorAdicional, 2, ',', '.') . "<br>";
        echo "Preço Total: R$ " . number_format($this->preco + $this->valorAdicional, 2, ',', '.') . "<br>";
    }
}

class Velho extends Imovel{
    private $desconto;

    function __construct($endereco, $preco, $desconto){
        parent::__construct($endereco, $preco);
        $this->desconto = $desconto;
    }

    function setDesconto($desconto){
        $this->desconto = $desconto;
    }

    function getDesconto(){
        return $this->desconto;
    }

    function exibeDados(){
        parent::exibeDados();
        echo "Desconto: R$ " . number_format($this->desconto, 2, ',', '.') . "<br>";
        echo "Preço Final: R$ " . number_format($this->preco - $this->desconto, 2, ',', '.') . "<br>";
    }
}

$Novo = new Novo("Rua A, 123", 300000, 50000);
$Novo->exibeDados();
echo "<hr>";
$Velho = new Velho("Rua B, 456", 200000, 30000);
$Velho->exibeDados();

?>