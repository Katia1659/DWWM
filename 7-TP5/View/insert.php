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
        <h1>Gestion de BDD stagiaires</h1>
    </header>

    <form enctype="multipart/form-data" action="../Controller/execute.php" method="get">
        
<input id="file" class="input-file" accept=".txt" type="file">
            <div class="button">
                <input class="inpdl" name="file" type="submit" value="Envoyer nouveaux noms" />
            </div>
        </form>

</body>
</html>