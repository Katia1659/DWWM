
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>TP2</title>
</head>
<body>
<?php session_start();?>
<?php
echo "Bonjour ".$_SESSION["Nom"]." ".$_SESSION["Prénom"]." vous etes imposable";
?>
</body>