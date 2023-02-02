<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="affichageInsert.css">
    <title>Document</title>
</head>
<body>
    <div class="titre">
        <h1>VOUS ETES SUR LA PAGE INSERT </h1>
        <h3>IMPORTEZ VOTRE FICHIER ! </h3>
    </div>
    <div class="parent">
        <div class="div1">
            <div class="fond">
                <form enctype="multipart/form-data" action="../controller/executeInsert.php" method="post">
                    <div class="formulaire">
                        <input class="btn btn-light" name="file" type="file" required/><br>
                    </div> 
                    <br>
                    <input class="btn btn-light" name="submit" type="submit" value="valider" />
                </form>

             </div>

                <div class="div2">
                    <form action="../view/index.php" method="get" class="btn btn-light">
                        <input type="submit" value="Retour menu" class="btn">
                    </form>
               
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>