<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="affichage.php">
    <style>
        body {
            background:
                linear-gradient(to left, rgb(252, 252, 252), rgb(201, 109, 188));
        }

        .tab1 {

            /* min-width: 150px; */
            width: 400px;
            /* box-shadow:0 5px rgba(0,0,0.15) ; */
            margin: 100px;
            border: 2px solid midnightblue;
        }

        th,
        td {
            padding: 15px 20px;
        }

        tbody tr,
        td,
        th {
            border: 1px solid midnightblue;
        }

        .tab2 {

            min-width: 150px;
            width: 400px;
            /* box-shadow:0 5px rgba(0,0,0.15) ; */
            margin: 100px;
            border: 2px solid midnightblue;
        }

        .tab3 {

            min-width: 150px;
            width: 400px;
            /* box-shadow:0 5px rgba(0,0,0.15) ; */
            margin: 10px;
            border: 2px solid midnightblue;
            /* left: 10px; */
            margin-left: 1000px;
            margin-top: -340px;
        }

        .tab4 {

            min-width: 150px;
            width: 400px;
            /* box-shadow:0 5px rgba(0,0,0.15) ; */
            margin: 100px auto;
            border: 2px solid midnightblue;
            margin-left: 1000px;
        }

        .btn {
            border: 1px solid #000;
            padding: 5px;
            background-color: white;
            display: block;
            margin: auto;
            border-radius: 10px;
        }

        .btn:hover {
            background-color: white;
        }

        .btn:active {
            background-color: yellow;
        }
    </style>
</head>

<body>

    <table>
        <?php session_start(); ?>
        <!-- <caption>Placement des stagiaire ! </caption>
        

    <tr>
        <th>Place Stagiaire</th>
        <th>Nom Stagiaire</th>
    </tr> -->
        <form action="../controller/execute.php" method="get">
            <input class="btn" type="submit" value="melange" />
        </form>
        <!-- L'attribut "action" spécifie l'URL du script côté serveur qui va gérer les données du formulaire. Dans ce cas, c'est "../controller/execute.php". L'attribut "méthode" spécifie la méthode HTTP à utiliser lors de 
        l'envoi des données du formulaire. Dans ce cas, il s'agit de "get" -->

        <!-- Place_1 -->
        <table class="tab1">
            <tr>
                <td>Place_1</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_1']; ?></td>
                <!-- accede a une variable de session appelée $listStagPlace et accede ensuite à la valeur assosicié  à la clé 'Place_1' dans cette variable. La valeur est ensuite imprimée ou "affichée" à l'aide de 
                l'instruction 
                PHP echo. -->
                <!-- ca reprend la fonctions qui decale les valeur car la fonction est stocker dans la variable $_session, donc on veut quu'il affiche le nom qui est a la place 1 dans la fonction -->
            </tr>
            <!-- Place_2 -->

            <tr>
                <td>Place_2</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_2']; ?></td>
            </tr>


            <!-- Place_3 -->
            <tr>
                <td>Place_3</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_3']; ?></td>
            </tr>

            <!-- Place_4 -->

            <tr>
                <td>Place_4</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_4']; ?></td>
            </tr>

        </table>
        <!-- Place_5 -->
        <table class="tab2">
            <tr>
                <td>Place_5</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_5']; ?></td>
            </tr>

            <!-- Place_6 -->


            <tr>
                <td>Place_6</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_6']; ?></td>
            </tr>

            <!-- Place_7 -->

            <tr>
                <td>Place_7</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_7']; ?></td>
            </tr>

            <!-- Place_8 -->

            <tr>
                <td>Place_8</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_8']; ?></td>
            </tr>
        </table>
        <!-- Place_9 -->
        <table class="tab3">
            <tr>
                <td>Place_9</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_9']; ?></td>
            </tr>

            <!-- Place_10 -->

            <tr>
                <td>Place_10</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_10']; ?></td>
            </tr>

            <!-- Place_11 -->

            <tr>
                <td>Place_11</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_11']; ?></td>
            </tr>


            <!-- Place_12 -->

            <tr>

                <td>Place_12</td>

                <td><?php echo $_SESSION['$listStagPlace']['Place_12']; ?></td>
            </tr>
        </table>
        <!-- Place_13 -->
        <table class="tab4">
            <tr>
                <td>Place_13</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_13']; ?></td>
            </tr>

            <!-- Place_14 -->

            <tr>
                <td>Place_14</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_14']; ?></td>
            </tr>

            <!-- Place_15 -->

            <tr>
                <td>Place_15</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_15']; ?></td>
            </tr>

            <!-- Place_16 -->

            <tr>
                <td>Place_16</td>
                <td><?php echo $_SESSION['$listStagPlace']['Place_16']; ?></td>
            </tr>

        </table>

</body>

</html>