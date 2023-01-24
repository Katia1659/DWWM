<?php
session_start();
echo "Bonjour ".$_SESSION["Nom"]." ".$_SESSION["Prénom"]." vous etes non imposable";
?>