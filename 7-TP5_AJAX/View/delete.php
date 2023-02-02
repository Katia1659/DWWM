<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Suppresion des stagiaires</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/index.css"/>
    <?php session_start(); ?>
</head>

<body>
<header>
    <!-- Navbar-->
    <a class="iconeNav" href="index.html">
        <svg name="acceuil" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
             class="bi bi-house" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
        </svg>
    </a>

    <h1 class="text-center">BDD des Stagiaires</h1>
    <div class="iconNav">
        <a class="iconeNav mg-1" href="insert.html">
            <svg name="insert" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-file-plus-fill" viewBox="0 0 16 16">
                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM8.5 6v1.5H10a.5.5 0 0 1 0 1H8.5V10a.5.5 0 0 1-1 0V8.5H6a.5.5 0 0 1 0-1h1.5V6a.5.5 0 0 1 1 0z"/>
            </svg>
        </a>
        <a class="iconeNav" onclick="selectStag('select')" href="../View/select.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
            </svg>

        </a>
        <a class="iconeNav" onclick="selectStag('update')" href="update.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor"
                 class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd"
                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
        </a>

        <a class="iconeNav" onclick="selectStag('delete')" href="delete.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
            </svg>
        </a>


    </div>


</header>
<!-- Affichage du tableau-->
<div class="container">
        <table class="table table-light table-bordered">
            <thead class="table-dark">
            <tr>
                <th class="text-center nom-pre">ID</th>
                <th class="text-center nom-pre">NOM</th>
                <th class="text-center nom-pre">PRENOM</th>
                <th class="text-center nom-pre">PLACE</th>
                <th class="text-center nom-pre"></th>
            </tr>
            </thead>
            <tbody>
            <?php
            for ($i = 0; $i < count($_SESSION['stagiaires']); $i++) { ?>

                    <tr id="<?= $_SESSION['stagiaires'][$i]['ID'] ?>">
                        <form  method="post" action="">
                            <td class="text-center nom-pre">
                                <?= $_SESSION['stagiaires'][$i]['ID'] ?>
                            </td>
                            <td class="text-center nom-pre">
                               <?= $_SESSION['stagiaires'][$i]['NOM'] ?>
                            </td>
                            <td class="text-center nom-pre">
                                <?= $_SESSION['stagiaires'][$i]['PRENOM'] ?>
                            </td>
                            <td class="text-center nom-pre">
                                <?= $_SESSION['stagiaires'][$i]['PLACE'] ?>
                            </td>
                            <td class="text-center nom-pre">
                                <button type="button"
                                        onclick="deleteStag('<?= $_SESSION['stagiaires'][$i]['ID'] ?>');"
                                        class="btn btn-danger btnSize">Supprimer
                                </button>

                            </td>
                        </form>
                    </tr>

            <?php } ?>
            </tbody>
        </table>
</div>

<!-- Script JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
<script
        src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
        crossorigin="anonymous"></script>
<script src="./assets/js/script.js"></script>
</body>
</html>
