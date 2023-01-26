<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styleTableau.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <table>
    <?php session_start() ?>
    <tr><td>Place_1</td><td><?php echo $_SESSION['nomsStag']['Place_1'] ?></td></tr>
    <tr><td>Place_2</td><td><?php echo $_SESSION['nomsStag']['Place_2'] ?></td></tr>
    <tr><td>Place_3</td><td><?php echo $_SESSION['nomsStag']['Place_3'] ?></td></tr>
    <tr><td>Place_4</td><td><?php echo $_SESSION['nomsStag']['Place_4'] ?></td></tr>
    <tr><td>Place_5</td><td><?php echo $_SESSION['nomsStag']['Place_5'] ?></td></tr>
    <tr><td>Place_6</td><td><?php echo $_SESSION['nomsStag']['Place_6'] ?></td></tr>
    <tr><td>Place_7</td><td><?php echo $_SESSION['nomsStag']['Place_7'] ?></td></tr>
    <tr><td>Place_8</td><td><?php echo $_SESSION['nomsStag']['Place_8'] ?></td></tr>
    <tr><td>Place_9</td><td><?php echo $_SESSION['nomsStag']['Place_9'] ?></td></tr>
    <tr><td>Place_10</td><td><?php echo $_SESSION['nomsStag']['Place_10'] ?></td></tr>
    <tr><td>Place_11</td><td><?php echo $_SESSION['nomsStag']['Place_11'] ?></td></tr>
    <tr><td>Place_12</td><td><?php echo $_SESSION['nomsStag']['Place_12'] ?></td></tr>
    <tr><td>Place_13</td><td><?php echo $_SESSION['nomsStag']['Place_13'] ?></td></tr>
    <tr><td>Place_14</td><td><?php echo $_SESSION['nomsStag']['Place_14'] ?></td></tr>
    <tr><td>Place_15</td><td><?php echo $_SESSION['nomsStag']['Place_15'] ?></td></tr>
    <tr><td>Place_16</td><td><?php echo $_SESSION['nomsStag']['Place_16'] ?></td></tr>
  </table>
  <div ><form action= "../controller/executeFunctions1.php" method="get">
    <input class= "btn" type = "submit" value="MELANGER">

    <form action="execute.php" method="get">
    <input name="nom" type="hidden" value="tab1"/>
  </form></div>

    

</body>
</html>