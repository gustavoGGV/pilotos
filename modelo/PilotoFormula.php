<?php

require_once("Piloto.php");
require_once("IPilotar.php");

class PilotoFormula extends Piloto implements IPilotar {
    private string $pagantePil;

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
            "\nPiloto pagante?: " . $this->pagantePil . "\n";
    }
    
    public function pilotar(){
        return "\n" . $this->nomePil . " pilotou em Mônaco e bateu, igual o Senna!\n";
    }

    /**
     * Get the value of pagantePil
     */ 
    public function getPagantePil()
    {
        return $this->pagantePil;
    }

    /**
     * Set the value of pagantePil
     *
     * @return  self
     */ 
    public function setPagantePil($pagantePil)
    {
        $this->pagantePil = $pagantePil;

        return $this;
    }
}