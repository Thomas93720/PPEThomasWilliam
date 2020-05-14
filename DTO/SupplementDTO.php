<?php
class Supplement
{
    private $idSupplement;
    private $Frite;
    private $Potatoes;
    private $prix;

    public function getIdSupplement()
    {
        return $this->idSupplement;
    }

    public function setIdSupplement($idSupplement)
    {
        $this->idSupplement = $idSupplement;

        return $this;
    }

    public function getFrite()
    {
        return $this->Frite;
    }

    public function setFrite($Frite)
    {
        $this->Frite = $Frite;

        return $this;
    }

    public function getPotatoes()
    {
        return $this->Potatoes;
    }

    public function setPotatoes($Potatoes)
    {
        $this->Potatoes = $Potatoes;

        return $this;
    }

    public function getPrix()
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }
}
?>