<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="Style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Impôts de Paris</title>
</head>

<body class="body1">
    <?php session_start(); ?>
    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 50rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <form action="../Controller/Execute.php" method="get" class="column g-3">
                    <div class="mt-4 mb-4">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom"class="form-control " id="nom" required>
                    </div>
                    <div class="mt-4 mb-4">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input type="text" name="prenom" class="form-control" id="prenom" required>
                    </div>
                    <div class="mt-4 mb-4">
                        <label for="genre" name ="genre" class="form-label">Séléctionnez votre genre :</label>
                        <select id="genre" name ="genre" class="form-select">
                            <option value="Homme">Homme</option>
                            <option value="Femme">Femme</option>
                        </select>
                    </div>
                    <div class="mt-4 mb-4">
                        <label  for="start">Date de Naissance</label>
                        <input type="date" id="start" name="DateNaiss" value="2023-01-23">
                    </div>
                    <div class="mt-4 mb-4">
                        <label for="customRange3" class="form-label">A quel point êtes vous radin ?</label>
                        <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" >Envoyé</button>
                    </div>
                </form>
            </li>
        </ul>
    </div>
    </div>





    </div>

</body>

</html>