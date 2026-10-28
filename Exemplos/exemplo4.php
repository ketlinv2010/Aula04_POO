<?php

abstract class Carro{
    abstract public function acelerar();
}

class CarroCombustao extends Carro{
    public function acelerar(){
        echo "Injetando Combustível";
    }
}

class CarroEletrico extends Carro{
    public function acelerar(){
        echo 'Enviando Energia';
    }
}

$carro1 = new CarroCombustao();
$carro1->acelerar();

echo '<br>';

$carro2 = new CarroEletrico();
$carro2->acelerar();

?>