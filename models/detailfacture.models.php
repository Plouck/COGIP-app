<?php
require "db.php";

function getDetailBill(){

  global $pdo;
  $id = $_GET['idFacture'];
  $helo = "SELECT * FROM facture WHERE idFacture=?";
  $resultat = $pdo->prepare($helo);
  $resultat->bindParam(1, $id, PDO::PARAM_INT);
  $resultat->execute();
  $donnees = $resultat->fetchAll();
  $resultat->closeCursor();
  return $donnees;

}

 ?>
