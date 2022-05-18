<?php
include("../administrateur/connexion.php");
$queri="SELECT * FROM tuteur ";
$result=mysqli_query($base, $queri);
$rows=mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>enregistrement-etudiant</title>
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
               <h2>Fiche d'enregistrement d'un etudiant</h2>
           </div>
        </div>
</header>
<div class="container">
        <div class="row">
            <div class="col">
                <form action="./bdd_formulaire_etudiant.php" method="post"> 
                    <input type="text" name="nom"  placeholder="  nom"  class="formulaire" id="name"><br>
                    <input type="text" name="prenom" placeholder="prenom" class="formulaire" id="prename"><br>
                    
                    <input type="number" name="numero" placehoder="numero" class="formulaire"id=""><br>
                    <input type="email" name="email" placeholder="email" class="formulaire" id="email"><br>
                    <select name="id" class="select"  id=""><br>
                    <option value="-1">selectionner un tuteur</option>
                    <?php 
                        foreach($rows as $row){
                         ?>
                    <option value="<?=$row['id']?>"><?=$row['nom_tuteur'] ?>  <?=$row['prenom_tuteur']  ?></option>

                        <?php }?>;


                    </select>
                    <button type="submit" name="ajout" class="ajout"><a href="./enregistrement_tuteur.php">ajouter tuteur</a></button><br>
                    
                    <button class="retour"><a href="./acceuil.php">retour</a></button>
                    <button type="submit" name="valider" class="valid">valider</button>
                    
                       
                </form>
            </div>
        </div>
    </div>
    <footer class=" col-lg-9 col-md-9 col-sm-10 col-xs-10 offset-md-2  offset-lg-2  offset-sm-2  offset-xs-2">
        
                    <p class="p-1 text-center copyright">copyright université joseph ki-zerbo 2020                  Tous droits reservés</p>
                
    </footer>
    
</body>
</html>

