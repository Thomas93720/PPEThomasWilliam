<?php

include_once("Tools/DataBaseLinker.php");

class CommandeDTO 
{
    private $idCommande;
    private $idClient;
    private $Taille;
    private $Viande1;
    private $Viande2;
    private $Viande3;
    private $Sauce;
    private $Sauce2;
    private $FRITE;
    private $POTATOES;
    private $BOISSON;
    private $prix;
     
    public function getIdCommande()
    {
        return $this->idCommande;
    }
    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;

        return $this;
    }
    public function getIdClient()
    {
        return $this->idClient;
    }
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }
    public function getTaille()
    {
        return $this->Taille;
    }
    public function setTaille($Taille)
    {
        $this->Taille = $Taille;

        return $this;
    }
    public function getViande1()
    {
        return $this->Viande1;
    }
    public function setViande1($Viande1)
    {
        $this->Viande1 = $Viande1;

        return $this;
    }
    public function getViande2()
    {
        return $this->Viande2;
    }
    public function setViande2($Viande2)
    {
        $this->Viande2 = $Viande2;

        return $this;
    }
    public function getViande3()
    {
        return $this->Viande3;
    }
    public function setViande3($Viande3)
    {
        $this->Viande3 = $Viande3;

        return $this;
    } 
    public function getSauce()
    {
        return $this->Sauce;
    }
    public function setSauce($Sauce)
    {
        $this->Sauce = $Sauce;

        return $this;
    }
    public function getSauce2()
    {
        return $this->Sauce2;
    }
    public function setSauce2($Sauce2)
    {
        $this->Sauce2 = $Sauce2;

        return $this;
    }
    public function getFRITE()
    {
        return $this->FRITE;
    }
    public function setFRITE($FRITE)
    {
        $this->FRITE = $FRITE;

        return $this;
    }
    public function getPOTATOES()
    {
        return $this->POTATOES;
    }
    public function setPOTATOES($POTATOES)
    {
        $this->POTATOES = $POTATOES;

        return $this;
    }
    public function getBOISSON()
    {
        return $this->BOISSON;
    }
    public function setBOISSON($BOISSON)
    {
        $this->BOISSON = $BOISSON;

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