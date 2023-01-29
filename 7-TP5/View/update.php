<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<div class="home">   
      <form action="../View/index.php" method="post">
        <button class = "Bindex" name="submit" type="submit">HOME</button>
      </form>   
  </div>
</body>
</html>