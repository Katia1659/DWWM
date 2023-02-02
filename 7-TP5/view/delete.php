<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/css/general.css">
</head>
<body>

<!-- hedaer -->
<nav class="nav">


      <form action="./index.html" method="get">
        <input class="boutonNav bouton btn btn-dark" name="insert" type="submit" value="Index" />
      </form>
      

    </nav>

<table>

<!-- formulaire pour delete dans la bdd -->
<div class="formulaire">
<form action="../controller/executeDelete.php" method="get">

    <label for="id" id="idDelete">Quel est l'id à supprimer?<br></label>
        <input  name="id" class="form-control" type="number" placeholder="75" >
    
    
    <input type="submit" id="submitDelete" class=" btn btn-dark" value="Envoyer ma demande"> 
</form>
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


</table>
</body>
</html>