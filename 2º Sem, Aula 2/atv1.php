<?php

class Funcionario{
    private $nome;
    private $salario;

    function __construct($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    function setFuncionario($nome, $salario){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    function getFuncionario(){
        return $this->nome . ", " . $this->salario;
    }

    function addAumento(float $valor){
        $this->salario += $valor;
    }
    
    function ganhoAnual(){
        return $this->salario * 12;
    }

    function exibeDados(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Salário: " . $this->salario . "<br>";
        echo "Ganho Anual: " . $this->ganhoAnual() . "<br>";
    }
}

class Assistente extends Funcionario{
    private $matricula;

    function __construct($nome, $salario, $matricula){
        $this->nome = $nome;
        $this->salario = $salario;
        $this->matricula = $matricula;
    }

    function setAssistente($nome, $salario, $matricula){
        $this->nome = $nome;
        $this->salario = $salario;
        $this->matricula = $matricula;
    }

    function getAssistente(){
        return $this->nome . ", " . $this->salario . ", " . $this->matricula;
    }

    function exibeDados(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Salário: " . $this->salario . "<br>";
        echo "Matrícula: " . $this->matricula . "<br>";
    }
}

class Assistente_Tecnico extends Assistente{
    private $bonus;

    function __construct($nome, $salario, $matricula, $bonus = 0){
        parent::__construct($nome, $salario, $matricula);
        $this->bonus = $bonus;
    }

    function setBonus($bonus){
        $this->bonus = $bonus;
    }

    function ganhoAnual(){
        return ($this->salario + $this->bonus) * 12;
    }
}

class Assistente_Administrativo extends Assistente{
    function __construct($nome, $salario, $matricula, $ganhoTurnoExtra = 0){
        parent::__construct($nome, $salario, $matricula);
        $this->ganhoTurnoExtra = $ganhoTurnoExtra;
    }

    function ganhoAnual(){
        return ($this->salario + $this->ganhoTurnoExtra) * 12;
    }
}

$Funcionario = new Funcionario("João", 3000);
echo "Funcionário:<br>";
$Funcionario->exibeDados();
$Funcionario->addAumento(500);
echo "Após aumento:<br>";
$Funcionario->exibeDados();
echo "<hr>";

$Assistente = new Assistente_Tecnico("Carlos", 2800, "T456", 200);
echo "<br>Assistente:<br>";
$Assistente->exibeDados();
$Assistente->addAumento(300);
echo "Após aumento:<br>";
$Assistente->exibeDados();
echo "<hr>";

$Assistente_Tecnico = new Assistente_Tecnico("Maria", 2800, "T456", 200);
echo "<br>Assistente Técnico:<br>";
$Assistente_Tecnico->exibeDados();
echo "Ganho Anual com bônus: " . $Assistente_Tecnico->ganhoAnual();
echo "<hr>";

$Assistente_Administrativo = new Assistente_Administrativo("Ana", 2600, "AD789", 150);
echo "<br>Assistente Administrativo:<br>";
$Assistente_Administrativo->exibeDados();
echo "Ganho Anual com turno extra: " . $Assistente_Administrativo->ganhoAnual() . "<br>";




?>