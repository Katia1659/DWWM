<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <title>Document</title>
</head>
<body>
    <div class = "div">
        <h1 class = "h1">BIENVENU SUR LA PAGE D'ACCEUIL !</h1>
    </div>
    <div>
        <h2 class = "h2">OÙ SOUHAITEZ VOUS ÊTRE REDIRIGÉ/ÉE</h2>
    </div>
    <div class ="parent">
        <div class="div1">
            <form action="../view/affichageInsert.php" method="get" class = "btn">
                <input type="submit" value="Vers insertion " class="btn btn-light">
            </form>
        </div>
        <div class="div2">
            <form action="../controller/executeSelect.php" method="get" class = "btn">
                <input type="submit" value="Vers select " class="btn btn-light">
            </form>
        </div>
        <div class="div3">
            <form action="../view/affichageUpdate.php" method="get" class = "btn">
                <input type="submit" value="Vers modifier " class="btn btn-light">
            </form>
        </div>
        <div class="div4">
            <form action="../view/affichageDelete.php" method="get" class = "btn">
                <input type="submit" value="Vers supprimer " class="btn btn-light">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>