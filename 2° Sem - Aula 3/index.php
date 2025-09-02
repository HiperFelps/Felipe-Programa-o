<?php
    class Quarto{
        private $numero;
        private $precoBase = 300;
        
        function calcularDiaria(){
            echo "O valor da diária é de: " . $this->precoBase;
        }
    }


    class Padrao extends Quarto{
        private $numero;
        private $diaria;
        private $precoBase = 300;

        function __construct($numero){
            $this->numero = $numero;
        }
        function getNumero(){
            return $this->numero;
        }
        function setNumero($numero){
            $this->numero = $numero;
        }

        function calcularDiaria(){
            $diaria = $this->precoBase;
            echo "O valor da diária do Padrão é de: " . $diaria;
        }
        function exibirDados(){
            echo "Num: " . $this->numero;
        }
    }

    
    class Deluxe extends Quarto{
        private $diaria;
        private $qtdeHospedes;
        private $precoBase = 300;

        function __construct($numero, $qtdeHospedes){
            $this->numero = $numero;
            $this->qtdeHospedes = $qtdeHospedes;
        }
        function setDeluxe($numero, $qtdeHospedes){
            $this->numero = $numero;
            $this->qtdeHospedes = $qtdeHospedes;
        }
        function getDeluxe(){
            return $this->numero . ", " . $this->qtdeHospedes;
        }
        function calcularDiaria(){
            if($this->qtdeHospedes > 2){
                $this->precoBase *= 1.2;
                $diaria = $this->precoBase * 1.1;
                echo "O valor da diária do Deluxe, com mais de dois hóspedes, é de: " . $diaria;
            }else if($this->qtdeHospedes <= 2 && $this->qtdeHospedes > 0){
                $this->precoBase *= 1.2;
                $diaria = $this->precoBase;
                echo "O valor da diária da Deluxe, com dois ou menos hóspedes, é de: " . $this->diaria;
            }else{
                echo "Número de hóspedes inválido!";
            }
        }
        function exibirDados(){
            echo "Num: " . $this->numero . ", Qtde de Hóspedes: " . $this->qtdeHospedes;
        }
    }

    class Suite extends Quarto{
        private $diaria;
        private $dia;
        private $precoBase = 300;

        function __construct($numero, $dia){
            $this->numero = $numero;
            $this->dia = $dia;
        }
        function setSuite($numero, $dia){
            $this->numero = $numero;
            $this->dia = $dia;
        }
        function getSuite(){
            return $this->numero . ", " . $this->dia;
        }
        function calcularDiaria(){
            if($this->dia == 1 || $this->dia == 7){
                $this->precoBase *= 1.5;
                $diaria = $this->precoBase * 1.2;
                echo "O valor da diária da Suíte, no fim de semana, é de: " . $diaria;
            }else if($this->dia > 1 && $this->dia < 7){
                $this->precoBase *= 1.5;
                $diaria = $this->precoBase;
                echo "O valor da diária da Suíte, num dia útil, é de: " . $diaria;
            }else{
                echo "Dia inválido!";
            }
        }
        function exibirDados(){
            echo "Num: " . $this->numero . ", Dia: " . $this->dia;
        }
    }

    $padrao = new Padrao(1);
    $padrao->exibirDados();
    echo "<br>";
    $padrao->calcularDiaria();
    echo "<hr>";
    $deluxe = new Deluxe(2, 5);
    $deluxe->exibirDados();
    echo "<br>";
    $deluxe->calcularDiaria();
    echo "<hr>";
    $suite = new Suite(3, 7);
    $suite->exibirDados();
    echo "<br>";
    $suite->calcularDiaria();