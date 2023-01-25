<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        input{
    padding: 10px;
    border-radius:5px 2px;
    border: 1px rgb(195, 173, 173);
    background-color: rgb(251, 172, 107);
}

input:hover{
    border: 2px rgb(159, 127, 127);
    box-shadow: 2px 1px rgb(159, 127, 127) ;
    background-color: rgb(193, 125, 94); 
    cursor: pointer;
}
    </style>
</head>

<body>
    <?php session_start(); ?>
    <div class="parent">
        <div class="div1">
            <tr>
                <form action="../controller/execute2.php" method="get">
                    <th>Formateur : Moussa</th>
                    <input type="submit" value="Réorganiser">
                </form>
            </tr>
        </div>
        <div class="div2">
            <table>
                <!-- Place_1 -->
                <tr>
                    <td id="places">Place_1</td>
                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_1']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div3">
            <table><!-- Place_2 -->
                <tr>
                    <td id="places">Place_2</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_2']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div4">
            <table>
                <!-- Place_3 -->
                <tr>
                    <td id="places">Place_3</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_3']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div5">
            <table>
                <!-- Place_4 -->
                <tr>
                    <td id="places">Place_4</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_4']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div6">
            <table>
                <!-- Place_5 -->
                <tr>
                    <td id="places">Place_5</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_5']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div7">
            <table>
                <!-- Place_6 -->
                <tr>
                    <td id="places">Place_6</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_6']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div8">
            <table>
                <!-- Place_7 -->
                <tr>
                    <td id="places">Place_7</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_7']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div9">
            <table>
                <!-- Place_8 -->
                <tr>
                    <td id="places">Place_8</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_8']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div10">
            <table>
                <!-- Place_9 -->
                <tr>
                    <td id="places">Place_9</td>
                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_9']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div11">
            <table>
                <!-- Place_10 -->
                <tr>
                    <td id="places">Place_10</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_10']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div12">
            <table>
                <!-- Place_11 -->
                <tr>
                    <td id="places">Place_11</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_11']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div13">
            <table>
                <!-- Place_12 -->
                <tr>
                    <td id="places">Place_12</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_12']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div14">
            <table>
                <!-- Place_13 -->
                <tr>
                    <td id="places">Place_13</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_13']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div15">
            <table>
                <!-- Place_14 -->
                <tr>
                    <td id="places">Place_14</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_14']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div16">
            <table>
                <!-- Place_15 -->
                <tr>
                    <td id="places">Place_15</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_15']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div17">
            <table>
                <!-- Place_16 -->
                <tr>
                    <td id="places">Place_16</td>

                </tr>
                <tr>
                    <td><?php echo $_SESSION['$nweRotation']['Place_16']; ?></td>
                </tr>
            </table>
        </div>
        <div class="div18">
            <table>
                <!-- téléchargement -->
                <form action="../controller/execute3.php" method="post">
                 <input type="submit" value="Extract Liste" > 
                </form>
                
            </table>
        </div>
    </div>
</body>

</html>