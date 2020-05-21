<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <link href = "page/Commande/Style.css" rel = "stylesheet" type = "text/css" media = "all"/>
        <link rel="stylesheet" href="https://kit.fontawesome.com/92920db574.js" /> 
        <script src="https://kit.fontawesome.com/92920db574.js" crossorigin="anonymous"></script>
        <title>Pimp My Tacos</title>
    </head>
<body>
    <nav>
    <?php
        include("DAO/CommandeDAO.php");
        include("DAO/ClientDAO.php");
        $Client = ClientDAO::findClientWithId($_SESSION["user"]);
    ?>
        <div class="logo">
            <a href="?page=Main"><img class = "logo" src = 'image/logo.png'></a>
        </div>
        <div class="lien">
            <a href="?page=viewTacos">Pimp ton tacos</a>
            <?php
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
    <form method="POST">
        <div class="info">
            <div>
                <h2>Nom</h2>
                <input type="text" name="nom" <?php echo 'value="'.$Client->getNom().'"' ?>>
            </div>
            <div>
                <h2>Prenom</h2>
                <input type="text" name="prenom" <?php echo 'value="'.$Client->getPrenom().'"' ?>>
            </div>
            <div>
                <h2>Date de naissance</h2>
                <input type="date" <?php echo 'value="'.$Client->getDateNaissance().'"' ?> value="2001-07-22">
            </div>
        </div>
            <div>
                <h2>Adresse de livraison</h2>
                <input type="text" name="adresse" <?php echo 'value="'.$Client->getAdresse().'"' ?> style="width:500px;">
                <h2>Code Postal</h2>
                <input type="number" name="code" <?php echo 'value="'.$Client->getCodePostal().'"' ?>>
            </div>
            <input type="submit" value="Valider">
    </form>
    <?php
    
    
    if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["dateNaissance"]) && !empty($_POST["adresse"]) && !empty($_POST["code"]))
    {
        $Client->setAdresse($_POST["adresse"]);
        $Client->setCodePostal($_POST["code"]);
        $Client->setNom($_POST["nom"]);
        $Client->setPrenom($_POST["prenom"]);
        $Client->setDateNaissance($_POST["dateNaissance"]);
    } 
    ?>