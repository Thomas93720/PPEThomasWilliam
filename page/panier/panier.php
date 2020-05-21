<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <link href = "page/panier/Style.css" rel = "stylesheet" type = "text/css" media = "all"/>
        <link rel="stylesheet" href="https://kit.fontawesome.com/92920db574.js" /> 
        <script src="https://kit.fontawesome.com/92920db574.js" crossorigin="anonymous"></script>
        <title>Pimp My Tacos</title>
    </head>
<body>
<?php
    include("DAO/CommandeDAO.php");
    $Commande = CommandeDAO::findAllCommande($_SESSION["user"]);
    $_SESSION["cardSize"] = sizeof($Commande);
?>
    <nav>
        <div class="logo">
            <audio id="audio_play">
                <source src="Audio/Titre.mp4" type="audio/ogg" />
            </audio>
            <a href = "?page=Main"><img class = "logo" src = 'image/logo.png'></a>
        </div>
        <div class="lien">
            <a href="?page=viewTacos">Pimp ton tacos<p></p></a>
            <?php
            if(!empty($_SESSION["user"]))
            {
                ?>
                <a href="?page=ChangeInfo">Mes informations<p></p></a>
                <?php
            }
            ?>
            <a href="?page=Info">Notre histoire<p></p></a>
        </div>
        <div class="bouton">
            <a href="?page=panier"><i class="fas fa-shopping-cart"><?php echo '('.$_SESSION["cardSize"].') ';?></i></a>
            
            <?php
            if(!empty($_SESSION["user"]))
            {
                ?>
                <a href="?page=deconnexion"><i class="fas fa-sign-out-alt"></i></i></a>
                <?php
            }
            else
            {
                ?>
                <a href="?page=connexion"><i class="fas fa-sign-in-alt"></i></i></a>
                <?php
            }
            ?>
        </div>
    </nav>
<h1>Votre Panier</h1>
<div class="panier">
    <?php
            if(empty($Commande))
            {
                echo "<h2>Votre panier est vide</h2>";
            }
            else
            {
                echo '<div class="listpanier">';
                foreach ($Commande as $lineCommande) 
                {
                    echo '<div class="list">';
                    echo '<label class="title">Tacos '.$lineCommande->getTaille()."</label>";
                    echo '<br>';
                    echo "viande 1 : ".$lineCommande->getViande1();
                    if(!empty($lineCommande->getViande2()))
                    {
                        echo "<br>viande 2 : ".$lineCommande->getViande2();
                    }
                    if(!empty($lineCommande->getViande3()))
                    {
                        echo "<br>viande 3 : ".$lineCommande->getViande3();
                    }
                    echo "<br>Boisson : ".$lineCommande->getBoisson();
                    if($lineCommande->getFrite()==1)
                    {
                        echo "<br>Supplement : Frites";
                    }
                    else
                    {
                        echo "<br>Supplement : Potatoes";
                    }
                    echo "<br>Sauce tacos : ".$lineCommande->getSauce();
                    echo "<br>Sauce frite : ".$lineCommande->getSauce2();
                    echo "<br>Coûts : ".$lineCommande->getPrix()." €";
                    ?>
                    <form method="POST">
                        <button name="delete" <?php echo 'value="'.$lineCommande->getIdCommande().'"'?>><i class="fas fa-trash-alt"></i> Supprimer</button>
                    </form>
                    <?php
                    echo "</div>";
                }
                echo '</div>';
                echo '</div>';
                ?>
                <form method="POST">
                    <a class="Commande" href="?page=Commande">Passer la commande</a>
                </form>
                <?php
            }
            if(!empty($_POST["delete"]))
            {
                CommandeDAO::DeleteCommande($_POST["delete"]);
                header('location:?page=panier');
                exit();
            }
            ?>
</div>