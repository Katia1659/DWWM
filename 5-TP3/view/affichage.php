<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Salle de classe</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
<?php session_start() ?>

<div class="container">
    <div class="TAB1">
        <table class="place1">
            <!-- Place_1 -->
            <tr>
                <th>Place_1</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_1']; ?></td>
            </tr>
        </table>
        <table class="place2">
            <!-- Place_2 -->
            <tr>
                <th>Place_2</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_2']; ?></td>
            </tr>
        </table>
        <table class="place3">
            <!-- Place_3 -->
            <tr>
                <th>Place_3</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_3']; ?></td>
            </tr>
        </table>
        <table class="place4">
            <!-- Place_4 -->
            <tr>
                <th>Place_4</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_4']; ?></td>
            </tr>
        </table>
    </div>
    <div class="TAB2">
        <table class="place5">
            <!-- Place_5 -->
            <tr>
                <th>Place_5</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_5']; ?></td>
            </tr>
        </table>
        <table class="place6">
            <!-- Place_6 -->
            <tr>
                <th>Place_6</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_6']; ?></td>
            </tr>
        </table>
        <table class="place7">
            <!-- Place_7 -->
            <tr>
                <th>Place_7</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_7']; ?></td>
            </tr>
        </table>
        <table class="place8">
            <!-- Place_8 -->
            <tr>
                <th>Place_8</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_8']; ?></td>
            </tr>
        </table>
    </div>
    <div class="TAB3">
        <table class="place9">
            <!-- Place_9 -->
            <tr>
                <th>Place_9</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_9']; ?></td>
            </tr>
        </table>
        <table class="place10">
            <!-- Place_10 -->
            <tr>
                <th>Place_10</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_10']; ?></td>
            </tr>
        </table>
        <table class="place11">
            <!-- Place_11 -->
            <tr>
                <th>Place_11</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_11']; ?></td>
            </tr>
        </table>
        <table class="place12">
            <!-- Place_12 -->
            <tr>
                <th>Place_12</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_12']; ?></td>
            </tr>

        </table>
    </div>
    <div class="TAB4">
        <table class="place13">
            <!-- Place_13 -->
            <tr>
                <th>Place_13</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_13']; ?></td>
            </tr>
        </table>
        <table class="place14">
            <!-- Place_14 -->
            <tr>
                <th>Place_14</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_14']; ?></td>
            </tr>
        </table>
        <table class="place15">
            <!-- Place_15 -->
            <tr>
                <th>Place_15</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_15']; ?></td>
            </tr>
        </table>
        <table class="place16">
            <!-- Place_16 -->
            <tr>
                <th>Place_16</th>
            </tr>
            <tr>
                <td><?php echo $_SESSION['listPlaceStag']['Place_16']; ?></td>
            </tr>
        </table>
    </div>
    <div class="Moussa">
        <h2> Table de Moussa</h2>
        <form class="button" action="../controller/execFonc2.php" method="get">
            <input class="input" type="submit" value="Melanger"/>
        </form>
    </div>
</div>


</body>
</html>
