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
        case "deconnexion" :
        {
            include("page/Connexion/deco.php");
        }
        case "viewTacos" :
            session_start();
            include_once("page/viewTacos/nav.php");
            include_once("page/viewTacos/viewTacos.php");
            break;
        case "viande" :
            session_start();
            include_once("page/viewTacos/nav.php");
            include_once("page/viewTacos/viande.php");
            break;
        case "sauce" :
            session_start();
            include_once("page/viewTacos/nav.php");
            include_once("page/viewTacos/sauce.php");
            break;
        default : 
            echo "<h1>404</h1>";
            break;
    }
?>