<?php
require "db.php";

function getAllSociety(){

  global $pdo;
  $resultat = $pdo->query('SELECT * FROM societe ORDER BY name ASC');


  $donnees = $resultat->fetchAll();
  $resultat->closeCursor();

  return $donnees;

//  var_dump($donnees);
};

 ?>
