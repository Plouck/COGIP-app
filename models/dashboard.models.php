<?php
require "db.php";

function getAllBills(){

  global $pdo;
  $resultat1 = $pdo->query("SELECT * FROM facture JOIN societe ON  facture.societe_idSociete = societe.idSociete  ORDER BY date DESC LIMIT 0,5 ");


  $donnees1 = $resultat1->fetchAll();
  $resultat1->closeCursor();

  return $donnees1;

//  var_dump($donnees);
};

function getAllSociety(){

  global $pdo;
  $resultat2 = $pdo->query('SELECT * FROM societe JOIN type ON  societe.type_idType = type.idType ORDER BY name ASC LIMIT 0,5');


  $donnees2 = $resultat2->fetchAll();
  $resultat2->closeCursor();

  return $donnees2;

//  var_dump($donnees);
};

function getAllContact(){

  global $pdo;
  $resultat3 = $pdo->query('SELECT *, personne.name AS contact_name, societe.name AS societe_name FROM personne JOIN societe ON  personne.societe_idSociete = societe.idSociete ORDER BY contact_name ASC LIMIT 0,5');

  $donnees3 = $resultat3->fetchAll();
  $resultat3->closeCursor();

  return $donnees3;

//  var_dump($donnees);
};
 ?>
