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
    <?php session_start(); ?>
    <div class="btnnb">
        <a class="centre" href="../View/index.html">
            <button class="buttonrtr">Retourner a l'index</button>
        </a>
    </div>
    <div class="nbmillieu">
        <h1>Update</h1>
    </div>
    <div class="btnnb">
        <div class="btnicon">

            <a href="../View/insert.php">
                <svg name="insert" class="icon2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
                    <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z" />
                    <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z" />
                </svg>
            </a>
        </div>

        <div class="btnicon">
            <a href="../Controller/executeSelect.php">
                <svg class="icon2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </a>
        </div>

        <div>
            <a href="update.php">
                <svg class="icon2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg>
            </a>
        </div>

        <div>
            <a name="insert" href="delete.php">
                <svg class="icon2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                </svg>
            </a>
        </div>
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
        <form class="formupdate" action="../Controller/executeUpdate.php" method="post">
            <div class="inpcentre">
                <label class="textorange text-light" for="id">ID a modifier : </label>
                <select class="resizeselect" id='id' name ='id'>
                    <option selected>Choisir un id </option>
                 <?php for ($i=0; $i < count($_SESSION['stag']); $i++) {?>
                        
                    <option value='<?= $_SESSION['stag'][$i]['ID']?>'><?= $_SESSION['stag'][$i]['ID']?></option>';      
                <?php }?>
                </select>
            </div>
            <div class="inpcentre">
                <label class="textorange text-light" for="nom">Nom a modifier : </label>
                <input type="text" name="nom" id="nom">
            </div>
            <div class="inpcentre">
                <label class="textorange text-light" for="prenom">Prénom a modifier : </label>
                <input type="text" name="prenom" id="prenom">
            </div>
            <div class="inpcentre">
                <input class="btn btn-success" type="submit" value="Update">
            </div>
            
        </form>
        <datalist id="id">

        </datalist>
    </div>

</body>

</html>