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
    <div id="page2">
      <span id="separt"> </span>
      <span id="title">
        <form enctype="multipart/form-data" action="../controller/exeInsert.php" method="post">
          <h1 id='titleInsert'> Ajouter la liste Stagiares </h1>
          <h1> Formulaire</h1>
          <div class="form">
            <div class="button">
              <input class="form-control" type="file" name="file" id="file" style="padding: 5px;" require onclick="">
              <button type="submit" value="Valider" id="btnEnvoyer"> Valider </button><br>
            </div>
        </form>
      </span>
      <span id="parag" class="res">
        <?php session_start(); ?>
        <p id="session"> <?php echo $_SESSION['status'] ?> </p>
      </span>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <script>
    let parag = document.getElementById('parag');
    res = <?php echo json_encode($_SESSION['status']); ?>;

    // consol.log(parag);
    if (res == "Ajouter avec seccés" || res == "Echec de l'ajout !") {
      parag.setAttribute("class", "resv");
    } else {
      parag.setAttribute("class", "res");
    }

    let btn = document.getElementById('btnEnvoyer');
    let input = document.querySelector('input[type="file"]');
   
    btn.setAttribute('disabled', 'true');

    input.addEventListener("change", function() {
    if (!this.files.length) {
        btn.setAttribute("disabled", "true");
    } else {
        btn.removeAttribute("disabled");
        res = " ";
    }
  });
  </script>
</body>
</html>