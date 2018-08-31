<?php
require "db.php";

function getAllFournisseurs(){

  global $pdo;
  $resultat = $pdo->query('SELECT * FROM societe WHERE type_idType = 1 ');


  $donnees = $resultat->fetchAll();
  $resultat->closeCursor();

  return $donnees;

//  var_dump($donnees);
};
 ?>
