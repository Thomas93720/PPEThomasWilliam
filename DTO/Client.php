<?php
    class Client
    {
        private $idClient;
        private $MotDePasse ;
        private $Identifiant ;
        private $email ;
        private $adresse ;
        
        function getIdClient() {
            return $this->idClient;
        }

        function getMotDePasse() {
            return $this->MotDePasse;
        }

        function getIdentifiant() {
            return $this->Identifiant;
        }

        function getEmail() {
            return $this->email;
        }

        function getAdresse() {
            return $this->adresse;
        }

        function setIdClient($idClient) {
            $this->idClient = $idClient;
        }

        function setMotDePasse($MotDePasse) {
            $this->MotDePasse = $MotDePasse;
        }

        function setIdentifiant($Identifiant) {
            $this->Identifiant = $Identifiant;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setAdresse($adresse) {
            $this->adresse = $adresse;
        }

 
    }

?>