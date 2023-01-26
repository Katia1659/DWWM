<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Home</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

  <div class="insert">   
      <form action="../View/insert.php" method="post">
        <input  class = Binput name="submit" type="submit" value="INSERT" />
      </form>
      
  </div>

  <div class="select">   
      <form action="../View/select.php" method="post">
        <input class = Bselect name="submit" type="submit" value="SELECT" />
      </form>
  </div>

  <div class="update">   
      <form action="../View/update.php" method="post">
        <input class = Bupdate name="submit" type="submit" value="UPDATE" />
      </form>
  </div>

  <div class="delete">   
      <form action="../View/delete.php" method="post">
        <input  class = Bdelete name="submit" type="submit" value="DELETE" />
      </form>
  </div>
 
  </div>

</body>
</html>
