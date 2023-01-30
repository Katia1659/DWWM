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
                        <a class="btn btn-outline-light btn-lg" href="./select.php" role="button">Regarder</a>
                        <a class="btn btn-outline-light btn-lg" href="./update.php" role="button">Modifier</a>
                        <a class="btn btn-outline-light btn-lg" href="./delete.php" role="button">Supprimer</a>
                        <h4 class="mb-3" style="margin-top: 10px;">Regarder</h4>
                    </div>
                </div>
                
            </div>
            
            
         
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Place</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>$_SESSION['nomPlace_1']</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
    </div>
  </tbody>
</table>







    </header>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>