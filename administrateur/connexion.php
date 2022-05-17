<?php
$base=new mysqli("localhost","root","","gestion_des_etudiants");
if($base===false){
    die("ERREUR:impossible de se connecter. ".mysqli_connect_error());
}
?>