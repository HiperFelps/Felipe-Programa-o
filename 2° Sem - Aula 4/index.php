<?php

abstract class Veiculo{
    protected $modelo;
    protected $ano;

    public function __construct($modelo, $ano){
        $this->modelo = $modelo;
        $this->ano = $ano;
    }    
    abstract public function mover();
} 

class Carro extends Veiculo{
    public function mover(){
        return "O carro {$this->modelo} do ano {$this->ano} está dirigindo na estrada.";
    }
}

class Bicicleta extends Veiculo{
    public function mover(){
        return "A bicicleta {$this->modelo} do ano {$this->ano} está pedalando no parque.";
    }
}

$carro = new Carro("Fusca", 1976);
echo $carro->mover() . "<br>";
$bicicleta = new Bicicleta("Caloi", 2020);
echo $bicicleta->mover() . "<br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título</title>
</head>
<body>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 24px;
            font-weight: bold;
            margin: 20px;
            background-color: #f4f4f4;
            color: #333;
            text-align: center;

        }
    </style>
</body>
</html>