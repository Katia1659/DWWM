<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <title>TP5</title>
</head>

<body>

  <div class="area"></div>
  <nav class="main-menu">
    <ul>
      <li>
        <a href="index.html">
          <i class="fa fa-home fa-2x"></i>
          <span class="nav-text">
            HOME
          </span>
        </a>

      </li>
      <li class="has-subnav">

        <a href="insert.php">
          <i class="fa fa-book fa-2x"></i>
          <span class="nav-text">
            Insertion Stagiaires
          </span>
        </a>

      </li>
      <li class="has-subnav">
        <form action="../controller/exeSelect.php" method="get">
          <a href="../controller/exeSelect.php" style="text-decoration: none;">
            <i class="fa fa-folder-open fa-2x"></i>
            <span class="nav-text">
              Afficher Liste Stagiaires
            </span>
          </a>
        </form>

      </li>
      <li class="has-subnav">
        <a href="./update.php">
          <i class="fa fa-pencil-square-o fa-2x"></i>
          <span class="nav-text">
            Mettre à jour Stagiaires
          </span>
        </a>

      </li>
      <li>
        <a href="./delete.php">
          <i class="fa  fa-trash-o fa-2x"></i>
          <span class="nav-text">
            Supprimer Stagiaires
          </span>
        </a>
      </li>

  </nav>
  <div id="container">
    <div id="page4">
      <span id="separt"> </span>
      <span id="title">
        <form enctype="multipart/form-data" action="../controller/exeDelete.php" method="get">
          <h1 id='titleInsert'> Supprimer un Stagiaires </h1>
          <div class="update">
            <label for="ID">ID Stagiaire</label>
            <input type="number" name="ID">
          </div>
          <div class="form">
            <div class="button">
              <button type="submit" value="Valider" id="btnEnvoyer"> Valider </button><br>
        </form>
      </span>
      <span class="res" id="parag">
        <?php session_start(); ?>
        <p > <?php echo $_SESSION['statDelete'] ?> </p>
      </span>
    </div>
  </div>
  <script>
    let parag = document.getElementById('parag');
    res =<?php echo json_encode($_SESSION['statDelete']); ?>;
    console.log(res);
    // consol.log(parag);
    if (res == "Deleted !" || res == "Vérifier la Liste Stagiare!" || res== "ID est un valeur numérique!"  ) {
      parag.setAttribute("class", "resv");
    } else {
      parag.setAttribute("class", "res");
    }
  </script>
</body>
</html>