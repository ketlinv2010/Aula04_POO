<?php

abstract class Eletrodomestico{
    protected string $marca;

    public function __construct($marca){
        $this->marca = $marca;
    }

    public function getMarca(){
        echo "Marca: " . $this->marca . "<br>";
    } 

    abstract public function ligar();
}

class Televisao extends Eletrodomestico{
    
    public function __construct($marca){
        parent::__construct($marca);
    }

    public function ligar(){
        echo "Ligando a tela...<br>";
    }
}

class Geladeira extends Eletrodomestico{

    public function __construct($marca){
        parent::__construct($marca);
    }

    public function ligar(){
        echo 'Iniciando sistema de refrigeração<br>';
    }
}

$televisao = new Televisao('LG');
$televisao->getMarca();
$televisao->ligar();

$geladeira = new Geladeira('Eletrolux');
$geladeira->getMarca();
$geladeira->ligar();

?>