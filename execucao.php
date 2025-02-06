<?php

require_once("modelo/PilotoEndurance.php");
require_once("modelo/PilotoFormula.php");
require_once("modelo/PilotoNascar.php");
require_once("modelo/PilotoRally.php");
require_once("dao/PilotoDao.php");

do {
    echo "\n\n----- PILOTO -----\n";
    echo "1 - Cadastrar piloto\n";
    echo "2 - Listar pilotos\n";
    echo "3 - Excluir piloto\n";
    echo "4 - Buscar piloto\n";
    echo "5 - Pilotar\n";
    echo "0 - Sair\n";
    $opcao = readline("Digite a opção: ");
    switch ($opcao) {
        case 1:
            echo "\n\n1 - Piloto de endurance\n";
            echo "2 - Piloto de fórmula\n";
            echo "3 - Piloto de Nascar\n";
            echo "4 - Piloto de rally\n";
            $opcaoPiloto = readline("Digite a opção do piloto que deseja cadastrar: ");
            if ($opcaoPiloto == 1) {
                $piloto = new PilotoEndurance();
                $piloto->setClassificacaoPil(readline("Qual a classificação do seu piloto (bronze, prata, ouro, platina)?: "));
            } else if ($opcaoPiloto == 2) {
                $piloto = new PilotoFormula();
                $piloto->setPagantePil(readline("Seu piloto é pagante (sim / não)?: "));
            } else if ($opcaoPiloto == 3) {
                $piloto = new PilotoNascar();
                $piloto->setNomeSpotterPil(readline("Qual o nome do spotter do seu piloto?: "));
            } else if ($opcaoPiloto == 4) {
                $piloto = new PilotoRally();
                $piloto->setNomeCopilotoPil(readline("Qual o nome do copiloto que acompanha seu piloto?: "));
            } else {
                echo "\nOpção errada!\n";
            }
            $piloto->setNomePil(readline("Digite o nome do seu piloto: "));
            $piloto->setNacionalidadePil(readline("Digite a nacionalidade do seu piloto: "));
            $piloto->setDataNascPil(readline("Digite a data de nascimento do seu piloto (AAAA-MM-DD): "));
            $piloto->setCidadeNascPil(readline("Digite a cidade natal de seu piloto: "));
            $piloto->setIdadePil(readline("Digite a idade do seu piloto: "));
            $piloto->setCategoriaPil(readline("Digite a categoria em que seu piloto atua: "));
            $piloto->setTimePil(readline("Digite o time do seu piloto: "));
            $piloto->setNumeroPil(readline("Digite o número do seu piloto: "));
            $pilotoDAO = new PilotoDAO();
            $pilotoDAO->cadastrarPiloto($piloto);
            echo "\nPiloto cadastrado!\n";
            break;
        
        case 2:
            $pilotoDAO = new PilotoDAO();
            $pilotos = $pilotoDAO->listarPilotos();
            if(count($pilotos)<1){
                echo "\nNenhum piloto encontrado!\n";
            } else {
                foreach($pilotos as $p){
                    echo $p;
                }
            }
            break;
        
        case 3:
            $pilotoDAO = new PilotoDAO();
            $pilotos = $pilotoDAO->listarPilotos();
            foreach($pilotos as $p){
                echo $p;
            }
            $idPil=readline("\nDigite o ID do piloto que você deseja excluir: ");
            $piloto=$pilotoDAO->buscarPilotoPorId($idPil);
            if($piloto!=null){
                $pilotoDAO->deletarPiloto($idPil);
                echo "\nPiloto deletado!\n";
            } else {
                echo "\nPiloto não encontrado!\n";
            }
            break;

        case 4:
            $idPil=readline("Informe o id do piloto: ");
            $pilotoDAO = new PilotoDAO();
            $piloto=$pilotoDAO->buscarPilotoPorId($idPil);
            if($piloto!=null) {
                echo $piloto;
            } else {
                echo "\nPiloto não encontrado!\n";
            }
            break;

        case 5:
            $pilotoDAO = new PilotoDAO();
            $pilotos = $pilotoDAO->listarPilotos();
            foreach($pilotos as $p){
                echo $p;
            }
            $idPil=readline("\nDigite o ID do piloto que você deseja que pilote: ");
            $piloto=$pilotoDAO->buscarPilotoPorId($idPil);
            if($piloto!=null){
                echo $piloto->pilotar();
            } else {
                echo "\nPiloto não encontrado!\n";
            }
            break;

        case 0:
            echo "\nPrograma encerrado!\n";
            break;

        default: 
            echo "\nOpção inválida!\n";
    }
} while ($opcao != 0);
