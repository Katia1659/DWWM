<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Page d'acceuil</title>
</head>
<header>
    <h1>Gestion de BDD stagiaires</h1>
</header>
<body>
<?php
  $host = 'localhost';
  $dbname = 'DWWM_2023';
  $username = 'root';
  $password = '';
    
  $dsn = "mysql:host=$host;dbname=$dbname"; 
  // récupérer tous les utilisateurs
  $sql = "SELECT * FROM stagiaire";
   
  try{
   $pdo = new PDO($dsn, $username, $password);
   $stmt = $pdo->query($sql);
   
   if($stmt === false){
    die("Erreur");
   }
   
  }catch (PDOException $e){
    echo $e->getMessage();
  }

?>  
<div class="marge">

    <table class="table">
        
        <tr>
            <th class="bord2">ID</th>
            <th class="bord2">NOM</th>
            <th class="bord2">PRENOM</th>
            <th class="bord2">PLACE</th>
        </tr>
        
        <?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
                <td class="bord"><?php echo htmlspecialchars($row['ID']); ?></td>
                <td class="bord"><?php echo htmlspecialchars($row['NOM']); ?></td>
                <td class="bord"><?php echo htmlspecialchars($row['PRENOM']); ?></td>
                <td class="bord"><?php echo htmlspecialchars($row['PLACE']); ?></td>
            </tr>
            <?php endwhile; ?>
            
        </table>
    </div>
        
       <div>
       <a class="centre" href="../View/index.html">
                
                <button class="buttonrtr">Retourner a l'index</button>
                </a>
<form action="executeUpdate.php" method="get"></form>
<input type="text" name="ID" id="ID" value="ID">
       </div>
</body>
</html>