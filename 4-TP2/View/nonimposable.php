<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non imposable</title>
    <link rel='icon' href="non_valide.png">
</head>
<body>

<?php  session_start() ?>
    <h1><?php echo $_SESSION['nom'].", ".$_SESSION ['prenom']; ?>
    vous n'êtes pas imposable.</h1>

</body>
</html>