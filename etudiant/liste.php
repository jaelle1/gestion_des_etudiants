<?php
include("../administrateur/connexion.php");

?>

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
               <h2>la liste des etudiants</h2>
           </div>
        </div>
    </header>
    
    <div class="container">
      <div class="row">
      <div class="col">
        <button  offfset-md-5 class="etudiant">
          <a href="./enregistrement_tuteur.php">ajouter</a>
        </button>
        <?php
        $qry="SELECT * FROM `etudiant` INNER JOIN `tuteur` WHERE etudiant.id_tuteur=tuteur.id ";
        $list=mysqli_query($base,$qry);
        if($list){
          echo'<table class="table table-bordered border-tark table-hover">
          <thead>
          <tr class="element">
          <th scope="col list">N°</th>
          <th scope="col list">Nom</th>
          <th scope="col list">Prenom</th>
          <th scope="col list">Contact</th>
          <th scope="col list">Email</th>
          <th scope="col list">nom tuteur</th>
          <th scope="col list">prenom tuteur</th>
          
          </tr>
         </thead>
         <tbody>';
         $x=1;
         while ($data=mysqli_fetch_assoc($list)) {
           echo"<tr>
           <td scope='row'>".$x."</td>
           <td>".$data['nom']."</td>
           <td>".$data['prenom']."</td>
           <td>".$data['numero']."</td>
           <td>".$data['email']."</td>
           <td>".$data['nom_tuteur']."</td>
           <td>".$data['prenom_tuteur']."</td>
            </tr>";
           
            $x=$x+1;
         }

         echo"   
         </tbody>
       </table>";
       
        }




        ?>
      </div>
    </div>
  
  </div>
    
    
  
    
    <footer class=" col-lg-9 col-md-9 col-sm-10 col-xs-10 offset-md-2  offset-lg-2  offset-sm-2  offset-xs-2">
        
        <p class="p-1 text-center copyright">copyright université joseph ki-zerbo 202 Tous droits reservés</p>
    
    </footer>
    


</body>
</html>