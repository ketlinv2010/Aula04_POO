<?php

abstract class Funcionario{
    protected string $nome;
    
    public function __construct($nome){
        $this->nome = $nome;
    }

    public function getNome(){
        echo "Nome: " . $this->nome . "<br>";
    }

    abstract public function calcularSalario();
}

class FuncionarioFixo extends Funcionario{
    public function __construct($nome, $salarioMensal){
        parent::__construct($nome);
        $this->salarioMensal = $salarioMensal;
    }

    public function calcularSalario(){
        echo "Salário fixo: R$" . number_format($this->salarioMensal, 2) . "<br>";
    }

}

class FuncionarioComissionado extends Funcionario{
    public function __construct($nome, $salarioBase, $venda){
        parent::__construct($nome);
        $this->salarioBase = $salarioBase;
        $this->venda = $venda;
    }

    public function calcularSalario(){
        $salarioMensal = $this->salarioBase + ($this->venda*0.1);
        echo "Salário comissionado: R$" . number_format($salarioMensal, 2) . "<br>";
    }
}

$FuncionarioFixo = new FuncionarioFixo('Ketlin', 2500);
$FuncionarioFixo->getNome();
$FuncionarioFixo->calcularSalario();

$FuncionarioComissionado = new FuncionarioComissionado('Madalena', 1800, 800);
$FuncionarioComissionado->getNome();
$FuncionarioComissionado->calcularSalario();

?>