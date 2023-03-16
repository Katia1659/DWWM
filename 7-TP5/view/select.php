<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Regarder</title>

  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
  <div class="test">
    <header>

      <?php session_start(); ?>

      <!-- Background image -->
      <div id="fond" class="p-5 text-center bg-image" style="
      
      height: 1000px; background-size:cover; background-attachment: fixed;">

        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6); margin-top: 30px;">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
              <h1 class="mb-3">Rubrique</h1>
              <a class="btn btn-outline-light btn-lg" href="./insert.php" role="button">Ajouter</a>
              <a class="btn btn-outline-light btn-lg" href="../controller/execute_select.php" role="button">Regarder</a>
              <a class="btn btn-outline-light btn-lg" href="./update.php" role="button">Modifier</a>
              <a class="btn btn-outline-light btn-lg" href="./delete.php" role="button">Supprimer</a>
              <h4 class="mb-3" style="margin-top: 10px;">Regarder</h4>
            </div>
          </div>
        </div>

        <table class="table table-dark border opacity-75 pe-4 mt-3" style="width: 63%">

          <tr>
            <th scope="col">Place</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
          </tr>

          <?php for ($i = 0; $i < count($_SESSION["donnees"]); $i++) { ?>
            <tr>
              <td>
                <?php echo $_SESSION['donnees'][$i]['PRENOM'] ?>
              </td>
              <td>
                <?php echo $_SESSION['donnees'][$i]['NOM'] ?>
              </td>
              <td>
                <?php echo $_SESSION['donnees'][$i]['PLACE'] ?>
              </td>
            </tr>
          <?php } ?>

        </table>
      </div>
    </header>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>