<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
<div class="block">
    <div class="insert">   
        <form enctype="multipart/form-data" action="../Controller/executeInsert.php" method="post">
            <input class="file" name="file" type="file" /> 
            <button class="button" style="vertical-align:middle"><span>VALIDER </span></button>
            <!-- <input class="submit" name="submit" type="submit" value="valider" /> -->
        </form>
    </div>

    <!-- <div class="home">   
      <form action="../View/index.php" method="post">
        <button class = "Bindex" name="submit" type="submit">HOME</button>
      </form>    -->
      <div class="home">
      <a href="index.php" class="home"><img src="Image/home.png" id="logo"></a>
  </div>
</div>
</body>
</html>