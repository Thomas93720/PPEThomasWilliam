<?php
include_once("Tools/DataBaseLinker.php");
include_once("DTO/CommandeDTO.php");
class CommandeDAO
{
    public static function findAllCommande($idClient)
    {
        $initCo = dataBaseLinker::getConnexion();
        $state = $initCo->prepare("SELECT * FROM Commande WHERE idClient =?");
        $state->bindParam(1,$idClient);
        $state->execute();
        $resultats = $state->fetchAll();
        $tab = array();
        foreach ($resultats as $lineResultats){
            $Commande = new CommandeDTO();
            $Commande->setIdCommande($lineResultats["idCommande"]);
            $Commande->setTaille($lineResultats["Taille"]);
            $Commande->setViande1($lineResultats["Viande1"]);
            $Commande->setIdClient($lineResultats["idClient"]);
            $Commande->setPrix($lineResultats["prix"]);
            $Commande->setViande2($lineResultats["Viande2"]);
            $Commande->setViande3($lineResultats["Viande3"]);
            $Commande->setSauce($lineResultats["Sauce"]);
            $Commande->setSauce2($lineResultats["Sauce2"]);
            $Commande->setFRITE($lineResultats["FRITE"]);
            $Commande->setPOTATOES($lineResultats["POTATOES"]);
            $Commande->setBOISSON($lineResultats["BOISSON"]);
            $tab[] = $Commande;
        }
        return $tab;
    }
    
    public static function InsertCommande($taille,$viande,$viande2,$viande3,$Sauce,$Sauce2,$frite,$potatoes,$boisson,$prix,$idClient)
    {
        $initCo = dataBaseLinker::getConnexion();
        $state = $initCo->prepare("INSERT INTO commande(idClient, Taille, Viande1, Viande2, Viande3, Sauce, Sauce2, FRITE, POTATOES, BOISSON, prix) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
        $state->bindParam(1,$idClient);
        $state->bindParam(2,$taille);
        $state->bindParam(3,$viande);
        $state->bindParam(4,$viande2);
        $state->bindParam(5,$viande3);
        $state->bindParam(6,$Sauce);
        $state->bindParam(7,$Sauce2);
        $state->bindParam(8,$frite);
        $state->bindParam(9,$potatoes);
        $state->bindParam(10,$boisson);
        $state->bindParam(11,$prix);
        $state->execute();
    }
    public static function DeleteCommande($id)
    {
        $initCo = dataBaseLinker::getConnexion();
        $state = $initCo->prepare("DELETE FROM commande WHERE idCommande = ?");
        $state->bindParam(1,$id);
        $state->execute();
    }
    public static function DeleteAllCommande($id)
    {
        $initCo = dataBaseLinker::getConnexion();
        $state = $initCo->prepare("DELETE FROM commande WHERE idClient = ?");
        $state->bindParam(1,$id);
        $state->execute();
    }
}
?>