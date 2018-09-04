
<?php
require "db.php";
function createBill(){

  global $pdo;
	$resultat1 = $pdo->prepare('SELECT * FROM facture
	INSERT INTO facture (date, details, societe_idSociete, personne_idPersonne) VALUES(?, ?, ?, ?, ?)');
	$resultat1->execute(array($_POST['date'], $_POST['details'], $_POST['societe'], $_POST['personne']));
	$donnees1 = $resultat1->fetchAll();
	// $resultat1->closeCursor();
	return $donnees1;

//  var_dump($donnees);

header('Location: ../index.php');

};

function getAllBills(){

  global $pdo;
  $resultat = $pdo->query('SELECT * FROM facture ORDER BY date DESC');
  $donnees = $resultat->fetchAll();
  $resultat->closeCursor();

  return $donnees;

//  var_dump($donnees);
};
 ?>
