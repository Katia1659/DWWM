<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>

<div>
<p>Veuillez choisir une valeur a modifier :</p>


<form action="../Controller/execute2.php" method="post">
<input type="radio" id="radio" name="perso" value="PRENOM">
      <label for="prenom">PRENOM</label>
    
      <input type="radio" id="radio" name="perso" value="NOM">
      <label for="nom">NOM</label>

        <p>Quelle place souhaitez vous modifier ?</p>
        <label for="name"></label> <br>
        <input type="text" id="id" name="place">

        <p>Ancien nom/prénom</p>
        <label for="name"></label> <br>
        <input type="text" id="id" name="ancienNom">
    
        <p>Nouveau nom/prénom</p>
        <label for="name"></label> <br>
        <input type="text" id="place" name="nouveauNom">



</br>
</br>


                <input type="submit" value="Envoyer" />
            </form>

</form> 
</div>    
</body>
</html>