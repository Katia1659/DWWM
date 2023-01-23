<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css" />
  <title>Document</title>
</head>

<body>
  <header>
    <p>Service des impôts de Pétaouchnok</p>
  </header>
  <div class="form1">

    <form action="../controller/executeFunction.php" method="get">
      <p class="enteteform">Entrez vos informations personelles</p>
      <div>
        <div class="input-group">
          <span class="input-group-text" id="basic-addon3">Nom</span>
          <input type="text" class="form-control" id="nom" aria-describedby="basic-addon3">
        </div>
        <div class="input-group">
          <span class="input-group-text" id="basic-addon3">Prenom</span>
          <input type="text" class="form-control" id="prenom" aria-describedby="basic-addon3">
        </div>
      </div>
      <div class="date">
        <label for="date">Date de naissance </label>
        <input type="date" name="age" id="age">
      </div>
      <div class="radio">
        <span class="labradio">Sexe : </span>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexe" id="sexe" value="homme" checked>
          <label class="form-check-label" for="sexe">
            Homme
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexe" id="sexe" value="femme">
          <label class="form-check-label" for="sexe">
            Femme
          </label>
        </div>
      </div>
      <div class="btnsub">
    <button class="btn btn-primary" type="submit">Envoyer les données</button>
  </div>
    </form>
  </div>
</body>

</html>