<?php
$objeto = null;

$objeto?->total();

// ? operador nullSafe faz uma tratativa

class Funcionario{
    public function __construct(
        private string $nome = "",
        private float $salario = 0
    ){}

    public function info(){
        return "Nome: $this->nome - Salário: $this->salario";
    }

}
class FolhaPagamento{
    private $funcionarios = null;

    public function __construct(){
        $this->funcionarios = [
            new Funcionario('Maria', 12000),
            new Funcionario('Fernando', 9200),
            new Funcionario('Ana', 56000),
            new Funcionario('Paulo', 72000),
        ];
    }

    public function getTotalFuncionarios(){
       return count($this->funcionarios);
       }

    public function getFuncionario(){
        return $this->funcionarios[10]; // null;
    }   
}

$folhaPagamento = new FolhaPagamento();
//$folhaPagamento = null;

//if($folhaPagamento !== null && isset($folhaPagamento))

echo $folhaPagamento?->getTotalFuncionarios();
echo "<br>";
print_r($folhaPagamento?->getFuncionario()?->info());
?>