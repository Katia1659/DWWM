<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imposable</title>
    <link rel="stylesheet" href="../view/style.css">
</head>
<body>
<?php session_start(); ?>
<h1 class="cadre2"><?php echo $_SESSION['$nom']; ?> <?php echo $_SESSION['$prenom']; ?> vous êtes imposable.</h1>
</body>
</html>