<?php
include("../administrateur/connexion.php");
if(isset($_POST["valider"])){
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $numero=$_POST["numero"];
    

    $query="INSERT INTO `tuteur`(`nom`,`prenom`,`numero`)  VALUES('$nom','$prenom','$numero')";
    $req=mysqli_query($base,$query);
if($req){
    echo"reussir";
    header('location:./acceuil.php');
    
}
else{
    echo"echouer";
}
}









?>