<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php session_start(); ?>
    <div class="haut">
        <div class="cadre"><b> Le Monarque </b></div>
        <div class="tableau"></div>
    </div>
    <div class="ligne1">
        <table>
            <tr>
                <td>Table_1<br><?php echo $_SESSION['nomsStag']['Place_1'] ?></td>
                <td>Table_2<br><?php echo $_SESSION['nomsStag']['Place_2'] ?></td>
            </tr>
            <div>
                <form action="../controller/executeFunctions1.php" method="get">

                    <input class="btn" type="submit" value="MELANGER">
                    <input name="nom" type="hidden" value="class1" />
                </form>
            </div>
            <tr>
                <td>Table_4<br><?php echo $_SESSION['nomsStag']['Place_4'] ?></td>
                <td>Table_3<br><?php echo $_SESSION['nomsStag']['Place_3'] ?></td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Table_15<br><?php echo $_SESSION['nomsStag']['Place_15'] ?></td>
                <td>Table_16<br><?php echo $_SESSION['nomsStag']['Place_16'] ?></td>
            </tr>
            <tr>
                <td>Table_14<br><?php echo $_SESSION['nomsStag']['Place_14'] ?></td>
                <td>Table_13<br><?php echo $_SESSION['nomsStag']['Place_13'] ?></td>
            </tr>
        </table>
    </div>
    <div class="ligne2">
        <table>
            <tr>
                <td>Table_6<br><?php echo $_SESSION['nomsStag']['Place_6'] ?></td>
                <td>Table_7<br><?php echo $_SESSION['nomsStag']['Place_7'] ?></td>
            </tr>
            <tr>
                <td>Table_5<br><?php echo $_SESSION['nomsStag']['Place_5'] ?></td>
                <td>Table_8<br><?php echo $_SESSION['nomsStag']['Place_8'] ?></td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Table_10<br><?php echo $_SESSION['nomsStag']['Place_10'] ?></td>
                <td>Table_11<br><?php echo $_SESSION['nomsStag']['Place_11'] ?></td>
            </tr>
            <tr>
                <td>Table_9<br><?php echo $_SESSION['nomsStag']['Place_9'] ?></td>
                <td>Table_12<br><?php echo $_SESSION['nomsStag']['Place_12'] ?></td>
            </tr>
        </table>
    </div>
    <div class="lignebas">

        
        
        <form enctype="multipart/form-data" action="../Controller/execute.php" method="post">
            
            <input class="file" name="file" type="file" />
            <div class="button">
                <input class="submit" name="file" type="submit" value="Envoyer nouveaux noms" />
            </div>
        </form>
        
        <form action="../controller/executeGenerateCsv.php" method="get">
            <input class="inpdl" type="submit" value="Telecharger">
        </form>
    </div>
</body>
</html>