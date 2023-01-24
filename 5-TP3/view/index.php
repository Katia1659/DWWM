<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>
    <div class="container">
 <div class="formulaire">   
    <form enctype="multipart/form-data" action="../Controller/executeFonc.php" method="post">
     <input class="file" name="file" type="file" /> 
    <div class="button">
      <input class="submit" name="submit" type="submit" value="valider" />
    </form>
  </div>
</div>

</body>
</html>