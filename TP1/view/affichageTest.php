<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<table>
    <?php session_start();?>
    <?php echo $_SESSION['message'] ?>
    
</table>
</body>
</html>