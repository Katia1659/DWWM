<?php
// ce document html contient un formulaire avec un champ nommé `titre` dont les données sont envoyées par la méthode `get`
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="../style.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<title>TP2</title>
</head>
<body>
<?php session_start();?>

<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Impots.gouv.fr</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Toutes vos Infos</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Espace personelle</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">vos impots</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              alocations
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item" href="#">Aide au logements</a></li>
              <li><a class="dropdown-item" href="#">Caf</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Plus d'infos</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
          <button class="btn btn-success" type="submit">Recherche</button>
        </form>
      </div>
    </div>
  </div>
</nav>

<img class="logoImpot"
     src="../view/asset/capture.PNG"
     alt="impotLogo">


<div class="containeurUn">
  <div class="containeurDeux">
    <form action="../contoller/execute.php" method="get">
      <label for="nom"></label>
      <input placeholder="Nom" class="boutonNom" name="Nom" type="text" required/><br>

      <label for="Prénom"></label>
      <input placeholder="Prénom" class="boutonPrenom" name="Prénom" type="text" required/><br>
      
      <legend class="legend" >Selectionnez votre sexe:</legend>

    <div class="radio">
      <input type="radio"  name="gender" value="Homme" required>
      <label for="Homme">Homme</label>

      <input type="radio"  name="gender" value="Femme" required>
      <label for="Femme">Femme</label>
    </div>
      <input class="date" type="date" id="date" name="date"
       value="2023-01-23"
       min="1960-01-01" max="203-01-32" required>
       <div class="boutonSend">
        <input class="btn btn-primary" type="submit" value="verifier si vous etes imposable" />
       </div>
      
    </form>

  </div>

</div>
</form>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
