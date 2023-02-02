<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modifier</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../view/style.css">
</head>

<body>
  <header>


    <!-- Background image -->
    <div class="p-5 text-center bg-image" style="
      background-image: url('');
      height: 1000px;">
      
      <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); margin-top: 30px;">
        <div class="d-flex justify-content-center align-items-center h-100">
          <div class="text-white">
            <h1 class="mb-3">Rubrique</h1>
            <a class="btn btn-outline-light btn-lg " href="./insert.php" role="button">Ajouter</a>
            <a class="btn btn-outline-light btn-lg" href="../controller/execute_select.php" role="button">Regarder</a>
            <a class="btn btn-outline-light btn-lg" href="./update.php" role="button">Modifier</a>
            <a class="btn btn-outline-light btn-lg" href="./delete.php" role="button">Supprimer</a>
            <h4 class="mb-3" style="margin-top: 10px;">Modifier</h4>
          </div>
        </div>
      </div>

      <form action="../controller/execute_update.php" method="get" class="center">

        <div class="question2">
          <label for="nouveau" class="text-light pe-2 mt-3">Votre nouveau : </label>
          <input type="text" id="nouveau" name="nouveau" placeholder="" required>
        </div>

        <div class="question3">
          <label for="place" class="text-light pe-4 mt-3">Quelle place : </label>
          <input type="int" id="place" name="place" placeholder="" required>
        </div>

        <div class="btnRadio text-light pe-2 mt-3">
          <label for="NOM">Changer un nom </label>
          <input type="radio" id="nomOuPrenom" name="nomOuPrenom" value="NOM" class="radio">
          <label for="PRENOM">Changer un prenom </label>
          <input type="radio" id="nomOuPrenom" name="nomOuPrenom" value="PRENOM" class="radio">
        </div>
        <div class="validation text-light pe-2 mt-3 ">
          <button type="submit" class="btn text-light border ">OK</button>
        </div>

      </form>
    </div>
    <!-- Background image -->
  </header>










  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>