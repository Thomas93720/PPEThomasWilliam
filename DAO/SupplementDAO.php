<?php
class SupplementDAO
{
    include_once("Tools/DataBaseLinker.php");
	include_once("DTO/SuppelmentDTO.php");
    public static function findSupplement($idSupplement)
    {
        $initCo = dataBaseLinker::getConnexion();
        $state = $initCo->prepare("SELECT * FROM Supplement WHERE idSupplement =?");
        $state->bindParam(1,$idSupplement);
        $state->execute();
        $resultats = $state->fetchAll();
        foreach ($resultats as $lineResultats){
            $Supplement = new Supplement();
            $Supplement->setIdSupplement($lineResultats["idSupplement"]);
            $Supplement->setFrite($lineResultats["Frite"]);
            $Supplement->setPotatoes($lineResultats["Potatoes"]);
            $Supplement->setPrix($lineResultats["Prix"]);
        }
        return $Supplement;
    }
    public static function InsertSupplement($Supplement)
    {
        $initCo = dataBaseLinker::getConnexion();
        $state = $initCo->prepare("INSERT INTO Supplement(Frite,Potatoes,prix) VALUES (?,?,?)");
        $state->bindParam(1,$Supplement->getFrite());
        $state->bindParam(2,$Supplement->getPotatoes());
        $state->bindParam(3,$Supplement->getPrix());
        $state->execute();
    }
}