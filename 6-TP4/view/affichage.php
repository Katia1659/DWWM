<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<table>
    <?php session_start();?>
    
    <caption> le placement des stagiaire ! </caption>
    <form action="../controller/execute2.php" method="post">
    <input type="submit" value="Mélanger" />
    
</form>
<form action= "../controller/executeExtractStag.php" method="post">
   <a href="../controller/executeExtractStag.php"> <input type="submit" value="Télécharger" /></a>
</form>

   
    <!-- Place_1 -->
    <table class="place_1">
	<tr>
        <div>
        <td>Place_1</td>
        <td> <?php echo $_SESSION['tableauFinal']['Place_1']; ?></td></div>
    </tr>
    </table>
    <!-- Place_2 -->
    <table class="place_2">
	<tr>
        <td>Place_2</td>
        <td> <?php echo $_SESSION['tableauFinal']['Place_2']; ?></td>
    </tr>
    <table>
    <!-- Place_3 -->
    <table class="place_3">
	<tr>
        <td>Place_3</td>
        <td> <?php echo $_SESSION['tableauFinal']['Place_3']; ?></td>
    </tr>
    </table>
   <!-- Place_4 -->
   <table class="place_4">
	<tr>
        <td>Place_4</td>
        <td> <?php echo $_SESSION['tableauFinal']['Place_4']; ?></td>
    </tr>
</table>
    
        
    <!-- Place_5 -->
    <table class="place_5">
	<tr>
        <td>Place_5</td>
        <td> <?php echo $_SESSION['tableauFinal']['Place_5']; ?></td>
    </tr>
    </table>
    <!-- Place_6 -->
    <table class="place_6">
	<tr>
        <td>Place_6</td>
        <td> <?php echo $_SESSION['tableauFinal']['Place_6']; ?></td>
    </tr>
    </table>
    <!-- Place_7 -->
    <table class="place_7">
	<tr>
        <td>Place_7</td>
        <td> <?php echo $_SESSION['tableauFinal']['Place_7']; ?></td>
    </tr>
    
    <!-- Place_8 -->
    <table class="place_8">
	<tr>
        <td>Place_8</td>
        <td> <?php echo $_SESSION['tableauFinal']['Place_8']; ?></td>
    </tr>
</table>




   
        <!-- Place_16 -->
        <table class="place_16">
            <tr>
                <td>Place_16</td>
                <td> <?php echo $_SESSION['tableauFinal']['Place_16']; ?></td>
            </tr>
        </table>

        <!-- Place_13 -->
        <table class="place_13">
        <tr>
            <td>Place_13</td>
            <td> <?php echo $_SESSION['tableauFinal']['Place_13']; ?></td>
        </tr>
        </table>
        <!-- Place_14 -->
        <table class="place_14">
        <tr>
            <td>Place_14</td>
        <td> <?php echo $_SESSION['tableauFinal']['Place_14']; ?></td>
    </tr>
    </table>
    <!-- Place_15 -->
    <table class="place_15">
	<tr>
        <td>Place_15</td>
        <td> <?php echo $_SESSION['tableauFinal']['Place_15']; ?></td>
    </tr>
</table>


        <!-- Place_9 -->
        <table class="place_9">

            <tr>
                <td>Place_9</td>
                <td> <?php echo $_SESSION['tableauFinal']['Place_9']; ?></td>
            </tr>
        </table>
    <!-- Place_10 -->
    <table class="place_10">
    <tr>
        <td>Place_10</td>
        <td> <?php echo $_SESSION['tableauFinal']['Place_10']; ?></td>
    </tr>
    </table>
    <!-- Place_11 -->
    <table class="place_11">
    <tr>
        <td>Place_11</td>
        <td> <?php echo $_SESSION['tableauFinal']['Place_11']; ?></td>
    </tr>
    </table>
    <!-- Place_12 -->
    <table class="place_12">
    <tr>
        <td>Place_12</td>
        <td> <?php echo $_SESSION['tableauFinal']['Place_12']; ?></td>
    </tr>  
</table>
   

  
</body>
</html>