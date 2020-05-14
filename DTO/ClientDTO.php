<?php

include_once("Tools/DataBaseLinker.php");

class Client 
{
    private $idClient;
    private $MotDePasse;
    private $Identifiant;
    private $email;
    private $adresse;

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getIdentifiant()
    {
        return $this->Identifiant;
    }

    public function setIdentifiant($Identifiant)
    {
        $this->Identifiant = $Identifiant;

        return $this;
    }

    public function getMotDePasse()
    {
        return $this->MotDePasse;
    }

    public function setMotDePasse($MotDePasse)
    {
        $this->MotDePasse = $MotDePasse;

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
}