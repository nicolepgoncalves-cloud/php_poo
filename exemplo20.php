<?php

interface INotficador {
    public function enviar($destinatario, $mensagem);    
}

// Implementar: E-mail
class NotificadorEmail implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo "Email enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar: SMS
class NotificatorSMS implements INotificador {
    public function enviar($destinatario, $mensagem)
    {
        echo "SMS enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// Implementar: Whatsapp
class NotificadorWhatsapp implements INotificador {
    public function enviar ($destinatario, $mensagem)
    {
        echo "Whatsapp enviado para {$destinatario}. Mensagem: {$mensagem}.";
    }
}

// classe que usa a interface
class SistemaDeNotificacoes {
    private $notificador;

    public function __construct(INotificador $notificador)
    {
        $this->notificador = $notificador;
    }

    public function notificarUsuario($destinatario, $mensagem)
    {
        $this->notificador->enviar($destinatario, $mensagem);
    }
}

$sistemaEmail = new SistemaDeNotificacoes(new NotificadorEmaill());
$sistemaSMS = new SistemaDeNotificacoes(new NotificadorSMS());
$sistemaWhatsapp= new SistemaDeNotificacoes(new NotificadorWhatsapp());

$sistemaEmail->notificarUsuario("Joao@.com", "Seu pedido foi comfirmado");
$sistemaSMS->notificarUsuario("17997651234", "Seu pedido foi comfirmado");
$sistemaWhatsapp->notificarUsuario("17997651234", "Seu pedido foi comfirmado");