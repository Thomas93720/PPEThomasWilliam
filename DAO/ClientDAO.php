<?php
    include_once("Tools/DataBaseLinker.php");
    include_once("DTO/ClientDTO.php");

    class ClientDAO
    {
        public static function insertClient($client)
        {       
        $idclient =$Client->getIdClient();
        $MotDePasse=$Client->getMotDePasse();
        $Identifiant=$Client->getIdentifiant();
        $email=$Client->getEmail();
        $adresse=$Client->getAdresse();
        
        $login = DatabaseLinker::getConnexion();
        $state = $login->prepare("INSERT INTO Client "
                . "(idclient, MotDePasse, Identifiant, email,adresse)"
                . " VALUES (?, ?, ?, ?, ?)");
        $state->bindParam(1, $idClient);
        $state->bindParam(2, $MotDePasse);
        $state->bindParam(3, $Identifiant);
        $state->bindParam(4, $email);
        $state->bindParam(5, $adresse);
        $state->execute();
        }
        
        public static function findClient ($idClient)
        {
            $login = DatabaseLinker::getConnexion();
            $state = $login->prepare("SELECT * FROM Client WHERE idUtilisateur =?");
            $state->bindParam(1, $idClient);
            $state->execute();
            $resultats = $state->fetchAll();
            foreach ($resultats as $lineResultats)
	    {
                $Client = new Client();
                $Client->setIdClient($lineResultats["idClient"]);
                $Client->setIdentifiant($lineResultats["Identifiant"]);
                $Client->setMotDePasse($lineResultats["MotDePasse"]);
            }
            return $utilisateur;            
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
                $client= new Client();
                $Client->setIdClient($lineResultats["idClient"]);
                $Client->setIdentifiant($lineResultats["Identifiant"]);
                $Client->setMotDePasse($lineResultats["MotDePasse"]);
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