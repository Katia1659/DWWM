<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="affichageSelect.css">
    <title>Document</title>
</head>
<body>
  <?php session_start() ?>
  <div class="titre">
    <h1>VOUS ETES SUR LA PAGE SELECT</h1>
    <h2>VOICI LA LISTE DES STAGIAIRES</h2>
  </div>
  <div class="body">
    <div class="form">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>PLACE</th>
          </tr>
        </thead>
        <?php for ($i=0; $i <count($_SESSION ['stagiaire']) ; $i++) {
                    echo'<tr class="">'; 
                    echo '<td>'.$_SESSION ['stagiaire'] [$i]['ID'].'</td>';
                    echo '<td>'.$_SESSION ['stagiaire'] [$i]['NOM'].'</td>';
                    echo '<td>'.$_SESSION ['stagiaire'] [$i]['PRENOM'].'</td>';
                    echo '<td>'.$_SESSION ['stagiaire'] [$i]['PLACE'].'</td>';
                    echo'</tr>';}
          ?>
      </table>
    </div>

    <form action="../view/index.php" method="get" class = "butn">
      <input type="submit" value="Retour menu" class= "">
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>