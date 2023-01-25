<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Salle </title>
    <link rel="stylesheet" href="./asset/style.css">
</head>

<body>
    
    <div class="parent1">

            <?php session_start();?>

        

        <div class="div1 , style">    
            <!-- Place_1 -->
                <tr id= "un">

                    <p class="place"> Place 1 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_1'];?></p>

                </tr>                
        </div>
            


        <div class="div2 , style">            
            <!-- Place_2 -->
                <tr>

                    <p class="place">Place 2 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_2'];?></p>

                </tr>
        </div>
            

        <div class="div3 , style">            
            <!-- Place_3 -->
                <tr >

                    <p class="place">Place 3 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_3'];?></p>

                </tr>
        </div>
            

        <div class="div4 , style">            
            <!-- Place_4 -->
                <tr>

                    <p class="place">Place 4 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_4'];?></p>

                </tr>
        </div>
        
        <div class="div5 , style">     
            <!-- Place_5 -->
                <tr>

                    <p class="place">Place 5 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_5'];?></p>

                </tr>
        </div>
             

        <div class="div6 , style">     
            <!-- Place_6 -->
                <tr>

                    <p class="place">Place 6 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_6'];?></p>

                </tr>
        </div>
            

        <div class="div7 , style">    
            <!-- Place_7 -->
                <tr>

                    <p class="place">Place 7 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_7'];?></p>

                </tr>
        </div>
            

        <div class="div8 , style">    
            <!-- Place_8 -->
                <tr>

                    <p class="place">Place 8 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_8'];?></p>

                </tr>
        </div>
            

        <div class="div9 , style">     
            <!-- Place_9 -->
                <tr>

                    <p class="place">Place 9 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_9'];?></p>

                </tr>
        </div>
            

        <div class="div10 , style">    
            <!-- Place_10 -->
                <tr>

                    <p class="place">Place 10: </p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_10'];?></p>

                </tr>
        </div>
            

        <div class="div11 , style">    
            <!-- Place_11 -->
                <tr>

                    <p class="place">Place 11 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_11'];?></p>

                </tr>
        </div>
            

        <div class="div12 , style">    
            <!-- Place_12 -->
                <tr>

                    <p class="place">Place 12 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_12'];?></p>

                </tr>    
        </div>
        

        <div class="div13 , style">   
            <!-- Place_13 -->
                <tr>

                    <p class="place">Place 13 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_13'];?></p>

                </tr>
        </div>
           

        <div class="div14 , style">          
            <!-- Place_14 -->
                <tr>

                    <p class="place">Place 14 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_14'];?></p>

                </tr>
        </div>

        <div class="div15 , style"> 
            <!-- Place_15 -->
                <tr>

                    <p class="place">Place 15 :</p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_15'];?></p>

                </tr>
        </div>

        <div class="div16 , style"> 
            <!-- Place_16 -->
                <tr>

                    <p class="place">Place 16 : </p>
                    <p class="nom"><?php echo $_SESSION['$listStagPlace']['place_16'];?></p>

                </tr>
        </div>





        <div class="div18">

                <a href="../controller/execute.php" method="get"> <img src="./asset/lemonarque" alt="LeMonarque" width="150px" > </a>

        </div>    

       <a class="div17 , style , btnindex "href="../view/index.php" class="deco">

             La table des anciens (retour à l'index)

         </a>

 

        <form action="../controller/executeExtraction.php" method="get" class="div19">
             <input  class="btntelecharger" type="submit" value="CLIQUE ICI POUR TELECHARGER 
            EN FORMAT CSV, TQT IL Y A PAS DE VIRUS"> </input> 
        </form>
   </div>


</body>



</html>