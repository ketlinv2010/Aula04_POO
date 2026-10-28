<?php

class Frete{
    public function calcularFrete($peso){

    }
}

class FreteNormal extends Frete{
    public function calcularFrete($peso){
        echo "Frete Normal: R$" . (($peso*2) + 10) . '<br><br>';
    }
}

class FreteExpresso extends Frete{
    public function calcularFrete($peso){
        echo "Frete Expresso: R$" . (($peso*5) + 20) . '<br><br>';
    }
}

class RetiradaLoja extends Frete{
    public function calcularFrete($peso){
        echo "Retirada na loja: Frete grátis<br><br>";
    }
}


$produto1 = new FreteNormal();
$produto1->calcularFrete(5);

$produto2 = new FreteExpresso();
$produto2->calcularFrete(10);

$produto3 = new RetiradaLoja();
$produto3->calcularFrete(20);

$produto4 = new FreteNormal();
$produto4->calcularFrete(3);

?>