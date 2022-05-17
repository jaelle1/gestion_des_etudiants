<?php

include("./connexion.php");

if(isset($_POST["inscrire"])){


$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$password=md5($_POST["password"]);
$pconf=md5($_POST["pconf"]);


$query="INSERT  INTO `administrateur`(nom,prenom,email,password)
VALUES ('$nom','$prenom','$email','$password')";
$result=mysqli_query($base,$query);

if($password==$pconf){
    if($result){
        
        header('location:./inscription.php?error=1');
    }
    else{
        echo"inscription echouée";
        header('location:./inscription.php?eror=1');

    }

}
else{
    header('location:./inscription.php?erreur=1');
}
}











?>