<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="parent">
        
            <?php session_start(); ?>

            <div class="div1">
                <caption><h1>Placement des stagiaire !</h1></caption>
            </div>

            <!-- Place_1 -->
            <div class="div3">
                <div class="div7">

                    <td>Place_1</td>
                    <td><?php echo $_SESSION['$listPlaceStag']['Place_1']; ?></td>

                </div>
                <!-- Place_2 -->
                <div class="div8">

                    <td>Place_2</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_2']; ?>
                    </td>

                </div>
                <!-- Place_3 -->
                <div class="div9">

                    <td>Place_3</td>
                    <td><?php echo $_SESSION['$listPlaceStag']['Place_3']; ?></td>

                </div>
                <!-- Place_4 -->
                <div class="div10">

                    <td>Place_4</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_4']; ?>
                    </td>

                </div>
            </div>
            <!-- Place_5 -->
            <div class="div4">
                <div class="div11">

                    <td>Place_5</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_5']; ?>
                    </td>

                </div>
                <!-- Place_6 -->
                <div class="div12">

                    <td>Place_6</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_6']; ?>
                    </td>

                </div>
                <!-- Place_7 -->
                <div class="div13">

                    <td>Place_7</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_7']; ?>
                    </td>

                </div>
                <!-- Place_8 -->
                <div class="div14">

                    <td>Place_8</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_8']; ?>
                    </td>

                </div>
            </div>
            <!-- Place_9 -->
            <div class="div5">
                <div class="div15">

                    <td>Place_9</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_9']; ?>
                    </td>

                </div>
                <!-- Place_10 -->
                <div class="div16">

                    <td>Place_10</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_10']; ?>
                    </td>

                </div>
                <!-- Place_11 -->
                <div class="div17">

                    <td>Place_11</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_11']; ?>
                    </td>

                </div>
                <!-- Place_12 -->
                <div class="div18">

                    <td>Place_12</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_12']; ?>
                    </td>

                </div>
            </div>
            <!-- Place_13 -->
            <div class="div6">
                <div class="div19">

                    <td>Place_13</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_13']; ?>
                    </td>

                </div>
                <!-- Place_14 -->
                <div class="div20">

                    <td>Place_14</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_14']; ?>
                    </td>

                </div>
                <!-- Place_15 -->
                <div class="div21">

                    <td>Place_15</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_15']; ?>
                    </td>

                </div>
                <!-- Place_16 -->
                <div class="div22">

                    <td>Place_16</td>
                    <td>
                        <?php echo $_SESSION['$listPlaceStag']['Place_16']; ?>
                    </td>

                </div>
            </div>



            <div class="div2">
                <form action="../controller/execute2.php" method="get">
                    <input type="submit" class="btn" value="Et on tourne !" />
            </div>

         
    </div>
</body>

</html>