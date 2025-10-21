<?php
// Exercício 1:
abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;

    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }

    final public function fazerAniversario() {
        $this->idade++;
        echo "<p>Parabéns, {$this->nome}! Agora você tem {$this->idade} anos.</p>";
    }

    abstract public function apresentar();
}

// 1- Classe criada
// 2- Uma classe abstrata não pode ser instanciada diretamente, pois serve como um modelo para outras classes.
// 3- Um método final não pode ser sobrescrito por classes filhas, garantindo que sua implementação permaneça inalterada.
// 4- Um método abstrato deve ser implementado por todas as classes filhas, garantindo que elas forneçam sua própria versão do método.

// Exercício 2:

class Visitante extends Pessoa {
    public function apresentar() {
        echo "<p>Sou um visitante chamado {$this->nome}.</p>";
    }
}

$visitante = new Visitante("Ana", 25, "Feminino");
$visitante->apresentar();

/* 4- Essa herança é pobre porque a classe Visitante não adiciona nenhuma funcionalidade ou propriedade nova à classe Pessoa. Ela apenas implementa o método abstrato
apresentar(), sem fornecer nenhum comportamento adicional ou específico para visitantes. */

// Exercício 3:

class Aluno extends Pessoa {
    protected $matricula;
    protected $curso;

    public function __construct($nome, $idade, $sexo, $matricula, $curso) {
        parent::__construct($nome, $idade, $sexo);
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function apresentar() {
        echo "<p>Sou o aluno {$this->nome}, do curso de {$this->curso}.</p>";
    }

    public function pagarMensalidade() {
        echo "<p>Mensalidade de {$this->nome} paga com sucesso!</p>";
    }
}

// 2- parent::__construct() chama o construtor da classe pai (Pessoa) para inicializar os atributos herdados.

$aluno = new Aluno("Carlos", 20, "Masculino", "2023001", "Engenharia");
$aluno->fazerAniversario();

/* 4- O método fazerAniversario() não pode ser sobrescrito na classe Aluno porque ele foi declarado como final na classe Pessoa. Isso garante que a lógica de incrementar
a idade permaneça consistente para todas as subclasses de Pessoa.*/

// Exercício 4:

class Bolsista extends Aluno {
    private $bolsa;

    public function __construct($nome, $idade, $sexo, $matricula, $curso, $bolsa) {
        parent::__construct($nome, $idade, $sexo, $matricula, $curso);
        $this->bolsa = $bolsa;
    }

    public function renovarBolsa() {
        echo "<p>Bolsa renovada para {$this->nome}!</p>";
    }

    public function pagarMensalidade() {
        echo "<p>{$this->nome} é bolsista! Pagamento com desconto de {$this->bolsa}%.</p>";
    }
}

/* 2- O método pagarMensalidade() na classe Bolsista sobrescreve o método da classe Aluno para fornecer uma implementação específica para bolsistas, aplicando um desconto
no pagamento. Essa sobrescrita é um exemplo de poliformismo, já que o método assume duas formas distintas em duas ocasiões diferentes */

/* 3- O método fazerAniversario() não pode ser sobrescrito na classe Aluno porque ele foi declarado como final na classe Pessoa. Isso garante que a lógica de incrementar
a idade permaneça consistente para todas as subclasses de Pessoa.*/

// Exercício 5:

final class Professor extends Pessoa {
    private $especialidade;
    private $salario;

    public function __construct($nome, $idade, $sexo, $esp, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this->especialidade = $esp;
        $this->salario = $salario;
    }

    public function apresentar() {
        echo "<p>Sou o professor {$this->nome}, especialista em {$this->especialidade}.</p>";
    }

    public function receberAumento($valor) {
        $this->salario += $valor;
        echo "<p>O salário de {$this->nome} foi reajustado para R$ {$this->salario}.</p>";
    }
}

/* class Coordenador extends Professor {
    public function organizarReuniao() {
        echo "<p>O coordenador {$this->nome} está organizando uma reunião.</p>";
    }
}

$coordenador = new Coordenador("Mariana", 35, "Feminino", "Matemática", 5000);
$coordenador->apresentar(); */
// Fatal error: Class Coordenador cannot extend final class Professor in C:\xampp\htdocs\Felipe\index.php on line 117

$bolsista = new Bolsista("Lucas", 22, "Masculino", "2023002", "Medicina", 50);
$professor = new Professor("Roberto", 45, "Masculino", "Física", 7000);

$Pessoas = [$visitante, $aluno, $bolsista, $professor]; 

echo get_class($visitante); // Visitante
echo "<br>";

if($visitante instanceof Pessoa){
    echo "true\n";
} else {
    echo "false\n";
} // true
echo "<br>";
if($aluno instanceof Visitante){
    echo "true\n";
} else {
    echo "false\n";
} // false

?>