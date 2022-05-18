<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    
    <title>page d'acceuil </title>
</head>
<body>

<header class="container">
         <div class="row ">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 logo">
               <img src="../images/ujzk.jpg" alt="">
            </div>
        </div>
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-10 col-xs-10 texte text-center">
               <h2>Gestion des etudiants</h2>
           </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col">
            <?php
                    if(isset($_GET["erreur"])){
                        if($_GET["erreur"]=2){
                            echo" <div style='text-align:center; font-weight:bold; color:green'>vous etes connecter<br>
                            Que voulez-vous faire Monsieur</div>";
                        }
                    }
                        ?>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row  text-center">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10 acceuil offset-md-5 text-center">
                <a href="./formulaire_etudiant.php"><p class="enregistrer">ENREGISTRER UN ETUDIANT</p>
            </a>
           </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10 acceuil offset-md-5  text-center">
                <a href="./liste.php"><p class="lister" >LISTER</p></a>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-8 col-md-8 col-sm-10 col-xs-10 acceuil offset-md-5 text-center">
                <a href="enregistrement_tuteur.php"><p class="ajouter">ENREGISTRER UN TUTEUR</p></a>
            </div>
        </div>

    </div>



    <footer class=" col-lg-9 col-md-9 col-sm-10 col-xs-10 offset-md-2  offset-lg-2  offset-sm-2  offset-xs-2">
        
        <p class="p-1 text-center copyright">copyright université joseph ki-zerbo 202 Tous droits reservés</p>
    
    </footer>

</body>
</html>