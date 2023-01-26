<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>

<table>

    <div class="h1">
        <h1>Choisis ton fichier </p>
    </div>
    <div class="container">   
        <form enctype="multipart/form-data" action="../controller/execute.php" method="post">
            <div class="formulaire">
            <input class="file" name="file" type="file" />
            </div> 
            <div class="button">
                <input class="submit" name="submit" type="submit" value="valider" />
            </div>
        </form>
    </div>

</table>


</body>
</html>