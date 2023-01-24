<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="./style1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start();?>

    <p>Félicitations <?php echo $_SESSION['prenom'].' '. $_SESSION['nom']?> vous êtes imposable !!!!</p>




</body>
</html>



