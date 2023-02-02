<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style4.css">
    <title>Document</title>
</head>
<body>
    
<?php session_start();?>

<table>

  <tr>
    <th><strong>Prenom </strong></th>
    <th><strong>Nom</strong></th>
    <th><strong>Place</strong></th> <br>
  </tr>
<?php  for ($i = 0; $i < count($_SESSION["donneesStag"]); $i++)  {?>


  <tr>
    <td><?php  echo $_SESSION['donneesStag'][$i]['PRENOM']?></td>
    <td><?php  echo $_SESSION['donneesStag'][$i]['NOM']?></td>
    <td><?php  echo $_SESSION['donneesStag'][$i]['PLACE']?></td><br>
  </tr>

  <?php   } ?>

</table>


</body>
</html>