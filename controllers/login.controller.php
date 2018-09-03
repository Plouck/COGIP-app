<?php


if (isset($_POST["send"])) {
  $log = filter_var($_POST['pseudo'], FILTER_SANITIZE_STRING);
  $password = filter_var($_POST['mdp'], FILTER_SANITIZE_STRING);
  $passwordSecure = md5($password);

  echo $log;
  echo "<br>";
  echo $passwordSecure;

  // require ('models/login.models.php');
  //
  // if (!$resultat){
  //     echo 'Mauvais identifiant ou mot de passe !';
  // } else {
  //     if ($isPasswordCorrect) {
  //         session_start();
  //         $_SESSION['id'] = $resultat['id'];
  //         $_SESSION['pseudo'] = $pseudo;
  //         echo 'Vous êtes connecté !';
  //     } else {
  //         echo 'Mauvais identifiant ou mot de passe !';
  //     }
  // }


}


 ?>
