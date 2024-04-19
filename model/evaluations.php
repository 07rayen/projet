<?php
class evaluations
{
    private ?int $idEva = null;
    private string $titreEva;
    private string $duree;
    private string $descE;
    
    public function __construct($titreEva, $duree, $descE)
    {
        $this->titreEva = $titreEva;
        $this->duree = $duree;
        $this->descE = $descE;
    }

    public function getIdEva()
    {
        return $this->idEva;
    }

    public function getTitreEva()
    {
        return $this->titreEva;
    }

    public function setTitreEva($titreEva)
    {
        $this->titreEva = $titreEva;
        return $this;
    }

    public function getDuree()
    {
        return $this->duree;
    }

    public function setDuree($duree)
    {
        $this->duree = $duree;
        return $this;
    }

    public function getDescE()
    {
        return $this->descE;
    }

    public function setDescE($descE)
    {
        $this->descE = $descE;
        return $this;
    }
}

?>