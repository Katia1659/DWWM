<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>acceuil</title>
</head>
<?php session_start(); ?>
    <div class="containeurUn">
        <div>
            <div class="containeurDeux">
                <img class="img" src="../view/assets/above.png" >
            </div>
        </div>
        <div>
            <div class="containeurDeux">
                <img class="img" src="../view/assets/selection.png" >
            </div>
        </div>
        <div>
            <div class="containeurDeux"> 
                <img class="img" src="../view/assets/update.png" >
            </div>
        </div>
        <div>
            <div class="containeurDeux">
                <img class="img" src="../view/assets/delete.png" >
            </div>
        </div>
    </div>

    
    <div class="containeurTrois">
        <div>
            <form enctype="multipart/form-data" action="../view/insert.php" method="post">
                <input class="btn btn-secondary" class="submit" name="submit" type="submit" value="insert" require />
            </form>
        </div>
        <div>
            <div class="containeurDeux">
                <form enctype="multipart/form-data" action="../controller/execute2.php" method="post">
                <input class="btn btn-secondary" class="submit" name="submit" type="submit" value="select" require />
                </form>
            </div>
        </div>
        <div>
            <div class="containeurDeux"> 
            <form enctype="multipart/form-data" action="../view/index.php" method="post">
                <input class="btn btn-secondary" class="submit" name="submit" type="submit" value="index" require />
                </form>
            </div>
        </div>
        <div>
            <div class="containeurDeux"> 
            <form enctype="multipart/form-data" action="../controller/execute4.php" method="post">
                <input class="btn btn-secondary" class="submit" name="submit" type="submit" value="delete" require />
                </form>
            </div>
        </div>
    </div>
    
<div class="containeurTableau">
    
        <table  class="table table-dark table-hover"  >
        <tr>
        <th>PLACE</th>
        <th>NOM</th>
        <th>PRENOM</th>
    </tr>

    <?php for ($i = 0; $i < count($_SESSION["donneesStag"]); $i++) { ?>


<tr>
<td><?php echo $_SESSION['donneesStag'][$i]['PLACE'] ?></td>
    <td><?php echo $_SESSION['donneesStag'][$i]['PRENOM'] ?></td>
    <td><?php echo $_SESSION['donneesStag'][$i]['NOM'] ?></td>
</tr>

<?php   } ?>
        </table>
    </div>
</div>

<div class="containeurFormulaire">
        <form action="../controller/execute3.php" method="post" class="form-example">
            <div class="form-example">
                <label for="name"></label>
                <input class="form-form-control form-control-lg" type="text" name="place" id="name" placeholder="Place:" required>
            
                <label for="name"></label>
                <input class="form-form-control form-control-lg" type="text" name="nom" id="name" placeholder="Prenom:" required>
            
                <label for="name"></label>
                <input class="form-form-control form-control-lg" type="text" name="prenom" id="name" placeholder="Nom:" required>
            </div>
            <div class="formulaireButton">
                <input class="btn btn-secondary" class="submit" name="submit" type="submit" value="update" require />
                </form>
            
      
</div>
     


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
















   


  
