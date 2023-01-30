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
<div class="btnnb">
<a class="centre" href="../View/index.html">
                
                <button class="buttonrtr">Retourner a l'index</button>
                </a>
</div>

    <div>
        <h1>Gestion de BDD stagiaires</h1>
    </div>
    <div class="btnnb">
    </div>
</header>
<body>
<form action="../Controller/executeSelect.php" method="get"></form>
<?php
session_start();

?>  
<div class="marge">

    <table class="table">
        
        <tr>
            <th class="bord2">ID</th>
            <th class="bord2">NOM</th>
            <th class="bord2">PRENOM</th>
            <th class="bord2">PLACE</th>
        </tr>
        
        <tr>
        <?php
        
        print_r($_SESSION);
        // for ($i=0; $i < 16; $i++) { 

        //     echo $_SESSION['stag']['ID'];
        // } ?>
        //         <td class="bord"><?php echo $_SESSION($row['ID']); ?></td>
        //         <td class="bord"><?php echo htmlspecialchars($row['NOM']); ?></td>
        //         <td class="bord"><?php echo htmlspecialchars($row['PRENOM']); ?></td>
        //         <td class="bord"><?php echo htmlspecialchars($row['PLACE']); ?></td>
            </tr>
            
            
        </table>
    </div>
        
    
</body>
</html>