<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="./asset/css/general.css">
  <title></title>
</head>

<body>
  <div class="fond">
    <nav class="nav">
      <form action="./index.html" method="get">
        <input class="boutonNav bouton btn btn-dark" name="insert" type="submit" value="Index" />
      </form>

    </nav>
    <div>
      <form enctype="multipart/form-data" action="../Controller/executeInsert.php" method="post">
        <div class="menuInsert">
          <div>
            <input class=" btn btn-dark" name="file" type="file" />
          </div>
          <div >
            <input class="validInsert btn btn-dark" name="submit" type="submit" value="valider" />
          </div>
        </div>
      </form>


    </div>
  </div>
</body>

</html>