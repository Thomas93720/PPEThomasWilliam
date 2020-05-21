<?php
    include_once("Tools/DataBaseLinker.php");
    include_once("DTO/ClientDTO.php");

    class ClientDAO
    {
        public static function insertClient($nom,$prenom,$MotDePasse,$Identifiant,$email,$adresse,$dateNaissance,$codePostal)
        {
        $login = DatabaseLinker::getConnexion();
        $state = $login->prepare("INSERT INTO Client (nom,prenom,MotDePasse, Identifiant, email,adresse,dateNaissance,codePostal) VALUES (?,?,?, ?, ?, ?,?,?)");
        $state->bindParam(1, $nom);
        $state->bindParam(2, $prenom);
        $state->bindParam(3, $MotDePasse);
        $state->bindParam(4, $Identifiant);
        $state->bindParam(5, $email);
        $state->bindParam(6, $adresse);
        $state->bindParam(7, $dateNaissance);
        $state->bindParam(8, $codePostal);
        $state->execute();
        }
        

        public static function findClientWithMdpAndId($Identifiant,$MotDePasse)
        {
            $login = DatabaseLinker::getConnexion();
            $state = $login->prepare("SELECT * FROM Client WHERE Identifiant =? AND MotDePasse=?");
            $state->bindParam(1, $Identifiant);
            $state->bindParam(2, $MotDePasse);
            $state->execute();
            $resultats = $state->fetchAll();
            foreach ($resultats as $lineResultats)
            { 
                $Client= new Client();
                $Client->setIdClient($lineResultats["idClient"]);
                $Client->setIdentifiant($lineResultats["Identifiant"]);
                $Client->setMotDePasse($lineResultats["MotDePasse"]);
                $Client->setAdresse($lineResultats["adresse"]);
                $Client->setCodePostal($lineResultats["codePostal"]);
                $Client->setNom($lineResultats["nom"]);
                $Client->setPrenom($lineResultats["prenom"]);
                $Client->setDateNaissance($lineResultats["dateNaissance"]);
                return $Client;
            }
            return null;  
        }

        public static function findClientWithId($Id)
        {
            $login = DatabaseLinker::getConnexion();
            $state = $login->prepare("SELECT * FROM Client WHERE IdClient =?");
            $state->bindParam(1, $Id);
            $state->execute();
            $resultats = $state->fetchAll();
            foreach ($resultats as $lineResultats)
            { 
                $Client= new Client();
                $Client->setIdClient($lineResultats["idClient"]);
                $Client->setIdentifiant($lineResultats["Identifiant"]);
                $Client->setMotDePasse($lineResultats["MotDePasse"]);
                $Client->setAdresse($lineResultats["adresse"]);
                $Client->setCodePostal($lineResultats["codePostal"]);
                $Client->setNom($lineResultats["nom"]);
                $Client->setPrenom($lineResultats["prenom"]);
                $Client->setDateNaissance($lineResultats["dateNaissance"]);
                return $Client;
            }
            return null;  
        }

        public static function AccAlreadyExist($Identifiant)
        {
            $login = DatabaseLinker::getConnexion();
            $state = $login->prepare("SELECT * FROM Client WHERE Identifiant LIKE ?");
            $state->bindParam(1, $Identifiant);
            $resultats = $state->fetchAll();
            if(empty($resultats)){
                $checked = true; 
            }

            else{
                $checked = false;
            }
            return $checked;
            
        }        
    }
?>