<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/asset/styleIndex.css">
    <title>Formulaire des données </title>
</head>

<body>
    
        <h1>LA FRANCE </h1>

            <form action="../controller/execute.php" method="get" id="parent">
                <div class="div2">

                    <div class="info">
                        <label for="name" class="info1"> Nom :</label>
                        <input type="text" id="name" name="user_name" required>
                    </div>

                    <div class="info"> 
                        <label for="prenom"> Prénom :</label>
                        <input type="text" id="prenom" name="user_prenom" required>
                    </div>
                    
                </div>

                <div class="div3">
                    <label for="age"> Quel est votre âge ? :</label>
                    <input type="date" id="age" name="user_age" value="2018-07-22" min="1920-01-01" max="2023-01-23" required>
                </div>

                <div class="div4">
                    <div>
                        <input type="radio" id="femme" name="sexe" value="femme" checked>
                        <label for="femme"> Femme </label>
                    </div>

                    <div>
                        <input type="radio" id="homme" name="sexe" value="homme">
                        <label for="homme"> Homme </label>
                    </div>

                </div>

                <div class="div5">
                    <button type="submit"> Envoyer </button>
                </div>

            </form>

    

   


</body>

</html>