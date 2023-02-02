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

<form enctype="multipart/form-data" action="../Controller/executeSelect.php" method="post">

<!-- <input class="file" name="file" type="file" />  -->

            <button class="button" style="vertical-align:middle"><span>SELECT </span></button>
</form>
<a href="index.php" class="home"><img src="Image/home.png" id="logo"></a>

  </div>

  <?php array_to_table($maListe); ?>
</body>
</html>