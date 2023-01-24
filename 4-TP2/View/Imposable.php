<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="Style.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Impôts de Paris</title>
</head>
<body class="body3">
<?php session_start(); ?>
    <!-- <div class="position-absolute top-50 start-50 translate-middle" ><h1 class="text-warning">Désolé mais là tu vas devoir rhalass, va falloir manger des pâtes et se rationner jusqu'à la fin du mois.</h1> -->
    <div class="mt-2 mr-5"><h1 class="text-warning"><?php echo $_SESSION['nom']." ".$_SESSION['prenom']; ?> vous êtes imposable, maintenant paye.</h1></div>


    </div>
    
</body>
</html>