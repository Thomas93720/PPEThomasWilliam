<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <link href = "page/Main/Style.css" rel = "stylesheet" type = "text/css" media = "all"/>
        <link rel="stylesheet" href="https://kit.fontawesome.com/92920db574.js" /> 
        <script src="https://kit.fontawesome.com/92920db574.js" crossorigin="anonymous"></script>
        <title>Pimp My Tacos</title>
    </head>
<body>
    <nav>
    <?php
        include("DAO/CommandeDAO.php");
    ?>
        <div class="logo">
            <audio id="audio_play">
                <source src="Audio/Titre.mp4" type="audio/ogg" />
            </audio>
            <img class = "logo" src = 'image/logo.png' onClick="document.getElementById('audio_play').play(); return false;">
        </div>
        <div class="lien">
            <a href="?page=viewTacos">Pimp ton tacos</a>
            <?php
            session_start();
            if(!empty($_SESSION["user"]))
            {
                ?>
                <a href="?page=Info">Mes informations</a>
                <?php
            }
            ?>
            <a href="?page=Info">Notre histoire</a>
        </div>
        <div class="bouton">
            <a href="?page=panier"><i class="fas fa-shopping-cart"><?php if(!empty($_SESSION["user"])){ echo '('.sizeof(CommandeDAO::findAllCommande($_SESSION["user"])).') '; }?></i></a>
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
    <div class=content>
    <div class="image">
    <?php
        if(!empty($_SESSION["user"]))
        {
            include("DAO/ClientDAO.php");
            $user = ClientDAO::findClientWithId($_SESSION["user"]);
            ?>
            <h2>Bienvenue, <?php echo $user->getNom(); ?></h2>
            <?php
        }
    ?>
    </div>
    <br>
    <hr>
    <bR>
    ©Prezot And Bonnemoy Industry