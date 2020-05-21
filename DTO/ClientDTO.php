<?php

include_once("Tools/DataBaseLinker.php");

class Client 
{
    private $idClient;
    private $MotDePasse;
    private $Identifiant;
    private $email;
    private $adresse;
    private $codePostal;
    private $Nom;
    private $Prenom;
    private $dateNaissance;

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

    public function getCodePostal()
    {
        return $this->codePostal;
    }

    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function setNom($Nom)
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->Prenom;
    }

    public function setPrenom($Prenom)
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }
}
?>