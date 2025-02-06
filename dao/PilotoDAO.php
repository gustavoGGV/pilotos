<?php

require_once("modelo/Piloto.php");
require_once("modelo/PilotoEndurance.php");
require_once("modelo/PilotoFormula.php");
require_once("modelo/PilotoNascar.php");
require_once("modelo/PilotoRally.php");
require_once("util/Conexao.php");

class PilotoDAO {
    public function cadastrarPiloto(Piloto $piloto){
        $sql="insert into piloto (nomePil, nacionalidadePil, dataNascPil, cidadeNascPil, idadePil, categoriaPil, timePil, numeroPil, classificacaoPil, nomeSpotterPil, nomeCopilotoPil, pagantePil) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $con = Conexao::getCon();
        $stm = $con->prepare($sql);

        if($piloto instanceof PilotoEndurance){
            $stm->execute(array($piloto->getNomePil(), $piloto->getNacionalidadePil(), $piloto->getDataNascPil(), $piloto->getCidadeNascPil(), $piloto->getIdadePil(), $piloto->getCategoriaPil(), $piloto->getTimePil(), $piloto->getNumeroPil(), $piloto->getClassificacaoPil(), null, null, null));
        } else if($piloto instanceof PilotoFormula){
            $stm->execute(array($piloto->getNomePil(), $piloto->getNacionalidadePil(), $piloto->getDataNascPil(), $piloto->getCidadeNascPil(), $piloto->getIdadePil(), $piloto->getCategoriaPil(), $piloto->getTimePil(), $piloto->getNumeroPil(), null, null, null, $piloto->getPagantePil()));
        } else if($piloto instanceof PilotoNascar){
            $stm->execute(array($piloto->getNomePil(), $piloto->getNacionalidadePil(), $piloto->getDataNascPil(), $piloto->getCidadeNascPil(), $piloto->getIdadePil(), $piloto->getCategoriaPil(), $piloto->getTimePil(), $piloto->getNumeroPil(), null, $piloto->getNomeSpotterPil(), null, null));
        } else if($piloto instanceof PilotoRally){
            $stm->execute(array($piloto->getNomePil(), $piloto->getNacionalidadePil(), $piloto->getDataNascPil(), $piloto->getCidadeNascPil(), $piloto->getIdadePil(), $piloto->getCategoriaPil(), $piloto->getTimePil(), $piloto->getNumeroPil(), null, null, $piloto->getNomeCopilotoPil(), null));
        }
    }

    private function mapPilotos($regs){
       $pilotos = array();
       foreach ($regs as $r) {
        $piloto = null;
        if ($r['classificacaoPil'] != null) {
            $piloto = new PilotoEndurance();
            $piloto->setClassificacaoPil($r['classificacaoPil']);
        } else if ($r['pagantePil'] != null) {
            $piloto = new PilotoFormula();
            $piloto->setPagantePil($r['pagantePil']);
        } else if ($r['nomeSpotterPil'] != null) {
            $piloto = new PilotoNascar();
            $piloto->setNomeSpotterPil($r['nomeSpotterPil']);
        } else {
            $piloto = new PilotoRally();
            $piloto->setNomeCopilotoPil($r['nomeCopilotoPil']);
        }
        $piloto->setIdPil($r['idPil']);
        $piloto->setNomePil($r['nomePil']);
        $piloto->setNacionalidadePil($r['nacionalidadePil']);
        $piloto->setDataNascPil($r['dataNascPil']);
        $piloto->setCidadeNascPil($r['cidadeNascPil']);
        $piloto->setIdadePil($r['idadePil']);
        $piloto->setCategoriaPil($r['categoriaPil']);
        $piloto->setTimePil($r['timePil']);
        $piloto->setNumeroPil($r['numeroPil']);
        array_push($pilotos, $piloto);
       }
       return $pilotos; 
    }

    public function listarPilotos(){
        $sql = "select * from piloto";
        $con = Conexao::getCon();
        $stm = $con->prepare($sql);
        $stm->execute();
        $regs = $stm->fetchAll();
        $pilotos = $this->mapPilotos($regs);
        return $pilotos;
    }

    public function buscarPilotoPorId(int $idPil) {
        $con = Conexao::getCon();
        $sql = "select * from piloto where idPil = ?";
        $stm = $con->prepare($sql);
        $stm->execute([$idPil]);
        $regs = $stm->fetchAll();
        $pilotos = $this->mapPilotos($regs);
        if (count($pilotos) > 0) {
            return $pilotos[0];
        } else {
            return null;
        }
    }

    public function deletarPiloto(int $idPil){
        $con = Conexao::getCon();
        $sql = "delete from piloto where idPil = ?";
        $stm = $con->prepare($sql);
        $stm->execute([$idPil]);
    }
}
