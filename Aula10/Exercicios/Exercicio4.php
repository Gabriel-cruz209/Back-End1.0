<?php
// Exercício 4 – Notificações
// Crie duas classes:
// - `Email` com o método `enviar()`, que retorna "Enviando email...",
// - `Sms` com o método `enviar()`, que retorna "Enviando SMS...".
// Depois crie uma função `notificar($meio)` que aceite qualquer objeto com `enviar()` e faça a
// chamada. Teste com ambos os objetos.

interface Enviar{
    public function enviar();
}

class Email implements Enviar{
    public function enviar(){
        Echo 'Enviando email...';
    }
}

class Sms implements Enviar{
    public function enviar(){
        echo'Enviando sms';
    }
}

function notificar($meio){
    return $meio->enviar(). PHP_EOL;
}

$email = new Email();
$sms = new Sms();

notificar($email);
notificar($sms);
?>