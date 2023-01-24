<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">    
    <title>Postes</title>
    <link rel="stylesheet" href="css/affichage.css">
    <style>
        
    </style>
</head>
<body>
<form action="../controller/executeRand.php" method="get">
    <input type="submit" value="Alea Jacta Est" />
</form>
<form action="../controller/executePlaces.php" method="get">
    <input type="submit" value="SOL INVICTUS" />
</form>
    <div class="display salle">
    <?php session_start();?>
    
        <div class= "table">
            <div>
            <!-- place_1 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_1'];?></div>
       
            <!-- place_2 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_2'];?></div>
            </div>
            <div>
            <!-- place_3 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_3'];?></div>
        
        
            <!-- place_4 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_4'];?></div>
            </div>
        </div>
        <div class= "bas">
        <div id="table2" class="table" >
            <div >
            <!-- place_5 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_5'];?></div>
        
            <!-- place_6 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_6'];?></div>
            </div>
            <div>
            <!-- place_7 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_7'];?></div>
        
            <!-- place_8 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_8'];?></div>
            </div>
        </div>
        
        <div class="table">
            <div>
            <!-- place_9 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_9'];?></div>
        
            <!-- place_10 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_10'];?></div>
            </div>
            <div>
            <!-- place_11 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_11'];?></div>
        
            <!-- place_12 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_12'];?></div>
            </div>
        </div>
        </div>
        <div class= "table">
            <div>
            <!-- place_13 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_13'];?></div>
        
            <!-- place_14 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_14'];?></div>
            </div>
            <div>
            <!-- place_15 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_15'];?></div>
        
            <!-- place_16 -->
            <div class="poste"><?php echo $_SESSION['$listPlaceStag']['place_16'];?></div>
            </div>
        </div>
    </div>

    
</body>
</html>