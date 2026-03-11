<?php

class Pessoa{
    public string $nome;
    public float $peso;
    public float $altura;
    public float $imc;

    public function __construct($nome, $peso, $altura)
    {
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->imc = $this->calcularIMC();
        
    }

    public function calcularIMC(): float 
    {
        return $this->peso / ($this->altura * $this->altura);
    }

    public function exibirIMC(): string 
    {
        $imc_formatado = number_format($this->imc, 2, ',', '.');
        return "O IMC de {$this->nome} é {$imc_formatado}";
    }
   
}

$joao = new Pessoa("João Filho", 80, 1.75);
echo $joao->exibirIMC();

echo "<br>";

$maria = new Pessoa("Maria Rute", 60, 1.75);
echo $maria->exibirIMC();