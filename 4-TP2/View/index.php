<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impôts</title>
    <link rel='icon' href="argent.webp">
</head>
<body>
    <header>
        <div id="hed">
            <center><h1>Êtes-vous imposable ? </center></h1>
        </div>
        
    </header>
    <fieldset>
        <form action="../Controller/execute.php" method="get">
        <div id="contneur">
        <div id="info">
        <h2>
          Veuillez remplir le formulaire :
        </h2>
        <p>* Champs obilgatoire!</p>
        <label for="name"> Nom : </label>
        <input type="text" id="nom"  placeholder="Nom" name= "nom"><br><br>

        <label for="name"> Prénom : </label>
        <input type="text" id="prenom"  placeholder="Prénom" name= "prenom"><br><br>

        <label for="date_naissance"> Date de naissance : </label>
        <input type="date" name="date_naissance" id="date_naissance" required><br><br>

        
        <input id="Homme" name="gender" type="radio" value="H" required>
        <label for="gender">Homme</label>
        <input id="Femme" name="gender" type="radio" value="F" required>
        <label for="gender">Femme</label>
        </span><br><br>
        
        <button id="submit" onclick="Result ()">Voir le résultat</button>
        </div>
        </div>
        </form>
        
          
    </fieldset>
</body>
</html>