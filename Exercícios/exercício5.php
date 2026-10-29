<?php

abstract class FormaGeometrica{

    abstract public function calcularArea();
}

class Retangulo extends FormaGeometrica{
    public float $base;
    public float $altura;

    public function __construct($base, $altura){
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        $area = $this->base  * $this->altura;
        echo "Área do retângulo: " . number_format($area, 2) . "cm²<br>";
    }
}

class Circulo extends FormaGeometrica{
    public $raio;

    public function __construct($raio){
        $this->raio = $raio;
    }

    public function calcularArea(){
        $area = 3.14 * ($this->raio * $this->raio);
        echo "Área do círculo: " . number_format($area, 2) . "cm²<br>";
    }
}

$retangulo = new Retangulo(8, 5);
$retangulo->calcularArea();

$circulo = new Circulo(4);
$circulo->calcularArea();

?>