<?php

include("./connexion.php");
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$password=md5($_POST["password"]);
$pconf=md5($_POST["pconf"]);
$inscrire=$_POST["inscrire"];
$_SESSION["nom"]=$nom;
$_SESSION["prenom"]=$prenom;

if($password==$pconf){
$req=$bdd->prepare('SELECT INTO administrateur(nom,prenom,email,password)
VALUES (:nom,:prenom,:email,:password)');
$req->execute(array('nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'password'=>$password,));

    session_start();
    $_SESSION["nom"]=$_POST["nom"];
    
$_SESSION["prenom"]=$_POST["prenom"];
header('location:./authentification.php');


}
else{
    header('location:./inscription.php?erreur=1');
}











?>