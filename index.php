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
        <div class="container">
            <div class="row rowp">
                <div class="col-lg-4 col-md-4 col-sm-2 col-xs-2 offset-lg-5 offset-md-5 offset-sm-2 offset-xs-2 pp1">
                    <p class="p1"><a href="./administrateur/inscription.php">s'inscrire</a></p>
                    <p class="p2 "><a href="./administrateur/authentification.php"> se connecter</a></p>
                </div>
            </div>
        </div>
    
        


<footer class=" col-lg-9 col-md-9 col-sm-10 col-xs-10 offset-md-1  offset-lg-2  offset-sm-2  offset-xs-2">
        
            <p class="p-1 text-center copyright">copyright université joseph ki-zerbo 2020 Tous droits reservés</p>
        
</footer>
<?php
include("./administrateur/connexion.php");
  $limit=$base->prepare("SELECT COUNT(*) FROM administrateur");
  $limit->execute();
  $nombre=$limit->rowCount();
if($nombre>0){
echo"
<script> 
let bout =document.getElementById(insc)
bout.style.displone='none'
</script>";
}
?>
</body>
</html>