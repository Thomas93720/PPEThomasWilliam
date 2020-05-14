<?php
	class DataBaseLinker
	{
		private static $url = "mysql:host=localhost;dbname=PPE2;charset=utf8";
		private static $id = "root";
		private static $mdp = "root";
		private static $connexion = null;

		public static function getConnexion(){
			if (DataBaseLinker::$connexion==null){
					DataBaseLinker::$connexion = new PDO(DataBaseLinker::$url, DataBaseLinker::$id, DataBaseLinker::$mdp);
			}
			return DataBaseLinker::$connexion;
		}
	}
?>