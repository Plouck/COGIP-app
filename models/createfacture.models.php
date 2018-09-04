
<?php
require "db.php";


echo "hello";


function createBill(){
  if (isset($_POST['submit'])) {
  global $pdo;

$date = $_POST['date'];
 $details = $_POST['details'];
 $societe = $_POST['societe'];
 $personne = $_POST['personne'];
	$resultat1 = $pdo->prepare("INSERT INTO facture (date, details, societe_idSociete, personne_idPersonne) VALUES('?', '?', '?', '?')");
  $resultat1->bindParam(1, $date, PDO::PARAM_STR);
  $resultat1->bindParam(2, $details, PDO::PARAM_STR);
  $resultat1->bindParam(3, $societe, PDO::PARAM_INT);
  $resultat1->bindParam(4, $personne, PDO::PARAM_INT);
	$resultat1->execute();
	$donnees1 = $resultat1->fetchAll();
	// $resultat1->closeCursor();
	return $donnees1;
//  var_dump($donnees);
}
}



// function getAllBills(){
//
//   global $pdo;
//   $resultat = $pdo->query('SELECT * FROM facture ORDER BY date DESC');
//   $donnees = $resultat->fetchAll();
//   $resultat->closeCursor();
//
//   return $donnees;
//
// //  var_dump($donnees);
// };
 ?>
