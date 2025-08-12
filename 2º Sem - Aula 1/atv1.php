<?php
class Veiculo{
    public $marca;
    public $cor;
    public $ano;

    public function andar($isCaminhao = false, $andando = "O veículo está andando."){
        if ($isCaminhao) {
            $andando = "O caminhão está andando.";
        }
        echo $andando;
    }
    public function parar($isCaminhao = false, $parando = "O veículo parou."){
        if ($isCaminhao) {
            $parando = "O caminhão parou.";
        }
        echo $parando;
    }
}
class Caminhao extends Veiculo{
    public function carregarCarga(){
        echo "Carga carregada com sucesso!";
    }
}

//Brinquei um pouco e descobri que a solução estava na atividade seguinte
$Caminhao = new Caminhao();
$Caminhao->marca = "Volvo";
$Caminhao->cor = "Branco";
$Caminhao->ano = 2020;
$Caminhao->andar(true);
echo "<br>";
$Caminhao->parar(true);
echo "<hr>";
$Caminhao->carregarCarga();







?>