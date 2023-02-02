<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/css/general.css">
</head>
<body>

<!-- header -->
<nav class="nav">


      <form action="./index.html" method="get">
        <input class="boutonNav bouton btn btn-dark" name="insert" type="submit" value="Index" />
      </form>
      

    </nav>


<!-- formulaire pour update la bdd -->
<div class="formulaire">
<table>
<form action="../controller/executeUpdate.php" method="get">
<fieldset class="formulaireRadio">
    <legend>Quel est la colonne à modifier</legend>

    <div>
      <input type="radio" name="colonne" value="NOM"
             checked>
      <label for="NOM">NOM</label>
    </div>

    <div>
      <input type="radio"  name="colonne" value="PRENOM">
      <label for="PRENOM">PRENOM</label>
    </div>

    <!-- partie pour changer les places -->
    <!-- <div>
      <input type="radio"  name="colonne" value="PLACE">
      <label for="PLACE">PLACE</label>
    </div> -->
    
</fieldset>

    <label for="id" class="label">L'ID à modifier?<br></label>
        <input id="idUpdate" class="form-control" name="id" type="number" placeholder="42" >
    <br><br>
    <label for="change" class="label">Quelle entrée pour la bdd?<br></label>
      <input class="form-control" name="change" type="text" placeholder="exemple: George Abidbol " >
        
        <br><br>
    <input id="submitUpdate" class="bouton btn btn-dark" type="submit" value="Envoyer ma demande"> 
</form>


</table>
</div>


<!-- tableau de la bdd -->
<article>
<h1 class="text-light">Liste des stagiaires</h1>
    <table class="tableau">

      <thead>

        <tr>
          <th class="th">ID</th>
          <th class="th">NOM</th>
          <th class="th">PRENOM</th>
          <th class="th">PLACE</th>
        </tr>

      </thead>
      <tbody>
        <?php
          session_start();
          for ($i=0; $i < count($_SESSION['listStag']); $i++) { 
            echo'<tr class="th">'; 
            echo '<td class="th">'.$_SESSION ['listStag'] [$i]['ID'].'</td>';
            echo '<td class="th">'.$_SESSION ['listStag'] [$i]['NOM'].'</td>';
            echo '<td class="th">'.$_SESSION ['listStag'] [$i]['PRENOM'].'</td>';
            echo '<td class="th">'.$_SESSION ['listStag'] [$i]['PLACE'].'</td>';
            echo '</tr>';
          }
        ?>
      </tbody>
</article>
</body>
</html>