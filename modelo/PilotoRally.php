<?php

require_once("Piloto.php");
require_once("IPilotar.php");

class PilotoRally extends Piloto implements IPilotar {
    private string $nomeCopilotoPil;

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
            "\nNome do copiloto: " . $this->nomeCopilotoPil . "\n";
    }

    public function pilotar(){
        return "\n" . $this->nomePil . " quase matou um espectador ao pilotar num estágio de rally!\n";
    }

    /**
     * Get the value of nomeCopilotoPil
     */ 
    public function getNomeCopilotoPil()
    {
        return $this->nomeCopilotoPil;
    }

    /**
     * Set the value of nomeCopilotoPil
     *
     * @return  self
     */ 
    public function setNomeCopilotoPil($nomeCopilotoPil)
    {
        $this->nomeCopilotoPil = $nomeCopilotoPil;

        return $this;
    }
}