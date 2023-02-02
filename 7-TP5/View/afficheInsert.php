<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/insertStyle.css">
    <title>Document</title>
</head>

<body>


    <div class="parent">


        <div class="div1">
            <form enctype="multipart/form-data" action="../Controller/executeInsert.php" method="post">
                <div class="inpt1">
                    <input class="file" name="file" type="file"  />
                </div>

                <br>

                <div class="inpt2">
                    <input type="submit" value="INSERER"  />
                </div>

            </form>

            <form enctype="multipart/form-data" action="../View/index.php" method="post">
                <div class="inpt3">
                    <input name="file" type="submit" value="Page d'accueil"  />
                </div>

            </form>
        </div>


    </div>

</body>

</html>