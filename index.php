<?php

$serveur="localhost";
$login="root";
$pass="";
try{
    $connexion= new PDO ("mysql:host=$serveur",$login,$pass);//j'utilise les bloc try and catch pour la gestion des erreurs
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //exercice 1
    //$connexion->exec("CREATE DATABASE languages");//j'ai creer une base de donnée 

    //exercice 2
   // $connexion->exec("CREATE DATABASE webDevelopment CHARACTER SET utf8 COLLATE utf8_general_ci");

   //exercice 3
   //$connexion->exec("CREATE DATABASE IF NOT EXISTS framwork CHARACTER SET utf8 COLLATE utf8_general_ci ");

   //exercice 4
  //$connexion->exec("CREATE DATABASE IF NOT EXISTS languages CHARACTER SET utf8 COLLATE utf8_general_ci ");

  //exercice 5
  //$connexion->exec("DROP DATABASE languages");

  //exercice 6
  $connexion->exec("DROP DATABASE IF EXISTS framwork");

  
  //exercice 7
  $connexion->exec("DROP DATABASE IF EXISTS languages");

    echo "base de donnée languages créée <br>";
    echo" base de donnée webDevelopment avec crée avec l'encodage utf-8 <br>";
    echo "base de donnée framwork créée avec utf-8 <br>";
    echo "base de donnée languages créée avec utf-8 <br>";
    echo "base de donnée language supprimé <br>";
    echo "base de donnée framwork supprimé<br>";
    echo "base de donnée language supp si elle existe ";

}catch(PDOException $e){
    echo'echec : ' . $e->getMessage();

}



?>

