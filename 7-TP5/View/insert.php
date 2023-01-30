<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP RANDOM</title>
</head>
<body>
  <?php session_start()?>
  <div class="formulaire">
     <form enctype="multipart/form-data" action="..\Controller\execInsert.php" method="post">
       <div class="button"> 
         <input class="file" name="file" type="file"/> 
         <input class="submit" name="submit" type="submit" value="Valider" />
       </div> 
    </form>
  </div>

</body>
</html>