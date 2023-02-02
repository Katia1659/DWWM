<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./asset/css/general.css">
    <title>insertDone</title>
</head>

<!-- heder -->
<!-- boutton index désactivé sur cette page sinon le tableau n était pas à jour sur la page delete et la page update -->
<!-- <nav class="nav">


      <form action="./index.html" method="get">
        <input class="boutonNav bouton btn btn-dark" name="insert" type="submit" value="Index" />
      </form>
      

</nav> -->

<table>

<!-- bouton select -->
<body>
    <div id="formInsertDone" class="formulaire">
        <p>Les données ont été prises en compte</p>
        <form action="../Controller/executeSelect.php" method="get">
            <input class="bouton btn btn-dark" name="select" type="submit" value="Select" />
        </form>
    </div>


</body>

</html>