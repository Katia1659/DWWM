<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Supprimer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>


        <!-- Background image -->
        <div class="p-5 text-center bg-image" style="
      background-image: url('');
      height: 1000px; background-size:cover">


            <div style="background-color: rgba(0, 0, 0, 0.6); margin-top: 30px;">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <div class="text-white">
                        <h1 class="mb-3">Rubrique</h1>
                        <a class="btn btn-outline-light btn-lg" href="./insert.php" role="button">Ajouter</a>
                        <a class="btn btn-outline-light btn-lg" href="../controller/execute_select.php" role="button">Regarder</a>
                        <a class="btn btn-outline-light btn-lg" href="./update.php" role="button">Modifier</a>
                        <a class="btn btn-outline-light btn-lg" href="./delete.php" role="button">Supprimer</a>
                        <h4 class="mb-3" style="margin-top: 10px;">Supprimer</h4>
                    </div>
                </div>
            </div>


            <div class="question1 mt-5" class="popup">
                <form action="../controller/execute_delete.php" method="get">

                    <label for="place" class="text-light pe-2">Quelle place voulez vous supprimer : </label>
                    <input type="int" id="place" name="place" placeholder="" required>
                    <div class="validation text-light pe-2 mt-3 ">
                        <button type="submit" class="btn text-light border ">OK</button>
                    </div>
                </form>
            </div>

        </div>
    </header>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>