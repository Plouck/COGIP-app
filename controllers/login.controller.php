<?php

if (isset($_POST["send"])) {
  $log = filter_var($_POST['log'], FILTER_SANITIZE_STRING);
  $password = filter_var($_POST['mdp'], FILTER_SANITIZE_STRING);
  $passwordSecure = md5($password);

  echo $log;
  echo "<br>";
  echo $passwordSecure;

  session_start();
}


 ?>
