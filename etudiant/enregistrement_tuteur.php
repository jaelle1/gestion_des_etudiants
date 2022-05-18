<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>enregistrement-tuteur</title>
</head>
<body>
<header class="container">
         <div class="row ">
            <div class="col-lg-2 col-md-2  logo">
               <img src="../images/ujzk.jpg" alt="">
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10  texte text-center">
               <h2>Enregistrement du tuteur</h2>
           </div>
        </div>
</header>
<div class="container">
        <div class="row">
            <div class="col">
                <form action="./bdd_tuteur.php" method="post"> 
                    <input type="text" name="nom_tuteur"  placeholder=" nom"  class="formulaire" required="" id="name"><br>
                    <input type="text" name="prenom_tuteur"  placeholder="prenom"  required=""class="formulaire" id="prename"><br><br>
                    <input type="number" name="numero" required="" id=""><br>
                    <button type="submit" name="valider" class="valider">valider</button>
                    
                       
                </form>
            </div>
        </div>
    </div>
    <footer class=" col-lg-9 col-md-9 col-sm-10 col-xs-10 offset-md-2  offset-lg-2  offset-sm-2  offset-xs-2">
        
        <p class="p-1 text-center copyright">copyright université joseph ki-zerbo 2020 Tous droits reservés</p>
    
</footer>

</body>
</html>