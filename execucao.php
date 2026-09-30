<?php

require_once ("modelo/Personagem.php");
require_once ("modelo/Ninja.php");
require_once ("modelo/Akatsuki.php");

$personagens = array();

do {

    echo "\n";
    echo "=============================\n";
    echo "     CADASTRO DE NARUTO\n";
    echo "=============================\n";
    echo "1 - Cadastrar Ninja\n";
    echo "2 - Cadastrar Akatsuki\n";
    echo "3 - Listar personagens\n";
    echo "4 - Excluir personagem\n";
    echo "5 - Mostrar total\n";
    echo "0 - Sair\n";
    echo "=============================\n";

    $opcao = readline("Digite uma opcao: ");

    switch ($opcao) {

        case 1:

            echo "\n";
            echo "===== CADASTRAR NINJA =====\n";

            $nome = readline("Nome: ");
            $idade = readline("Idade: ");
            $aldeia = readline("Aldeia: ");
            $nivel = readline("Nivel: ");

            $ninja = new Ninja($nome, $idade, $aldeia, $nivel);

            $personagens[] = $ninja;

            echo "Ninja cadastrado!\n";

            break;


        case 2:

            echo "\n";
            echo "===== CADASTRAR AKATSUKI =====\n";

            $nome = readline("Nome: ");
            $idade = readline("Idade: ");
            $aldeia = readline("Aldeia de origem: ");
            $anel = readline("Anel: ");

            $akatsuki = new Akatsuki(
                $nome,
                $idade,
                $aldeia,
                $anel
            );

            $personagens[] = $akatsuki;

            echo "Akatsuki cadastrado!\n";

            break;


        case 3:

            echo "\n";
            echo "===== PERSONAGENS =====\n";

            if (count($personagens) == 0) {

                echo "Nenhum personagem cadastrado.\n";

            } else {

                foreach ($personagens as $personagem) {

                    echo "\n";
                    $personagem->mostrarDados();
                    echo "-------------------------\n";
                }
            }

            break;


        case 4:

            echo "\n";
            echo "===== EXCLUIR PERSONAGEM =====\n";

            if (count($personagens) == 0) {

                echo "Nenhum personagem cadastrado.\n";

            } else {

                foreach ($personagens as $numero => $personagem) {

                    echo $numero . " - ";
                    echo $personagem->getNome();
                    echo "\n";
                }

                $numero = readline("Digite o numero do personagem: ");

                if (isset($personagens[$numero])) {

                    unset($personagens[$numero]);

                    echo "Personagem excluido!\n";

                } else {

                    echo "Personagem nao encontrado.\n";
                }
            }

            break;


        case 5:

            echo "\n";
            echo "Total de personagens: ";
            echo count($personagens);
            echo "\n";

            break;


        case 0:

            echo "\n";
            echo "Programa encerrado.\n";

            break;


        default:

            echo "\n";
            echo "Opcao invalida.\n";

            break;
    }

} while ($opcao != 0);

?>
