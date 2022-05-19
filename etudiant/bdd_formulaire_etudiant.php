<?php 
include("../administrateur/connexion.php");
if(isset($_POST["valider"])){
   
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $numero=$_POST["numero"];
    $email=$_POST["email"];
   $tuteur=$_POST["id"];
    
  
    $query="INSERT INTO `etudiant`(`nom`,`prenom`,`numero`,`email`,`id_tuteur`) VALUES('$nom','$prenom','$numero','$email', '$tuteur' )";
    $resultat=mysqli_query($base,$query);
    if($resultat){
        header("location:./formulaire_etudiant.php?eurr=3");
echo"reussi";
    }
    else{
        // echo"enregistrement echoué";
        header("location:./formulaire_etudiant.php?error=4");
    }
}







?>