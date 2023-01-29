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
        <button class = "Binsert" name="submit" type="submit">INSERT</button>
      </form>
      
  </div>

  <div class="select">   
      <form action="../View/select.php" method="post">
        <button class = "Bselect" name="submit" type="submit"> SELECT</button>
      </form>
  </div>

  <div class="update">   
      <form action="../View/update.php" method="post">
        <button class = "Bupdate" name="submit" type="submit"> UPDATE</button>
      </form>
  </div>

  <div class="delete">   
      <form action="../View/delete.php" method="post">
        <button class = "Bdelete" name="submit" type="submit">DELETE</button>
      </form>
  </div>
 
  </div>

</body>
</html>
