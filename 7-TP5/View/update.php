<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
<div class="block">
    <form action="../Controller/executeUpdate.php" method="post">

    <label for="nom"><strong>id</strong></label>
    <input name="id" type="text" placeholder="ID ?" />
    </br>

    <input type="radio" id="modif" name="modif" value="PRENOM" checked>
            <label for="femme">Prenom</label>

            <input type="radio" id="modif" name="modif" value="NOM">
            <label for="homme">Nom</label> <br><br>

    <label for="newNom"><strong>Ancien nom/prenom</strong></label>
    <input name="ancienNom" type="text" placeholder="Nouveau nom ?" />
    </br>	


    <!-- <label for="prenom"><strong>prenom</strong></label>
    <input name="prenom" type="text" placeholder="Prénom à changer ?"/>
    </br> -->
    
    <label for="newPrenom"><strong>Nouveau nom/prenom</strong></label>
    <input name="newNom" type="text" placeholder="Nouveau prénom ?" />
    </br>	

  <!-- <span> <input class="button" type="submit" value="envoyer" /></span> -->
  <button class="button" style="vertical-align:middle"><span>ENVOYER </span></button>
</form>

<a href="index.php" class="home"><img src="Image/home.png" id="logo"></a>
</div>
</body>
</html>