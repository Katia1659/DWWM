<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<?php session_start();?>

<form action="../controller/execute3.php" method="get">
    <input class="bouton" type="submit" value="retour a l'index"/>
</form>

  <form action="../controller/executeFonc.php" method="get">
  <input class="changement" type="submit" value="faire le changement des places" />
  </form>

  <div class="parent">
<div class="div1">
<tr>
      <th scope="row">Place_1</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_1'];?></td><br>
    </tr>
    <tr>
      <th scope="row">Place_2</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_2'];?></td><br>
    </tr>
    <tr>
      <th scope="row">Place_3</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_3'];?></td><br>
    </tr>
    <tr>
      <th scope="row">Place_4</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_4'];?></td><br>
    </tr> 
  </div>
<div class="div2"> 
<tr>
      <th scope="row">Place_5</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_5'];?></td><br>
    </tr>
    <tr>
      <th scope="row">Place_6</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_6'];?></td><br>
    </tr>
    <tr>
      <th scope="row">Place_7</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_7'];?></td><br>
    </tr>
    <tr>
      <th scope="row">Place_8</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_8'];?></td><br>
    </tr>
    
</div>
<div class="div3">
<tr>
      <th scope="row">Place_9</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_9'];?></td><br>
    </tr>
<tr>
      <th scope="row">Place_10</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_10'];?></td><br>
    </tr>
    <tr>
      <th scope="row">Place_11</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_11'];?></td><br>
    </tr>
    <tr>
      <th scope="row">Place_12</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_12'];?></td><br>
    </tr>
   
</div>
<div class="div4">
<tr>
      <th scope="row">Place_13</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_13'];?></td><br>
    </tr>
<tr>
      <th scope="row">Place_14</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_14'];?></td><br>
    </tr>
    <tr>
      <th scope="row">Place_15</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_15'];?></td><br>
    </tr>
    <tr>
      <th scope="row">Place_16</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_16'];?></td>
    </tr>   
</div>
<div class="div5"> <h3>Monarque supreme <h3></div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>