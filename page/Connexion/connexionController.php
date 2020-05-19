<?php
	class ConnexionController
	{

		public static function includeView()
		{
			include("page/connexion/connexion.php");
		}
		public function authenticate($login,$mdp)
		{
			include("DAO/ClientDAO.php");
			if (ClientDAO::findClientWithMdpAndId($login,$mdp)==NULL) {
				return false;
			}
			else
			{
				return true;
			}
		}
		public static function redirectUser()
		{
			header('location: ?page=Main');
			exit();
		}
	}
?>