<?php

require_once("Piloto.php");
require_once("IPilotar.php");

class PilotoEndurance extends Piloto implements IPilotar {
    private string $classificacaoPil;

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
            "\nClassificação: " . $this->classificacaoPil . "\n";
    }

    public function pilotar(){
        return "\n" . $this->nomePil . " pilotou 4 stints de 2 horas nas 24 horas de LeMans!\n";
    }

    /**
     * Get the value of classificacaoPil
     */ 
    public function getClassificacaoPil()
    {
        return $this->classificacaoPil;
    }

    /**
     * Set the value of classificacaoPil
     *
     * @return  self
     */ 
    public function setClassificacaoPil($classificacaoPil)
    {
        $this->classificacaoPil = $classificacaoPil;

        return $this;
    }
}