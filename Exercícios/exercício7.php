<?php

abstract class ContaBancaria{
    protected string $titular;
    protected string $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function getSaldo(){
        echo "Saldo Atual: R$" . number_format($this->saldo,2, ',', '.') . "<br>";
    }

    public function depositar($valor){
        $this->saldo += $valor;
        echo "Valor do Depósito: R$" . number_format($valor,2, ',', '.' ) . "<br>";
    }

    public function exibirTitular(){
        echo "Titular: " . $this->titular . "<br>";
    }

    abstract public function calcularTarifa();
}

class ContaCorrente extends ContaBancaria{

    public function __construct($titular, $saldo){
        parent::__construct($titular, $saldo);
    }

    public function calcularTarifa(){
        $this->saldo -= 15;
        echo "Tarifa de: R$15,00 <br>";
        return $this->saldo;
    }
}

class ContaPoupanca extends ContaBancaria{
    
    public function __construct($titular, $saldo){
        parent::__construct($titular, $saldo);
    }

    public function calcularTarifa(){
        $this->saldo -= 0;
        echo "Tarifa de: R$00,00 <br>";
        return $this->saldo;
    }
}

echo "<h2>Conta Corrente</h2>";

$conta1 = new ContaCorrente('Ketlin', 500);
$conta1->exibirTitular();
$conta1->depositar(200);
$conta1->getSaldo();
$conta1->calcularTarifa();
$conta1->getSaldo();

echo "<h2>Conta Poupança</h2>";

$conta2 = new ContaPoupanca('Madalena', 500);
$conta2->exibirTitular();
$conta2->depositar(200);
$conta2->getSaldo();
$conta2->calcularTarifa();
$conta2->getSaldo();

?>