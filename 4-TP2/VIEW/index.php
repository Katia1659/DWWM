<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Impots</title>
</head>

<body>
  <h1> Situation Fiscale </h1>
  <form action="../CONTROLLER/execute.php" method="get">
    <div id="contneur">
      <fieldset>
        <div id="info">
          <p>* champs obligatoire.</p>
          <label for="name"> Nom de Famille: </label><br />
          <input type="text" name="nom" id="nom" placeholder="Nom"><br />
          <label for="name"> Prénom : </label><br />
          <input type="text" name="prenom" id="prenom" placeholder="Prénom"><br />
          <label for="age">Date de Naissance *:</label><br />
          <input type="date" name="dateNaissance" id="age" min="1930-01-31" max="2022-12-31" required><br />
          <label for="gender" id="sex">Homme*</label>
          <input type="radio" id="homme" name="gender" value="M" required>
          <label for="gender" id="sex">Femme*</label>
          <input type="radio" id="femme" name="gender" value="F" required><br />
          <button id="submit">valider</button>
        </div>
  </form>

  <div id="txt">
    <p id="ph1" class="vis">
      << Veuillez remplire toutes les champs avec vos informations correctement!>>
    </p>
  </div>
  </fieldset>
  <div id="mag">
    <img id="img" src="impo_ou_pas.gif" alt="tax">
  </div>
  </div>
</body>

</html>