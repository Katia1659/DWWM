<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    
        <?php session_start();?>


<div class ="tableau" >
        <!-- Place_1 -->
    <div class="table1et2">
        <div class ="table1" >
            <div class="moitie">
            <tr class="impair">
                <td class="impair">Place_1</td>
                <td class="impair"><?php echo $_SESSION['$listStagPlaces']['Place_1'];?></td> <br>
            </tr>




        <!-- Place_2 -->
    
            <tr>
                <td>Place_2</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_2'];?></td><br>
            </tr>
        </div>
        <div class="moitie">
        <!-- Place_3 -->
            <tr >
                <td>Place_3</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_3'];?></td><br>
            </tr>



        <!-- Place_4 -->
            <tr>
                <td>Place_4</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_4'];?></td><br>
            </tr>
            </div>
        </div> 
    </div>



        <!-- Place_5 -->
    <div class="table2">
        <div class="moitie">
            <tr>
                <td>Place_5</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_5'];?></td><br>
            </tr>

        

        <!-- Place_6 -->
            <tr>
                <td>Place_6</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_6'];?></td><br>
            </tr>
        </div>



        <!-- Place_7 -->
        <div class="moitie">
            <tr>
                <td>Place_7</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_7'];?></td><br>
            </tr>



        <!-- Place_8 -->
            <tr>
                <td>Place_8</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_8'];?></td><br>
            </tr>
        </div>
    </div> 






        <!-- Place_9 -->
    <div class="table3">
        <div class="moitie">
            <tr>
                <td>Place_9</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_9'];?></td><br>
            </tr>


        <!-- Place_10 -->
            <tr>
                <td>Place_10</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_10'];?></td><br>
            </tr>
        </div>



        <!-- Place_11 -->
        <div class="moitie">
            <tr>
                <td>Place_11</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_11'];?></td><br>
            </tr>



        <!-- Place_12 -->
            <tr>
                <td>Place_12</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_12'];?></td><br>
            </tr>    
        </div>
    </div> 



        <!-- Place_13 -->
    <div class="table4">
        <div class="moitie">
            <tr>
                <td>Place_13</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_13'];?></td><br>
            </tr>



        <!-- Place_14 -->
            <tr>
                <td>Place_14</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_14'];?></td><br>
            </tr>
        </div>


        <!-- Place_15 -->
        <div class="moitie">
            <tr>
                <td>Place_15</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_15'];?></td><br>
            </tr>



        <!-- Place_16 -->
            <tr>
                <td>Place_16</td>
                <td><?php echo $_SESSION['$listStagPlaces']['Place_16'];?></td><br>
            </tr>
        </div>
    </div>
</div>

    
<div class="bouton">
<form enctype="multipart/form-data" action="../Controller/executeFunctions2.php" method="post">
    <input type="submit" value="Je décide des places. Si tu n'es pas content je te renvoie à la règle numéro 1. Bastien si tu continues je te shoot au fusil" />
</div>
    


</body>
</html>