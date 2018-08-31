<?php
require "db.php";

function getAllSociety(){

  global $pdo;
  $resultat = $pdo->query('SELECT * FROM societe');


  $donnees = $resultat->fetchAll();
  $resultat->closeCursor();

  return $donnees;

//  var_dump($donnees);
};

 ?>
