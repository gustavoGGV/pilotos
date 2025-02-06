<?php

require_once("Piloto.php");
require_once("IPilotar.php");

class PilotoNascar extends Piloto implements IPilotar {
    private string $nomeSpotterPil;

    public function __toString() {
        return "\nID: " . $this->idPil .
            "\nNome: " . $this->nomePil .
            "\nNacionalidade: " . $this->nacionalidadePil . 
            "\nData de nascimento: " . $this->dataNascPil . 
            "\nCidade natal: " . $this->cidadeNascPil . 
            "\nIdade: " . $this->idadePil . 
            "\nCategoria: " . $this->categoriaPil . 
            "\nTime: " . $this->timePil . 
            "\nNúmero: " . $this->numeroPil . 
            "\nNome do spotter: " . $this->nomeSpotterPil . "\n";
    }

    public function pilotar(){
        return "\n" . $this->nomePil . " pilotou numa pista que tinha curva para a direita e bateu!\n";
    }

    /**
     * Get the value of nomeSpotterPil
     */ 
    public function getNomeSpotterPil()
    {
        return $this->nomeSpotterPil;
    }

    /**
     * Set the value of nomeSpotterPil
     *
     * @return  self
     */ 
    public function setNomeSpotterPil($nomeSpotterPil)
    {
        $this->nomeSpotterPil = $nomeSpotterPil;

        return $this;
    }
}