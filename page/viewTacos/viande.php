<h1>Pimpez votre tacos</h1>
<?php
    switch($_SESSION["taille"])
    {
        case "S" :
            echo "<p>Choisissez une viande</p>";
            echo '<form method="POST">
                    <div class="img-print">
                        <div class="test">
                            <img class="img" src="image/viande/steak.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Steak" name="viande" value="Steak">
                                Steak</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/escalope.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Escalope" name="viande" value="Escalope">
                                Escalope</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/Kebab.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Kebab" name="viande" value="Kebab">
                                Kebab</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/nuggets.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Nuggets" name="viande" value="Nuggets">
                                Nuggets</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/tenders.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Tenders" name="viande" value="Tenders">
                                Tenders</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="submit" value="Choisir"></form>
                <br>
                <a href="?page=viewTacos"><input type="submit" value="< Precedent"></a>';
                if(!empty($_POST["viande"]))
                {
                    $_SESSION["viande"] = $_POST["viande"];
                    echo ' ';
                    echo '<a href="?page=sauce"><input type="submit" value="Suivant >"></a>';
                }
                break;
                case "M" :
                    echo "<p>Choisissez deux viandes</p>";
                    echo '<form method="POST">
                    <h1>Première viande</h1>
                    <div class="img-print">
                        <div class="test">
                            <img class="img" src="image/viande/steak.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Steak" name="viande" value="Steak">
                                Steak</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/escalope.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Escalope" name="viande" value="Escalope">
                                Escalope</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/Kebab.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Kebab" name="viande" value="Kebab">
                                Kebab</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/nuggets.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Nuggets" name="viande" value="Nuggets">
                                Nuggets</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/tenders.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Tenders" name="viande" value="Tenders">
                                Tenders</label>
                            </div>
                        </div>
                    </div>
                    <h1>Seconde viande</h1>
                    <div class="img-print">
                        <div class="test">
                            <img class="img" src="image/viande/steak.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Steak" name="viande2" value="Steak">
                                Steak</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/escalope.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Escalope" name="viande2" value="Escalope">
                                Escalope</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/Kebab.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Kebab" name="viande2" value="Kebab">
                                Kebab</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/nuggets.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Nuggets" name="viande2" value="Nuggets">
                                Nuggets</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/tenders.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Tenders" name="viande2" value="Tenders">
                                Tenders</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="submit" value="Choisir">
                    </form>
                    <br>
                    <a href="?page=viewTacos"><input type="submit" value="< Precedent"></a>';
                    if(!empty($_POST["viande"])&&!empty($_POST["viande2"]))
                    {
                        $_SESSION["viande"] = $_POST["viande"];
                        $_SESSION["viande2"] = $_POST["viande2"];
                        echo ' ';
                        echo '<a href="?page=sauce"><input type="submit" value="Suivant >"></a>';
                    }
                    break;
                case "L" :
                    echo "<p>Choisissez trois viandes</p>";
                    echo '<form method="POST">
                    <h1>Première viande</h1>
                    <div class="img-print">
                        <div class="test">
                            <img class="img" src="image/viande/steak.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Steak" name="viande" value="Steak">
                                Steak</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/escalope.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Escalope" name="viande" value="Escalope">
                                Escalope</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/Kebab.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Kebab" name="viande" value="Kebab">
                                Kebab</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/nuggets.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Nuggets" name="viande" value="Nuggets">
                                Nuggets</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/tenders.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Tenders" name="viande" value="Tenders">
                                Tenders</label>
                            </div>
                        </div>
                    </div>
                    <h1>Seconde viande</h1>
                    <div class="img-print">
                        <div class="test">
                            <img class="img" src="image/viande/steak.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Steak" name="viande2" value="Steak">
                                Steak</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/escalope.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Escalope" name="viande2" value="Escalope">
                                Escalope</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/Kebab.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Kebab" name="viande2" value="Kebab">
                                Kebab</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/nuggets.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Nuggets" name="viande2" value="Nuggets">
                                Nuggets</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/tenders.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Tenders" name="viande2" value="Tenders">
                                Tenders</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h1>Troisième viande</h1>
                    <div class="img-print">
                        <div class="test">
                            <img class="img" src="image/viande/steak.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Steak" name="viande3" value="Steak">
                                Steak</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/escalope.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Escalope" name="viande3" value="Escalope">
                                Escalope</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/Kebab.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Kebab" name="viande3" value="Kebab">
                                Kebab</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/nuggets.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Nuggets" name="viande3" value="Nuggets">
                                Nuggets</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/tenders.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Tenders" name="viande3" value="Tenders">
                                Tenders</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="submit" value="Choisir">
                    </form>
                    <br>
                    <a href="?page=viewTacos"><input type="submit" value="< Precedent"></a>';
                    if(!empty($_POST["viande"])&&!empty($_POST["viande2"])&&!empty($_POST["viande3"]))
                    {
                        $_SESSION["viande"] = $_POST["viande"];
                        $_SESSION["viande2"] = $_POST["viande2"];
                        $_SESSION["viande3"] = $_POST["viande3"];
                        echo ' ';
                        echo '<a href="?page=sauce"><input type="submit" value="Suivant >"></a>';
                    }
                    break;
                case "XL" :
                    echo "<p>Choisissez trois viandes</p>";
                    echo '<form method="POST">
                    <h1>Première viande</h1>
                    <div class="img-print">
                        <div class="test">
                            <img class="img" src="image/viande/steak.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Steak" name="viande" value="Steak">
                                Steak</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/escalope.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Escalope" name="viande" value="Escalope">
                                Escalope</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/Kebab.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Kebab" name="viande" value="Kebab">
                                Kebab</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/nuggets.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Nuggets" name="viande" value="Nuggets">
                                Nuggets</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/tenders.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Tenders" name="viande" value="Tenders">
                                Tenders</label>
                            </div>
                        </div>
                    </div>
                    <h1>Seconde viande</h1>
                    <div class="img-print">
                        <div class="test">
                            <img class="img" src="image/viande/steak.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Steak" name="viande2" value="Steak">
                                Steak</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/escalope.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Escalope" name="viande2" value="Escalope">
                                Escalope</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/Kebab.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Kebab" name="viande2" value="Kebab">
                                Kebab</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/nuggets.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Nuggets" name="viande2" value="Nuggets">
                                Nuggets</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/tenders.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Tenders" name="viande2" value="Tenders">
                                Tenders</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <h1>Troisième viande</h1>
                    <div class="img-print">
                        <div class="test">
                            <img class="img" src="image/viande/steak.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Steak" name="viande3" value="Steak">
                                Steak</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/escalope.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Escalope" name="viande3" value="Escalope">
                                Escalope</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/Kebab.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Kebab" name="viande3" value="Kebab">
                                Kebab</label>
                            </div>
                        </div>
                        <div class="test">
                        <img class="img" src="image/viande/nuggets.png">
                            <div class="bottom-test">
                                <label><input type="radio" id="Nuggets" name="viande3" value="Nuggets">
                                Nuggets</label>
                            </div>
                        </div>
                        <div class="test">
                            <img class="img" src="image/viande/tenders.jpg">
                            <div class="bottom-test">
                                <label><input type="radio" id="Tenders" name="viande3" value="Tenders">
                                Tenders</label>
                            </div>
                        </div>
                    </div>
                    <br>
                    <input type="submit" value="Choisir">
                    </form>
                    <br>
                    <a href="?page=viewTacos"><input type="submit" value="< Precedent"></a>';
                    if(!empty($_POST["viande"])&&!empty($_POST["viande2"])&&!empty($_POST["viande3"]))
                    {
                        $_SESSION["viande"] = $_POST["viande"];
                        $_SESSION["viande2"] = $_POST["viande2"];
                        $_SESSION["viande3"] = $_POST["viande3"];
                        echo ' ';
                        echo '<a href="?page=sauce"><input type="submit" value="Suivant >"></a>';
                    }
                    break;
                }
                ?>
                