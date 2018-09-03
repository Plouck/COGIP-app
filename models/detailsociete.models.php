<?php
require "db.php";

function getDetailSociety(){

  global $pdo;
  $id = $_GET['idSociete'];
  $helo = "SELECT * FROM societe WHERE idSociete=?";
  $resultat = $pdo->prepare($helo);
  $resultat->bindParam(1, $id, PDO::PARAM_INT);
  $resultat->execute();
  $donnees = $resultat->fetchAll();
  $resultat->closeCursor();
  return $donnees;

}

 ?>
