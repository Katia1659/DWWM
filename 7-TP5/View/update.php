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
    <form action="../Controller/executeUpdate.php" method="get">
    <label for="id">id</label>
    <input name="id" type="text" />
    </br>	  
    <label for="nom">nom</label>
    <input name="nom" type="text" />
    </br>	
    <label for="prenom">prenom</label>
    <input name="prenom" type="text" />
    </br>	

    <label for="place">place</label>
    <input name="place" type="text" />
    </br>	
    <input type="submit" value="envoyer" />
</form>

<a href="index.php" class="home"><img src="Image/home.png" id="logo"></a>

</body>
</html>