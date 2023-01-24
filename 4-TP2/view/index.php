<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>impot</title>
</head>
<body class="body">
  <h1>BIENVENU SUR LE SITE DES IMPOTS ! </h1>
    <form action="../controller/execute.php" method="get" class="form">
        <div class="nom">
          <label for="nom">ENTREZ VOTRE NOM : </label>
          <input name="nom" type="text"/>
        </div>
        <br>
        
        <div class="prenom">
          <label for="prenom">ENTREZ VOTRE PRENOM : </label>
          <input name="prenom" type="text"/>
        </div>
        <br>

        <div class="date">
          <label for="start">DATE DE NAISSANCE : </label>
          <input type="date" id="date_naiss" name="date_naiss"
          value="2023-01-23"
          min="1920-01-01" max="2023-01-23" >
        </div>
        <br>
        
        <fieldset class = "sexe">
          <legend>SEXE : </legend>
        
          <div>
            <input type="radio" id="femme" name="sexe" value="femme">
            <label for="femme">femme</label>
          </div>
          <br>
          <div>
            <input type="radio" id="homme" name="sexe" value="homme">
            <label for="homme">homme</label>
          </div>
        </fieldset>
        <br>
        <br>
        <div class="bouton">
        <input type="submit" value="VOUS FAIRE DOUILLER">
        </div>
    </form>



</body>
</html>