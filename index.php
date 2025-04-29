<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
</head>
<body>
    
</body>
</html>


<?php 

//Definindo a classe caneta

    class Caneta{

        // definir atributos
        public $cor;
        public $marca;
        public $ponta;
        public $tamanho;
        public $carga;

        // definir os metodos
        public function escrever($texto){
            echo "Escrevendo " . $texto . " agora <br>";
        }
        public function rabiscar(){
            echo "Rabiscando <br>";
        }
        public function sublinhar(){
            echo "Sublinhando <br>";
        }
        public function pontos(){
            echo "Pontilhando <br>";
        }
    }

    // instanciando a classe caneta
    $caneta1 = new Caneta();

    // como os atributos são publicos, podemos acessar diretamente
    $caneta1->cor = "azul";
    $caneta1->marca = "bic";
    $caneta1->ponta = 0.5;
    $caneta1->tamanho = "média";
    $caneta1->carga = 100;

    //exibindo os atributos da caneta
    echo "Cor: " . $caneta1->cor . "<br>";
    echo "Marca: " . $caneta1->marca . "<br>";
    echo "Ponta: " . $caneta1->ponta . "<br>";
    echo "Tamanho: ". $caneta1->tamanho . "<br>";
    echo "Carga: ". $caneta1->carga ."<br>";

    // chamando os metodos da caneta
    $caneta1->escrever("alguma coisa");
    $caneta1->rabiscar();
    $caneta1->sublinhar();
    $caneta1->pontos();

    echo "<br>";

    // instanciando a classe caneta novamente
    $caneta2 = new Caneta();

    $caneta2->cor = "preta";
    $caneta2->marca = "faber castell";
    $caneta2->ponta = 0.7;
    $caneta2->tamanho = "grande";
    $caneta2->carga = 70;

    echo "Cor: ". $caneta2->cor . "<br>";
    echo "Marca: ". $caneta2->marca . "<br>";
    echo "Tamanho:". $caneta2->tamanho . "<br>";
    echo "Ponta: ". $caneta2->ponta . "<br>";
    echo "Carga: ". $caneta2->carga . "<br>";

    $caneta2->escrever("alguma outra coisa");
    $caneta2->rabiscar();
    $caneta2->sublinhar();
    $caneta2->pontos();

?>