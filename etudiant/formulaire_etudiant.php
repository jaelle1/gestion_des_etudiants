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
               <h2>Gestion des etudiants</h2>
           </div>
        </div>
</header>
<div class="container">
        <div class="row">
            <div class="col">
                <form action="" method="post"> 
                    <input type="text" name="nom" value="nom" placeholder="  nom"  class="formulaire" id="name"><br>
                    <input type="text" name="prenom" value="prenom" placeholder="prenom" class="formulaire" id="prename"><br>
                    <input type="email" name="email" placeholder="email" class="formulaire" id="email"><br>
                    <input type="number" name="number" class="formulaire"id=""><br>
                    <select name="choix" class="select" id=""><br><br><br><br>
                        <option value="tuteur1"></option>
                        <option value="tuteur2">tuteur</option>
                        <option value="tuteur3"></option>
                        <option value="tuteur4"></option>
                        <option value="tuteur5"></option>
                    </select>
                    <button type="submit" name="ajout" value="ajout" class="ajout"><a href="#">ajouter tuteur</a></button><br><br>
                    <button type="submit" name="valider" value="valider" class="valid">valider</button>
                    
                       
                </form>
            </div>
        </div>
    </div>
    <footer class=" col-lg-9 col-md-9 col-sm-10 col-xs-10 offset-md-2  offset-lg-2  offset-sm-2  offset-xs-2">
        
                    <p class="p-1 text-center copyright">copyright université joseph ki-zerbo 2020                  Tous droits reservés</p>
                
    </footer>
    
</body>
</html>
