<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="Style.css"> 
    <title>Plan de la classe</title>
</head>
<?php session_start();?>
<form class = "btn" action= "../controlleur/Execute_function2.php" metdod="get">
    <input type = "submit" value="Changement de places"></form>

    <form class = "btn" action= "../controlleur/Execute_Download.php" metdod="get">
    <input type = "submit" value="Download"></form>
    
    <table class="items-center border-spacing text-center">
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td class="places"><?php echo $_SESSION['place_1']; ?></td>
    <td class="places"><?php echo $_SESSION['place_2']; ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="places"><?php echo $_SESSION['place_13']; ?></td>
    <td class="places"><?php echo $_SESSION['place_14']; ?></td>
  </tr>
  <tr>
    <td class="places"><?php echo $_SESSION['place_3']; ?></td>
    <td class="places"><?php echo $_SESSION['place_4']; ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td class="places"><?php echo $_SESSION['place_15']; ?></td>
    <td class="places"><?php echo $_SESSION['place_16']; ?></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td class="places"><?php echo $_SESSION['place_5']; ?></td>
    <td class="places" ><?php echo $_SESSION['place_6']; ?></td>
    <td></td>
    <td class="places"><?php echo $_SESSION['place_9']; ?></td>
    <td class="places"><?php echo $_SESSION['place_10']; ?></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td class="places"><?php echo $_SESSION['place_7']; ?></td>
    <td class="places" ><?php echo $_SESSION['place_8']; ?></td>
    <td></td>
    <td class="places"><?php echo $_SESSION['place_11']; ?></td>
    <td class="places"><?php echo $_SESSION['place_12']; ?></td>
    <td></td>
  </tr>
</table>

<body>
    
</body>

</html>