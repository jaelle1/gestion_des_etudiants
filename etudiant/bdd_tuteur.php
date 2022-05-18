<?php
include("../administrateur/connexion.php");
if(isset($_POST["valider"])){
    $nom=$_POST["nom_tuteur"];
    $prenom=$_POST["prenom_tuteur"];
    $numero=$_POST["numero"];
    

    $query="INSERT INTO `tuteur`(`nom_tuteur`,`prenom_tuteur`,`numero`)  VALUES('$nom','$prenom','$numero')";
    $req=mysqli_query($base,$query);
if($req){
    // echo"reussir";
    header('location:./formulaire_etudiant.php');
    
}
else{
    // echo"echouer";
    header('location:./enregistrement_tuteur.php?error=1');
}
}









?>