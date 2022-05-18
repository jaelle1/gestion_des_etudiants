<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./bootstrap-5.1.3-dist/css/bootstrap.min.css">
    
    <title>login</title>
</head>
<body>


  
    <header class="container entete">
             <div class="row tete">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 logo">
                   <img src="./images/ujzk.jpg" alt="">
                </div>
                <div class="col-lg-10 col-md-10 col-sm-1 col-xs-1 offset-lg-1 offset-md-1 offset-sm-1 offset-xs-1 texte text-center">
                    <h1>UFR/SCIENCE DE LA SANTE(SDS)</h1>
                </div>
            </div>
        </header>
        <div class="container">

            <div class="row conta">
                <div class="col-lg-10 col-md-10 col-sm-5 col-xs-5 offset-lg-1 offset-md-1 offset-sm-1 offset-xs-1 logoimage">
                    <img src="./images/vert6.jpg" alt="">

                </div>
            </div>
        </div>
           <?php
            if(isset($_GET["error"])){
                   if($_GET["error"]==1){
                         echo"<div style='color:green; font-weight:bold; text-align:center; margin-top:20px;font-size:20px;'>administrateur inscris avec succes</div>";
                        }
                    }?>
        <div class="container">
            <div class="row rowp">
                <?php
                include("./administrateur/connexion.php");
                $query="SELECT  * FROM administrateur";
                $result=mysqli_query($base,$query);
                $row=mysqli_fetch_assoc($result);
                
                ?>
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 offset-lg-5 offset-md-5 offset-sm-2 offset-xs-2 pp1">
                   <?php
                   if(!$row){
                   echo'<p class="p1"><a href="./administrateur/inscription.php">s\'inscrire</a></p>';}
                    ?>
                    <p class="p2 "><a href="./administrateur/authentification.php"> se connecter</a></p>
                </div>
            </div>
        </div>
    
        


<footer class=" col-lg-9 col-md-9 col-sm-10 col-xs-10 offset-md-1  offset-lg-2  offset-sm-2  offset-xs-2">
        
            <p class="p-1 text-center copyright">copyright université joseph ki-zerbo 2020 Tous droits reservés</p>
        
</footer>


</body>
</html>