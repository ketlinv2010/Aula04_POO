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
        $area = $this->base  * $this->altura
    }
}

?>