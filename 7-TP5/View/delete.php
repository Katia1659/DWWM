<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styleDelete.css">
    <title>Delete</title>
</head>
<body>
    <?php session_start();
    ?>  
    <div class="body">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-sucesss">
            <div class="container-fluid">
              <a class="navbar-brand" href="./index.html"><img src="./palmier.png" alt="" class="logo"> <h3 class="navbarAccueil"> Accueil</h3></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="./insert.php">Insert</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./select.php">Select</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./update.php">Update</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link" href="./delete.php">Delete</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
<table>
  <th>

    <p>NOM</p>
  </th>
  
  
  
  
  
  <th>
    <p>PRENOM</p>
  </th>
  
  
  
  <th>
    <p>PLACE</p>
  </th>
  <form action="../controller\executeDelete2.php" method="post">
  
  <!-- N°1-->
  <?php for ($i=0; $i <count($_SESSION['STAG']) ; $i++) { ?>

<tr>
  <td>  <?php echo $_SESSION['STAG'][$i]['NOM'] ?> </td>
  <td>  <?php echo $_SESSION['STAG'][$i]['PRENOM'] ?> </td> 
  <td>  <?php echo $_SESSION['STAG'][$i]['PLACE'] ?> </td> 
  <td>  <input type="checkbox" name= "id[]" value="<?php echo $_SESSION['STAG'][$i]['ID'] ?>"></td>  
</tr>
<?php } ?>

  


  <td></td>
    <td></td> 
    <td></td>
    <td><button class="btn btn-success"type="submit">Supprimer la selection</button></td>
</form>

</table>

    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>