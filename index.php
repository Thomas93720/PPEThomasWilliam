<?php
    $page = null;
    if(empty($_GET["page"]))
    {
        $page = "Main";
    }
    else
    {
        $page = $_GET["page"];
    }
    switch($page)
    {
        case "Main" : 
            include_once("page/Main/Main.php");
            break;
        case "connexion" :
            include("page/Connexion/connexionController.php");
            include_once("page/Connexion/connexion.php");
            if(!empty($_POST['username']) && !empty($_POST['password'])) 
            {
                $instanceController = new ConnexionController();
                if ($instanceController->authenticate($_POST['username'], $_POST['password']))
                {
                    $user = ClientDAO::findClientWithMdpAndId($_POST["username"], $_POST["password"]);
                    var_dump($user->getIdClient());
                    session_start();
                    $_SESSION["user"] = $user->getIdClient();
                    $instanceController->redirectUser();
                }
                else
                {
                    echo "Mauvais identifiants !";
                }
            }
            break;
        case "inscription" :
        {
            include("DAO/ClientDAO.php");
            include("page/Connexion/connexionController.php");
            include_once("page/Connexion/inscription.php");
            if(!empty($_POST['username']) && !empty($_POST['password'])) 
            {
                $instanceController = new ConnexionController();
                if (ClientDAO::AccAlreadyExist($_POST["username"]))
                {
                    if(!empty($_POST["nom"]) && !empty($_POST["prenom"])  && !empty($_POST["password"])  && !empty($_POST["username"])  && !empty($_POST["email"])  && !empty($_POST["adresse"])  && !empty($_POST["dateNaissance"])  && !empty($_POST["codePostal"]))
                    {
                        ClientDAO::insertClient($_POST["nom"],$_POST["prenom"],$_POST["password"],$_POST["username"],$_POST["email"],$_POST["adresse"],$_POST["dateNaissance"],$_POST["codePostal"]);
                        session_start();
                        $user = ClientDAO::findClientWithMdpAndId($_POST["username"], $_POST["password"]);
                        $_SESSION["user"] = $user->getIdClient();
                        $instanceController->redirectUser();
                    }
                    else 
                    {
                        echo 'veuillez remplir tous les champs';
                    }
                }
                else
                {
                    echo "Identifiants déjà pris !";
                }
            }
            break;
        }
        case "deconnexion" :
        {
            include("page/Connexion/deco.php");
        }
        case "viewTacos" :
            session_start();
            if(empty($_SESSION["user"]))
            {
                header("location:?page=connexion");
                exit();
            }
            include_once("page/viewTacos/nav.php");
            include_once("page/viewTacos/viewTacos.php");
            break;
        case "viande" :
            session_start();
            if(empty($_SESSION["user"]))
            {
                header("location:?page=connexion");
                exit();
            }
            include_once("page/viewTacos/nav.php");
            include_once("page/viewTacos/viande.php");
            break;
        case "sauce" :
            session_start();
            if(empty($_SESSION["user"]))
            {
                header("location:?page=connexion");
                exit();
            }
            include_once("page/viewTacos/nav.php");
            include_once("page/viewTacos/sauce.php");
            break;
        case "panierController" :
            session_start();
            if(empty($_SESSION["user"]))
            {
                header("location:?page=connexion");
                exit();
            }
            include_once("page/panier/panierController.php");
            break;
        case "panier" :
            session_start();
            if(empty($_SESSION["user"]))
            {
                header("location:?page=connexion");
                exit();
            }
            include_once("page/panier/panier.php");
            break;
        case "Commande" :
            session_start();
            if(empty($_SESSION["user"]))
            {
                header("location:?page=connexion");
                exit();
            }
            include_once("page/Commande/Commande.php");
            break;
        case "Info" :
            session_start();
            include_once("page/histoire/histoire.php");
            break;
        default : 
            echo "<h1>404</h1>";
            break;
    }
?>