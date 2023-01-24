<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Non Imposable</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php session_start() ?>
    <div><?php echo $_SESSION ['nom']?> <?php echo $_SESSION ['prenom'] ?> est non imposable</div>
</body>
</html>