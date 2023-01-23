<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="fond">
    <?php session_start();?>

    <h1>Placement des stagiaires ! </h1>
    <form action="../controller/executefunctions.php" method="get" class = "btn">
        <input type="submit" value="LE MONARQUE" class= "butn">
    </form>
    <div class="conteneur">   
        <table class="tableau">   

            <tr>
                <th>Place</th>
                <th>Nom Stagiaire</th>
            </tr>
            <!-- 1 -->
	
            <tr>
                <td>Place_1 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_1'];?></td>
            </tr>
            <!-- 2 -->
            <tr>
                <td>Place_2 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_2'];?></td>
            </tr>
            <!-- 3 -->
            <tr>
                <td>Place_3 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_3'];?></td>
            </tr>
            <!-- 4 -->
            <tr>
                <td>Place_4 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_4'];?></td>
            </tr>
        </table>
        <table class="tableau2">
            <tr>
                <th>Place</th>
                <th>Nom Stagiaire</th>
            </tr>
            <!-- 5 -->
            <tr>
                <td>Place_5 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_5'];?></td>
            </tr>
            <!-- 6 -->
            <tr>
                <td>Place_6 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_6'];?></td>
            </tr>
            <!-- 7 -->
            <tr>
                <td>Place_7 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_7'];?></td>
            </tr>
            <!-- 8 -->
            <tr>
                <td>Place_8 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_8'];?></td>
            </tr>
        </table>
        <table class="tableau3">
            <tr>
                <th>Place</th>
                <th>Nom Stagiaire</th>
            </tr>    
            <!-- 9 -->
            <tr>
                <td>Place_9 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_9'];?></td>
            </tr>
            <!-- 10 -->
            <tr>
                <td>Place_10 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_10'];?></td>
            </tr>
            <!-- 11 -->
            <tr>
                <td>Place_11 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_11'];?></td>
            </tr>
            <!-- 12 -->
            <tr>
                <td>Place_12 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_12'];?></td>
            </tr>
        </table> 
        <table class="tableau4">
            <tr>
                <th>Place</th>
                <th>Nom Stagiaire</th>
            </tr>       
            <!-- 13 -->
            <tr>
                <td>Place_13 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_13'];?></td>
            </tr>
            <!-- 14 -->
            <tr>
                <td>Place_14 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_14'];?></td>
            </tr>
            <!-- 15 -->
            <tr>
                <td>Place_15 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_15'];?></td>
            </tr>
            <!-- 16 -->
            <tr>
                <td>Place_16 : </td>
                <td><?php echo $_SESSION ['listPlaceStag']['Place_16'];?></td>

            </tr>
        </table>       
    </div>
</body>
</html>

