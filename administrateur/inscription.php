
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    
    <title>inscription</title>
</head>
<body>


  
<header class="container">
         <div class="row ">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 logo">
               <img src="../images/ujzk.jpg" alt="">
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10  texte text-center">
               <h2>Gestion des administrateurs</h2>
           </div>
        </div>
    </header>
    
    <div class="container">
        <div class="row">
            <div class="col">
            <?php if(isset($_GET["erreur"])){
       if($_GET["erreur"]==1){
           echo"<div style='color:red; font-weight:bold; text-align:center; margin-top:20px;font-size:20px;'>mot de passe different! </div>";
       }
   }
   
   if(isset($_GET["eror"])){
    if($_GET["eror"]==1){
         echo"<div style='color:green; font-weight:bold; text-align:center; margin-top:20px;font-size:20px;'>inscription echouée</div>";
     }
 }
   ?>
                <form action="bdd_inscription.php" method="post"> 
                    <input type="text" name="nom" placeholder="  nom"  class="formulaire" id="name" required=""><br>
                    <input type="text" name="prenom"  placeholder="prenom" class="formulaire" id="prename" required=""><br>
                    <input type="email" name="email" placeholder="email" class="formulaire" id="email" required=""><br>
                    <input type="password" name="password" placeholder="password" class="formulaire" id="passw" required=""><br>
                    <input type="password" name="pconf" placeholder="pconfirmer" class="formulaire" id="ppassw" required=""><br>
                    <input type="submit" name="inscrire" id="insc" class="formulaire inscrire">
                    
                </form>
            </div>
        </div>
    </div>
    <footer class=" col-lg-9 col-md-9 col-sm-10 col-xs-10 offset-md-2  offset-lg-2  offset-sm-2  offset-xs-2">
        
                    <p class="p-1 text-center copyright">copyright université joseph ki-zerbo 2020                    Tous droits reservés</p>
                
    </footer>
    


 

</body>
</html>