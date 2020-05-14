<?php
class CommandeDAO
{
    include_once("Tools/DataBaseLinker.php");
	include_once("DTO/CommandeDTO.php");
    public static function findCommande($idCommande)
    {
        $initCo = dataBaseLinker::getConnexion();
        $state = $initCo->prepare("SELECT * FROM Commande WHERE idCommande =?");
        $state->bindParam(1,$idCommande);
        $state->execute();
        $resultats = $state->fetchAll();
        foreach ($resultats as $lineResultats){
            $Commande = new Commande();
            $Commande->setIdCommande($lineResultats["idCommande"]);
            $Commande->setIdTacos($lineResultats["idTacos"]);
            $Commande->setPrix($lineResultats["prix"]);
            $Commande->setIdSupplement($lineResultats["idSupplement"]);
        }
        return $Commande;
    }
    public static function InsertCommande($Commande)
    {
        $initCo = dataBaseLinker::getConnexion();
        $state = $initCo->prepare("INSERT INTO Commande(idSupplement,idTacos,prix) VALUES (?,?,?)");
        $state->bindParam(1,$Commande->getIdSupplement());
        $state->bindParam(2,$Commande->getIdTacos());
        $state->bindParam(3,$Commande->getPrix());
        $state->execute();
    }
}
?>