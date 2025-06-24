<?php 
// 1.
// A classe representa as características gerais de um objeto. Os objetos são itens que aresentam as características de uma classe, mas dados independentes.
// Exemplos: Classe: Livro, Objeto: Senhor dos Anéis

// 2.
class livro {
    private $titulo;
    private $autor;
    private $disponivel = true;

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            echo "O livro '{$this->titulo}' foi emprestado com sucesso.<br>";
        } else {
            echo "Desculpe, o livro '{$this->titulo}' já está emprestado.<br>";
        }
    }
    public function devolver() {
        if (!$this->disponivel) {
            $this->disponivel = true;
            echo "O livro '{$this->titulo}' foi devolvido com sucesso.<br>";
        } else {
            echo "O livro '{$this->titulo}' já está disponível.<br>";
        }
    }
}
class aluno{
    private $nome;
    private $matricula;

    public function __construct($nome, $matricula) {
        $this->nome = $nome;
        $this->matricula = $matricula;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getMatricula() {
        return $this->matricula;
    }
    public function pegarLivro($livro) {
        echo "{$this->nome} está pegando o livro '{$livro->getTitulo()}'.<br>";
        $livro->emprestar();
    }
}

// 3.
class contaBancaria{
    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial = 0) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    
    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ {$valor} realizado com sucesso. Saldo atual: R$ {$this->saldo}.<br>";
        } else {
            echo "Saque inválido ou saldo insuficiente.<br>";
        }
    }
    
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito de R$ {$valor} realizado com sucesso. Saldo atual: R$ {$this->saldo}.<br>";
        } else {
            echo "Valor de depósito inválido.<br>";
        }
    }
    
    public function getTitular() {
        return $this->titular;
    }
    
    public function getSaldo() {
        return $this->saldo;
    }

}



?>