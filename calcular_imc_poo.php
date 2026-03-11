<?php

class imc{
    public $nome;
    public $peso;
    public $altura

    function __construct($nome, $peso, $altura)
    {
    $this->altura = $altura
    $this->nome = $nome
    $this->peso = $peso

    }

    function calcularImc()
    {
        return numfmt_format($this->altura * $this->altura / $this->peso)
    }
}