<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style2.css">
    <title>Document</title>
</head>
<body>

<?php session_start() ?>


    <h1>Bienvenue dans notre formation DWWM, édition 2023, avec Moussa, une seule règle : Il décide, tu exécutes.</h1>



    <div class="boutons">
    <a href="../View/insert.php"><button id="bouton1" style="width: 30em;" type="submit" class="btn btn-outline-info">Souhaitez vous insérer un tableau en base de données ?</button></a>
    </div>
    

    <div class="boutons">
    <form enctype="multipart/form-data" action="../Controller/executeSelect.php" method="post">
    <button id="bouton2" style="width: 30em;" type="submit">Voir le tableau de la base de données</button>
    </form>
    </div>


    <div class="boutons">
    <form enctype="multipart/form-data" action="../View/update.php" method="post">
    <button id="bouton3" style="width: 30em;" type="submit" class="btn btn-outline-info">Mettre à jour la base de données</button>
    </form>
    </div>
    

    <div class="boutons">
    <form enctype="multipart/form-data" action="../View/delete.php" method="post">
    <button id="bouton4" style="width: 30em;" type="submit">Supprimer des éléments de la base de données</button>
    </form>
    </div>




</body>
</html>
