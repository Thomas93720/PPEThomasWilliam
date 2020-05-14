<?php
class CommandeDAO
{
    include_once("Tools/DataBaseLinker.php");
	include_once("DTO/Tacos.php");
    public static function findTacos($idTacos){
        $initCo = dataBaseLinker::getConnexion();

        $state = $initCo->prepare("SELECT * FROM Tacos WHERE idTacos =?");
        $state->bindParam(1,$idTacos);
        $state->execute();

        $resultats = $state->fetchAll();
        
        foreach ($resultats as $lineResultats){
            $tacos = new Tacos();
            $tacos->setIdTacos($lineResultats["idTacos"]);
            $tacos->setTaille($lineResultats["taille"]);
            $tacos->setPrix($lineResultats["prix"]);
        }
        return $tacos;
    }
}
?>