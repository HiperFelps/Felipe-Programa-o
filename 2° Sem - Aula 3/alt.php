<?php

    class Quarto{
        private $numero;
        private $precoBase = 300;
        private $diaria;
        private $qtdeHospedes;
        private $dia;
        private $isPadrao;
        private $isDeluxe;
        private $isSuite;
        
        function __construct($numero, $qtdeHospedes, $dia, $isPadrao, $isDeluxe, $isSuite){
            $this->numero = $numero;
            $this->qtdeHospedes = $qtdeHospedes;
            $this->dia = $dia;
            $this->isPadrao = $isPadrao;
            $this->isDeluxe = $isDeluxe;
            $this->isSuite = $isSuite;
        }
        function setQuarto($numero, $qtdeHospedes, $dia){
            $this->numero = $numero;
            $this->qtdeHospedes = $qtdeHospedes;
            $this->dia = $dia;
        }
        function getQuarto(){
            return $this->numero . ", " . $this->qtdeHospedes . ", " . $this->dia;
        }
        function exibirDados(){
            echo "Num: " . $this->numero . ", Qtde Hóspedes: " . $this->qtdeHospedes . ", Dia: " . $this->dia . "<br>";
        }

        function calcularDiaria(){
            if($this->isPadrao && !$this->isDeluxe && !$this->isSuite){
                $diaria = $this->precoBase;
                echo "O valor da diária do Padrão é de: " . $diaria . "<br>";
            }else if($this->isDeluxe && !$this->isPadrao && !$this->isSuite){
                if($this->qtdeHospedes > 2){
                    $this->precoBase *= 1.2;
                    $diaria = $this->precoBase * 1.1;
                    echo "O valor da diária do Deluxe, com mais de dois hóspedes, é de: " . $diaria . "<br>";
                }else if($this->qtdeHospedes <= 2 && $this->qtdeHospedes > 0){
                    $this->precoBase *= 1.2;
                    $diaria = $this->precoBase;
                    echo "O valor da diária do Deluxe, com até dois hóspedes, é de: " . $diaria . "<br>";
                }else{
                    echo "Quantidade de hóspedes inválida!";
                }
            }else if($this->isSuite && !$this->isPadrao && !$this->isDeluxe){
                if($this->dia == 1 || $this->dia == 7){
                    $this->precoBase *= 1.5;
                    $diaria = $this->precoBase * 1.1;
                    echo "O valor da diária da Suíte, em finais de semana, é de: " . $diaria . "<br>";
                }else if($this->dia > 1 && $this->dia < 7){
                    $diaria = $this->precoBase;
                    echo "O valor da diária da Suíte, em dias de semana, é de: " . $diaria . "<br>";
                }else{
                    echo "Dia inválido!";
                }
            }else{
                echo "Tipo de quarto inválido!";
            }
        }         
    }

    $quarto1 = new Quarto(101, 3, 5, true, false, false);
    $quarto1->exibirDados();
    $quarto1->calcularDiaria();
    echo "<br>";
    $quarto2 = new Quarto(202, 2, 1, false, true, false);
    $quarto2->exibirDados();
    $quarto2->calcularDiaria();
    echo "<br>";
    $quarto3 = new Quarto(303, 1, 7, false, false, true);
    $quarto3->exibirDados();
    $quarto3->calcularDiaria();
    echo "<hr>";
    

    
