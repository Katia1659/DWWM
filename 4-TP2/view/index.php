<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<style>
    div{

        width: 400px;
        text-align: center;

        margin: auto;
        border: 3px solid black;
        height: 300px;
        margin-top: 250px;
        background: linear-gradient(to left, green, black);
        color: white;
    }
    body{
        background: linear-gradient(to right, pink, white);
        
    }
    h1{
        color: black;
        text-align: center;

    }
    *{
        font-size:20px;
    }
</style>
</head>
<h1> SITUATION IMPOT</h1>
<body>

<div> 
    
</br>
<form action="../controller/execute.php" method="get">
    <label for="nom">Nom</label>
    <input name="nom" type="text" />

    </br>
</br>
</br>
	
    <label for="prenom">Prenom</label>
    <input name="prenom" type="text" />

    </br>
</br>
</br>

<label for="date_naiss">date de naissance</label>
<input type="date" id="date_naiss" name="date_naiss"
       value="2018-07-22"
       min="1950-01-01" max="2023-12-31">

</br>
</br>
</br>
      <input type="radio" id="sexe" name="genre" value="homme">
      <label for="dewey">Homme</label>
    
      <input type="radio" id="genre" name="genre" value="femme">
      <label for="genre">Femme</label>
   

</br>
</br>
</br>

    <input type="submit" value="envoyer" />
</form>
</div>

</body>
</html>