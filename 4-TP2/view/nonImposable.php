<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/asset/styleNonImposable.css">

    <title>Document</title>
</head>

<body>

    <div class="parent">
        <div class="div1">
            <?php session_start(); ?>


            <div class="div3">
                <tr> 

                    <p> Dommage, <?php echo $_SESSION['$user_prenom'].' '. $_SESSION['$user_name']?> tu nous dois rien. </p>

                </tr>
            </div>



            <a class="div2" href="../view/index.php">

                Retour au formulaire

            </a>

        </div>
    </div>

</body>

</html>