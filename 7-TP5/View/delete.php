<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Page d'acceuil</title>
</head>
<header>
    <div class="btnnb">
        <a class="centre" href="../View/index.html">
            <button class="buttonrtr">Retourner a l'index</button>
        </a>
    </div>
    <div>
        <h1>Gestion de BDD stagiaires</h1>
    </div>
    <div class="btnnb">
    </div>
</header>
<body>
    <form action="../Controller/executeSelect.php" method="get"></form>
    <div class="marge">
        <table class="table">
            <tr>
                <th class="bord2">ID</th>
                <th class="bord2">NOM</th>
                <th class="bord2">PRENOM</th>
                <th class="bord2">PLACE</th>
            </tr>
            <?php
            session_start();
            for ($i = 0; $i < count($_SESSION['stag']); $i++) {
                echo '<tr>';
                echo '<td class="bord">' . $_SESSION['stag'][$i]['ID'] . '</td>';
                echo '<td class="bord">' . $_SESSION['stag'][$i]['NOM'] . '</td>';
                echo '<td class="bord">' . $_SESSION['stag'][$i]['PRENOM'] . '</td>';
                echo '<td class="bord">' . $_SESSION['stag'][$i]['PLACE'] . '</td>';
                echo '</tr>';
            }
            ?>
        </table>
    </div>
    <div>
        <form class="limit" action="../Controller/executeDelete.php" method="post">
            <label class="textorange" for="id">ID a supprimer : </label>
            <input type="text" name="iddelete" id="iddelete">
            <input type="submit" value="Delete">
        </form>
    </div>

</body>

</html>