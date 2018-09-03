<?php
require "db.php";

function getDetailSociety(){

  global $pdo;
  $_GET['idSociete'];
  $resultat = $pdo->query('SELECT * from societe WHERE idSociete='$_GET['idSociete']'');
  $donnees = $resultat->fetchAll();
  $resultat->closeCursor();

  return $donnees;

};

 ?>
