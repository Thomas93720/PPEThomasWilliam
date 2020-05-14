<?php
class Tacos
{
    private $idTacos;
    private $Taille;
    private $Viande1;
    private $Viande2;
    private $Viande3;
    private $Sauce;
    private $Sauce2;
    private $prix;
    
    function getIdTacos() {
        return $this->idTacos;
    }

    function getTaille() {
        return $this->Taille;
    }

    function getViande1() {
        return $this->Viande1;
    }

    function getViande2() {
        return $this->Viande2;
    }

    function getViande3() {
        return $this->Viande3;
    }

    function getSauce() {
        return $this->Sauce;
    }

    function getSauce2() {
        return $this->Sauce2;
    }

    function getPrix() {
        return $this->prix;
    }

    function setIdTacos($idTacos) {
        $this->idTacos = $idTacos;
    }

    function setTaille($Taille) {
        $this->Taille = $Taille;
    }

    function setViande1($Viande1) {
        $this->Viande1 = $Viande1;
    }

    function setViande2($Viande2) {
        $this->Viande2 = $Viande2;
    }

    function setViande3($Viande3) {
        $this->Viande3 = $Viande3;
    }

    function setSauce($Sauce) {
        $this->Sauce = $Sauce;
    }

    function setSauce2($Sauce2) {
        $this->Sauce2 = $Sauce2;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }
}
?>