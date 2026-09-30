<?php

class Personagem
{
    protected $nome;
    protected $idade;
    protected $aldeia;

    public function __construct($nome, $idade, $aldeia)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->aldeia = $aldeia;
    }

    public function mostrarDados()
    {
        echo "Nome: " . $this->nome . PHP_EOL;
        echo "Idade: " . $this->idade . PHP_EOL;
        echo "Aldeia: " . $this->aldeia . PHP_EOL;
    }

    public function getNome()
    {
        return $this->nome;
    }
}
?>

