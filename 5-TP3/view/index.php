<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<!-- Bouton pour accéder à affichage.php -->

<div class="container">
 <div class="formulaire">   
    <form enctype="multipart/form-data" action="../controller/executeFunctions.php" method="post">
     <input class="file" name="file" type="file" /> 
    <div class="button">
      <input class="submit" name="submit" type="submit" value="valider" />
    </form>
  </div>
</body>
</html>
