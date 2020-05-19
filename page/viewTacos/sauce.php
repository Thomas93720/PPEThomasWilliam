<h1>Pimpez votre tacos</h1>
<form method="POST">
<h2>Boissons</h2>
    <div class="img-print">
        <div class="test">
            <img class="img" src="image/boisson/coca.png">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Coca" name="boisson" value="Coca">
                Coca</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/boisson/schweppes.png">
            <div class="bottom-test">
                <label>
                <input type="radio" id="schweppes" name="boisson" value="schweppes">
                Schweppes</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/boisson/lipton.png">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Ice-tea" name="boisson" value="Ice-tea">
                Ice tea</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/boisson/7up.png">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Seven-up" name="boisson" value="Seven-up">
                Seven-up</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/boisson/oasis.png">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Oasis" name="boisson" value="Oasis">
                Oasis</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/boisson/Redbull.jpg">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Red-bull" name="boisson" value="Red-bull">
                Red Bull</label>
            </div>
        </div>
    </div>
<h2>Sauce du tacos</h2>
    <div class="img-print">
        <div class="test">
            <img class="img" src="image/Sauce/harissa.jpg">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Harissa" name="sauce" value="Harissa">
                Harissa</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/Sauce/BBQ.jpg">
            <div class="bottom-test">
                <label>
                <input type="radio" id="BBQ" name="sauce" value="BBQ">
                BBQ</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/Sauce/blanche.png">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Blanche" name="sauce" value="Blanche">
                Blanche</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/Sauce/burger.jpg">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Burger" name="sauce" value="Burger">
                Burger</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/Sauce/ketchup.jpg">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Ketchup" name="sauce" value="Ketchup">
                Ketchup</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/Sauce/mexicaine.jpg">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Mexicaine" name="sauce" value="Mexicaine">
                Mexicaine</label>
            </div>
        </div>
    </div>
    <br>
    <h2>Sauce des frites/potatoes</h2>
    <div class="img-print">
        <div class="test">
            <img class="img" src="image/Sauce/harissa.jpg">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Harissa" name="sauce2" value="Harissa">
                Harissa</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/Sauce/BBQ.jpg">
            <div class="bottom-test">
                <label>
                <input type="radio" id="BBQ" name="sauce2" value="BBQ">
                BBQ</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/Sauce/blanche.png">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Blanche" name="sauce2" value="Blanche">
                Blanche</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/Sauce/burger.jpg">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Burger" name="sauce2" value="Burger">
                Burger</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/Sauce/ketchup.jpg">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Ketchup" name="sauce2" value="Ketchup">
                Ketchup</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/Sauce/mexicaine.jpg">
            <div class="bottom-test">
                <label>
                <input type="radio" id="Mexicaine" name="sauce2" value="Mexicaine">
                Mexicaine</label>
            </div>
        </div>
    </div>
    <br>
    <div class="img-print">
        <div class="test">
            <img class="img" src="image/Sauce/frites.webp">
            <div class="bottom-test">
                <label>
                <input type="radio" id="frite" name="frite" value="Fites">
                Frites</label>
            </div>
        </div>
        <div class="test">
            <img class="img" src="image/Sauce/potatoes.jpg">
            <div class="bottom-test">
                <label>
                <input type="radio" id="potatoes" name="frite" value="Potatoes">
                Potatoes</label>
            </div>
        </div>
    </div>
    <br>
    <input type="submit" value="Choisir">
</form>
<br>
<a href="?page=viande"><input type="submit" value="< Precedent"></a>
<?php
    if(!empty($_POST["boisson"])&&!empty($_POST["sauce"])&&!empty($_POST["sauce2"])&&!empty($_POST["frite"]))
    {
        $_SESSION["boisson"] = $_POST["boisson"];
        $_SESSION["sauce"] = $_POST["sauce"];
        $_SESSION["sauce2"] = $_POST["sauce2"];
        $_SESSION["frite"] = $_POST["frite"];
        echo '<a href="?page=panier"><input type="submit" value="Suivant >"></a>';
    }
?>
