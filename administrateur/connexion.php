<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=gestion_des_etudiants', 'root','');
}
    catch (Exception $e)
    {
        die('Erreur: ' . $e->getMessage());
    }

?>