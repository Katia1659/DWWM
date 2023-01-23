<?php

function modeleFunction(String $message): String
{
    return "Je suis dans le Modele, et le message est : ".$message; 
}

function modeleFunction2(string $message): string
{
    return "Bonjour je suis : $message et nous testons de communiquer avec html.";
}
