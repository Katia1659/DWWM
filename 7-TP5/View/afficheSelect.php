<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/selectStyle.css">

    <title>Document</title>
</head>

<body>

    <?php session_start()  ?>

    <div>
        <table>
            <tr>
                <th>PRENOM</th>
                <th>NOM</th>
                <th>PLACE</th>
            </tr>

            <?php for ($i = 0; $i < count($_SESSION["donneesStag"]); $i++) { ?>


                <tr>
                    <td><?php echo $_SESSION['donneesStag'][$i]['PRENOM'] ?></td>
                    <td><?php echo $_SESSION['donneesStag'][$i]['NOM'] ?></td>
                    <td><?php echo $_SESSION['donneesStag'][$i]['PLACE'] ?></td>
                </tr>

            <?php   } ?>
        </table>

        <form enctype="multipart/form-data" action="../View/index.php" method="post">
            <div class="inpt3">
                <input name="file" type="submit" value="Page d'accueil" />
            </div>

        </form>
    </div>

</body>

</html>