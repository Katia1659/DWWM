<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="asset/css/index.php">
</head>
<body>
<table>
<form action="../controller/execute.php" method="get">
    <label for="nom">Votre nom<br></label>
        <input name="nom" type="text" placeholder="nom de famille" >
    <br><br>
    <label for="prenom">Votre prénom<br></label>
        <input name="prenom" type="text" placeholder="prénom" >
    <br><br>
    <label for="age">Votre dâte de naissance <br></label>
        <input name="age" type="date" >
    <br><br>
    
    <fieldset>
    <legend>Quel est votre sexe?</legend>

    <div>
      <input type="radio" name="sexe" value="homme"
             checked>
      <label for="homme">Homme</label>
    </div>

    <div>
      <input type="radio"  name="sexe" value="femme">
      <label for="femme">Femme</label>
    </div>
    
</fieldset>


    <br><br>
    <input type="submit" value="Envoyer ma demande"> 
</form>


</table>
</body>
</html>

