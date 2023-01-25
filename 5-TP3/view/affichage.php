<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Changement de place</title>
</head>
<body>

<?php session_start();?>
    <div class="container">
        
<div class="place-1">
        <tr>
        <!-- Place_1 -->
            <td><?php echo $_SESSION['$listStagPlaces']['Place_1'];?></td>

        </tr>
</div>
<div class="place-2">    
    <tr>

        <!-- Place_2 -->
      
        <td><?php echo $_SESSION['$listStagPlaces']['Place_2'];?></td>
    </tr>
</div> 
<div class="place-3">
    <!-- Place_3 -->
    <tr>
   
        <td><?php echo $_SESSION['$listStagPlaces']['Place_3'];?></td>
    </tr>
</div>

<div class="place-4">

    <!-- Place_4 -->
    <tr>
     
        <td><?php echo $_SESSION['$listStagPlaces']['Place_4'];?></td>
    </tr>
</div>
  
  
    <!-- Place_5 -->
<div class="place-5">
    <tr>
      
        <td><?php echo $_SESSION['$listStagPlaces']['Place_5'];?></td>
    </tr>
</div>
<div class="place-6">
    <!-- Place_6 -->
    <tr>
      
        <td><?php echo $_SESSION['$listStagPlaces']['Place_6'];?></td>
    </tr>
</div>

<div class="place-7">
    <!-- Place_7 -->
    
    <tr>
      
        <td><?php echo $_SESSION['$listStagPlaces']['Place_7'];?></td>
    </tr>
</div>
<div class="place-8">
    <!-- Place_8 -->
    <tr>
       
        <td><?php echo $_SESSION['$listStagPlaces']['Place_8'];?></td>
    </tr>
</div>
  
  
<div class="place-9">
    <!-- Place_9 -->
    <tr>
      
        <td><?php echo $_SESSION['$listStagPlaces']['Place_9'];?></td>
    </tr>
</div>

<div class="place-10">
    <!-- Place_10 -->
    <tr>
   
        <td><?php echo $_SESSION['$listStagPlaces']['Place_10'];?></td>
    </tr>
</div>

<div class="place-11">
    <!-- Place_11 -->
    <tr>
      
        <td><?php echo $_SESSION['$listStagPlaces']['Place_11'];?></td>
    </tr>
</div>

<div class="place-12">
    <!-- Place_12 -->
    <tr>
       
        <td><?php echo $_SESSION['$listStagPlaces']['Place_12'];?></td>
    </tr>
</div>
  
<div class="place-13">
    <!-- Place_13 -->
   
    <tr>
      
        <td><?php echo $_SESSION['$listStagPlaces']['Place_13'];?></td>
    </tr>
</div>

<div class="place-14">
    <!-- Place_14 -->
    <tr>
       
        <td><?php echo $_SESSION['$listStagPlaces']['Place_14'];?></td>
    </tr>
</div>

<div class="place-15">
    <!-- Place_15 -->
    <tr>
      
        <td><?php echo $_SESSION['$listStagPlaces']['Place_15'];?></td>
    </tr>
</div>

<div class="place-16">
    <!-- Place_16 -->
    <tr>
       
        <td><?php echo $_SESSION['$listStagPlaces']['Place_16'];?></td>
    </tr>
</div>
  

<div class="Pic-nic">
    
<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fassets.sentinelassam.com%2Fh-upload%2F2020%2F12%2F16%2F181939-jlau-jg-4224.jpg&f=1&nofb=1&ipt=ad2fd756c91cdde4c0f001454cecfbdc8d6c8c039f841c2802239747b9398c2b&ipo=images">
</div>
<div class="Décal">
<form action="../controller/executeFunctions2.php" method="get">
   <input type="submit" value="On décale !!">
</form>

</div>
<div class="Moussa">
    
Moussa

</div>
</div>
</body>
</html>