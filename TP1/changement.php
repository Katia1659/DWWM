<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="styleDeux.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>
    <form action="../controller/execute2.php" method="get"></form>
    <input type="submit" value="Aller a la page pour changer les placement" />

    <div class="tableUne">

    </div>

    <div class="tableDeux">
  
    </div>

    <div class="tableTrois">

    </div>

    <div class="tableQuatre">

    </div>

    <table class="table caption-top">
  <caption class="emplacement" >Placement des stagiaire !</caption>
  <thead>
    <tr>
      <th scope="col">Place stagiaire</th>
      <th scope="col">Nom stagiaire</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Place_1</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_1'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_2</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_2'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_3</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_3'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_4</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_4'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_5</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_5'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_6</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_6'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_7</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_7'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_8</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_8'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_9</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_9'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_10</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_10'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_11</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_11'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_12</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_12'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_13</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_13'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_14</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_14'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_15</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_15'];?></td>
    </tr>
    <tr>
      <th scope="row">Place_16</th>
      <td><?php echo $_SESSION['$listStagPlace']['place_16'];?></td>
    </tr>
  </tbody>
</table>
    


</body>
</html>