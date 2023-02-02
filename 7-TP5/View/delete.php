<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style2.css">
    <title>Document</title>
</head>

<body>

    <?php session_start() ?>
    <div class="all">
        <form action="../Controller/executeDelete.php" method="post">

            <label for="nom"></label>
            <input id="nom" name="place" type="text" placeholder="Saisissez la place" required />


            <form enctype="multipart/form-data" action="../Controller/executeDelete.php" method="post">
                <input type="submit" value="Envoyer" />
            </form>
    </div>

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