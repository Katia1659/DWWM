
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
    <title>Impôts</title>
</head>
<body class="bodyImposable">
<header>
  <nav class="navbar">
  <div class="container-fluid">
    <img src="./logo.png" alt="Logo" width="80" height="74" class="d-inline-block align-text-top">
    <a class="navbar-brand" href="./index.php">
      <h1>Service administratif des impôts</h1>
    </a>
    <img src="./icone-impots-300x300-1.jpg" alt=""width="80" height="74">
  </div>
</nav>
  </header>


    <div class="imposable">

        <?php session_start();
    
    if ($_SESSION['situation'] == true) {
        echo $_SESSION['prenom'].' '.$_SESSION['nom']. " vous êtes imposable";
    }
    else{
        echo $_SESSION['prenom'].' '.$_SESSION['nom']. " vous êtes non imposable";
    }
    ?>
    </div>

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


