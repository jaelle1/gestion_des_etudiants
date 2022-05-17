<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <title>Document</title>
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
               <h2 >Gestion des administrateurs</h2>
           </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
        <?php
                    if(isset($_GET["erreur"])){
                        if($_GET["erreur"]=2){
                            echo"non authentifier";
                        }
                    }
                        ?>
            <div class="col">
                <form   class="user" method="post">
                   
                   
                    <input type="email" name="email" placeholder="email" class="formulaire" id="email"><br><br>
                    <input type="password" name="password" placeholder="password" id="motdepasse"><br><br>
                    <input type="checkbox" class="affich" onclick="Afficher()" id="aff"> Afficher le mot de passe<br><br>
                    <input type="submit" name="connecter" value="connecter" placehoder="se connecter" class="connecter">
                    
                       
                </form>
            </div>
        </div>
    </div>
    <footer class=" col-lg-9 col-md-9 col-sm-10 col-xs-10 offset-md-2  offset-lg-2  offset-sm-2  offset-xs-2">
        
                    <p class="p-1 text-center copyright">copyright université joseph ki-zerbo 2020                   Tous droits reservés</p>
                
    </footer>
   
    <script>
			function Afficher() {
				var input = document.getElementById("motdepasse");
				if (input.type == "password") {
					input.type = "text";
				} else {
					input.type = "password";
				}
			}

		</script>
</body>
</html>


<?php

    include("./connexion.php");
    session_start();
     if(isset($_POST['connecter'])){
        //  $mail=stripslashes($_REQUEST['email']);
        //  $email=mysqli_real_escape_string($base,$mail);
        //  $pasword=stripslashes($_REQUEST['password']);
        //  $password=mysqli_real_escape_string($base,$pasword);
        $email=$_POST["email"];
        $pasword=md5($_POST["password"]);

          $query="SELECT * FROM administrateur WHERE `email`='$email' AND `password`='$pasword' ";
        $verif=mysqli_query($base,$query) or die(mysql_error());
         $rows = mysqli_num_rows($verif);
         if($rows==1){
          $_SESSION["email"]=$email;
          header("location:../etudiant/acceuil.php");
        // echo"connexion reussie";
        }
        else{
        echo"l'email ou le mot de passe est incorrect";
        } 
    }
   
   
   
//    if(isset($_POST["connecter"])){
//     $email=$_POST["email"];
//     $password=md5($_POST["password"]);

// $verifie=$base->prepare("SELECT*FROM administrateur WHERE `email`= email AND `password`= `password`");
// $verifie-> execute(array('email'=>$email, 'password'=> $password));
// $admin=$verifie->fetch();
// if(!$admin){
//     header("location: ./authentification.php?erreur=2");
// }
// else{
//     header("location: ../etudiant/acceuil.php");
// }
//    }
   ?>