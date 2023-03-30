<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/asset/styleImposable.css">
    <title>Document</title>
</head>
<body>
    
<body>

    
    <div class="parent">
        <?php session_start(); ?>

        <div class="div1">
            <div class="div3">
                <tr> 

                    <p> Félicitations  <?php echo $_SESSION['$user_prenom'] ?> !!</p>
        
                    <p> Rends l'argent maintenant.</p>

                </tr>
            </div>

                <a class="div2" href="../view/index.php">

                Retour au formulaire

                </a>

        </div>
    </div>

</body>

</html>

</body>
</html>