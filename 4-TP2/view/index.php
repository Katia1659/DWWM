<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paris vous aime</title>
    <link rel="stylesheet" href="../view/style.css">

</head>

<body>
    <div class="cadre">
        <h1>Payez-vous des impots à Paris ? </h1>
        <form action="../controller/execute1.php" method="get" class="popup">
            <div class="question1">

                <label for="nom">Votre nom : </label>
                <input type="text" id="nom" name="nom" placeholder="Saudemont" required>
            </div>
            <div class="question2">
                <label for="prenom">Votre prénom : </label>
                <input type="text" id="prenom" name="prenom" placeholder="Thibaut" required>
            </div>
            <div class="question3">
                <label for="date">Votre date de naissance : </label>
                <input type="date" id="date" name="date" value="1991-07-04" min="1920-01-01" max="2023-01-22" required>
            </div>
            <div class="question4">
                <label for="sexe">Quel est votre sexe : </label>
            </div>
            <div class="question5">
                <label for="femme">Femme </label>
                <input type="radio" id="sexe" name="sexe" value="f" class="radio">
                <label for="homme">Homme </label>
                <input type="radio" id="sexe" name="sexe" value="h" class="radio">
            </div>
            <div class="validation">
                <button type="submit" class="btn">OK</button>
            </div>
        </form>
    </div>
</body>

</html>