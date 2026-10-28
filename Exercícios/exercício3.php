<?php

class Notificacao{

    public function enviar($mensagem){

    }
}

class NotificacaoEmail extends Notificacao{
    public function enviar($mensagem){
        echo "Email, " . $mensagem . '<br>';
    }
}

class NotificacaoSMS extends Notificacao{
    public function enviar($mensagem){
        echo 'SMS, ' . $mensagem . '<br>';
    }
}

class NotificacaoPush extends Notificacao{
    public function enviar($mensagem){
        echo 'Push,' . $mensagem . '<br>';
    }
}


$canal1 = new NotificacaoEmail();
$canal1->enviar('inscrição realizada com sucesso!');

$canal2 = new NotificacaoSMS();
$canal2->enviar('sua inscrição foi feita neste canal!');

$canal3 = new NotificacaoPush();
$canal3->enviar('inscrição feita nesse canal!');
?>