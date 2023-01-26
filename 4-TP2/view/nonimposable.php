<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body class="nonimposable">
    <?php session_start(); ?>
    <p>Vous êtes un(e) <?php echo $_SESSION['sexe']?> et vous avez <?php echo $_SESSION['age']?> ans.</p>
    <p>Vous n'êtes pas imposable !</p>
</body>
</html>