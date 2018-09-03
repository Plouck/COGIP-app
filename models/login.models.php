<?php

// Create connection
$conn=mysqli_connect("localhost","root","","cogip");

// SELECT TABLE
$sql = "SELECT login, pass FROM logs";
$result = $conn->query($sql);

//  Récupération de l'utilisateur et de son pass hashé
// $req = prepare('SELECT login, pass FROM logs WHERE pseudo = :login');
// $req->execute(array(
//     'pseudo' => $pseudo));
// $resultat = $req->fetch();
// Comparaison du pass envoyé via le formulaire avec la base
// $isPasswordCorrect = password_verify($_POST['mdp'], $resultat['pass']);


 ?>
