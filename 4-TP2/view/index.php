<?php
// ce document html contient un formulaire avec un champ nommé `titre` dont les données sont envoyées par la méthode `get`
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title></title>
    <link rel="stylesheet" href="./assets/style.css">

</head>
<body>

    <div class="contenants">
        <!--LOGO -->
        <img class="LOGO" height="200px"
             src="https://www.mairiedefaucon.fr/wp-content/uploads/2020/01/votre-logo-des-impots-et-des-finances-publiques-en-vaucluse-et-en-provence.png"
             alt="Logoimpot"/>

        <!-- FORMULAIRE -->
        <form class="FORM divMargeT" action="../controller/execute.php" method="get">

            <div class="divMargeT">
                <p class="centrer" for="nom">Nom</p>
                <input class="input inputNomPrenom"  name="nom" type="text"/>
            </div>

            <div class="divMargeT">
                <p class="centrer" for="prenom">Prénom</p>
                <input class="input inputNomPrenom" name="prenom" type="text"/>
            </div>

            <div class="divMargeT">

                <p class="centrer" for="date">Date de naissance</p>
                <input class="input" type="date" id="date" name="date"
                       value="2023-01-23"
                       min="1900-01-01" max="2040-12-31">
            </div>

            <div class="divMargeT">
                <p class="centrer">Votre genre :</p>
                <input class="marginRadioButton" type="radio" id="male" name="gender" value="male">
                <label for="male">male</label>

                <input type="radio" id="female" name="gender" value="female">
                <label for="female">female</label>
            </div>


            <input class="button divMargeT" type="submit" value="envoyer"/>
        </form>
    </div>
</body>
</html>
