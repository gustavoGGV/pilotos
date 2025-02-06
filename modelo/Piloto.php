<?php 

abstract class Piloto {
    protected ?int $idPil = null;
    protected string $nomePil;
    protected string $nacionalidadePil;
    protected string $dataNascPil;
    protected string $cidadeNascPil;
    protected int $idadePil;
    protected string $categoriaPil;
    protected string $timePil;
    protected int $numeroPil;

    abstract function __toString();

    /**
     * Get the value of nomePil
     */ 
    public function getNomePil()
    {
        return $this->nomePil;
    }

    /**
     * Set the value of nomePil
     *
     * @return  self
     */ 
    public function setNomePil($nomePil)
    {
        $this->nomePil = $nomePil;

        return $this;
    }

    /**
     * Get the value of nacionalidadePil
     */ 
    public function getNacionalidadePil()
    {
        return $this->nacionalidadePil;
    }

    /**
     * Set the value of nacionalidadePil
     *
     * @return  self
     */ 
    public function setNacionalidadePil($nacionalidadePil)
    {
        $this->nacionalidadePil = $nacionalidadePil;

        return $this;
    }

    /**
     * Get the value of dataNascPil
     */ 
    public function getDataNascPil()
    {
        return $this->dataNascPil;
    }

    /**
     * Set the value of dataNascPil
     *
     * @return  self
     */ 
    public function setDataNascPil($dataNascPil)
    {
        $this->dataNascPil = $dataNascPil;

        return $this;
    }

    /**
     * Get the value of cidadeNascPil
     */ 
    public function getCidadeNascPil()
    {
        return $this->cidadeNascPil;
    }

    /**
     * Set the value of cidadeNascPil
     *
     * @return  self
     */ 
    public function setCidadeNascPil($cidadeNascPil)
    {
        $this->cidadeNascPil = $cidadeNascPil;

        return $this;
    }

    /**
     * Get the value of idadePil
     */ 
    public function getIdadePil()
    {
        return $this->idadePil;
    }

    /**
     * Set the value of idadePil
     *
     * @return  self
     */ 
    public function setIdadePil($idadePil)
    {
        $this->idadePil = $idadePil;

        return $this;
    }

    /**
     * Get the value of categoriaPil
     */ 
    public function getCategoriaPil()
    {
        return $this->categoriaPil;
    }

    /**
     * Set the value of categoriaPil
     *
     * @return  self
     */ 
    public function setCategoriaPil($categoriaPil)
    {
        $this->categoriaPil = $categoriaPil;

        return $this;
    }

    /**
     * Get the value of timePil
     */ 
    public function getTimePil()
    {
        return $this->timePil;
    }

    /**
     * Set the value of timePil
     *
     * @return  self
     */ 
    public function setTimePil($timePil)
    {
        $this->timePil = $timePil;

        return $this;
    }

    /**
     * Get the value of numeroPil
     */ 
    public function getNumeroPil()
    {
        return $this->numeroPil;
    }

    /**
     * Set the value of numeroPil
     *
     * @return  self
     */ 
    public function setNumeroPil($numeroPil)
    {
        $this->numeroPil = $numeroPil;

        return $this;
    }

    /**
     * Get the value of idPil
     */ 
    public function getIdPil()
    {
        return $this->idPil;
    }

    /**
     * Set the value of idPil
     *
     * @return  self
     */ 
    public function setIdPil($idPil)
    {
        $this->idPil = $idPil;

        return $this;
    }
}