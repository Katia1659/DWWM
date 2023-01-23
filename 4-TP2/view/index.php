<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php session_start(); ?>
<div class = centered-element>
    <form action="../controller/execute.php" method="get">
            <label for="">Votre nom*:</label> <br>

                <input type="text" placeholder="nom de famille" name="nomFamille"> </input><br>

            <label for="">Votre prénom*:</label> <br>

                <input type="text" placeholder="prénom" name="prenom"> </input><br>

            <label for="">Votre date de naissance*:</label> <br>

                <input type="date" placeholder="date_de_naissance" name="datedenaiss"> </input><br>

            <label for="">Sexe :</label> <br>

                <input type="radio" name = "gender">Homme</input><br>
                <input type="radio" name = "gender">Femme</input><br>

            <button type="submit" name="submit">Envoyer ma demande</button>
    </form>
</div>
</body>
</html>