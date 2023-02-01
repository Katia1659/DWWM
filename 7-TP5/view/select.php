<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Regarder</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../view/style.css">
</head>

<body>
  <header>
    <?php session_start(); ?>

    <!-- Background image -->
    <div class="p-5 text-center bg-image" style="
      background-image: url('https://img.hebus.com/hebus_2012/06/26/1340673301_58909.jpg');
      height: 1000px;
   
    ">
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



      <table class="table table-dark mt-2 border opacity-75" style="width: 70%" >
        <thead>
          <tr>
            <th scope="col">Place</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
          </tr>
        </thead>
        <tbody>

          <div>
            <tr>
              <td>
                <?php echo $_SESSION['place0']; ?>
              </td>
              <td>
                <?php echo $_SESSION['nom0']; ?>
              </td>
              <td>
                <?php echo $_SESSION['prenom0']; ?>
              </td>
            </tr>
          </div>

          <tr>
            <td>
              <?php echo $_SESSION['place1']; ?>
            </td>
            <td>
              <?php echo $_SESSION['nom1']; ?>
            </td>
            <td>
              <?php echo $_SESSION['prenom1']; ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php echo $_SESSION['place2']; ?>
            </td>
            <td>
              <?php echo $_SESSION['nom2']; ?>
            </td>
            <td>
              <?php echo $_SESSION['prenom2']; ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php echo $_SESSION['place3']; ?>
            </td>
            <td>
              <?php echo $_SESSION['nom3']; ?>
            </td>
            <td>
              <?php echo $_SESSION['prenom3']; ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php echo $_SESSION['place4']; ?>
            </td>
            <td>
              <?php echo $_SESSION['nom4']; ?>
            </td>
            <td>
              <?php echo $_SESSION['prenom4']; ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php echo $_SESSION['place5']; ?>
            </td>
            <td>
              <?php echo $_SESSION['nom5']; ?>
            </td>
            <td>
              <?php echo $_SESSION['prenom5']; ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php echo $_SESSION['place6']; ?>
            </td>
            <td>
              <?php echo $_SESSION['nom6']; ?>
            </td>
            <td>
              <?php echo $_SESSION['prenom6']; ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php echo $_SESSION['place7']; ?>
            </td>
            <td>
              <?php echo $_SESSION['nom7']; ?>
            </td>
            <td>
              <?php echo $_SESSION['prenom7']; ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php echo $_SESSION['place8']; ?>
            </td>
            <td>
              <?php echo $_SESSION['nom8']; ?>
            </td>
            <td>
              <?php echo $_SESSION['prenom8']; ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php echo $_SESSION['place9']; ?>
            </td>
            <td>
              <?php echo $_SESSION['nom9']; ?>
            </td>
            <td>
              <?php echo $_SESSION['prenom9']; ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php echo $_SESSION['place10']; ?>
            </td>
            <td>
              <?php echo $_SESSION['nom10']; ?>
            </td>
            <td>
              <?php echo $_SESSION['prenom10']; ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php echo $_SESSION['place11']; ?>
            </td>
            <td>
              <?php echo $_SESSION['nom11']; ?>
            </td>
            <td>
              <?php echo $_SESSION['prenom11']; ?>
            </td>
          </tr>
          <tr>
            <td>
              <?php echo $_SESSION['place12']; ?>
            </td>
            <td>
              <?php echo $_SESSION['nom12']; ?>
            </td>
            <td>
              <?php echo $_SESSION['prenom12']; ?>
            </td>
          </tr>
          <td>
            <?php echo $_SESSION['place13']; ?>
          </td>
          <td>
            <?php echo $_SESSION['nom13']; ?>
          </td>
          <td>
            <?php echo $_SESSION['prenom13']; ?>
          </td>
          </tr>
          <td>
            <?php echo $_SESSION['place14']; ?>
          </td>
          <td>
            <?php echo $_SESSION['nom14']; ?>
          </td>
          <td>
            <?php echo $_SESSION['prenom14']; ?>
          </td>
          </tr>
          <td>
            <?php echo $_SESSION['place15']; ?>
          </td>
          <td>
            <?php echo $_SESSION['nom15']; ?>
          </td>
          <td>
            <?php echo $_SESSION['prenom15']; ?>
          </td>
          </tr>


    </div>
    </tbody>
    </table>







  </header>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>