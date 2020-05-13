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
    <div class = "topnav">
        <audio id="audio_play">
                <source src="Audio/Titre.mp4" type="audio/ogg" />
        </audio>
        <a href = "?page=main"><img class = "logo" src = 'image/logo.png' onClick="document.getElementById('audio_play').play(); return false;"></a>
        <a class = "logo" href = "?page=panier"><h1><i class="fas fa-shopping-basket"></i> Mon panier</h1></a>
        <a class = "logo" href = "?page=toppimp"><h1><i class="fas fa-utensils"></i> Les meilleurs pimp</h1></a>
        <a class = "logo" href = "?page=histoire"><h1><i class="fas fa-book"></i> L'histoire de pimp my tacos</h1></a>
        <a class = "logo" href = "?page=connexion"><h1><i class="fas fa-user-alt"></i> Se connecter</h1></a>
    </div>
    <h1>Pimpez votre tacos</h1>