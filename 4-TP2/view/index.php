<?php
// ce document html contient un formulaire avec un champ nommé `titre` dont les données sont envoyées par la méthode `get`
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="./style.css">
<title></title>
</head>
<body>

<?php session_start();?>
<img src="../view/images/gouv.jpg" alt="gouv">
<h1>Remplissez ce formulaire afin de savoir si vous êtes imposable ou non </h1>
<div class="formulaire">
<form action="../controller/execute.php" method="get">
    <label for="nom"></label>
    <input id="nom" name="nom" type="text" placeholder="Votre Nom *" required /> <br>
	
    <label for="prenom"></label>
    <input id="prenom" name="prenom" type="text" placeholder ="Votre Prenom *" required /> <br> <br>

    <div>
    <input type="radio" id="male" name="gender" value="Homme" required>
    <label for="sexe">Homme</label>
    
  
    
    <input type="radio" id="female" name="gender" value="Femme" required>
    <label for="sexe">Femme</label> <br> <br>
    </div>
  

	
    <label for="start">Votre Date de naissance : *</label>
    <input type="date" id="start" name="dateNaiss"
       value="2023-01-23"
       min="1950-01-01" max="2023-01-23" required> <br> <br>


    <input id="submit" type="submit" value="Suis-je imposable ?" />
</form>
</div>


</body>
</html>
