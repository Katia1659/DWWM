<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding: 250px;
            margin-left: 600px;
            display: flex;
            justify-content: center;
            background-image: url("vs-code-logo.png") ;

        }

        input{
            padding: 90px;
            border-radius: 50px;
            background-color: rgb(79, 200, 222);
            font-family: sans-serif;
            font-size: larger;
            }
        input:hover{
            background-color:rgb(47, 129, 144);
        }
    </style>
</head>

<body>

    <form action="../view/affichage.php" method="get">
        <input type="submit" value="Entrer En Classe !">
    </form>
  
</body>

</html>