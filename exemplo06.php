<?php

class Conta
{
    public $numero;
    public $saldo;

    function __constructr($numero, $saldo)
    {
        $this->numero = $numero;
        $this->saldo = $saldo;
    }
}