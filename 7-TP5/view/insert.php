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
<body>
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
            <form enctype="multipart/form-data" action="../view/index.php" method="post">
                <input class="btn btn-secondary" class="submit" name="submit" type="submit" value="index" require />
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
            <form enctype="multipart/form-data" action="../controller/execute3.php" method="post">
                <input class="btn btn-secondary" class="submit" name="submit" type="submit" value="update" require />
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
        </div>
    </div>

    <div class="containerButton">
        <div class="formulaire">   
            <form enctype="multipart/form-data" action="../Controller/execute1.php" method="post">
                <input  class="file" name="file" type="file" /> <br>
        
                <input class="submit" name="submit" type="submit" value="valider" require />
            </form>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>