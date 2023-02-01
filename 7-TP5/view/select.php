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
    <div id="page3">
      <span id="separt"> </span>
      <h1>Tableaux Stagiaires Enregistrés</h1>
      <span id="tab">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">NOM</th>
              <th scope="col">PRENOM</th>
              <th scope="col">PLACE</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <?php
            session_start();
            foreach ($_SESSION['listStag'] as $key => $value) {
              echo "
             <tr>"."\n".
              "<th scope=\"row\">". $value['ID'] ."</th>"."\n".
              "<td>".$value['NOM']."</td>"."\n".
              "<td>".$value['PRENOM']."</td>"."\n".
              "<td>".$value['PLACE']."</td>"."\n".
            "</tr>"."\n";
            }          
            ?>
           
          </tbody>
        </table>
      </span>
    </div>
  </div>
 



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
 
</body>

</html>