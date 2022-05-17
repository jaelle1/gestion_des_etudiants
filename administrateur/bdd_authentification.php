<?php

    include("./connexion.php");
    session_start();
     if(isset($_POST['connecter'])){
        //  $mail=stripslashes($_REQUEST['email']);
        //  $email=mysqli_real_escape_string($base,$mail);
        //  $pasword=stripslashes($_REQUEST['password']);
        //  $password=mysqli_real_escape_string($base,$pasword);
        $email=$_POST["email"];
        $pasword=$_POST["password"];

          $query="SELECT * FROM `administrateur` WHERE `email`='$email'AND `password`='$pasword' ";
        $verif=mysqli_query($base,$query) or die(mysql_error());
         $rows = mysqli_num_rows($verif);
         if($rows>'1'){
          $_SESSION["email"]=$email;
          header("location:../etudiant/acceuil.php");
        }
        else{
            $message="l'email ou le mot de passe est incorrect";
        } 
    }
   
   
   
//    if(isset($_POST["connecter"])){
//     $email=$_POST["email"];
//     $password=md5($_POST["password"]);

// $verif=$base->prepare("SELECT * FROM administrateur WHERE email=? AND password=?");
// $verif->execute(array($email,$password));
// $admin=$verif->rowCount();
// if($admin==1){
//     echo "sucess";
// }
// else{

    
//     header("location: ./authentication.php");
//     echo"error";
// }
//    }
   ?>
   ./bdd_authentification.php