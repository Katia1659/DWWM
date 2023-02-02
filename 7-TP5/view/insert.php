<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../view/style.css">
</head>

<body>
    <header>

        <div class="p-5 text-center bg-image" style="
      background-image: url('');
      height: 1000px;">
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); margin-top: 30px;">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Rubrique</h1>
                        <a class="btn btn-outline-light btn-lg" href="./insert.php" role="button">Ajouter</a>
                        <a class="btn btn-outline-light btn-lg" href="../controller/execute_select.php" role="button">Regarder</a>
                        <a class="btn btn-outline-light btn-lg" href="./update.php" role="button">Modifier</a>
                        <a class="btn btn-outline-light btn-lg" href="./delete.php" role="button">Supprimer</a>
                        <h4 class="mb-3" style="margin-top: 10px;">Ajouter</h4>
                    </div>
                </div>
            </div>

            <div class="div2">
                <form action="../controller/execute_insert.php" method="post" enctype="multipart/form-data">
                    <input type="file" class="text-light pe-4 mt-3 border" class="file" value="Télécharge" name="file" />
            </div>

            <div class="btnBdd validation text-light pe-2 mt-3 ">
                <form action="../controller/execute_insert.php" method="get">
                    <button type="submit" class="btn text-light border" name="file">Envoi en BDD</button>
            </div>

        </div>

    </header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>

</html>