<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <style>
        body{
            background: rgb(2,0,36);
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(121,110,9,0) 100%, rgba(0,212,255,1) 100%);
        }
        button {
    display: inline-block;
    background-color: #7b38d8;
    border-radius: 10px;
    border: 4px double white;
    color: green;
    text-align: center;
    font-size: 28px;
    padding: 20px;
    width: 200px;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    align-items: center;
  }
  div{
    border: 10px solid purple;
            padding: 10px;
            background-color: white;
            display: inline;
            margin: auto;
            border-radius: 10px;
            justify-content: center;
           
  }
    </style>
</head>
<body>
    


<div>
<button>
    <a href="insert.php">INSERT</a>
</button>
<button>
    <a href="update.php">UPDATE</a>
</button>
<button>
    <a href="delete.php">DELETE</a>
</button>
<button>
    <a href="select.php">SELECT</a>
</button>
</div>

</body>
</html>
