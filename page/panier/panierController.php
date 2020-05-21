<?php
    include("DAO/ClientDAO.php");
    include("DAO/CommandeDAO.php");
    $user = ClientDAO::findClientWithId($_SESSION["user"]);
    $id = $user->getIdClient();
    echo $id;
    $supplement = array(
        $_SESSION["frite"],
        $_SESSION["boisson"]
    );
    switch($_SESSION["frite"])
    {
        case "Frites" :
            $_SESSION["frite"] = 1;
            $_SESSION["potatoes"] = NULL;
            break;
        case "Potatoes" :
            $_SESSION["potatoes"] = 1;
            $_SESSION["frite"] = NULL;
            break;
    }
    switch($_SESSION["taille"])
    {
        case "S" :
            $prix = 5;
            CommandeDAO::InsertCommande($_SESSION["taille"],$_SESSION["viande"],NULL,NULL,$_SESSION["sauce"],$_SESSION["sauce2"],$_SESSION["frite"],$_SESSION["potatoes"],$_SESSION["boisson"],$prix,$id);
            break;
        case "M" :
            $prix = 7;
            CommandeDAO::InsertCommande($_SESSION["taille"],$_SESSION["viande"],$_SESSION["viande2"],NULL,$_SESSION["sauce"],$_SESSION["sauce2"],$_SESSION["frite"],$_SESSION["potatoes"],$_SESSION["boisson"],$prix,$id);
            break;
        case "L" :
            $prix = 9;
            CommandeDAO::InsertCommande($_SESSION["taille"],$_SESSION["viande"],$_SESSION["viande2"],$_SESSION["viande3"],$_SESSION["sauce"],$_SESSION["sauce2"],$_SESSION["frite"],$_SESSION["potatoes"],$_SESSION["boisson"],$prix,$id);
            break;
        case "XL" :
            $prix = 13;
            CommandeDAO::InsertCommande($_SESSION["taille"],$_SESSION["viande"],$_SESSION["viande2"],$_SESSION["viande3"],$_SESSION["sauce"],$_SESSION["sauce2"],$_SESSION["frite"],$_SESSION["potatoes"],$_SESSION["boisson"],$prix,$id);
            break;
    }
    header("location:?page=panier");
    exit();
?>