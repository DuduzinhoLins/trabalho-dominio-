
<?php

require_once ("Personagem.php");

class Akatsuki extends Personagem
{
    private $anel;

    public function __construct($nome, $idade, $aldeia, $anel)
    {
        parent::__construct($nome, $idade, $aldeia);

        $this->anel = $anel;
    }

    public function mostrarDados()
    {
        echo "Tipo: Akatsuki" . PHP_EOL;

        parent::mostrarDados();

        echo "Anel: " . $this->anel . PHP_EOL;
    }
}
?>

