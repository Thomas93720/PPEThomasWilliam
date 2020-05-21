<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="page/connexion/connexion.css" media="screen" type="text/css" />
    </head>
    <body>
    <div class="page-container">
        <div class="page-content">
            <div class="box">
                <h1>Connexion</h1>
                <form method="POST">
                    <label class="labelId">Identifiant :<input type="text" placeholder="Insérez votre identifiant..." name="username"></label>
                    <label class="labelMdp">Mot de passe :<input type="password" placeholder="Insérez votre mot de passe..." name="password"></label>
                    <input type="submit" name="valider" value="Se connecter">
                    <label class="new-ask">Pas encore de compte ? <a class="lien" href="?page=inscription">S'inscrire</a></label>
                </form>
            </div>
        </div>
    </div>