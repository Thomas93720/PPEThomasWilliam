    <h1>Pimpez votre tacos</h1>
    <br>
    <h1>Choisissez une taille</h1>
    <form method=POST>
        <input type="range" min="1" max="4" name="taille" value="1">
        <br>
        <br>
        <input type="submit" value="Choisir">
    </form>
    <br>
    
    <?php
    if(!empty($_POST["taille"]))
    {
        switch($_POST["taille"])
        {
            case 1 :
                echo '<img class="S" src="image/S.png">';
                echo "<br>";
                echo "S";
                $_SESSION["taille"]="S";
                break;
            case 2 :
                echo '<img class="M" src="image/S.png">';
                echo "<br>";
                echo "M";
                $_SESSION["taille"]="M";
                break;
            case 3 :
                echo '<img class="L" src="image/S.png">';
                echo "<br>";
                echo "L";
                $_SESSION["taille"]="L";
                break;
            case 4 :
                echo '<img class="XL" src="image/S.png">';
                echo "<br>";
                echo "XL";
                $_SESSION["taille"]="XL";
                break;
        }
        ?>
        <br><br>
        <a href="?page=viande"><input type="submit" value="Suivant >"></a>
        <?php
    }
    ?>