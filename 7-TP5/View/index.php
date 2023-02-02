<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/indexStyletyle.css">
    <title>Index</title>
</head>

<body>

    <?php session_start() ?>

    <div class="parent">

        <div class="div1">
            <h1 class="text"> GESTION DES STAGIAIRES </h1>
        </div>

        <div class="div2">
            <img src="./asset/st,small,507x507-pad,600x600,f8f8f8.jpg" alt="">
        </div>




        <div class="div3">
            <form action="../View/afficheInsert.php">
                <input type="submit" value="INSERT" class="btn1">
            </form>
        </div>

        <div class="div4">
            <form enctype="multipart/form-data" action="../Controller/executeSelect.php" method="post">
                <input type="submit" value="SELECT" class="btn1">
            </form>
        </div>

        <div class="div5">
            <form action="../View/afficheUpdate.php">
                <input type="submit" value="UPDATE" class="btn1">
            </form>
        </div>

        <div class="div6">
            <form action="../View/afficheDelete.php">
                <input type="submit" value="DELETE" class="btn1">
            </form>
        </div>

    </div>
</body>

</html>