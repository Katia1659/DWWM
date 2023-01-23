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
                <td>1</td>
                <td><?php echo $_SESSION ['listPlaceStag']['1'];?></td>
            </tr>
            <!-- 2 -->
            <tr>
                <td>2</td>
                <td><?php echo $_SESSION ['listPlaceStag']['2'];?></td>
            </tr>
            <!-- 3 -->
            <tr>
                <td>3</td>
                <td><?php echo $_SESSION ['listPlaceStag']['3'];?></td>
            </tr>
            <!-- 4 -->
            <tr>
                <td>4</td>
                <td><?php echo $_SESSION ['listPlaceStag']['4'];?></td>
            </tr>
        </table>
        <table class="tableau2">
            <tr>
                <th>Place</th>
                <th>Nom Stagiaire</th>
            </tr>
            <!-- 5 -->
            <tr>
                <td>5</td>
                <td><?php echo $_SESSION ['listPlaceStag']['5'];?></td>
            </tr>
            <!-- 6 -->
            <tr>
                <td>6</td>
                <td><?php echo $_SESSION ['listPlaceStag']['6'];?></td>
            </tr>
            <!-- 7 -->
            <tr>
                <td>7</td>
                <td><?php echo $_SESSION ['listPlaceStag']['7'];?></td>
            </tr>
            <!-- 8 -->
            <tr>
                <td>8</td>
                <td><?php echo $_SESSION ['listPlaceStag']['8'];?></td>
            </tr>
        </table>
        <table class="tableau3">
            <tr>
                <th>Place</th>
                <th>Nom Stagiaire</th>
            </tr>    
            <!-- 9 -->
            <tr>
                <td>9</td>
                <td><?php echo $_SESSION ['listPlaceStag']['9'];?></td>
            </tr>
            <!-- 10 -->
            <tr>
                <td>10</td>
                <td><?php echo $_SESSION ['listPlaceStag']['10'];?></td>
            </tr>
            <!-- 11 -->
            <tr>
                <td>11</td>
                <td><?php echo $_SESSION ['listPlaceStag']['11'];?></td>
            </tr>
            <!-- 12 -->
            <tr>
                <td>12</td>
                <td><?php echo $_SESSION ['listPlaceStag']['12'];?></td>
            </tr>
        </table> 
        <table class="tableau4">
            <tr>
                <th>Place</th>
                <th>Nom Stagiaire</th>
            </tr>       
            <!-- 13 -->
            <tr>
                <td>13</td>
                <td><?php echo $_SESSION ['listPlaceStag']['13'];?></td>
            </tr>
            <!-- 14 -->
            <tr>
                <td>14</td>
                <td><?php echo $_SESSION ['listPlaceStag']['14'];?></td>
            </tr>
            <!-- 15 -->
            <tr>
                <td>15</td>
                <td><?php echo $_SESSION ['listPlaceStag']['15'];?></td>
            </tr>
            <!-- 16 -->
            <tr>
                <td>16</td>
                <td><?php echo $_SESSION ['listPlaceStag']['16'];?></td>

            </tr>
        </table>       
    </div>
</body>
</html>

