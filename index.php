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
            include_once("page/Connexion/connexion.php");
            break;
        default : 
            echo "<h1>404</h1>";
        break;
    }
?>