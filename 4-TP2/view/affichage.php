<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title></title>
    <link rel="stylesheet" href="./assets/styleImp.css">
</head>
<body>
<!-- Debut de la session et contenue de la page -->
<?php session_start()?>
    <div class="container">
            <a class="logo" href="index.php"><img height="200px" src="https://www.mairiedefaucon.fr/wp-content/uploads/2020/01/votre-logo-des-impots-et-des-finances-publiques-en-vaucluse-et-en-provence.png" alt="Logoimpot" /></a>
        <div class="content">
                <h1>Bonjour <?php echo $_SESSION['nom'] .' ' . $_SESSION['prenom'].'</h1> <h1>';
                echo' Vous êtes '.$_SESSION['status'] ?> </h1>
            <?php
            //un if pour afficher les gif correspondants.
            if ($_SESSION['status'] === 'IMPOSABLE') {
                echo '<iframe allowfullscreen height="480" src="https://giphy.com/embed/Mwb2ZLODtt8EtnYcI4/video"  class="giphy-embed" width="480"></iframe>';
            }else{
                echo '<iframe  frameBorder="0" height="270" src="https://giphy.com/embed/QlkFrlcuWOZ1IYmDkm/video" width="480" allowfullscreen class="giphy-embed"></iframe>';
            }
            ?>

        </div>
    </div>
</body>
</html>
