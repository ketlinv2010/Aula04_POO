<?php

class Animal{
    public function emitirSom(){
        echo "Som desconhecido...";
    }
}

class Gato extends Animal{
    public function emitirSom(){
        echo "Miau!<br>";
    }
}

class Cachorro extends Animal{
    public function emitirSom(){
        echo "Au!";
    }
}

$gato = new Gato();
$gato->emitirSom();

$cachorro = new Cachorro();
$cachorro->emitirSom();


?>