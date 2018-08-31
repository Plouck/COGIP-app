<?php
require "db.php";

function getAllBills(){

  global $pdo;
  $resultat = $pdo->query('SELECT * FROM facture ORDER BY date DESC');


  $donnees = $resultat->fetchAll();
  $resultat->closeCursor();

  return $donnees;

//  var_dump($donnees);
};
 ?>
