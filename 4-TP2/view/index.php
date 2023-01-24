<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
    <title>Index TP2</title>
</head>
<body>
  <header>
  <nav class="navbar">
  <div class="container-fluid">
    <img src="./logo.png" alt="Logo" width="80" height="74" class="d-inline-block align-text-top">
    <a class="navbar-brand" href="#">
      <h1>Service administratif des impôts</h1>
    </a>
    <img src="./icone-impots-300x300-1.jpg" alt=""width="80" height="74">
  </div>
</nav>
  </header>
  <main>
    <h1 class="titre" >Formulaire de vérification d'imposition</h1>

    <div class="formulaire">
    <form action="../controller\execute.php" method="get">
      <label for="nom"><h3>Nom</h3></label>
      <input name="nom" type="text" placeholder="Entre votre nom" required/>
      <br>
      <label for="prenom"><h3>Prenom</h3></label>
      <input name="prenom" type="text" placeholder="Entre votre prenom"required/>
      <br>
      <label for="start"><h3>Date de naissance</h3></label>
      
      <input type="date" id="start" name="date"
      value="1997-05-24"
      min="1900-01-01" max="2023-12-31" required>
      <br>

      <h3>Sexe</h3>
      <fieldset>
        <legend></legend>
        <div class="radio">
        <div>
          <input type="radio" id="huey" name="gender" value="Male" required>
          <label for="Homme">Homme</label>
        </div>
        
        <div class="radio">
          <input type="radio" id="dewey" name="gender" value="Female" required>
          <label for="Femme">Femme</label>
        </div>
        </div>
      </fieldset>
      <br>
      <input type="submit" value="Envoyer" />
    </form>
  </div>
  </main>
    <footer>
    <nav class="navbar2  bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h1 class="bottom">Contactez nous</h1></a>
  </div>
</nav>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
  </html>