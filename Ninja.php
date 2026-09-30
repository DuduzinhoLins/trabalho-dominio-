<?php

require_once ("Personagem.php");

class Ninja extends Personagem
{
    private $nivel;

    public function __construct($nome, $idade, $aldeia, $nivel)
    {
        parent::__construct($nome, $idade, $aldeia);

        $this->nivel = $nivel;
    }

    public function mostrarDados()
    {
        echo "Tipo: Ninja" . PHP_EOL;

        parent::mostrarDados();

        echo "Nivel: " . $this->nivel . PHP_EOL;
    }
}
?>

