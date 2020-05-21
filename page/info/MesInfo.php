<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset = "utf-8"/>
        <link href = "page/info/Style.css" rel = "stylesheet" type = "text/css" media = "all"/>
        <link rel="stylesheet" href="https://kit.fontawesome.com/92920db574.js" /> 
        <script src="https://kit.fontawesome.com/92920db574.js" crossorigin="anonymous"></script>
        <title>Pimp My Tacos</title>
    </head>
<body>
<?php
    include("DAO/CommandeDAO.php");
    include("DAO/ClientDAO.php");
    $Client = ClientDAO::findClientWithId($_SESSION["user"]);
    $Commande = CommandeDAO::findAllCommande($_SESSION["user"]);
    $_SESSION["cardSize"] = sizeof($Commande);
?>
    <nav>
        <div class="logo">
            <a href = "?page=Main"><img class = "logo" src = 'image/logo.png'></a>
        </div>
        <div class="lien">
            <a href="?page=viewTacos">Pimp ton tacos<p></p></a>
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
                <h2>Identifiant</h2>
                <input type="text" name="username" <?php echo 'value="'.$Client->getIdentifiant().'"' ?>>
            </div>
            <div>
                <h2>Mot de passe</h2>
                <input type="text" name="password" <?php echo 'value="'.$Client->getMotDePasse().'"' ?>>
            </div>
            <div>
                <h2>Date de naissance</h2>
                <input type="date" name="dateNaissance" <?php echo 'value="'.$Client->getDateNaissance().'"' ?> value="2001-07-22">
            </div>
            <div>
                <h2>Email</h2>
                <input type="email" name="email" <?php echo 'value="'.$Client->getEmail().'"' ?> >
            </div>
        </div>
            <div>
                <h2>Adresse de livraison</h2>
                <input type="text" name="adresse" <?php echo 'value="'.$Client->getAdresse().'"' ?> style="width:500px;">
                <h2>Code Postal</h2>
                <input type="number" name="code" <?php echo 'value="'.$Client->getCodePostal().'"' ?>>
            </div> 
            <input type="submit" value="Changer">
    </form>
    </body>
</html>
<?php
if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["dateNaissance"]) && !empty($_POST["adresse"]) && !empty($_POST["code"]) && !empty($_POST["email"]))
{
    ClientDAO::UpdateClient($_POST["password"],$_POST["nom"],$_POST["prenom"],$_POST["username"],$_POST["email"],$_POST["adresse"],$_POST["code"],$_POST["dateNaissance"],$_SESSION["user"]);
    //non fonctionel
}
?>