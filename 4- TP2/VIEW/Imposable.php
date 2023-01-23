<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Imposable</title>
</head>

<body>
  <?php session_start() ?>
  <div id="contneur">
    <p id="ph2" class="vis">
      <?php
      echo " Mme, Mr." . $_SESSION['nom'] . ", " . $_SESSION['prenom'] . ".";
      ?><br>
      Vous êtes IMPOSABLE.
    </p><br>
    <div id="mag">
        <img id="img" src="impo.gif" alt="tax">
  </div>
  </div>
 

</body>

</html>