<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>insertion</title>
</head>

<body>
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

    <form enctype="multipart/form-data" action="../Controller/executeInsert.php" method="post">
        <div class="btnbas">
        <label class="btninp" for="file">Choisir un fichier</label>
<input class="input-file" name="file" id="file" class="file"  type="file" >
                <input class="btninp" name="file" type="submit" value="Envoyer nouveaux noms" />
            </div>
        </form>

</body>
</html>