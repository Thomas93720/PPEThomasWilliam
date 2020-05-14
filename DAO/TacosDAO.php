<?php
    include_once("Tools/DataBaseLinker.php");
    include_once("DTO/TacosDTO.php");
    class TacosDAO
    {
        public static function insertTacos($Tacos)
        {
             $idTacos=$Tacos->getIdTacos();
             $Taille=$Tacos->getTaille();
             $Viande1=$Tacos->getViande1();
             $Viande2=$Tacos->getViande2();
             $Viande3=$Tacos->getViande3();
             $Sauce=$Tacos->getSauce();
             $Sauce2=$Tacos->getSauce2();
             $prix=$Tacos->getPrix();
             
             $login = DatabaseLinker::getConnexion();
             $state = $login->prepare("INSERT INTO Tacos "
                . "(idTacos, Taille, Viande1, Viande2,Viande3,Sauce,Sauce2,prix)"
                . " VALUES (?, ?, ?, ?, ?,?,?,?)");
             $state->bindParam(1,$idTacos);
             $state->bindParam(2,$Taille);
             $state->bindParam(3,$Viande1);
             $state->bindParam(4,$Viande2);
             $state->bindParam(5,$Viande3);
             $state->bindParam(6,$Sauce);
             $state->bindParam(7,$Sauce2);
             $state->bindParam(8,$prix);
             $state->execute();  
        }
            public static function findTacos ($idTacos)
            {
                $login = DatabaseLinker::getConnexion();
                $state = $login->prepare("SELECT * FROM Tacos WHERE idTacos =?");
                $state->bindParam(1, $idTacos);
                $state->execute();
                $resultats = $state->fetchAll();
                foreach ($resultats as $lineResultats)
                {
                    $Tacos= new Tacos();
                    $Tacos->setIdTacos($lineResultats["idTacos"]);
                    $Tacos->setTaille($lineResultats["Taille"]);
                    $Tacos->setViande1($lineResultats["Viande1"]);
                    $Tacos->setViande2($lineResultats["Viande2"]);
                    $Tacos->setViande3($lineResultats["Viande3"]);
                    $Tacos->setSauce($lineResultats["Sauce"]);
                    $Tacos->setSauce2($lineResultats["Sauce2"]);
                    $Tacos->setPrix($lineResultats["prix"]);                  
                }
                return $Tacos;
            }
        
        
        
        
    }
?>