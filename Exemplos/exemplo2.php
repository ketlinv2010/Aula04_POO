<?php

class Carro{
    public function acelerar(){
        echo "O carro está acelerando<br>";
    }
}

class CarroCombustao extends Carro{
    public function acelerar(){
        echo "Injetando combustível<br>";
    }
}

class CarroEletrico extends Carro{
    public function acelerar(){
        echo "Enviando energia";
    }
}

$carro = new Carro();
$carro->acelerar();

$carro1 = new CarroCombustao();
$carro1->acelerar();

$carro2 = new CarroEletrico();
$carro2->acelerar();
?>