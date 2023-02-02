<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style1.css">
    <title>Document</title>
</head>

<body>

    <?php session_start(); ?>

    <div class="all">
        <form action="../Controller/executeUpdate.php" method="post">

        <p>Que souhaitez vous modifier dans la base de données ?</p>

            <input type="radio" id="modif" name="modif" value="PRENOM" checked>
            <label for="femme">Prenom</label>

            <input type="radio" id="modif" name="modif" value="NOM">
            <label for="homme">Nom</label> <br><br>

            <label for="nom"></label>
            <input id="nom" name="id" type="text" placeholder="Saisissez la place" required />

            <div class="bouton">
                <p>Saisissez le nom ou le prénom que vous souhaitez modifier</p>
                <label for="nom"></label>
                <input id="nom" name="choix" type="text"  required /> <br> <br>
            </div>

            <div class="bouton">
                <p>Saisissez par quel nom/prénom vous souhaitez le remplacer</p>
                <label for="nom"></label>
                <input id="nom" name="replace" type="text"  required /> <br>
            </div>
            
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