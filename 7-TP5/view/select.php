<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/css/general.css">
  <title>select</title>
</head>

<body>
  <div class="fond">
    <nav class="nav">
      <form action="./index.html" method="get">
        <input class="boutonNav bouton btn btn-dark" name="insert" type="submit" value="Index" />
      </form>
      
    </nav>
    <h1 class="text-light">Liste des stagiaires</h1>
    <table class="tableau">

      <thead>

        <tr>
          <th class="th">ID</th>
          <th class="th">NOM</th>
          <th class="th">PRENOM</th>
          <th class="th">PLACE</th>
        </tr>

      </thead>
      <tbody>
        <?php
          session_start();
          for ($i=0; $i < count($_SESSION['listStag']); $i++) { 
            echo'<tr class="th">'; 
            echo '<td class="th">'.$_SESSION ['listStag'] [$i]['ID'].'</td>';
            echo '<td class="th">'.$_SESSION ['listStag'] [$i]['NOM'].'</td>';
            echo '<td class="th">'.$_SESSION ['listStag'] [$i]['PRENOM'].'</td>';
            echo '<td class="th">'.$_SESSION ['listStag'] [$i]['PLACE'].'</td>';
            echo '</tr>';
          }
        ?>
      </tbody>

    </table>
  </div>
</body>

</html>