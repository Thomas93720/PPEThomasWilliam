<?php
    class Commande
    {
        private $idCommande ;
        private $idTacos ;
        private $idSupplement ;
        private $prix ;
        
        function getIdCommande() {
            return $this->idCommande;
        }

        function getIdTacos() {
            return $this->idTacos;
        }

        function getIdSupplement() {
            return $this->idSupplement;
        }

        function getPrix() {
            return $this->prix;
        }

        function setIdCommande($idCommande) {
            $this->idCommande = $idCommande;
        }

        function setIdTacos($idTacos) {
            $this->idTacos = $idTacos;
        }

        function setIdSupplement($idSupplement) {
            $this->idSupplement = $idSupplement;
        }

        function setPrix($prix) {
            $this->prix = $prix;
        }


        
        
        
        
        
        
        
    }