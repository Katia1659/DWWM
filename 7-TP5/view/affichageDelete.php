<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="affichageDelete.css">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>
    <div class="titre">
            <h1>VOUS ETES SUR LA PAGE SUPPRIMER</h1>
            <h2>QUI SOUHAITEZ VOUS SUPPRIMER</h2>
        </div>
    <div class="body">
        
        <form action="../controller/executeDelete.php" method="post" class = "form">
            <table>
                <thead>
                    <tr>
                        <th></th>
                        <th>ID</th>
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>PLACE</th>
                    </tr>
                </thead>
                <?php
                    for ($i=0; $i < count($_SESSION['stagiaire']); $i++) {
                    echo '<tr>';
                    echo '<td>' . '<input type = "checkbox" name = "ID[]" value = "'.$_SESSION['stagiaire'][$i]['ID'] . '"</td>';
                    echo '<td>' . $_SESSION['stagiaire'][$i]['ID'] . '</td>';
                    echo '<td>' . $_SESSION['stagiaire'][$i]['NOM'] . '</td>';
                    echo '<td>' . $_SESSION['stagiaire'][$i]['PRENOM'] . '</td>';
                    echo '<td>' . $_SESSION['stagiaire'][$i]['PLACE'] . '</td>';
                    echo '</tr>';
                    }
                ?>
            </table>
            <br>
            <div class="btn">
            <input type="submit" value="supprimer" class= "butn">
            </div>
        </form> 
        
        <form action="../view/index.php" method="get" class = "retour">
            <input type="submit" value="Retour menu" class= "">
        </form>
    </div>


</body>
</html>